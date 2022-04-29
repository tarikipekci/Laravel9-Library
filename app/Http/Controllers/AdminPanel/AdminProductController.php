<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;

class AdminProductController extends Controller
{

 protected $appends = [
     'getParentsTree'
 ];

    public static function getParentsTree($product,$title)
    {

        if ($product->parent_id == 0) {
            return $title;
        }

        $parent = Product::find($product->parent_id);
        $title = $parent->title . ' > ' . $title;

        return AdminProductController::getParentsTree($parent,$title);
    }




    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Product::all();
        return view('admin.product.index' , ['data' => $data]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data= Product::all();
        return view('admin.product.create' , ['data' => $data]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new Product();
        $data->category_id = $request->category_id;
        $data->user_id =0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status =0;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->amount = $request->amount;
        $data->page = $request->page;

        if ($request->file('image')){

            $data->image= $request->file('image')->store('images');

        }

        $data->save();
        return redirect('admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {
        //
        $data = Product::find($id);
        return view('admin.product.show', ['data' => $data]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        //
        $data= Product::find($id);
        $datalist= Product::all();
        return view('admin.product.edit' , ['data' => $data , 'datalist' =>$datalist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product, $id)
    {
        //
        $data= Product::find($id);
        $data->category_id = $request->category_id;
        $data->user_id =0;
        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->status =$request->status;
        $data->detail = $request->detail;
        $data->price = $request->price;
        $data->amount = $request->amount;
        $data->page = $request->page;

        if ($request->file('image')){

            $data->image= $request->file('image')->store('images');

        }

        $data->save();
        return redirect('admin/product');


    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        //
        $data= Product::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image))
        {
            Storage::delete($data->image);
        }

        $data->delete();
        return redirect('admin/product');

    }
}
