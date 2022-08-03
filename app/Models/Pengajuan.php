<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Pengajuan extends Model
{
    use HasFactory;
    use sluggable;


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_pro'
            ]
        ];
    }
}