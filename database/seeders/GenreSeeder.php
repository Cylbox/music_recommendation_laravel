<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genreArray = [
            [
                'name' => "Rock 'n' Roll",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Джаз",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Hip-Hop",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Инди",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Рок",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Rap",
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('genres')->insert($genreArray);
    }
}
