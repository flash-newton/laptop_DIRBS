<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'barcode',
        'description',
        'added_by',
        'status',
        'state'
    ];

    public function history(){
        return $this->hasMany(History::class,'device_id','id');
    }
}
