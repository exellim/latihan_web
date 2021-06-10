<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;

    protected $table = 'tugas';
 
    protected $fillable = [
        'id',
        'kelas',
        'nama_tugas',
        'tugas_deadline',
    ];
    public $timestamps = false;

}
