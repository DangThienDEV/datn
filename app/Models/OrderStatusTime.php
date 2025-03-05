<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderStatusTime extends Model
{
    use HasFactory;

    protected $table = 'order_status_times';
    protected $fillable = ['order_id', 'status_id', 'created_at'];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function status() {
        return $this->belongsTo(OrderStatus::class);
    }
} 