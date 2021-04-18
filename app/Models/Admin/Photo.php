<?php

namespace App\Models\Admin;
use App\User;
use Illuminate\Database\Eloquent\Model;
use App\Models\Admin\Brand;

class Photo extends Model
{
    protected $table = 'photos';
    protected $fillable = ['photo_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class , 'photo_id');
    }
}
