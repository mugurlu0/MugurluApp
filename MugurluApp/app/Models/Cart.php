<?php

namespace App\Models;

use Illuminate\Support\Facades\App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['quantity', 'product_id', 'user_id'];
    public function productSelected(){
        
        return $this->belongsTo('App\Model\User');
    }
}
