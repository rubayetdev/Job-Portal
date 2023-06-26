<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cvsup extends Model
{
    use HasFactory;
    public $table = 'cvs';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = false;
}