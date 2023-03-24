<?php namespace DigArt\Kino\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Shows extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.RelationController',

    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';


    public $requiredPermissions = [
        'digart.kino.shows'
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('DigArt.Kino', 'kino-menu', 'shows');
    }
}
