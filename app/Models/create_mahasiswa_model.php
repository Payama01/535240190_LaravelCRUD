<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class create_mahasiswa_model extends Model
{
    //add name and email to fillable
    protected $fillable = ['name','email'];
}
