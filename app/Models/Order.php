<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =    [
      'amount',
      'buyer_id',
      'seller_id'
    ] ;
    public function Buyer(){
       return $this->hasOne(Buyer::class,'id','buyer_id');
    }
    public function Seller(){
      return $this->hasOne(Seller::class);
    }
    




}
