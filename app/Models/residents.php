<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residents extends Model
{
    use HasFactory;
    protected $fillable=[
        'n_ID',
        'p_name',
        'phone',
        'gender',
        'region',
        'floor',
        'created_at',
        'updated_at'
    ];
}
