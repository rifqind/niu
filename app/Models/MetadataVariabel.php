<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetadataVariabel extends Model
{
    use HasFactory;
    protected $table = 'metadata_variabel';
    public function tabel() {
        return $this->belongsTo(Tabel::class, 'id_tabel', 'id');
    }
}
