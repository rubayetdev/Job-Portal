<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic extends Model
{
    public $table = 'user_academic_info';
    public $primaryKey = 'User_mail';
    public $incrementing = false;
    public $timestamps = false;
}