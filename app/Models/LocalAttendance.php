<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LocalAttendance extends Model
{
    use HasFactory;

    protected $connection   = 'mysql';
    protected $table        = 'attendances';
    protected $guarded      = ['id'];
}
