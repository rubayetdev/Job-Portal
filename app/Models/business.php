<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class business extends Model
{
    public $table = 'business_profile';
    public $primaryKey = 'company_mail';
    public $incrementing = false;
    public $timestamps = false;
}