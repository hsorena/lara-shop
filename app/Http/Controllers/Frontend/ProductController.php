<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Category;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function getProduct($slug)
    {
        $product = Product::with('photos','attributeValues.attributesGroup','brand','categories')->whereSlug($slug)->first();
        $relatedProducts = Product::with('categories')->whereHas('categories' , function ($q) use($product){
           $q->whereIn('id' , $product->categories);
        })->get();
        return view('frontend.products.index' , compact(['product' , 'relatedProducts']));
    }

    public function getProductByCategory($id , $page = 2)
    {
        $category = Category::whereId($id)->first();
        $products = Product::with('photos')->whereHas('categories' , function ($q) use($category){
            $q->where('id' , $category->id);
        })->paginate($page);
        return view('frontend.categories.index' , compact(['category' , 'products']));
    }

    public function apiProducts($id)
    {
        $products = Product::with('photos')->whereHas('categories' , function ($q) use($id){
            $q->where('id' , $id);
        })->paginate(2);

        $response = [
            'products' => $products
        ];
        return response()->json($response , 200);
    }
}
