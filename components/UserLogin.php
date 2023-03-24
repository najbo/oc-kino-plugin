<?php namespace Digart\Kino\Components;

use Cms\Classes\ComponentBase;

/**
 * UserLogin Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class UserLogin extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'UserLogin Component',
            'description' => 'User login component for frontend'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
