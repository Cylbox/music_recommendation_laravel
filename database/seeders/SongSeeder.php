<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $songArray = [
            [
                'name' => "The Purple People Eater",
                'url' => "https://www.youtube.com/watch?v=5jV-E09efRE&ab_channel=AllSeasonsMusic",
                'author' => "Sheb Wooley",
                'genre' => "Rock 'n' Roll",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Good Rockin' Tonight 1947",
                'url' => "https://www.youtube.com/watch?v=cgdzS4OSQ1M&list=PLyN-KXcaVodeVTb64ZeayFxQ7V_YqhSdQ&ab_channel=TheBluesfan12",
                'author' => "Roy Brown",
                'genre' => "Rock 'n' Roll",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Big Town",
                'url' => "https://www.youtube.com/watch?v=2Fc1wr3dYxU&list=PLyN-KXcaVodeVTb64ZeayFxQ7V_YqhSdQ&index=5&ab_channel=cjlujan1995",
                'author' => "Roy Brown",
                'genre' => "Rock 'n' Roll",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Siesta",
                'url' => "https://www.youtube.com/watch?v=ptQB92zyRmg&ab_channel=EzraCollective",
                'author' => "Ezra Collective, Emeli Sandé",
                'genre' => "Джаз",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Tiny Desk Concert",
                'url' => "https://www.youtube.com/watch?v=eAzClkn3zYw&ab_channel=NPRMusic",
                'author' => "Ezra Collective",
                'genre' => "Джаз",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "There Isn't Much",
                'url' => "https://www.youtube.com/watch?v=4GzVy6sl1Qo&ab_channel=EmeliSandeVEVO",
                'author' => "Emeli Sandé",
                'genre' => "Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Down In Atlanta",
                'url' => "https://www.youtube.com/watch?v=t_Jhj-gBYCs&ab_channel=PharrellWilliamsVEVO",
                'author' => "Pharrell Williams, Travis Scott",
                'genre' => "Hip-Hop",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "HIGHEST IN THE ROOM",
                'url' => "https://www.youtube.com/watch?v=ZbZSe6N_BXs&ab_channel=PharrellWilliamsVEVO",
                'author' => "Travis Scott",
                'genre' => "Поп, Hip-Hop, Инди",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Take Me Out",
                'url' => "https://www.youtube.com/watch?v=GhCXAiNz9Jo&ab_channel=DominoRecordingCo.",
                'author' => "Franz Ferdinand",
                'genre' => "Рок",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Take Me To Church",
                'url' => "https://www.youtube.com/watch?v=PVjiKRfKpPI&ab_channel=HozierVEVO",
                'author' => "Hozier",
                'genre' => "Инди, Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Movement",
                'url' => "https://www.youtube.com/watch?v=OSye8OO5TkM&ab_channel=HozierVEVO",
                'author' => "Hozier",
                'genre' => "Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Need You To Know",
                'url' => "https://www.youtube.com/watch?v=jBvcu0shxCk&ab_channel=StereoheartsR%26B",
                'author' => "Ne-Yo",
                'genre' => "R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Free This Feeling",
                'url' => "https://www.youtube.com/watch?v=0vazKM0oqDI&ab_channel=Ep'id'emicPop",
                'author' => "spring gang, Ed Mills",
                'genre' => "R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "So Good",
                'url' => "https://www.youtube.com/watch?v=8OQ1CnO-5jw&ab_channel=Ep'id'emicSoul",
                'author' => "Bang Bang, Ed Mills",
                'genre' => "R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Delusional",
                'url' => "https://www.youtube.com/watch?v=b6hmIsjcip4&ab_channel=Ep'id'emicPop",
                'author' => "Spring Gang",
                'genre' => "R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Bang Bang",
                'url' => "https://www.youtube.com/watch?v=0HDdjwpPM3Y&ab_channel=JessieJVEVO",
                'author' => "Jessie J, Ariana Grande, Nicki Minaj",
                'genre' => "Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Anaconda",
                'url' => "https://www.youtube.com/watch?v=LDZX4ooRsWs&ab_channel=NickiMinajAtVEVO",
                'author' => "Nicki Minaj",
                'genre' => "Hip-Hop, Rap",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Tukoh Taka",
                'url' => "https://www.youtube.com/watch?v=rb0bjyt1OD0&ab_channel=FIFA",
                'author' => "Nicki Minaj, Maluma, Myriam Fares",
                'genre' => "Поп",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Wally Willette",
                'url' => "https://www.youtube.com/watch?v=I_ICjYO4Vcc&ab_channel=koolkat57",
                'author' => "Pink Elephant",
                'genre' => "Rock 'n' Roll",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "HIGHEST IN THE ROOM",
                'url' => "https://www.youtube.com/watch?v=tfSS1e3kYeo&ab_channel=TravisScottVEVO",
                'author' => "Travis Scott",
                'genre' => "Поп, Hip-Hop, Rap, R&B/cоул",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Praise The Lord",
                'url' => "https://www.youtube.com/watch?v=Kbj2Zss-5GY&ab_channel=LIVELOVEASAPVEVO",
                'author' => "A\$AP Rocky, Da Shine",
                'genre' => "Hip-Hop, Rap",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "D.M.B.",
                'url' => "https://www.youtube.com/watch?v=0NzlbBmkM3E&ab_channel=LIVELOVEASAPVEVO",
                'author' => "A\$AP Rocky",
                'genre' => "Rap",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Babushka Boi",
                'url' => "https://www.youtube.com/watch?v=KViOTZ62zBg&ab_channel=LIVELOVEASAPVEVO",
                'author' => "A\$AP Rocky",
                'genre' => "Hip-Hop, Rap",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Rap God",
                'url' => "https://www.youtube.com/watch?v=XbGs_qK2PQA&list=PLPIk-NgEqT-nQ3ehladGXUZCQYR_Vxxsa&ab_channel=EminemVEVO",
                'author' => "Eminem",
                'genre' => "Hip-Hop",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Miss You",
                'url' => "https://www.youtube.com/watch?v=Rcfpb4rk05M&ab_channel=OliverTree",
                'author' => "Oliver Tree, Robin Schulz",
                'genre' => "Rap",
                'created_at' => new DateTime(),
            ],
            [
                'name' => "Miss You",
                'url' => "https://www.youtube.com/watch?v=Rcfpb4rk05M&ab_channel=OliverTree",
                'author' => "Da Shine",
                'genre' => "Rap",
                'created_at' => new DateTime(),
            ],
        ];

        DB::table('songs')->insert($songArray);
    }
}
