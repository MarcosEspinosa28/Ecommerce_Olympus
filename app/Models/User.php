<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';

    protected $table = 'users';

    protected $fillable = [
        'name', 'email','email_verified_at','password', 'remember_password',
        'created_at', 'updated_at'];
}
