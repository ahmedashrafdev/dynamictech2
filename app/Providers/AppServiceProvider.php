<?php

namespace App\Providers;

use App\Models\Product;
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
        $socialMedia = loadText('' , 'social_media');
        $contacts = loadText('' , 'contacts');
       
        $logo = loadImage(loadText('logo')->image);
        $seo = loadText('seo')->value;
        view()->share(['products'=> $products  , 'socialMedia' => $socialMedia , 'logo' => $logo, 'seo' => $seo , 'contacts' => $contacts]);
    }
}
