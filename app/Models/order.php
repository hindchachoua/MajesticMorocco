<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_products',
        'status',
        'user_id',
    ];

    public function client(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function products(){
        return $this->belongsToMany(product::class);
    }
}
