<?php namespace DigArt\Kino\Models;

use Backend\Models\User;
use Backend\Models\UserGroup;
use Model;

/**
 * Model
 */
class Shift extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_shows_users';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'user' => 'required',
        'group' => 'required',
    ];

    public $belongsTo = [
        'show' => [Show::class],
        'user' => [User::class,
            'order' => ['last_name', 'first_name']],
        'group' => [UserGroup::class],
    ];
}
