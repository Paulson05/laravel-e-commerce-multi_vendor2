<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Shipping
 *
 * @property int $id
 * @property string $shipping_address
 * @property string $delivery_time
 * @property float $delivery_charge
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping query()
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereShippingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Shipping whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Shipping extends Model
{
    protected $table ='shippings';

    protected $guarded = [];
    use HasFactory;
}
