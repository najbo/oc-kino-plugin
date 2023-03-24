<?php namespace DigArt\Kino\Models;

use October\Rain\Database\Model;

/**
 * Kino settings model
 *
 * @package DigArt\Kino
 * @author Jan Boesch
 *
 */
class Settings extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'digart_kino_settings';

    public $settingsFields = 'fields.yaml';


    /**
     * Validation rules
     */
    public $rules = [
        'theater_name' => 'required'
    ];
}
