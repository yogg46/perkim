<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_bangunan extends Model
{
    use HasFactory;




    public function bangunan()
    {
        return $this->hasMany(Pengajuan::class,'pengajuan');
    }
}