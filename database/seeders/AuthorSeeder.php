<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $authorArray = [
            [
                'name' => "Sheb Wooley",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Roy Brown",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Ezra Collective",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Emeli Sandé",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Pharrell Williams",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Travis Scott",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Franz Ferdinand",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Hozier",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Ne-Yo",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Bang Bang",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Ed Mills",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Spring Gang",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Jessie J",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Ariana Grande",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Nicki Minaj",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Maluma",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Myriam Fares",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Pink Elephant",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "A\$AP Rocky",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Da Shine",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Eminem",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Oliver Tree",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Robin Schulz",
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('authors')->insert($authorArray);
    }
}
