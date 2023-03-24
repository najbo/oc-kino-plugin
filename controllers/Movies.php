<?php namespace DigArt\Kino\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Movies extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'digart.kino.movies'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DigArt.Kino', 'kino-menu', 'movies');
    }
}
