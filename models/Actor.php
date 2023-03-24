<?php namespace DigArt\Kino\Models;

use Model;

/**
 * Model
 */
class Actor extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_actors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


}
