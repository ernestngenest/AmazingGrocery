<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
     'item_id',
     'user_id'
    ];
    use HasFactory;
    public function items(){
        return $this->belongsTo(Items::class,'item_id','id');
    }
    public function users(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
