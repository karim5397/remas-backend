<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Traits\ImageStoreTrait;

class ProductController extends Controller
{
    public function index()
    {
        $products=Product::latest()->paginate(10);
        return view('admin.products.index' ,compact('products'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|string|max:255',
            'photo' => 'required',

        ],
        [
            "title.required" => "Please enter product title",
            "photo.required" => "Please choose a photo",
        ]);
        $data=$request->all();
        $image=ImageStoreTrait::storeImage($request->photo,$request->file('photo'),'frontend/assets/images/products/',500,500);
        $data['photo']=$image;
        $product=Product::create($data);
        if($product){
            return redirect()->route('product.index')->with('success','The product created successfully');
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
    }
    public function destroy($id)
    {
        $product=Product::find($id);
        $old_image=$product->photo;
        $product->delete();
        if($product)
        {
            if(file_exists($old_image)){
                unlink($old_image);
            }
           return redirect()->route('product.index')->with('success' , 'The product is deleted');
        }else{
            return back()->with('error' , 'Something Went Wrong');
        }
    }
}
