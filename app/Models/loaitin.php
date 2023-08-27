<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaitin extends Model
{
    use HasFactory;
    protected $table ='loaitin';
    protected $primarykey ='id';
    public $timestamps = false;
    protected $fillable = [
        'lang',
        'ten',
        'thuTu',
        'anHien',
    ];
}
