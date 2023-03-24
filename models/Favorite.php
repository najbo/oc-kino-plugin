<?php namespace DigArt\Kino\Models;

use Model;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\User;

/**
 * Model
 */
class Favorite extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $appends = ['check_user'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_favorites';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $morphTo = [
        'favoritable' => []
    ];

    public $belongsTo = [
        'user' => [
            User::class,
        ]
    ];
}
