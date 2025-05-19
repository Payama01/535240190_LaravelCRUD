<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\hasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use hasFactory;

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'jurusan',
        'created_at',
        'updated_at',
    ];

    protected $table = 'mahasiswa';

}
