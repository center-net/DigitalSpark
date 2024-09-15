<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class ProductCategory extends Model
{
    use HasFactory, Translatable, Sluggable;

    public $translatedAttributes = ['name',];
    protected $fillable = ['slug' , 'cover', 'status'];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    public function status()
    {
        return $this->status ? 'Active' : 'Inactive';
    }


    public function getParentNameAttribute(): string
    {
        return $this->parent != null ? $this->parent->name : '-';
    }

    public function parent()
    {
        return $this->hasOne(ProductCategory::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id');
    }

    public function appearedChildren()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id', 'id')->where('status', true);
    }

    public static function tree( $level = 1 )
    {
        return static::with(implode('.', array_fill(0, $level, 'children')))
            ->whereNull('parent_id')
            ->whereStatus(true)
            ->orderBy('id', 'asc')
            ->get();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
