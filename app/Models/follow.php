<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class follow extends Model
{
    public $table = 'following';
    public $incrementing = false;
    public $timestamps = false;
}
