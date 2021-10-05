<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use App\Models\Admin\Category;
use App\Models\Admin\Photo;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use phpDocumentor\Reflection\Types\Object_;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with(['Photos','categories','attributeValues'])->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('sub_category')->get();
        $brands = Brand::all();

        return view('admin.products.create', compact(['categories', 'brands']));
    }

    public function generateSKU()
    {
        $number = mt_rand(1000, 999999);
        if ($this->checkSKU($number)) {
            return $this->generateSKU();
        }
        return (string)$number;
    }

    public function checkSKU($number)
    {
        return Product::where('sku', $number)->exists();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->sku = $this->generateSKU();
        $product->slug = $request->slug;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->description = $request->description;
        $product->brand_id = $request->brand_id;
        $product->user_id = 1;
        $product->meta_desc = $request->meta_desc;
        $product->meta_title = $request->meta_title;
        $product->meta_keywords = $request->meta_keywords;

        $product->save();

        $attributes = explode(',', $request->input('attributes')[0]);
        $photos = explode(',', $request->input('photos_id')[0]);

        $product->categories()->sync($request->categories);
        $product->attributeValues()->sync($attributes);
        $product->photos()->sync($photos);
        Session::flash('product_created', 'محصول جدید با موفقیت ایجاد شد');
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::all();
        $products = Product::with(['brand' , 'categories' , 'photos' , 'attributeValues'])->get();
        $product = $products->where('id' , $id)->first();
        return view('admin.products.edit' , compact(['product' , 'brands']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product_update = Product::findOrFail($product->id);
        $product_update->title = $request->title;
        $product_update->sku = $this->generateSKU();
        $product_update->slug = $request->slug;
        $product_update->status = $request->status;
        $product_update->price = $request->price;
        $product_update->discount_price = $request->discount_price;
        $product_update->description = $request->description;
        $product_update->brand_id = $request->brand_id;
        $product_update->user_id = 1;

        $product_update->save();

        $attributes = explode(',', $request->input('attributes')[0]);
        $photos = explode(',', $request->input('photos_id')[0]);

        $product_update->categories()->sync($request->categories);
        $product_update->attributeValues()->sync($attributes);
        $product_update->photos()->sync($photos);
        Session::flash('product_updated', 'محصول مورد نظر با موفقیت ویرایش شد');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Admin\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $selected_product = Product::findOrFail($product->id);
        $selected_product->delete();

        Session::flash('product_deleted', 'محصول مورد نظر با موفقیت حدف شد');
        return redirect(route('products.index'));

    }
}
