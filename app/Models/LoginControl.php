<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginControl extends Model
{
    public $table = 'userdetails';
    public $primaryKey = 'User_id';
    public $incrementing = true;
    public $timestamps = false;
}
