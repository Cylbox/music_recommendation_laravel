<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songableArray = [
            [
                'song_id' => 1,
                'songable_id' => 1,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 1,
                'songable_id' => 1,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 2,
                'songable_id' => 2,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 2,
                'songable_id' => 1,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 3,
                'songable_id' => 2,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 3,
                'songable_id' => 1,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 4,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 4,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 4,
                'songable_id' => 2,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 5,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 5,
                'songable_id' => 2,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 6,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 6,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 7,
                'songable_id' => 5,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 7,
                'songable_id' => 6,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 7,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 8,
                'songable_id' => 6,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 8,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 8,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 8,
                'songable_id' => 5,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 9,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 9,
                'songable_id' => 6,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 10,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 10,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 10,
                'songable_id' => 5,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 11,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 11,
                'songable_id' => 5,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 12,
                'songable_id' => 9,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 12,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 13,
                'songable_id' => 12,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 13,
                'songable_id' => 11,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 13,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 14,
                'songable_id' => 10,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 14,
                'songable_id' => 11,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 14,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 15,
                'songable_id' => 12,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 15,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 16,
                'songable_id' => 13,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 16,
                'songable_id' => 14,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 16,
                'songable_id' => 15,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 16,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 17,
                'songable_id' => 15,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 17,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 17,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 18,
                'songable_id' => 15,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 18,
                'songable_id' => 16,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 18,
                'songable_id' => 17,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 18,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 19,
                'songable_id' => 18,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 19,
                'songable_id' => 1,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 20,
                'songable_id' => 6,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 20,
                'songable_id' => 3,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 20,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 20,
                'songable_id' => 7,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 20,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 21,
                'songable_id' => 19,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 21,
                'songable_id' => 20,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 21,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 21,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 22,
                'songable_id' => 19,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 22,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 23,
                'songable_id' => 19,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 23,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 23,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 24,
                'songable_id' => 21,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 24,
                'songable_id' => 4,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 25,
                'songable_id' => 22,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 25,
                'songable_id' => 23,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 25,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 26,
                'songable_id' => 20,
                'songable_type' => 'App\Models\Author',
                'created_at' => new DateTime(),
            ],
            [
                'song_id' => 26,
                'songable_id' => 8,
                'songable_type' => 'App\Models\Genre',
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('songables')->insert($songableArray);
    }
}
