<?php namespace DigArt\Kino\Models;

use Carbon\Carbon;
use Model;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\User;

/**
 * Model
 */
class Show extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at', 'starts_at', 'ends_at'];
    protected $appends = ['ends_at', 'show_date', 'count_favorite'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_shows';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'movie' => 'required',
        'status' => 'required',
        'starts_at' => 'required'
    ];

    public $belongsTo = [
        'movie' => Movie::class,
        'status' => Status::class,
        'screen' => Screen::class,
    ];


    public $hasMany = [
         'shifts' => [Shift::class, 'key' => 'show_id', 'softDelete' => true],
    ];


    public $morphOne = [
        'favorite' => [Favorite::class, 'name' => 'favoritable']
    ];

    public $belongsToMany = [
        'users' => [User::class,
            'table' => 'digart_kino_show_user']
    ];

    public function getEndsAtAttribute()
    {
        if (! $this->movie) {
            return;
        }

        $runtime = $this->movie->runtime;
        $extra_runtime = Settings::instance()->extra_runtime ?? 0;

        $ends_at = $this->starts_at->addMinutes($runtime)->addMinutes($extra_runtime);

        return $ends_at;
    }


    public function getShowDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->starts_at, 'Europe/Zurich')->format('l d.m.y H:i');
    }


    public function getHumanCountdownAttribute()
    {
        return $this->starts_at->diffForHumans();
    }


    public function getHumanEndsAtAttribute()
    {
        return $this->ends_at->format('H:i');
    }


    // Show only the shows that are displayed on frontend

    public function scopeIsOnFrontend($query, $value = true)
    {
        return $query->whereHas('status', function ($query) use ($value) {
            $query->where('is_frontend', $value);
        });
    }

    public function scopeHasFavorite($query, $user)
    {
        return $query->whereRelation('users', 'user_id', $user->id);
    }


    // Show only the next shows

    public function scopeNextShows($query)
    {
        return $query->where('starts_at', '>=', Carbon::now());
    }

    public function getCountFavoriteAttribute()
    {
        $userId = Auth::getUser()->id;

        $query = $this->whereHas('users', function ($query) {
            $query->where('user_id', 1);
        })
        ->count();
        
        //$query = $this->whereRelation('users', 'user_id', $userId)->count();
        return $query;
    }
}
