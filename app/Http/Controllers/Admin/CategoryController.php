<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Attribute;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::with('sub_category')->where('parent_id' , null)->get();
        return view('admin.categories.index' , compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('childrenRecursive')->where('parent_id',null)->get();
        return view('admin.categories.create' , compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.in
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->meta_desc = $request->meta_desc;
        $category->meta_title = $request->meta_title;
        $category->meta_keywords = $request->meta_keywords;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::with('sub_category')->where('parent_id',null)->get();
        $category = Category::findOrFail($id);
        return view('admin.categories.edit' , ['categories' => $categories , 'category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->meta_desc = $request->meta_desc;
        $category->meta_title = $request->meta_title;
        $category->meta_keywords = $request->meta_keywords;
        $category->parent_id = $request->parent_id;
        $category->save();
        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::with('sub_category')->where('id' , $id)->first();
        if (count($category->sub_category) > 0)
        {
            Session::flash('error_category' , 'این دسته شامل زیر دسته میباشد نمیتوانید حدف کنید');
            return redirect(route('categories.index'));
        }
    }

    public function indexSetting($id)
    {
        $category = Category::findOrFail($id);
        $attributes = Attribute::all();
        return view('admin.categories.setting' , compact(['category' , 'attributes']));
    }

    public function saveSetting(Request $request , $id)
    {
        $category = Category::findOrFail($id);
        $category->attributes()->sync($request->attributesGroup);
        $category->save();
        return redirect()->route('categories.index');
    }

    public function apiIndex()
    {
        $categories = Category::with('sub_category')->where('parent_id' , null)->get();
        $response = [
            'categories' => $categories
        ];
        return response()->json($response , 200);
    }

    public function apiAttributeIndex(Request $request)
    {
        $categories = $request->all();
        $attributes = Attribute::with('attributeValues' , 'categories')
            ->whereHas('categories' , function ($q) use ($categories){
                $q->whereIn('categories.id' , $categories);
            })->get();

        $response = [
            'attributes' => $attributes
        ];
        return response()->json($response , 200);
    }


}
