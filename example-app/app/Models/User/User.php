<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'table_users';
    protected $primaryKey = 'id';
    protected $fillable = ["name"];
    protected $hidden = [
        'password',
        'remember_token',
    ];
}
