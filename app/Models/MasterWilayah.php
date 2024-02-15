<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MasterWilayah extends Model
{
    use HasFactory;
    protected $table = 'master_wilayah';
    public $timestamps = false;

    public static function getMyWilayah()
    {
        if (auth()->user()->dinas->wilayah_fullcode == "7100000000") {
            # code...
            $kabs = MasterWilayah::where('kec', 'like', '000')
                ->get();
            $kecs = MasterWilayah::where('kab', 'not like', '00')
                ->where('kec', 'not like', '000')
                ->where('desa', 'like', '000')
                ->get();
            $desa = MasterWilayah::where('kab', 'not like', '00')
                ->where('kec', 'not like', '000')
                ->where('desa', 'not like', '000')
                ->get();
        } else {
            $kabs = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'like', '000')
                ->get();
            $kecs = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'not like', '000')
                ->where('desa', 'like', '000')
                ->get();
            $desa = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'not like', '000')
                ->where('desa', 'not like', '000')
                ->get();
        }
        $wilayah = [
            'kabs' => $kabs,
            'kecs' => $kecs,
            'desa' => $desa,
        ];
        return $wilayah;
    }

    public static function getDinasWilayah() {
        if (auth()->user()->dinas->wilayah_fullcode == "7100000000") {
            # code...
            $lists = MasterWilayah::pluck('wilayah_fullcode');
        } else {
            $lists = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)->pluck('wilayah_fullcode');
        }
        return $lists;
    }

    public static function getMyWilayahId()
    {
        if (auth()->user()->dinas->wilayah_fullcode == "7100000000") {
            # code...
            $kabs = MasterWilayah::where('kec', 'like', '000')
                ->pluck("wilayah_fullcode");
            $kecs = MasterWilayah::where('kab', 'not like', '00')
                ->where('kec', 'not like', '000')
                ->where('desa', 'like', '000')
                ->pluck("wilayah_fullcode");
            $desa = MasterWilayah::where('kab', 'not like', '00')
                ->where('kec', 'not like', '000')
                ->where('desa', 'not like', '000')
                ->pluck("wilayah_fullcode");
        } else {
            $kabs = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'like', '000')
                ->pluck("wilayah_fullcode");
            $kecs = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'not like', '000')
                ->where('desa', 'like', '000')
                ->pluck("wilayah_fullcode");
            $desa = MasterWilayah::where('kab', auth()->user()->dinas->wilayah->kab)
                ->where('kec', 'not like', '000')
                ->where('desa', 'not like', '000')
                ->pluck("wilayah_fullcode");
        }
        $wilayah = [
            'kabs' => $kabs,
            'kecs' => $kecs,
            'desa' => $desa,
        ];
        return $wilayah;
    }
}
