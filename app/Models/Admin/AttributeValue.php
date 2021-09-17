<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    protected $table = 'attribute_values';

    public function attributesGroup()
    {
        return $this->belongsTo(Attribute::class , 'attribute_id');
    }

    public function products()
    {
        return $this->belongsToMany(Attribute::class , 'attributevalue_product' , 'attributeValue_id','product_id');
    }
}
