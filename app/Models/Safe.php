<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;

class Safe extends Model
{
    use HasFactory, Translatable, Sluggable;

    public $translatedAttributes = ['name','address'];
    protected $fillable = ['slug' , 'phone', 'status'];

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

    public function parent()
    {
        return $this->hasOne(Safe::class, 'id', 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Safe::class, 'parent_id', 'id');
    }

    public function appearedChildren()
    {
        return $this->hasMany(Safe::class, 'parent_id', 'id')->where('status', true);
    }

    public static function tree( $level = 1 )
    {
        return static::with(implode('.', array_fill(0, $level, 'children')))
            ->whereNull('parent_id')
            ->whereStatus(true)
            ->orderBy('id', 'asc')
            ->get();
    }

}
