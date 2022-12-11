<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';
    public function showroom(){
        return $this->hasMany('App/Models/Showroom');
    }

    protected $fillable = [
        'id',
        'name',
        'no_hp',
        'email',
        'password',
        'created_at',
        'updated_at',
    ];
}
