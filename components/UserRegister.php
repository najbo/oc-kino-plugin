<?php namespace Digart\Kino\Components;

use Cms\Classes\ComponentBase;

/**
 * UserRegister Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class UserRegister extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'UserRegister Component',
            'description' => 'This Component renders a register form.'
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
