<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Attribute;
use App\Models\Admin\AttributeValue;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class AttributeValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attributeValues = AttributeValue::with('attributesGroup')->get();
        return view('admin.attributesValues.index' , ['attributeValues' => $attributeValues]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributes = Attribute::all();
        return view('admin.attributesValues.create' , ['attributes' => $attributes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributeValue = new AttributeValue;
        $attributeValue->title = $request->title;
        $attributeValue->attribute_id = $request->attribute_id;
        $attributeValue->save();
        Session::flash('attrVal_created' , 'مقدار ویژگی با موفقیت ایجاد شد');
        return redirect(route('attributes-values.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function show(AttributeValue $attributeValue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attributeValue = AttributeValue::findOrFail($id);
        $attributes = Attribute::all();
        return view('admin.attributesValues.edit' , ['attributeValue' => $attributeValue , 'attributes' => $attributes] );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $attributeValue = AttributeValue::findOrFail($id);
        $attributeValue->title = $request->title;
        $attributeValue->attribute_id = $request->attribute_id;
        $attributeValue->save();
        Session::flash('attrVal_updated' , 'مقدار ویژگی با موفقیت بروز رسانی شد');
        return redirect(route('attributes-values.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\AttributeValue  $attributeValue
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attributeValue = AttributeValue::findOrFail($id);
        $attributeValue->delete();
        Session::flash('attrVal_deleted' , 'مقدار ویژگی با موفقیت حذف شد');
        return redirect(route('attributes-values.index'));
    }
}
