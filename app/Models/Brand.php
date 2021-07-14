<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $guarded = [];
    protected $table = 'brands';
    use HasFactory;

    public function products(){
        return $this->hasMany('App\Models\Product');
    }
}
