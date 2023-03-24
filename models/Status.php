<?php namespace DigArt\Kino\Models;

use Model;

/**
 * Model
 */
class Status extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sortable ;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'digart_kino_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required'
    ];
}
