<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    public $table = 'user_personal_address';
    public $primaryKey = 'User_mail';
    public $incrementing = false;
    public $timestamps = false;
}