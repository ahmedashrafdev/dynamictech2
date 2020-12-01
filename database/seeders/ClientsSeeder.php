<?php

namespace Database\Seeders;

use App\Models\Clients;
use Facade\FlareClient\Http\Client;
use Illuminate\Database\Seeder;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $clients = [
           [
                "name" => 'anasia',
                "logo" => 'http://www.anasia.com/Content/assets/img/logo.png',
                "seo" => 'ansia',
                "featured" => 1,
           ],
           [
                "name" => 'omhassan',
                "logo" => 'http://www.omhassan.com/img/logo.png',
                "seo" => 'omhassan',
                "featured" => 1,
           ],
           [
            "name" => 'nbd',
            "logo" => 'https://cdn.emiratesnbd.com/en/assets/images/emiratesnbd_new_logo.gif',
            "seo" => 'emiratesnbd',
            "featured" => 1,
            ],
            [
                "name" => 'badwya',
                "logo" => 'https://www.logodalil.com.eg/images/Restaurants_Logos/badaweya.jpg',
                "seo" => 'badwya',
                "featured" => 1,
           ],
           [
            "name" => 'vodafone sarmady',
            "logo" => 'https://sarmady.net/assets/images/sarmady.png',
            "seo" => 'vodafone sarmady',
            "featured" => 1,
            ],
            
        ];


        foreach($clients as $client)
        {
            Clients::create($client);
        }
    }
}
