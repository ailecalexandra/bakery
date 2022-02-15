<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
  protected $fillable = [
    'amount',
  ];
public function OrderInventories (){
  return $this->hasMany(OrderInventory::class,'bill_id','id');
}


    use HasFactory;
}

