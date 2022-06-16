<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KKPAktivitas extends Model
{
    use HasFactory;

    protected $table = 'kkpaktivitas';

    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
    ];
}
