<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $team = [
            [
                "name" => "Mohamed Hassan",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team.jpg",
                "title" => "Executive Manager at Dynamic Technology",
                "title_ar" => "Executive Manager at Dynamic Technology",
                "fb" => "http://facebook.com",
                "twitter" => "http://twitter.com",
                "seo" => "Mohamed Hassan",
            ],
            [
                "name" => "Mohamed Esmail",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team2.jpg",
                "title" => "Cheif Technology Manager",
                "title_ar" => "Cheif Technology Manager",
                "fb" => "http://facebook.com",
                "twitter" => "http://twitter.com",
                "seo" => "Mohamed Esmail",
            ],
            [
                "name" => "Abdallah Shokry",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team3.jpg",
                "title" => "Business Developer",
                "title_ar" => "Business Developer",
                "fb" => "http://facebook.com",
                "twitter" => "http://twitter.com",
                "seo" => "Abdallah Shokry",
            ],
        ];

        foreach($team as $member)
        {
            Team::create($member);
        }
    }
}
