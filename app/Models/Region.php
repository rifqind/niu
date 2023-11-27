<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    public $timestamps = false;

    // public static function getMyRegion()
    // {
    //     if (auth()->user()->satker_id == 1){
    //         $region = Region::all();
    //     } else {
    //         $region = Region::where('satker_id', auth()->user()->satker_id)->get();
    //     }

    //     return $region;
    // }
}
