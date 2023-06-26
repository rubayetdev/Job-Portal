<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class jobpost extends Model
{
    public $table = 'job_post';
    public $primaryKey = 'business_mail';
    public $incrementing = false;
    public $timestamps = false;
}