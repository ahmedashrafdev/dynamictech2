<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            [
                "title" => "App Design",
                "icon" => "",
                "breif" => "We are working with a customer centric methodology which leads to establish life-long business relationships. Our products and services enable our customers to perform better and we have achieved the goal of moving our customers toward next level of their business targets achieving.",
            ],
            [
                "title" => "Web Design",
                "icon" => "",
                "breif" => "Our solutions are comprised of the arrangements that will drive your business toward profitability, survival and growth. Surely enough with Dynamic’s services and products your organization will be in a better position that will lead your organization to be top level customer services company and lead the market with whatever it does. ",
            ],
            [
                "title" => "",
                "icon" => "",
                "breif" => "Dynamic ERP solutions will help you manage your daily processes in the best way also it will lead the whole organization to be profitable and compete powerfully in a very tough business environment.",
            ],
            [
                "title" => "",
                "icon" => "",
                "breif" => "Dynamic BPR (Business Process Reengineering) will lead to more flexible and organized management policies using our consulting and strategic thinking mindset, also we take into consideration the needs of top management for accurate and timely information to support their decision making process. ",
            ],
            [
                "title" => "",
                "icon" => "",
                "breif" => "Dynamic Professional services include ERP diagnostics studies and the professional preparation for RFP to give your organization a very powerful position in the process of selecting an enterprise system and perform a successful implementation using a very clear and powerful methodologies. ",
            ],
            [
                "title" => "",
                "icon" => "",
                "breif" => "Dynamic Professional training courses will help you prepare your staff toward better level of performance and business processes management. Our training courses will help both fresh graduates and infield employees to realize new dimensions of their professional career and give them the tactics to manage well and perform to their maximum potential. ",
            ],
        ];

        foreach($services as $service){
            Service::create($service);
        }
    }
}
