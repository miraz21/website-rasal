<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $tables=['forms'];

    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'payment_method',
        'txn_id',
        'booking_period',
        'subject',
    ];
    protected $guarded=[];
}
