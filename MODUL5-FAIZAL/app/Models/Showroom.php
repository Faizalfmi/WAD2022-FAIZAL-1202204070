<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Showroom extends Model
{
    
    use HasFactory;

    protected $table = 'showrooms';

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'owner',
        'brand',
        'purchase_date',
        'description',
        'image',
        'status',
        'created_at',
        'updated_at',
    ];
}