<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone','car_company', 'car_name','car_model','service_id','service_name', 'amount', 'order_id','transaction_id', 'payment_id', 'status','other'];

    protected $casts = [
        'other' => 'array'
    ];
}
