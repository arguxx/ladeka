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
    'harga',
];
}