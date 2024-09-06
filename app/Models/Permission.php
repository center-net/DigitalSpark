<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Translatable;

class Permission extends Model
{
    use HasFactory, Translatable;

    public $translatedAttributes = ['name',];
    protected $fillable = ['key' , 'table_name'];

    public function role()
    {
        return $this->belongsToMany(role::class);
    }


    public static function generateFor($table_name)
    {
        
        $admin = new self();
        $admin->key = 'browse_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Browse '.$table_name;
        $admin->save();
        
        $admin = new self();
        $admin->key = 'read_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Read '.$table_name;
        $admin->save();
        
        $admin = new self();
        $admin->key = 'edit_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Edit '.$table_name;
        $admin->save();
        
        $admin = new self();
        $admin->key = 'add_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Add '.$table_name;
        $admin->save();
        
        $admin = new self();
        $admin->key = 'delete_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Delete '.$table_name;
        $admin->save();
        
        $admin = new self();
        $admin->key = 'restore_'.$table_name;
        $admin->table_name = $table_name;
        $admin->save();
        $admin->name = 'Restore '.$table_name;
        $admin->save();
        
        // self::firstOrCreate(['name'=>'Browse '.$table_name,'key' => 'browse_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Read '.$table_name,'key' => 'read_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Edit '.$table_name,'key' => 'edit_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Add '.$table_name,'key' => 'add_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Delete '.$table_name,'key' => 'delete_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Restore '.$table_name,'key' => 'restore_'.$table_name, 'table_name' => $table_name]);
        // self::firstOrCreate(['name'=>'Force Delete '.$table_name,'key' => 'forceDelete_'.$table_name, 'table_name' => $table_name]);
    }

    public static function removeFrom($table_name)
    {
        self::where(['table_name' => $table_name])->delete();
    }
}
