<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    //
    use SoftDeletes; 
    protected $fillable = ['supplier_id', 'name', 'price', 'quantity', 'lot','expired_at'];
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];
    public function purchaseDetail()
    {
      return $this->hasMany(PurchaceDetail::class);
    }
}