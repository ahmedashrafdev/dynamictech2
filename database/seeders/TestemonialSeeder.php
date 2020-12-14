<?php

namespace Database\Seeders;

use App\Models\Testemonial;
use Illuminate\Database\Seeder;

class TestemonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $testemonials = [
            [
                "name" => "Ali Ashmawy",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team2.jpg",
                "content" => "Dynamic Technology team is absolutely fantastic to work with and I would highly recommend them no matter what type of project you have.",
                "title" => "CO-FOUNDER",
                "title_ar" => "CO-FOUNDER",
                "fb" => "https://www.facebook.com",
                "twitter" => "https://www.twitter.com",
                "seo" => "Ali Ashmawy Co Founder",
            ],
            [
                "name" => "Aya Al Shazly",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team1.jpg",
                "content" => "if you're looking for someone who has world-class expertise, a technical team to match anyone in the business, it is Dynamic Technology.",
                "title" => "CO-FOUNDER",
                "title_ar" => "CO-FOUNDER",
                "fb" => "https://www.facebook.com",
                "twitter" => "https://www.twitter.com",
                "seo" => "Aya Al Shazly",
            ],
            [
                "name" => "Mohamed Emam",
                "image" => "http://techydevs.com/demos/themes/html/demo/prizon/images/team2.jpg",
                "content" => "I’ve had some questionable experiences with other web agencies in the past, but Followbright has hands down been the best web company we’ve worked with",
                "title" => "CHEIF TECHNOLOGY MANAGER",
                "title_ar" => "CHEIF TECHNOLOGY MANAGER",
                "fb" => "https://www.facebook.com",
                "twitter" => "https://www.twitter.com",
                "seo" => "Mohamed Emam",
            ],
        ];

        foreach($testemonials as $testemonial){
            Testemonial::create($testemonial);
        }
    }
}
