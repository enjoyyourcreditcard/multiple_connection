<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IstudioAttendance extends Model
{
    use HasFactory;

    protected $connection   = 'mysql2';
    protected $table        = 'attendances';
    protected $guarded      = ['id'];
}
