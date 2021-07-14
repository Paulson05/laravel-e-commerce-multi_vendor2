<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
class Category extends Model
{
    protected $guarded = [];
    protected $table = 'categories';
    use HasFactory;

    public static function shiftChild($cat_id){
        return Category::whereIn('id', $cat_id)->update(['is_parent'=>1]);
    }
    public static function getChildByParentID($id){
        return Category::where('parent_id', $id)->pluck('title', 'id');
    }

    public function products(){
           return $this->hasMany('App\Models\Product', 'cat_id', 'id')->where('status', 'active');
    }
    public function brands(){
        return $this->hasMany('App\Models\Product', 'cat_id', 'id');
    }
}
