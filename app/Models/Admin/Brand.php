<?php

namespace App\Models\Admin;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Photo;

class Brand extends Model
{
    public function photo()
    {
        return $this->belongsTo(Photo::class , 'photo_id');
    }
}
