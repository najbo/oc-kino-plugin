<?php namespace Digart\Kino\Components;

use Carbon\Carbon;
use Cms\Classes\ComponentBase;
use DigArt\Kino\Models\Favorite;
use DigArt\Kino\Models\Show;
use Flash;
use Illuminate\Support\Facades\Redirect;
use October\Rain\Support\Facades\Url;
use RainLab\User\Facades\Auth;
use RainLab\User\Models\User;

/**
 * ShowDetail Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ShowDetail extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'ShowDetail Component',
            'description' => 'Shows a detail of of show.'
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
        $user = $userId = Auth::getUser();

        $this->countFavorite = $this->page['count_favorite'] = $this->countFavorite($user);
        $this->page["return_url"] = Url::previous();
    }

    public function countFavorite($user)
    {
        return Show::whereId($this->param('id'))->hasFavorite($user)->count();
    }

    public function show()
    {
        $id = $this->param('id');

        $show = Show::findOrFail($id);

        return $show;
    }

    public function onFavorite()
    {
        $userId = Auth::getUser()->id;
        // $userId = User::find($logged->id);
        
        $data = post();
        $show = Show::findOrFail($data['id']);
        $now = Carbon::now();

        $show->users()->toggle([$userId => ['created_at' => $now]]);
        // $show->users()->attach($userId, ['favorited_at' => $now]);

        // $favorite = new Favorite();
        // $favorite->user = $user;
        // $favorite->favoritable = $show;
        // $favorite->favorited_at = Carbon::now();
        // $favorite->save();

        $movie_name = $show->movie->name;
        // ray($show->users()->count());
        Flash::success("Show {$movie_name} added to your favorites :-)");
        //Redirect::refresh()->with('message', 'Login Failed');

        return;
        
        return [
            '#favorite' => $this->renderPartial('site/main')
        ];
    }
}
