<?php

namespace App\Providers;

use App\Models\Product;
use App\Models\Testemonial;
use Database\Seeders\TestemonialSeeder;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $products =  Product::main()->get();
        $testemonials =  Testemonial::get();
        $socialMedia = loadText('' , 'social_media');
        $contacts = loadText('' , 'contacts');
       
        $logo = loadImage(loadText('logo')->image);
        $seo = loadText('seo')->value;
        view()->share(['products'=> $products  , 'socialMedia' => $socialMedia , 'logo' => $logo, 'seo' => $seo , 'contacts' => $contacts , 'testemonials' => $testemonials]);
    }
}
