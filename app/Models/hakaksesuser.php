<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hakaksesuser extends Model
{
    use HasFactory;

    // protected $guarded  = ['id'];
    protected $fillable  = ['hakases','id'];
    protected $primayKey = 'id';
    protected $table = 'hakaksesusers';

public function userrole()
{
    $this->hasMany(User::class,'role');
}
}
