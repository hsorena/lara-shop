<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Brand;
use App\Models\Admin\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::with('photo')->get();
        return view('admin.Brands.index' , compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = new Brand();
        $brand->title = $request->title;
        $brand->description = $request->description;
        $brand->photo_id = $request->photo_id;
        $brand->save();
        Session::flash('brand_created', 'برند مورد نظر با موفقیت ایجاد شد');
        return redirect(route('brands.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::with('photo')->whereId($id)->first();
        return view('admin.Brands.edit' , ['brand' => $brand ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $brand->title = $request->title;
        $brand->description = $request->description;
        if ($brand->photo_id){
            $brand->photo_id = $request->photo_id;
        }
        $brand->save();
        Session::flash('brand_updated', 'برند مورد نظر با موفقیت بروز رسانی شد');
        $brands = Brand::with('photo')->get();
        return redirect(route('brands.index' , ['brands' => $brands]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $attribute->delete();
        Session::flash('brand_deleted', 'برند مورد نظر با موفقیت حذف شد');
        return redirect(route('brands.index'));
    }
}
