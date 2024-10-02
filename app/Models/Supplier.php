<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $guarded = [];

//relacion uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }

    public function branches(){
        return $this->belongsToMany(Product::class);
    }
}
