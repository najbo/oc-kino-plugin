<?php namespace Digart\Kino\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use DigArt\Kino\Models\Favorite;
use DigArt\Kino\Models\Show;
use Flash;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\User;

/**
 * Dashboard Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class Dashboard extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Dashboard Component',
            'description' => 'No description provided yet...'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }


    public function onSave()
    {
        $logged = Auth::getUser();
        $data = post();

        $user = User::find($logged->id);
        $show = Show::findOrFail($data['id']);

        $favorite = new Favorite();
        $favorite->user = $user;
        $favorite->favoritable = $show;
        $favorite->favorited_at = Carbon::now();
        $favorite->save();

        Flash::success('Show added to your favorites :-)');
        // ray($favorite);
    }

    public function shows()
    {
        $user = $userId = Auth::getUser();
        $shows = Show::whereRelation('users', 'user_id', $user->id)->orderBy('starts_at')->get();

        return $shows;
    }
}
