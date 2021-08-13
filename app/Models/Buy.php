<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;
    protected $tables=['buys'];

    protected $fillable = [
        'name',
        'email',
        'room_no',
        'payment_method',
        'txn_id',
        'eat_time',
        'description',
    ];

    protected $guarded=[];
}
