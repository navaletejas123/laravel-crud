<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    public $timestamps= false;
    protected $fillable = ['teacher_name','subject','experiance','school_name'];
}
