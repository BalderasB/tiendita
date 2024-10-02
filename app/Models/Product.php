<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(Category::class);
    }


    //relacion muvhos a inversa
    public function supplier(){
        return $this->belongsTo(Supplier::class);
    }


//relacion muchos a muchos
    public function tickets(){
        return $this->belongsToMany(Ticket::class);
    }

    public function branches(){
        return $this->belongsToMany(Branch::class);
    }

    
}
