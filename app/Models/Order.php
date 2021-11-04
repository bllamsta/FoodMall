<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'status_id',
        'quantity',
        'invoice_code',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }
}
