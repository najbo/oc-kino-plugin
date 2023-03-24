<?php namespace DigArt\Kino\Updates;

use Seeder;
use DigArt\Kino\Models\Movie;

class Seeder1010 extends Seeder
{
    public function run()
    {
        Movie::truncate();

        Movie::create([
            'name' => 'Sneakers',
            'slug' => 'sneakers',
            'directors' => 'Phil Alden Robinson',
            'year' => 1992,
            'runtime' => 126,
            'genre_id' => 3,
            'rating' => 7.1,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
            'teaser' => 'A thrilling story about a team of security experts who find themselves in hot water when a black box they stole turns out to be more than just a piece of technology.'
        ]);
        
        Movie::create([
            'name' => 'Top Gun',
            'slug' => 'top-gun',
            'directors' => 'Tony Scott',
            'year' => 1986,
            'runtime' => 110,
            'genre_id' => 1,
            'rating' => 6.9,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
            'teaser' => 'A young, hotshot fighter pilot competes against the best in the Top Gun academy, risking everything in thrilling aerial dogfights.'
        ]);

        Movie::create([
            'name' => 'Deadpool',
            'slug' => 'deapool',
            'directors' => 'Tim Miller',
            'year' => 2016,
            'runtime' => 108,
            'genre_id' => 5,
            'rating' => 8.1,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
        ]);

        Movie::create([
            'name' => 'Avatar 2',
            'slug' => 'avatar-2',
            'directors' => 'James Cameron',
            'year' => 2022,
            'runtime' => 192,
            'genre_id' => 4,
            'rating' => 7.8,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
        ]);

        Movie::create([
            'name' => 'Alien',
            'slug' => 'alien-1',
            'directors' => 'Ridley Scott',
            'year' => 1979,
            'runtime' => 116,
            'genre_id' => 4,
            'rating' => 8.5,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
            'teaser' => 'In the year 2122, the crew of the Nostromo investigate a distress signal from an unknown planet, where they discover a derelict spaceship filled with eggs and a monstrous creature. They must fight for their lives and escape the planet before the creature claims them as its next victims.'
        ]);

        Movie::create([
            'name' => 'Misson: Impossible',
            'slug' => 'mission-impossible-1',
            'directors' => 'Brian de Palma',
            'year' => 1996,
            'runtime' => 110,
            'genre_id' => 1,
            'rating' => 7.1,
            'description' =>
                'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vulputate vestibulum magna, sed porta elit porta in. Etiam facilisis eros ut tortor maximus lobortis. Fusce quis leo scelerisque, molestie orci in, euismod enim. Donec sed cursus sem. Nulla fringilla metus eu sapien varius, non tempor neque ultricies. Sed congue condimentum nibh in scelerisque. Proin viverra, enim id convallis gravida, sapien lacus aliquam sem, ac consequat lorem neque vitae risus. Phasellus consectetur faucibus cursus. Etiam imperdiet vel ante eu gravida. Proin nec varius justo. Proin convallis laoreet purus, et placerat odio. Integer tempus tortor ante, in venenatis eros semper eget. Praesent id enim velit. Suspendisse faucibus pulvinar diam. Nullam placerat egestas orci, vestibulum gravida massa interdum vitae. Sed vel sapien sed nibh rutrum interdum. Donec lectus dolor, luctus eget lacus tincidunt, cursus laoreet tellus. Aliquam ultricies ante a urna mattis porttitor. Curabitur ac sodales turpis. Suspendisse at turpis ligula. Proin faucibus libero a est congue, in egestas est auctor.',
        ]);
    }
}
