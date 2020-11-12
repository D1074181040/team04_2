<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cards extends Model
{
    use HasFactory;
    protected $fillable=[
        'n_ID',
        'p_time',
        'status',
        'created_at',
        'updated_at'
    ];
}
