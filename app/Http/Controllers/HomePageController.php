<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use App\Models\Stat;
use App\Models\Clients;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class HomePageController extends Controller
{
    public function index(Request $request)
    {
        $sliders = Slider::get();
        $stats = Stat::get();
        $whyChooseUs = loadText('' , 'why_choose_us');
        $clients =Clients::where('featured' , 1)->get();
        $posts = Post::where('featured' , 1)->get();
        return view('admin.home' , compact('sliders' , 'posts' , 'stats' , 'whyChooseUs' , 'clients'));
    }
    public function updateText($slug , Request $request){
        try {
            DB::table('texts')
            ->where('key', $slug)
            ->update(['value' => $request->value]);
        } catch(Throwable $e) {
            return  $e->getMessage() ;
        }
       
        
        return redirect()->back()->with('success' , 'Data updated successfully'); 
    }
    public function updateTextImages($slug , Request $request)
    {
        
        // dd($request->file('file'));
        foreach($request->file('file') as $image){

            $imageName= 'texts/'.$image->getClientOriginalName();

            $image->move(public_path().'/storage/images/texts', $imageName);  

            $fileNames[] = $imageName;

        }
        $images =implode(',' ,$fileNames);
        
        try {
            DB::table('texts')
            ->where('key', $slug)
            ->update(['images' => $images]);

        } catch(Throwable $e) {
            return  $e->getMessage() ;
        }
        return redirect()->back()->with('success' , 'Images updated successfully'); 
    }
}
