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

    $user = User::with('groups')->find(2);

    if (!$user) {
        return 'Nothing to see here - no user with ID 2';
    }

    $group = UserGroup::whereCode('registered')->first();
    
    try {
        $user->groups()->add($group);
    } catch (Exception $e) {
        return $e;
    }
    
    return $user;
});
