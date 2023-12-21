<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statustables extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tabel(){
        return $this->belongsTo(Tabel::class, 'id_tabel', 'id');
    }
}
