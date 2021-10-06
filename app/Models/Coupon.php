<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
