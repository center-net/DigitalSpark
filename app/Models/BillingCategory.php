<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class BillingCategory extends Model
{
    use HasFactory, Translatable, Sluggable;

    public $translatedAttributes = ['name',];
    protected $fillable = ['slug' , 'status'];

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
}
