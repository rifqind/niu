<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catatan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;
    public function statustabel(){
        return $this->belongsTo(Statustables::class, 'id_statustabel', 'id');
    }
}
