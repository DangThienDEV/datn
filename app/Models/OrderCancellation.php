<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderCancellation extends Model
{
    use HasFactory;

    protected $table = 'order_cancellations';
    protected $fillable = ['order_id', 'reason', 'created_at'];

    public function order() {
        return $this->belongsTo(Order::class);
    }
} 