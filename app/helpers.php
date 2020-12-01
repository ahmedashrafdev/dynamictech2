<?php

use App\Models\Text;

if(!function_exists('loadImage'))
{
    function loadImage($path)
    {
        return $path && file_exists('storage/images/'.$path) ? asset('storage/images/'.$path) : $path ;
    }
}

if(!function_exists('loadText')){
    function loadText($key , $type ="")
    {
        return $type != "" ? Text::where("type" , $type)->select(['value' , 'key' , 'image' , 'images' , 'icon'])->get() : Text::where("key" , $key)->select(['value'  , 'image' , 'images' , 'icon'])->first();
    }
}
