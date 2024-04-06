<?php

namespace App\Models\Users;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = "users";

    protected $fillable = ['name', 'email', 'role', 'password'];

    use HasFactory;
}
