<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class , 'attribute_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class , 'attribute_category' , 'attribute_id' , 'category_id')
            ->withTimestamps();
    }
}
