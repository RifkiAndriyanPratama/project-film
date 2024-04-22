<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\film;
use App\Models\Genre;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::create([
        //     'name' => "Rifki Andriyan Pratama",
        //     'username' => "Rifki",
        //     'Password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => "Danu Wisesa",
        //     'username' => "Danu",
        //     'Password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => "Noventino Putra",
        //     'username' => "Noven",
        //     'Password' => bcrypt('12345')
        // ]);

        Genre::create([
            'name' => "Romance",
            'slug' => "romance"
        ]);

        Genre::create([
            'name' => "Action",
            'slug' => "action"
        ]);

        Genre::create([
            'name' => "Comedy",
            'slug' => "comedy"
        ]);

        Film::factory(21)->create();
    }
}
