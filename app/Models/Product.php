<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'available_products',
        'is_Auto',
        'is_Valid',
        'user_id',
        'category_id',
        'region_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Categorie::class);
    }

    public function region(){
        return $this->belongsTo(Region::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class, 'order-products');
    }

    

}
