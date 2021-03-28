<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function attributeValues()
    {
        return $this->hasMany(AttributeValue::class , 'attribute_id');
    }
}
