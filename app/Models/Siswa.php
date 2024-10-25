<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $PrimaryKey = 'Siswa_id';
    protected $table = 'Siswa';
    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
