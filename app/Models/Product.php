<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Product extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name','description'];
    protected $fillable = ['slug' , 'price','quantity' , 'product_category_id','featured' , 'status'];

    public function status()
    {
        return $this->status ? 'Active' : 'Inactive';
    }

    public function category(): belongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }


}
