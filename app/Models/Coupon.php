<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'coupons';

    public function discount($total){
        if($this->type== "fixed"){
//            reture $this->value;

        }
        elseif ($this->type=="percent"){
            reture ($this->value/188)*$total;
        }
        else{
//            reture 0;
        }
    }
}
