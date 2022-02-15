<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'img',
      'price',
      'status',
    ];
public function Categories(){
  return $this->belongsToMany(CategoryInventory::class,'id','inventory_id');
}


}
