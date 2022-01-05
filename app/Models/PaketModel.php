<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketModel extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $fillable = [
    'namaPaket',
    'deskripsi',
    'deskripsi1',
    'deskripsi2',
    'harga',
];
}