<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use App\Models\Stat;
use App\Models\Clients;
use App\Models\Post;
use App\Models\Team;
use Illuminate\Http\Request;


class PagesController extends Controller
{

    

    public function homePage()
    {
        $sliders = Slider::get();
        $stats = Stat::get();
        $whyChooseUs = loadText('' , 'why_choose_us');
        $clients =Clients::where('featured' , 1)->get();
        $posts = Post::where('featured' , 1)->get();
        return view('home' , compact('sliders' , 'posts' , 'stats' , 'whyChooseUs' , 'clients'));
    }

    public function aboutPage()
    {
        $faqs = loadText('' , 'faq');
        $clients =Clients::where('featured' , 1)->get();

        return view('about' , compact('faqs' , 'clients'));
    }
    public function productsPage(Request $request)
    {
        $products =  Product::main()->get();
       
        if ($request->has('search')) {
            $products = Product::where('title','LIKE','%'.$request->search.'%')->orWhere('breif','LIKE','%'.$request->search.'%')->orWhere('content','LIKE','%'.$request->search.'%')->get();
            // dd($request->search);
            // $products =  DB::select('SELECT * FROM products WHERE title LIKE ? OR WHERE breif LIKE ? OR WHERE content ? ' , [$request->search , $request->search , $request->search]);
        }

        return view('products.index')->with(['allProducts' => $products]);
    }
    public function productPage($slug)
    {
        if(Product::hasChildren($slug)){
            $parent = Product::findBySlug($slug );
            $modoules = $parent->children;
            // dd($modoules);
            return view('products.modoules' , compact('parent','modoules'));
        }
        $product = Product::findBySlug($slug);
        return view('products.product' , compact('product'));
    }
    public function teamPage()
    {
        $team = Team::paginate(9);
        return view('team' , compact('team'));
    }
    public function verticalsPage()
    {
        return view('verticals');
    }
    public function blogPage()
    {
        $posts = Post::paginate(9);

        return view('blog.index' , compact('posts'));
    }
    public function postPage($slug)
    {
        $post = Post::findBySlug($slug);
        return view('blog.post' , compact('post'));
    }
    public function clientsPage()
    {
        $clients =Clients::paginate(9);
        return view('clients' , compact('clients'));
    }
    public function contactPage()
    {
        return view('contact');
    }
    public function demoPage()
    {
        return view('demo');
    }
}
