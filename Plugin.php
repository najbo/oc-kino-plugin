<?php namespace DigArt\Kino;

use System\Classes\PluginBase;
use Event;
use RainLab\User\Models\User;
use RainLab\User\Models\UserGroup;

class Plugin extends PluginBase
{


    public function registerSettings()
    {
        return [
            'config' => [
                'label'       => 'Kino',
                'icon'        => 'oc-icon-film',
                'description' => 'Settings of Kino Plugin',
                'keywords'    => 'Kino movies menus',
                'class'       => 'DigArt\Kino\Models\Settings',
                'permissions' => ['digart.kino.manage_plugins'],
                'size' => 'adaptive',
                'order'       => 700
            ]
        ];
    }

    public function registerComponents()
    {
        return [
            'DigArt\Kino\Components\ShowsIndex' => 'showsIndex',
            'DigArt\Kino\Components\ShowDetail' => 'showDetail',
            'DigArt\Kino\Components\UserLogin' => 'userProfile',
            'DigArt\Kino\Components\UserRegister' => 'userRegister',
            'DigArt\Kino\Components\Dashboard' => 'dashboard',
        ];
    }

    public function boot()
    {
        // Add a new registered user to the "Registered" group :

        Event::listen('rainlab.user.register', function ($user) {

            $group = UserGroup::whereCode('registered')->first();

            $user = User::with('groups')->find($user->id);
            $user->groups()->add($group);

            return;
            // OR :
            $user->groups =  $group->id;
            $user->save();
            ray($user);
        });
    }

}
