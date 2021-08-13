<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    
    protected $table="employees";

    protected $fillable=[
        'name',
        'email',
        'phone',
        'salary',
        'department',
    ];
    protected $guarded=[];
}
