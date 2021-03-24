<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Attribute;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AttributeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributes = Attribute::all();
        return view('admin.attributes.index' , ['attributes' => $attributes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.attributes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attribute = new Attribute;
        $attribute->title = $request->title;
        $attribute->type = $request->type;
        $attribute->save();
        Session::flash('attr_created' , 'ویژگی با موفقیت ایجاد شد');
        return redirect(route('attributes.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function show(Attribute $attribute)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribute $attribute)
    {
        return view('admin.attributes.edit' , ['attribute' => $attribute]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribute $attribute)
    {
        $attribute->title = $request->title;
        $attribute->type = $request->type;
        $attribute->save();
        Session::flash('attr_updated' , 'ویژگی مورد نظر با موفقیت بروز رسانی شد');
        return redirect(route('attributes.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Attribute  $attribute
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribute $attribute)
    {
        $attribute->delete();
        Session::flash('attr_deleted', 'ویژگی مورد نظر با موفقیت حذف شد');
        return redirect(route('attributes.index'));
    }
}
