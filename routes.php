<?php

namespace Digart\Kino;

use DigArt\Kino\Models\Settings;
use DigArt\Kino\Models\Show;
use RainLab\User\Models\User;
use RainLab\User\Models\UserGroup;
use Route;

Route::get('myroute', function () {

    $shows = Show::with('movie')
        ->isOnFrontend()
        ->nextShows()
        ->orderBy('starts_at')
        ->get();
    

    return $shows;
});



Route::get('register', function () {

    $user = User::with('groups')->find(13);
    $group = UserGroup::whereCode('registered')->first();
    
    $user->groups()->add($group);
    return $user;
});
