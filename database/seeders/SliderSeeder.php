<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sliders = [
            [
                "tag" => "#we love development",
                "heading" => "Top business<br> soloutions company",
                "content" => "Since we started in 2008 we have helped multiple customers to realize their<br> business potential and do business in a standard and profitable way. ",
                "image" => "sliders/06.png",
                "seo" => "Top business soloutions company",
            ],
            [
                "tag" => "#we love help",
                "heading" => "Dynamic technology <br>Gives You Power ",
                "content" => "Dynamic ERP solutions will help you manage your daily processes<br> in the best way",
                "image" => "sliders/04.png",
                "seo" => "Dynamic technology Gives You Power",
            ],
        ];
        foreach($sliders as $slider){
            Slider::create($slider);
        }
    }
}
