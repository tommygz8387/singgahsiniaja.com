<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $table = 'trips';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama','deskripsi','harga','kategori','thumbnail','foto1','foto2','discount'
    ];
}
