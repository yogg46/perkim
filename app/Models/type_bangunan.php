<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_bangunan extends Model
{
    use HasFactory;


    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $fillable = [
        'type','pengajuan_id','jumlah','kategori'
    ];
    protected $table = 'type_bangunans';

    public function bangunan()
    {
        return $this->hasMany(Pengajuan::class, 'pengajuan_id');
    }
}