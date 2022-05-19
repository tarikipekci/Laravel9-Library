<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Setting;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //

    public static function mainCategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index()
    {

        $page = 'home';
        $sliderdata = Product::limit(4)->get();
        $slide = Product::first();
        $productlist1 = Product::limit(6)->get();
        $setting = Setting::first();


        return view('home.index', ['setting' => $setting, 'page' => $page, 'sliderdata' => $sliderdata, 'slide' => $slide, 'productlist1' => $productlist1]);
    }


    public function about()
    {

        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);

    }

    public function references()
    {

        $setting = Setting::first();
        return view('home.references', ['setting' => $setting]);

    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);

    }

    public function product($id)
    {

        $data = Product::find($id);
        $images = DB::table('images')->where('book_id', $id)->get();
        return view('home.product', ['data' => $data, 'images' => $images]);

    }

    public static function categoryproducts($id)

    {

        $data = Product::find($id);
        $category = Category::find($id);

        $products = DB::table('products')->where('category_id', $id)->get();
        return view('home.categoryproducts', ['category' => $category, 'products' => $products, 'data' => $data]);

    }

}
