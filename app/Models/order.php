<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'quantity',
        'total_price',
        'status',
        'user_id',
    ];

    public function client(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'order-products');
    }
}
