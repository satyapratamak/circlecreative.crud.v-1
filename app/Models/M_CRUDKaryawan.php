<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class M_CRUDKaryawan extends Model
{
    use softDeletes;

    protected $table = 'karyawan';
    protected $fillable = [
        'full_name',
        'birth_place',
        'birth_date',
        'hp',
        'email',
        'departement'
    ];
    protected $hidden;
}
