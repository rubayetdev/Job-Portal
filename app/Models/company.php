<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class company extends Model
{
    public $table = 'business_registration';
    public $primaryKey = 'company_mail';
    public $incrementing = false;
    public $timestamps = false;
}