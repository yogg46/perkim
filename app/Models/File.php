<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'berkas',
        'persyaratan',
        'pengajuan',
        'catatan',
    ];

    public function pengajuan()
    {
        return  $this->belongsTo(Pengajuan::class, 'pengajuan');
    }
    public function syarat()
    {
        return  $this->belongsTo(File::class, 'persyaratan');
    }
}