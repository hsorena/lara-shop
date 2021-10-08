<?php

namespace App\Http\Controllers\Frontend;

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
}
