<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $guarded = [];
    protected $table = 'products';
    use HasFactory;

    public function rel_prod(){
        return $this->hasMany(Product::class, 'cat_id', 'cat_id')->where('status', 'active')->limit(2);
    }

    public static function getProductByCart($id){
        return self::where('id', $id)->get()->toArray();
    }
}
