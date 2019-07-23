<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         // $this->call(CountriesSeeder::class);

         factory(\App\User::class, 20)->create()->each(function ($user) {
           $user->post()->saveMany(factory(\App\Post::class, 5)->make());
           $user->games()->save(factory(\App\Game::class)->make());
         });

    }
}
