<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'employee';
    protected $primarykey = 'id';
    public $timestamps = false;
    protected $fillable = ['nisn', 'name', 'gender', 'address'];
}
