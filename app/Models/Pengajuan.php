<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Pengajuan extends Model
{
    use HasFactory;
    use sluggable;


    protected $guarded  = ['id'];
    protected $primayKey = 'id';
    protected $table = 'pengajuans';

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->total = $model->psu + $model->kavling;
        });


        static::updating(function ($model) {
            $model->total = $model->psu + $model->kavling;
        });



        // static::updating(function ($model) {

        //     if ($model->total_progres > 130) {
        //         $model->status = 6;
        //     } elseif ($model->total_progres > 120) {
        //         $model->status = 5;
        //     } elseif ($model->total_progres > 110) {
        //         $model->status = 3;
        //     } elseif ($model->total_progres > 99) {
        //         $model->status = 4;
        //         $model->tgl_trial = Carbon::now();
        //     } elseif ($model->total_progres > 0) {
        //         $model->status = 2;
        //     } elseif ($model->total_progres == 0) {
        //         $model->status = 1;
        //     }
        // });
    }


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'nama_pro'
            ]
        ];
    }

    public function pengaju()
    {
        return  $this->belongsTo(User::class, 'pengaju');
    }

    public function bangunan()
    {
        return $this->hasMany(type_bangunan::class,'pengajuan_id');
    }
}
