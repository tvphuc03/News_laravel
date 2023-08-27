<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    use HasFactory;
    protected $table = 'binhluan';
    protected $primarykey = 'id';
    protected $fillable = [
        'id',
        'idTin',
        'ngayDang',
        'noiDung',
        'email',
        'hoTen',
        'anHien',
    ];
}
