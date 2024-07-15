<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;
    protected $fillable = ['jenis_bisnis','nama','email','jenis_layanan','no','kebutuhan'];
    protected $table = 'crud';
    public $timestamps = false;
}
