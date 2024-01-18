<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
    use HasFactory;
    protected $table = 'Notifikasi';
    protected $guarded = ['id'];
    public function tabel(){
        return $this->belongsTo(Tabel::class, 'id_tabel', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

}
