<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchase extends Model
{
    //
    use SoftDeletes; 

    protected $fillable = ['user_id', 'invoice', 'status', 'total'];
    protected $dates    = ['created_at', 'updated_at', 'deleted_at'];

    public function purchaseDetail()
    {
      return $this->hasMany(PurchaseDetail::class);
    }
}
