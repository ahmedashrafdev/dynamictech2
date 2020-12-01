<?php

namespace Database\Seeders;

use App\Models\Stat;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stats = [
            [
                'record' => 'Years of experience',
                'icon' => 'check-circle-o',
                'value' => '15',
            ],
            [
                'record' => 'Worldwide Customers',
                'icon' => 'users',
                'value' => '1000',
            ],
            
            [
                'record' => 'Lines Of Codes',
                'icon' => 'file-code',
                'value' => '77785',
            ],
            [
                'record' => 'modules',
                'icon' => 'clipboard',
                'value' => '450',
            ],

        ];

        foreach($stats as $record){
            Stat::create($record);
        }
    }
}
