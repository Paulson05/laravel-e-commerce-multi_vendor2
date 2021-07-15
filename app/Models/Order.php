<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Order
 *
 * @property int $id
 * @property int $user_id
 * @property string $order_number
 * @property int $product_id
 * @property float $sub_total
 * @property float $total_amount
 * @property float|null $coupon
 * @property float|null $delivery_charge
 * @property int $quantity
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone
 * @property string $country
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $note
 * @property string $sfirst_name
 * @property string $slast_name
 * @property string $semail
 * @property string $sphone
 * @property string $scountry
 * @property string $saddress
 * @property string $scity
 * @property string $sstate
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDeliveryCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSaddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereScity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereScountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSemail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSfirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSlastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSphone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSstate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereState($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereSubTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereTotalAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    use HasFactory;
}
