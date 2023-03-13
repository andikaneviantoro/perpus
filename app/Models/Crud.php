<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'bukulibrary';
    protected $primaryKey = 'id';
    protected $fillable = ['judul', 'pengarang', 'penerbit', 'gambar'];
}
