<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Album;
use App\Models\Gallery;
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
        Album::factory(10)->create()->each(function ($album) {
            $album->galleries()
                ->saveMany(Gallery::factory(mt_rand(2, 5))->make());
        });
    }
}
