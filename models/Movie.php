<?php namespace DigArt\Kino\Models;

use Model;

/**
 * Model
 */
class Movie extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    public $attachOne = [
        'poster' => ['System\Models\File', 'public' => true],
    ];

    public $attachMany = [
        'images' => ['System\Models\File', 'public' => true],
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_movies';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'slug' => 'required'
    ];

    public $belongsTo = [
        'genre' => Genre::class
    ];

    public $belongsToMany = [
        'actors' => [Actor::class,
            'table' => 'digart_kino_actor_movie',
        ]

    ];
}
