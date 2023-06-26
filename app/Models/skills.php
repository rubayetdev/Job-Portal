<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skills extends Model
{
    public $table = 'user_skill';
    public $primaryKey = 'User_mail';
    public $incrementing = false;
    public $timestamps = false;
}