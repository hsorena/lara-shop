<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Photo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    public function upload(Request $request)
    {
        $uploadedFile = $request->file('file');
        $fileName = time() . $uploadedFile->getClientOriginalName();
        $originalFileName =  $uploadedFile->getClientOriginalName();

        Storage::disk('local')->putFileAs('public/photos/' , $uploadedFile , $fileName);

        $photo = new Photo();
        $photo->original_name = $originalFileName;
        $photo->path = $fileName;
        $photo->user_id = 1;
        $photo->save();

        return response()->json(['photo_id' => $photo->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
