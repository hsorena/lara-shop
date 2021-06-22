<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function children()
    {
        return $this->hasMany(Category::class,'parent_id');
    }

    public function childrenRecursive()
    {
        return $this->children()->with('childrenRecursive');
    }

    public function sub_category()
    {
        return $this->hasMany(self::class,'parent_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function attributes()
    {
        return $this->hasMany(Attribute::class , 'attribute_id');
    }
}
