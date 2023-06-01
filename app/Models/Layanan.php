<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 'jenis_layanan', 'harga', 'jenis_estimasi', 'estimasi', 'deskripsi', 'status'];
    protected $table = 'layanan';
}
