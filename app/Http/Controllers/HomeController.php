<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
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


        return view('home.index', ['page' => $page, 'sliderdata' => $sliderdata, 'slide' => $slide, 'productlist1' => $productlist1]);
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
        $category= Category::find($id);

        $products = DB::table('products')->where('category_id' , $id)->get();
        return view('home.categoryproducts', [ 'category' =>$category, 'products' => $products, 'data' => $data]);

    }

}
