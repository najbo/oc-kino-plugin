<?php 

namespace Digart\Kino\Components;

use Cms\Classes\ComponentBase;
use DigArt\Kino\Models\Settings;
use DigArt\Kino\Models\Show;

/**
 * ShowsIndex Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ShowsIndex extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ShowsIndex Component',
            'description' => 'List the shows in the theater'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }


    public function onRun()
    {
        $this->theaterName = $this->page['theater_name'] = Settings::instance()->theater_name;
    }


    public function shows()
    {
        $shows = Show::with('movie')
            ->isOnFrontend()
            ->nextShows()
            ->orderBy('starts_at')
            ->get();

        return $shows;
    }
}
