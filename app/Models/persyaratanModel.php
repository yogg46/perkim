<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persyaratanModel extends Model
{
    use HasFactory;

    public function syarat()
    {
        return  $this->hasMany(File::class, 'persyaratan');
    }
}