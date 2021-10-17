<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Attribute;
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

    public function apiGetProducts($id)
    {
        $products = Product::with('photos')->whereHas('categories' , function ($q) use($id){
            $q->where('id' , $id);
        })->paginate(2);

        $response = [
            'products' => $products
        ];
        return response()->json($response , 200);
    }

    public function apiGetSortedProducts($id ,$sort,$paginate)
    {
        $products = Product::with('photos')->whereHas('categories' , function ($q) use($id){
            $q->where('id' , $id);
        })->orderBy('price' , $sort)->paginate($paginate);

        $response = [
            'products' => $products
        ];
        return response()->json($response , 200);
    }

    public function apiGetCategoryAttribute($id)
    {
        $attributesGroup = Attribute::with('attributeValues')->whereHas('categories' , function ($q) use($id){
            $q->where('category_id' , $id);
        })->get();
        $response = [
            'attributesGroup' => $attributesGroup
        ];
        return response()->json($response , 200);
    }

    public function apiGetFilterProducts($id , $sort , $paginate , $attributes)
    {
        $attributesArray = json_decode($attributes);
        $products = Product::with('photos')->whereHas('categories' , function ($q) use ($id){
           $q->where('id' , $id);
        })->whereHas('attributeValues' , function ($q) use ($attributesArray){
            $q->whereIn('attributeValue_id' , $attributesArray);
        })->orderBy('price' , $sort)->paginate($paginate);
        $response = [
            'products' => $products
        ];
        return response()->json($response , 200);
    }
}
