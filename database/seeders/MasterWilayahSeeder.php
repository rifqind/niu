<?php

namespace Database\Seeders;

use App\Models\MasterDesa;
use App\Models\MasterWilayah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterWilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $wilayah_data = array(
            0 =>
            array(
                'prov' => '71',
                'kab' => '00',
                'kec' => '000',
                'desa' => '000',
                'label' => 'PROVINSI SULAWESI UTARA',
            ),
            1 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW',
            ),
            2 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN MINAHASA',
            ),
            3 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN KEPULAUAN SANGIHE',
            ),
            4 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN KEPULAUAN TALAUD',
            ),
            5 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN MINAHASA SELATAN',
            ),
            6 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN MINAHASA UTARA',
            ),
            7 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
            ),
            8 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN SIAU TAGULANDANG BIARO',
            ),
            9 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN MINAHASA TENGGARA',
            ),
            10 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
            ),
            11 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
            ),
            12 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KOTA MANADO',
            ),
            13 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KOTA BITUNG',
            ),
            14 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KOTA TOMOHON',
            ),
            15 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '000',
                'desa' => '000',
                'label' => 'KOTA KOTAMOBAGU',
            ),
            16 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA BARAT',
            ),
            17 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA UTARA',
            ),
            18 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA TIMUR',
            ),
            19 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA TENGAH',
            ),
            20 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA TENGGARA',
            ),
            21 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '000',
                'label' => 'KECAMATAN DUMOGA',
            ),
            22 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN LOLAYAN',
            ),
            23 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '000',
                'label' => 'KECAMATAN PASSI BARAT',
            ),
            24 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '000',
                'label' => 'KECAMATAN PASSI TIMUR',
            ),
            25 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '000',
                'label' => 'KECAMATAN BILALANG',
            ),
            26 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '000',
                'label' => 'KECAMATAN POIGAR',
            ),
            27 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '000',
                'label' => 'KECAMATAN BOLAANG',
            ),
            28 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '000',
                'label' => 'KECAMATAN BOLAANG TIMUR',
            ),
            29 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '000',
                'label' => 'KECAMATAN LOLAK',
            ),
            30 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '000',
                'label' => 'KECAMATAN SANGTOMBOLANG',
            ),
            31 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '000',
                'label' => 'KECAMATAN LANGOWAN TIMUR',
            ),
            32 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '000',
                'label' => 'KECAMATAN LANGOWAN BARAT',
            ),
            33 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '000',
                'label' => 'KECAMATAN LANGOWAN SELATAN',
            ),
            34 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '000',
                'label' => 'KECAMATAN LANGOWAN UTARA',
            ),
            35 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '000',
                'label' => 'KECAMATAN TOMPASO',
            ),
            36 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '000',
                'label' => 'KECAMATAN TOMPASO BARAT',
            ),
            37 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '000',
                'label' => 'KECAMATAN KAWANGKOAN',
            ),
            38 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '000',
                'label' => 'KECAMATAN KAWANGKOAN BARAT',
            ),
            39 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '000',
                'label' => 'KECAMATAN KAWANGKOAN UTARA',
            ),
            40 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '000',
                'label' => 'KECAMATAN SONDER',
            ),
            41 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBARIRI',
            ),
            42 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBARIRI TIMUR',
            ),
            43 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '000',
                'label' => 'KECAMATAN PINELENG',
            ),
            44 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBULU',
            ),
            45 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '000',
                'label' => 'KECAMATAN MANDOLANG',
            ),
            46 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '000',
                'label' => 'KECAMATAN TONDANO BARAT',
            ),
            47 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '000',
                'label' => 'KECAMATAN TONDANO SELATAN',
            ),
            48 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '000',
                'label' => 'KECAMATAN REMBOKEN',
            ),
            49 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '000',
                'label' => 'KECAMATAN KAKAS',
            ),
            50 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '000',
                'label' => 'KECAMATAN KAKAS BARAT',
            ),
            51 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '000',
                'label' => 'KECAMATAN LEMBEAN TIMUR',
            ),
            52 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '000',
                'label' => 'KECAMATAN ERIS',
            ),
            53 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '000',
                'label' => 'KECAMATAN KOMBI',
            ),
            54 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '000',
                'label' => 'KECAMATAN TONDANO TIMUR',
            ),
            55 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '000',
                'label' => 'KECAMATAN TONDANO UTARA',
            ),
            56 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN MANGANITU SELATAN',
            ),
            57 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '000',
                'label' => 'KECAMATAN TATOARENG',
            ),
            58 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN TAMAKO',
            ),
            59 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN TABUKAN SELATAN',
            ),
            60 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '000',
                'label' => 'KECAMATAN TABUKAN SELATAN TENGAH',
            ),
            61 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '000',
                'label' => 'KECAMATAN TABUKAN SELATAN TENGGARA',
            ),
            62 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '000',
                'label' => 'KECAMATAN TABUKAN TENGAH',
            ),
            63 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '000',
                'label' => 'KECAMATAN MANGANITU',
            ),
            64 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '000',
                'label' => 'KECAMATAN TAHUNA',
            ),
            65 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '000',
                'label' => 'KECAMATAN TAHUNA TIMUR',
            ),
            66 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '000',
                'label' => 'KECAMATAN TAHUNA BARAT',
            ),
            67 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '000',
                'label' => 'KECAMATAN TABUKAN UTARA',
            ),
            68 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '000',
                'label' => 'KECAMATAN NUSA TABUKAN',
            ),
            69 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '102',
                'desa' => '000',
                'label' => 'KECAMATAN KEPULAUAN MARORE',
            ),
            70 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '000',
                'label' => 'KECAMATAN KENDAHE',
            ),
            71 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN KABARUAN',
            ),
            72 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '000',
                'label' => 'KECAMATAN DAMAU',
            ),
            73 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN LIRUNG',
            ),
            74 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN SALIBABU',
            ),
            75 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '000',
                'label' => 'KECAMATAN KALONGAN',
            ),
            76 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '000',
                'label' => 'KECAMATAN MORONGE',
            ),
            77 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN MELONGUANE',
            ),
            78 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '000',
                'label' => 'KECAMATAN MELONGUANE TIMUR',
            ),
            79 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN BEO',
            ),
            80 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '000',
                'label' => 'KECAMATAN BEO UTARA',
            ),
            81 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '000',
                'label' => 'KECAMATAN BEO SELATAN',
            ),
            82 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN RAINIS',
            ),
            83 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '000',
                'label' => 'KECAMATAN TAMPAN\'AMMA',
            ),
            84 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '000',
                'label' => 'KECAMATAN PULUTAN',
            ),
            85 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN ESSANG',
            ),
            86 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '000',
                'label' => 'KECAMATAN ESSANG SELATAN',
            ),
            87 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '000',
                'label' => 'KECAMATAN GEMEH',
            ),
            88 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '000',
                'label' => 'KECAMATAN NANUSA',
            ),
            89 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '081',
                'desa' => '000',
                'label' => 'KECAMATAN MIANGAS',
            ),
            90 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN MODOINDING',
            ),
            91 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN TOMPASO BARU',
            ),
            92 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN MAESAAN',
            ),
            93 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '000',
                'label' => 'KECAMATAN RANOYAPO',
            ),
            94 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '000',
                'label' => 'KECAMATAN MOTOLING',
            ),
            95 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '000',
                'label' => 'KECAMATAN KUMELEMBUAI',
            ),
            96 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '000',
                'label' => 'KECAMATAN MOTOLING BARAT',
            ),
            97 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '000',
                'label' => 'KECAMATAN MOTOLING TIMUR',
            ),
            98 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '000',
                'label' => 'KECAMATAN SINONSAYANG',
            ),
            99 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '000',
                'label' => 'KECAMATAN TENGA',
            ),
            100 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '000',
                'label' => 'KECAMATAN AMURANG',
            ),
            101 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '000',
                'label' => 'KECAMATAN AMURANG BARAT',
            ),
            102 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '000',
                'label' => 'KECAMATAN AMURANG TIMUR',
            ),
            103 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '000',
                'label' => 'KECAMATAN TARERAN',
            ),
            104 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '000',
                'label' => 'KECAMATAN SULUUN TARERAN',
            ),
            105 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '000',
                'label' => 'KECAMATAN TUMPAAN',
            ),
            106 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '000',
                'label' => 'KECAMATAN TATAPAAN',
            ),
            107 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN KEMA',
            ),
            108 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN KAUDITAN',
            ),
            109 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN AIRMADIDI',
            ),
            110 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN KALAWAT',
            ),
            111 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN DIMEMBE',
            ),
            112 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '000',
                'label' => 'KECAMATAN TALAWAAN',
            ),
            113 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN WORI',
            ),
            114 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '000',
                'label' => 'KECAMATAN LIKUPANG BARAT',
            ),
            115 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '000',
                'label' => 'KECAMATAN LIKUPANG TIMUR',
            ),
            116 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '000',
                'label' => 'KECAMATAN LIKUPANG SELATAN',
            ),
            117 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN SANGKUB',
            ),
            118 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN BINTAUNA',
            ),
            119 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN BOLANG ITANG TIMUR',
            ),
            120 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN BOLANG ITANG BARAT',
            ),
            121 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN KAIDIPANG',
            ),
            122 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN PINOGALUMAN',
            ),
            123 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN BIARO',
            ),
            124 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN TAGULANDANG SELATAN',
            ),
            125 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN TAGULANDANG',
            ),
            126 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN TAGULANDANG UTARA',
            ),
            127 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU BARAT SELATAN',
            ),
            128 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU TIMUR SELATAN',
            ),
            129 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU BARAT',
            ),
            130 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU TENGAH',
            ),
            131 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU TIMUR',
            ),
            132 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '000',
                'label' => 'KECAMATAN SIAU BARAT UTARA',
            ),
            133 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN RATATOTOK',
            ),
            134 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN PUSOMAEN',
            ),
            135 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN BELANG',
            ),
            136 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN RATAHAN',
            ),
            137 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '000',
                'label' => 'KECAMATAN PASAN',
            ),
            138 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '000',
                'label' => 'KECAMATAN RATAHAN TIMUR',
            ),
            139 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBATU',
            ),
            140 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBATU TIMUR',
            ),
            141 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '000',
                'label' => 'KECAMATAN TOMBATU UTARA',
            ),
            142 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '000',
                'label' => 'KECAMATAN TOULUAAN',
            ),
            143 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '000',
                'label' => 'KECAMATAN TOULUAAN SELATAN',
            ),
            144 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '000',
                'label' => 'KECAMATAN SILIAN RAYA',
            ),
            145 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN POSIGADAN',
            ),
            146 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '000',
                'label' => 'KECAMATAN TOMINI',
            ),
            147 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN BOLAANG UKI',
            ),
            148 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN HELUMO',
            ),
            149 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN PINOLOSIAN',
            ),
            150 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN PINOLOSIAN TENGAH',
            ),
            151 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN PINOLOSIAN TIMUR',
            ),
            152 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN NUANGAN',
            ),
            153 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '000',
                'label' => 'KECAMATAN MOTONGKAD',
            ),
            154 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN TUTUYAN',
            ),
            155 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN KOTABUNAN',
            ),
            156 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN MODAYAG',
            ),
            157 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '000',
                'label' => 'KECAMATAN MOOAT',
            ),
            158 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '000',
                'label' => 'KECAMATAN MODAYAG BARAT',
            ),
            159 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN MALALAYANG',
            ),
            160 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN SARIO',
            ),
            161 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN WANEA',
            ),
            162 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN WENANG',
            ),
            163 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '000',
                'label' => 'KECAMATAN TIKALA',
            ),
            164 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '000',
                'label' => 'KECAMATAN PAAL DUA',
            ),
            165 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN MAPANGET',
            ),
            166 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '000',
                'label' => 'KECAMATAN SINGKIL',
            ),
            167 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '000',
                'label' => 'KECAMATAN TUMINTING',
            ),
            168 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '000',
                'label' => 'KECAMATAN BUNAKEN',
            ),
            169 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'desa' => '000',
                'label' => 'KECAMATAN BUNAKEN KEPULAUAN',
            ),
            170 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN MADIDIR',
            ),
            171 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '000',
                'label' => 'KECAMATAN MATUARI',
            ),
            172 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '000',
                'label' => 'KECAMATAN GIRIAN',
            ),
            173 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN LEMBEH SELATAN',
            ),
            174 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '000',
                'label' => 'KECAMATAN LEMBEH UTARA',
            ),
            175 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN AERTEMBAGA',
            ),
            176 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '000',
                'label' => 'KECAMATAN MAESA',
            ),
            177 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN RANOWULU',
            ),
            178 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN TOMOHON SELATAN',
            ),
            179 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN TOMOHON TENGAH',
            ),
            180 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '000',
                'label' => 'KECAMATAN TOMOHON TIMUR',
            ),
            181 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '000',
                'label' => 'KECAMATAN TOMOHON BARAT',
            ),
            182 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN TOMOHON UTARA',
            ),
            183 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '000',
                'label' => 'KECAMATAN KOTAMOBAGU SELATAN',
            ),
            184 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '000',
                'label' => 'KECAMATAN KOTAMOBAGU TIMUR',
            ),
            185 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '000',
                'label' => 'KECAMATAN KOTAMOBAGU BARAT',
            ),
            186 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '000',
                'label' => 'KECAMATAN KOTAMOBAGU UTARA',
            ),
            187 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '001',
                'label' => 'DESA TORAUT',
            ),
            188 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '002',
                'label' => 'DESA MATAYANGAN',
            ),
            189 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '003',
                'label' => 'DESA UUWAN',
            ),
            190 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '004',
                'label' => 'DESA IKHWAN',
            ),
            191 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '005',
                'label' => 'DESA DOLODUO',
            ),
            192 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '006',
                'label' => 'DESA MEKARUO',
            ),
            193 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '007',
                'label' => 'DESA WANGGA BARU',
            ),
            194 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '008',
                'label' => 'DESA TORAUT UTARA',
            ),
            195 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '009',
                'label' => 'DESA DOLODUO I',
            ),
            196 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '010',
                'label' => 'DESA DOLODUO II',
            ),
            197 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '011',
                'label' => 'DESA DOLODUO III',
            ),
            198 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'desa' => '012',
                'label' => 'DESA TORAUT TENGAH',
            ),
            199 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '001',
                'label' => 'DESA TUMOKANG BARU',
            ),
            200 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '002',
                'label' => 'DESA MOPUGAD UTARA',
            ),
            201 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '003',
                'label' => 'DESA MOPUGAD SELATAN',
            ),
            202 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '004',
                'label' => 'DESA MOPUYA UTARA',
            ),
            203 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '005',
                'label' => 'DESA MOPUYA SELATAN',
            ),
            204 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '006',
                'label' => 'DESA DONDOMON',
            ),
            205 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '014',
                'label' => 'DESA MOPUGAD SELATAN I',
            ),
            206 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '015',
                'label' => 'DESA MOPUGAD UTARA II',
            ),
            207 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '016',
                'label' => 'DESA MOPUGAD UTARA I',
            ),
            208 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '017',
                'label' => 'DESA TUMOKANG TIMUR',
            ),
            209 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '018',
                'label' => 'DESA MOPUYA UTARA I',
            ),
            210 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '019',
                'label' => 'DESA MOPUYA UTARA II',
            ),
            211 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '020',
                'label' => 'DESA MOPUYA SELATAN I',
            ),
            212 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '021',
                'label' => 'DESA MOPUYA SELATAN II',
            ),
            213 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '022',
                'label' => 'DESA DONDOMON UTARA',
            ),
            214 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'desa' => '023',
                'label' => 'DESA DONDOMON SELATAN',
            ),
            215 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '001',
                'label' => 'DESA TONOM',
            ),
            216 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '002',
                'label' => 'DESA MOGOYUNGGUNG',
            ),
            217 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '003',
                'label' => 'KELURAHAN IMANDI',
            ),
            218 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '004',
                'label' => 'DESA PINONOBATUAN',
            ),
            219 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '005',
                'label' => 'DESA MODOMANG',
            ),
            220 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '006',
                'label' => 'DESA DUMOGA',
            ),
            221 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '007',
                'label' => 'DESA KEMBANG MERTHA',
            ),
            222 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '017',
                'label' => 'DESA DUMOGA II',
            ),
            223 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '018',
                'label' => 'DESA PINONOBATUAN BARAT',
            ),
            224 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '019',
                'label' => 'DESA MOGOYUNGGUNG II',
            ),
            225 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '020',
                'label' => 'DESA MOGOYUNGGUNG I',
            ),
            226 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '021',
                'label' => 'DESA AMERTHA SARI',
            ),
            227 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '022',
                'label' => 'DESA AMERTHA BUANA',
            ),
            228 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '023',
                'label' => 'DESA KEMBANG SARI',
            ),
            229 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '024',
                'label' => 'DESA DUMOGA EMPAT',
            ),
            230 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'desa' => '025',
                'label' => 'DESA DUMOGA TIGA',
            ),
            231 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '001',
                'label' => 'DESA KOSIO',
            ),
            232 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '002',
                'label' => 'DESA KINOMALIGAN',
            ),
            233 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '003',
                'label' => 'DESA IBOLIAN',
            ),
            234 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '004',
                'label' => 'DESA IBOLIAN I',
            ),
            235 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '005',
                'label' => 'DESA WERDHI AGUNG',
            ),
            236 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '006',
                'label' => 'DESA WERDHI AGUNG TIMUR',
            ),
            237 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '007',
                'label' => 'DESA WERDHI AGUNG UTARA',
            ),
            238 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '008',
                'label' => 'DESA WERDHI AGUNG SELATAN',
            ),
            239 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '009',
                'label' => 'DESA KOSIO TIMUR',
            ),
            240 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'desa' => '010',
                'label' => 'DESA KOSIO BARAT',
            ),
            241 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '001',
                'label' => 'DESA TAPADAKA I',
            ),
            242 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '002',
                'label' => 'DESA TAPADAKA UTARA',
            ),
            243 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '004',
                'label' => 'DESA KONAROM',
            ),
            244 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '007',
                'label' => 'DESA OSION',
            ),
            245 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '008',
                'label' => 'DESA DUMARA',
            ),
            246 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '009',
                'label' => 'DESA IKUNA',
            ),
            247 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '010',
                'label' => 'DESA BONAWANG',
            ),
            248 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '011',
                'label' => 'DESA TAPADAKA TIMUR',
            ),
            249 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '012',
                'label' => 'DESA KONAROM UTARA',
            ),
            250 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'desa' => '013',
                'label' => 'DESA KONAROM BARAT',
            ),
            251 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '001',
                'label' => 'DESA SINIYUNG',
            ),
            252 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '002',
                'label' => 'DESA SINIYUNG I',
            ),
            253 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '003',
                'label' => 'DESA BUMBUNGON',
            ),
            254 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '004',
                'label' => 'DESA SERASI',
            ),
            255 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '005',
                'label' => 'DESA MOTOTABIAN',
            ),
            256 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '006',
                'label' => 'DESA PONOMPIAAN',
            ),
            257 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '007',
                'label' => 'DESA PUSIAN',
            ),
            258 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '008',
                'label' => 'DESA KANAAN',
            ),
            259 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '009',
                'label' => 'DESA TORUAKAT',
            ),
            260 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '010',
                'label' => 'DESA DUMOGA I',
            ),
            261 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '011',
                'label' => 'DESA PUSIAN BARAT',
            ),
            262 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'desa' => '012',
                'label' => 'DESA PUSIAN SELATAN',
            ),
            263 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '001',
                'label' => 'DESA MOPUSI',
            ),
            264 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '002',
                'label' => 'DESA MATALI BARU',
            ),
            265 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '003',
                'label' => 'DESA BAKAN',
            ),
            266 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '004',
                'label' => 'DESA TANOYAN SELATAN',
            ),
            267 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '005',
                'label' => 'DESA TANOYAN UTARA',
            ),
            268 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA LOLAYAN',
            ),
            269 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '007',
                'label' => 'DESA TUNGOI II',
            ),
            270 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA TUNGOI I',
            ),
            271 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA TAPA AOG',
            ),
            272 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA ABAK',
            ),
            273 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA BOMBANON',
            ),
            274 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA MOPAIT',
            ),
            275 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '013',
                'label' => 'DESA KOPANDAKAN II',
            ),
            276 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'desa' => '014',
                'label' => 'DESA MENGKANG',
            ),
            277 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '001',
                'label' => 'DESA MUNTOI',
            ),
            278 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '002',
                'label' => 'DESA INUAI',
            ),
            279 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '003',
                'label' => 'DESA POYUYANAN',
            ),
            280 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '004',
                'label' => 'DESA LOBONG',
            ),
            281 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '005',
                'label' => 'DESA PASSI',
            ),
            282 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '006',
                'label' => 'DESA WANGGA',
            ),
            283 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '007',
                'label' => 'DESA OTAM',
            ),
            284 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '008',
                'label' => 'DESA BULUD',
            ),
            285 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '009',
                'label' => 'DESA BINTAU',
            ),
            286 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '010',
                'label' => 'DESA PASSI II',
            ),
            287 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '011',
                'label' => 'DESA MUNTOI TIMUR',
            ),
            288 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '012',
                'label' => 'DESA WANGGA I',
            ),
            289 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'desa' => '013',
                'label' => 'DESA OTAM BARAT',
            ),
            290 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '003',
                'label' => 'DESA PANGIAN',
            ),
            291 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '004',
                'label' => 'DESA POOPO',
            ),
            292 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '006',
                'label' => 'DESA MANEMBO',
            ),
            293 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '007',
                'label' => 'DESA SINSINGON',
            ),
            294 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '008',
                'label' => 'DESA MOBUYA',
            ),
            295 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '009',
                'label' => 'DESA INSIL',
            ),
            296 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '010',
                'label' => 'DESA INSIL BARU',
            ),
            297 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '011',
                'label' => 'DESA PANGIAN TENGAH',
            ),
            298 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '012',
                'label' => 'DESA PANGIAN BARAT',
            ),
            299 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '013',
                'label' => 'DESA POOPO BARAT',
            ),
            300 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '014',
                'label' => 'DESA POOPO SELATAN',
            ),
            301 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '015',
                'label' => 'DESA SINSINGON BARAT',
            ),
            302 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'desa' => '016',
                'label' => 'DESA SINSINGON TIMUR',
            ),
            303 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '001',
                'label' => 'DESA BILALANG III',
            ),
            304 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '002',
                'label' => 'DESA BILALANG IV',
            ),
            305 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '003',
                'label' => 'DESA TUDUAOG BARU',
            ),
            306 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '004',
                'label' => 'DESA TUDUAOG',
            ),
            307 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '005',
                'label' => 'DESA KOLINGANGAAN',
            ),
            308 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '006',
                'label' => 'DESA BILALANG III UTARA',
            ),
            309 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '007',
                'label' => 'DESA BILALANG BARU',
            ),
            310 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'desa' => '008',
                'label' => 'DESA APADO',
            ),
            311 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '001',
                'label' => 'DESA MARIRI DUA',
            ),
            312 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '002',
                'label' => 'DESA MARIRI LAMA',
            ),
            313 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '003',
                'label' => 'DESA MARIRI BARU',
            ),
            314 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '004',
                'label' => 'DESA NONAPAN DUA',
            ),
            315 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '005',
                'label' => 'DESA NONAPAN SATU',
            ),
            316 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '006',
                'label' => 'DESA WINERU',
            ),
            317 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '007',
                'label' => 'DESA GOGALUMAN',
            ),
            318 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '008',
                'label' => 'DESA TIBERIAS',
            ),
            319 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '009',
                'label' => 'DESA POIGAR II',
            ),
            320 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '010',
                'label' => 'DESA POIGAR',
            ),
            321 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '011',
                'label' => 'DESA POIGAR III',
            ),
            322 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '012',
                'label' => 'DESA POMOMAN',
            ),
            323 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '013',
                'label' => 'DESA NANASI',
            ),
            324 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '014',
                'label' => 'DESA MONDATONG',
            ),
            325 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '015',
                'label' => 'DESA MARIRI I',
            ),
            326 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '016',
                'label' => 'DESA NONAPAN BARU',
            ),
            327 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '017',
                'label' => 'DESA NANASI TIMUR',
            ),
            328 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '018',
                'label' => 'DESA TANJUNG MARIRI',
            ),
            329 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '019',
                'label' => 'DESA NONAPAN',
            ),
            330 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'desa' => '020',
                'label' => 'DESA MONDATONG BARU',
            ),
            331 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '001',
                'label' => 'DESA KOMANGAAN',
            ),
            332 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '002',
                'label' => 'DESA SOLIMANDUNGAN DUA',
            ),
            333 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '003',
                'label' => 'DESA SOLIMANDUNGAN SATU',
            ),
            334 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '004',
                'label' => 'DESA BANGOMOLUNOW',
            ),
            335 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '005',
                'label' => 'DESA LANGAGON',
            ),
            336 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '006',
                'label' => 'KELURAHAN INOBONTO SATU',
            ),
            337 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '007',
                'label' => 'DESA INOBONTO DUA',
            ),
            338 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '008',
                'label' => 'DESA INOBONTO',
            ),
            339 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '009',
                'label' => 'DESA SOLIMANDUNGAN BARU',
            ),
            340 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '010',
                'label' => 'DESA LANGAGON II',
            ),
            341 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'desa' => '011',
                'label' => 'DESA LANGAGON I',
            ),
            342 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '001',
                'label' => 'DESA AMBANG II',
            ),
            343 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '002',
                'label' => 'DESA AMBANG I',
            ),
            344 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '003',
                'label' => 'DESA TADOY',
            ),
            345 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '004',
                'label' => 'DESA TADOY I',
            ),
            346 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '005',
                'label' => 'DESA BOLAANG',
            ),
            347 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '006',
                'label' => 'DESA BANTIK',
            ),
            348 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '007',
                'label' => 'DESA LOLAN',
            ),
            349 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '008',
                'label' => 'DESA BOLAANG I',
            ),
            350 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'desa' => '009',
                'label' => 'DESA LOLAN II',
            ),
            351 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '001',
                'label' => 'DESA BUMBUNG',
            ),
            352 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '002',
                'label' => 'DESA BUNTALO',
            ),
            353 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '003',
                'label' => 'DESA TOTABUAN',
            ),
            354 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '004',
                'label' => 'DESA SOLOG',
            ),
            355 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '005',
                'label' => 'DESA TANDU',
            ),
            356 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '006',
                'label' => 'DESA TUYAT',
            ),
            357 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '007',
                'label' => 'DESA LALOW',
            ),
            358 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '008',
                'label' => 'DESA LOLAK',
            ),
            359 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '009',
                'label' => 'DESA MOTABANG',
            ),
            360 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '010',
                'label' => 'DESA MONGKOINIT',
            ),
            361 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '011',
                'label' => 'DESA PINOGALUMAN',
            ),
            362 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '012',
                'label' => 'DESA BATURAPA',
            ),
            363 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '013',
                'label' => 'DESA LABUAN UKI',
            ),
            364 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '014',
                'label' => 'DESA SAUK',
            ),
            365 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '015',
                'label' => 'DESA PINDOL',
            ),
            366 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '016',
                'label' => 'DESA PINDOLILI',
            ),
            367 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '017',
                'label' => 'DESA LOLAK TOMBOLANGO',
            ),
            368 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '018',
                'label' => 'DESA LOLAK II',
            ),
            369 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '019',
                'label' => 'DESA BATURAPA II',
            ),
            370 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '020',
                'label' => 'DESA BUNTALO TIMUR',
            ),
            371 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '021',
                'label' => 'DESA BUNTALO SELATAN',
            ),
            372 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '022',
                'label' => 'DESA DIAT',
            ),
            373 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '023',
                'label' => 'DESA PINOGALUMAN TIMUR',
            ),
            374 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '024',
                'label' => 'DESA PADANG LALOW',
            ),
            375 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '025',
                'label' => 'DESA DULANGON',
            ),
            376 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'desa' => '026',
                'label' => 'DESA MONGKOINIT BARAT',
            ),
            377 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '008',
                'label' => 'DESA PANGI',
            ),
            378 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '009',
                'label' => 'DESA DOMISIL MOONOW',
            ),
            379 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '010',
                'label' => 'DESA MAELANG',
            ),
            380 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '011',
                'label' => 'DESA LOLANAN',
            ),
            381 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '012',
                'label' => 'DESA BOLANGAT',
            ),
            382 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '013',
                'label' => 'DESA BABO',
            ),
            383 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '014',
                'label' => 'DESA AYONG',
            ),
            384 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '015',
                'label' => 'DESA CEMPAKA',
            ),
            385 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '018',
                'label' => 'DESA BATU MERAH',
            ),
            386 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '019',
                'label' => 'DESA PASIR PUTIH',
            ),
            387 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '020',
                'label' => 'DESA BOLANGAT TIMUR',
            ),
            388 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'desa' => '021',
                'label' => 'DESA PANGI TIMUR',
            ),
            389 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '005',
                'label' => 'DESA TEEP',
            ),
            390 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '007',
                'label' => 'DESA WOLAANG',
            ),
            391 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '008',
                'label' => 'DESA WALEURE',
            ),
            392 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '009',
                'label' => 'DESA AMONGENA II',
            ),
            393 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '010',
                'label' => 'DESA AMONGENA I',
            ),
            394 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '011',
                'label' => 'DESA KARONDORAN',
            ),
            395 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '012',
                'label' => 'DESA SUMARAYAR',
            ),
            396 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'desa' => '013',
                'label' => 'DESA AMONGENA III',
            ),
            397 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '003',
                'label' => 'DESA TOUNELET',
            ),
            398 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '004',
                'label' => 'DESA KOYAWAS',
            ),
            399 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '005',
                'label' => 'DESA WALEWANGKO',
            ),
            400 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '006',
                'label' => 'DESA NOONGAN',
            ),
            401 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '007',
                'label' => 'DESA RARINGIS',
            ),
            402 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '008',
                'label' => 'DESA AMPRENG',
            ),
            403 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '009',
                'label' => 'DESA PASLATEN',
            ),
            404 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '010',
                'label' => 'DESA KOPIWANGKER',
            ),
            405 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '011',
                'label' => 'DESA LOWIAN',
            ),
            406 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '014',
                'label' => 'DESA TUMARATAS',
            ),
            407 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '015',
                'label' => 'DESA TUMARATAS DUA',
            ),
            408 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '016',
                'label' => 'DESA NOONGAN DUA',
            ),
            409 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '017',
                'label' => 'DESA NOONGAN TIGA',
            ),
            410 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '018',
                'label' => 'DESA RARANON',
            ),
            411 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '019',
                'label' => 'DESA RARINGIS SELATAN',
            ),
            412 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'desa' => '020',
                'label' => 'DESA RARINGIS UTARA',
            ),
            413 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '001',
                'label' => 'DESA RUMBIA',
            ),
            414 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '002',
                'label' => 'DESA TEMBOAN',
            ),
            415 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '003',
                'label' => 'DESA PALAMBA',
            ),
            416 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '004',
                'label' => 'DESA ATEP',
            ),
            417 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '005',
                'label' => 'DESA MANEMBO',
            ),
            418 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '006',
                'label' => 'DESA WINEBETAN',
            ),
            419 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '007',
                'label' => 'DESA KAAYURAN ATAS',
            ),
            420 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '008',
                'label' => 'DESA KAAYURAN BAWAH',
            ),
            421 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '009',
                'label' => 'DESA KAWATAK',
            ),
            422 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'desa' => '010',
                'label' => 'DESA ATEP SATU',
            ),
            423 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '001',
                'label' => 'DESA WALANTAKAN',
            ),
            424 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '002',
                'label' => 'DESA TARAITAK',
            ),
            425 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '003',
                'label' => 'DESA TORAGET',
            ),
            426 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '004',
                'label' => 'DESA KARUMENGA',
            ),
            427 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '005',
                'label' => 'DESA TEMPANG',
            ),
            428 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '006',
                'label' => 'DESA TEMPANG DUA',
            ),
            429 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '007',
                'label' => 'DESA TEMPANG TIGA',
            ),
            430 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'desa' => '008',
                'label' => 'DESA TARAITAK I',
            ),
            431 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '004',
                'label' => 'DESA KAMANGA',
            ),
            432 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '005',
                'label' => 'DESA TEMBER',
            ),
            433 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '006',
                'label' => 'DESA LIBA',
            ),
            434 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '007',
                'label' => 'DESA SENDANGAN',
            ),
            435 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '008',
                'label' => 'DESA TALIKURAN',
            ),
            436 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '010',
                'label' => 'DESA TEMPOK',
            ),
            437 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '011',
                'label' => 'DESA TOLOK',
            ),
            438 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '013',
                'label' => 'DESA KAMANGA DUA',
            ),
            439 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '018',
                'label' => 'DESA TEMPOK SELATAN',
            ),
            440 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'desa' => '019',
                'label' => 'DESA TOLOK SATU',
            ),
            441 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '001',
                'label' => 'DESA PINABETENGAN',
            ),
            442 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '002',
                'label' => 'DESA TONSEWER',
            ),
            443 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '003',
                'label' => 'DESA TOUURE',
            ),
            444 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '004',
                'label' => 'DESA TOMPASO DUA',
            ),
            445 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '005',
                'label' => 'DESA PINABETENGAN UTARA',
            ),
            446 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '006',
                'label' => 'DESA TONSEWER SELATAN',
            ),
            447 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '007',
                'label' => 'DESA TOUURE DUA',
            ),
            448 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '008',
                'label' => 'DESA PINABETENGAN SELATAN',
            ),
            449 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '009',
                'label' => 'DESA TOMPASO II UTARA',
            ),
            450 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'desa' => '010',
                'label' => 'DESA PINAESAAN',
            ),
            451 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '010',
                'label' => 'KELURAHAN SENDANGAN TENGAH',
            ),
            452 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '012',
                'label' => 'KELURAHAN KINALI',
            ),
            453 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '013',
                'label' => 'DESA TONDEGESAN',
            ),
            454 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '015',
                'label' => 'DESA KANONANG TIGA',
            ),
            455 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '025',
                'label' => 'KELURAHAN SENDANGAN SELATAN',
            ),
            456 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '026',
                'label' => 'KELURAHAN SENDANGAN',
            ),
            457 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '027',
                'label' => 'KELURAHAN UNER SATU',
            ),
            458 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '028',
                'label' => 'KELURAHAN KINALI SATU',
            ),
            459 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '029',
                'label' => 'DESA TONDEGESAN SATU',
            ),
            460 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'desa' => '030',
                'label' => 'DESA TONDEGESAN DUA',
            ),
            461 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '001',
                'label' => 'DESA RANOLAMBOT',
            ),
            462 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '002',
                'label' => 'DESA TOMBASIAN ATAS',
            ),
            463 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '003',
                'label' => 'DESA KANONANG DUA',
            ),
            464 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '004',
                'label' => 'DESA KANONANG EMPAT',
            ),
            465 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '005',
                'label' => 'DESA KANONANG LIMA',
            ),
            466 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '006',
                'label' => 'DESA KANONANG SATU',
            ),
            467 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '007',
                'label' => 'DESA TOMBASIAN ATAS SATU',
            ),
            468 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '008',
                'label' => 'DESA TOMBASIAN BAWAH',
            ),
            469 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '009',
                'label' => 'DESA KAYUUWI SATU',
            ),
            470 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'desa' => '010',
                'label' => 'DESA KAYUUWI',
            ),
            471 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '001',
                'label' => 'KELURAHAN TALIKURAN BARAT',
            ),
            472 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '002',
                'label' => 'KELURAHAN TALIKURAN',
            ),
            473 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '003',
                'label' => 'KELURAHAN TALIKURAN UTARA',
            ),
            474 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '004',
                'label' => 'DESA KIAWA SATU',
            ),
            475 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '005',
                'label' => 'DESA KIAWA SATU BARAT',
            ),
            476 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '006',
                'label' => 'DESA KIAWA SATU UTARA',
            ),
            477 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '007',
                'label' => 'DESA KIAWA DUA',
            ),
            478 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '008',
                'label' => 'DESA KIAWA DUA BARAT',
            ),
            479 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '009',
                'label' => 'DESA KIAWA DUA TIMUR',
            ),
            480 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'desa' => '010',
                'label' => 'KELURAHAN UNER',
            ),
            481 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '001',
                'label' => 'DESA TIMBUKAR',
            ),
            482 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '002',
                'label' => 'DESA TINCEP',
            ),
            483 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '003',
                'label' => 'DESA KAUNERAN',
            ),
            484 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '004',
                'label' => 'DESA SENDANGAN',
            ),
            485 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '005',
                'label' => 'DESA KOLONGAN ATAS',
            ),
            486 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '006',
                'label' => 'DESA LEILEM',
            ),
            487 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '007',
                'label' => 'DESA TOUNELET',
            ),
            488 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '008',
                'label' => 'DESA TALIKURAN',
            ),
            489 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '009',
                'label' => 'DESA RAMBUNAN',
            ),
            490 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '010',
                'label' => 'DESA SAWANGAN',
            ),
            491 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '011',
                'label' => 'DESA KOLONGAN ATAS DUA',
            ),
            492 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '012',
                'label' => 'DESA LEILEM DUA',
            ),
            493 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '013',
                'label' => 'DESA LEILEM TIGA',
            ),
            494 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '014',
                'label' => 'DESA KAUNERAN SATU',
            ),
            495 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '015',
                'label' => 'DESA SENDANGAN I',
            ),
            496 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '016',
                'label' => 'DESA KOLONGAN ATAS I',
            ),
            497 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '017',
                'label' => 'DESA TOUNELET SATU',
            ),
            498 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '018',
                'label' => 'DESA TALIKURAN SATU',
            ),
            499 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'desa' => '019',
                'label' => 'DESA RAMBUNAN AMIAN',
            ),
            500 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '001',
                'label' => 'DESA PINASUNGKULAN',
            ),
            501 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '002',
                'label' => 'DESA KUMU',
            ),
            502 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '003',
                'label' => 'DESA TELING',
            ),
            503 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '004',
                'label' => 'DESA POOPOH',
            ),
            504 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '005',
                'label' => 'DESA RANOWANGKO',
            ),
            505 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '006',
                'label' => 'DESA SENDUK',
            ),
            506 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '010',
                'label' => 'DESA SARANI MATANI',
            ),
            507 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '011',
                'label' => 'DESA BORGO',
            ),
            508 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '012',
                'label' => 'DESA TAMBALA',
            ),
            509 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'desa' => '014',
                'label' => 'DESA MOKUPA',
            ),
            510 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '001',
                'label' => 'DESA RANOTONGKOR',
            ),
            511 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '002',
                'label' => 'DESA LOLAH SATU',
            ),
            512 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '003',
                'label' => 'DESA LOLAH DUA',
            ),
            513 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '004',
                'label' => 'DESA LEMOH',
            ),
            514 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '005',
                'label' => 'DESA LEMOH TIMUR',
            ),
            515 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '006',
                'label' => 'DESA LEMOH BARAT',
            ),
            516 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '007',
                'label' => 'DESA RANOTONGKOR TIMUR',
            ),
            517 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '008',
                'label' => 'DESA LOLAH TIGA',
            ),
            518 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '009',
                'label' => 'DESA LOLAH',
            ),
            519 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'desa' => '010',
                'label' => 'DESA LEMOH UNER',
            ),
            520 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '002',
                'label' => 'DESA WAREMBUNGAN',
            ),
            521 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '003',
                'label' => 'DESA PINELENG DUA',
            ),
            522 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '004',
                'label' => 'DESA KALI',
            ),
            523 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '011',
                'label' => 'DESA PINELENG SATU',
            ),
            524 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '012',
                'label' => 'DESA SEA',
            ),
            525 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '018',
                'label' => 'DESA SEA I',
            ),
            526 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '019',
                'label' => 'DESA SEA II',
            ),
            527 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '020',
                'label' => 'DESA WINANGUN ATAS',
            ),
            528 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '027',
                'label' => 'DESA SEA MITRA',
            ),
            529 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '028',
                'label' => 'DESA SEA TUMPENGAN',
            ),
            530 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '029',
                'label' => 'DESA PINELENG DUA INDAH',
            ),
            531 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '030',
                'label' => 'DESA LOTTA',
            ),
            532 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '031',
                'label' => 'DESA PINELENG SATU TIMUR',
            ),
            533 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'desa' => '032',
                'label' => 'DESA KALI SELATAN',
            ),
            534 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '001',
                'label' => 'DESA KEMBES DUA',
            ),
            535 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '002',
                'label' => 'DESA KEMBES SATU',
            ),
            536 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '003',
                'label' => 'DESA TOMBULUAN',
            ),
            537 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '004',
                'label' => 'DESA KAMANGTA',
            ),
            538 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '005',
                'label' => 'DESA SAWANGAN',
            ),
            539 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '006',
                'label' => 'DESA KOKA',
            ),
            540 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '007',
                'label' => 'DESA SULUAN',
            ),
            541 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '008',
                'label' => 'DESA RUMENGKOR',
            ),
            542 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '009',
                'label' => 'DESA TIKELA',
            ),
            543 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '010',
                'label' => 'DESA RUMENGKOR SATU',
            ),
            544 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'desa' => '011',
                'label' => 'DESA RUMENGKOR DUA',
            ),
            545 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '001',
                'label' => 'DESA AGOTEY',
            ),
            546 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '002',
                'label' => 'DESA KOHA',
            ),
            547 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '003',
                'label' => 'DESA TATELI WERU',
            ),
            548 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '004',
                'label' => 'DESA TATELI',
            ),
            549 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '005',
                'label' => 'DESA KALASEY DUA',
            ),
            550 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '006',
                'label' => 'DESA KALASEY SATU',
            ),
            551 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '007',
                'label' => 'DESA TATELI SATU',
            ),
            552 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '008',
                'label' => 'DESA TATELI DUA',
            ),
            553 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '009',
                'label' => 'DESA TATELI TIGA',
            ),
            554 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '010',
                'label' => 'DESA KOHA TIMUR',
            ),
            555 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '011',
                'label' => 'DESA KOHA BARAT',
            ),
            556 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'desa' => '012',
                'label' => 'DESA KOHA SELATAN',
            ),
            557 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '007',
                'label' => 'KELURAHAN MASARANG',
            ),
            558 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '008',
                'label' => 'KELURAHAN TUUTU',
            ),
            559 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '009',
                'label' => 'KELURAHAN ROONG',
            ),
            560 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '010',
                'label' => 'KELURAHAN RINEGETAN',
            ),
            561 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '011',
                'label' => 'KELURAHAN TOUNKURAMBER',
            ),
            562 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '012',
                'label' => 'KELURAHAN WAWALINTOUAN',
            ),
            563 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '013',
                'label' => 'KELURAHAN REREWOKAN',
            ),
            564 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '014',
                'label' => 'KELURAHAN WATULAMBOT',
            ),
            565 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'desa' => '015',
                'label' => 'KELURAHAN WEWELEN',
            ),
            566 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '001',
                'label' => 'KELURAHAN URONGO',
            ),
            567 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '002',
                'label' => 'KELURAHAN PELELOAN',
            ),
            568 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '003',
                'label' => 'KELURAHAN TOUNSARU',
            ),
            569 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '004',
                'label' => 'KELURAHAN KOYA',
            ),
            570 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '005',
                'label' => 'KELURAHAN TATAARAN SATU',
            ),
            571 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '006',
                'label' => 'KELURAHAN TATAARAN PATAR',
            ),
            572 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '007',
                'label' => 'KELURAHAN TATAARAN DUA',
            ),
            573 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'desa' => '008',
                'label' => 'KELURAHAN MAESA UNIMA',
            ),
            574 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '001',
                'label' => 'DESA PULUTAN',
            ),
            575 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '002',
                'label' => 'DESA SINUIAN',
            ),
            576 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '003',
                'label' => 'DESA KAIMA',
            ),
            577 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '004',
                'label' => 'DESA PAREPEY',
            ),
            578 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '005',
                'label' => 'DESA KASURATAN',
            ),
            579 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '006',
                'label' => 'DESA SENDANGAN',
            ),
            580 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '007',
                'label' => 'DESA TIMU',
            ),
            581 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '008',
                'label' => 'DESA TAMPUSU',
            ),
            582 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '009',
                'label' => 'DESA TALIKURAN',
            ),
            583 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '010',
                'label' => 'DESA PASLATEN',
            ),
            584 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'desa' => '011',
                'label' => 'DESA LELEKO',
            ),
            585 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '004',
                'label' => 'DESA KAYUWATU',
            ),
            586 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '005',
                'label' => 'DESA WINERU',
            ),
            587 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '006',
                'label' => 'DESA RINONDOR',
            ),
            588 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '014',
                'label' => 'DESA TOUNELET',
            ),
            589 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '015',
                'label' => 'DESA TALIKURAN',
            ),
            590 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '016',
                'label' => 'DESA PAHALETEN',
            ),
            591 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '017',
                'label' => 'DESA SENDANGAN',
            ),
            592 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '018',
                'label' => 'DESA PASLATEN',
            ),
            593 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '019',
                'label' => 'DESA KAWENG',
            ),
            594 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '020',
                'label' => 'DESA TOULIMEMBET',
            ),
            595 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '021',
                'label' => 'DESA MAHEMBANG',
            ),
            596 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '022',
                'label' => 'DESA TUMPAAN',
            ),
            597 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'desa' => '023',
                'label' => 'DESA MAKALELON',
            ),
            598 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '001',
                'label' => 'DESA BUKITTINGGI',
            ),
            599 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '002',
                'label' => 'DESA WAILANG',
            ),
            600 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '003',
                'label' => 'DESA SIMBEL',
            ),
            601 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '004',
                'label' => 'DESA TOULIANG',
            ),
            602 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '005',
                'label' => 'DESA WASIAN',
            ),
            603 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '006',
                'label' => 'DESA KALAWIRAN',
            ),
            604 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '007',
                'label' => 'DESA PANASEN',
            ),
            605 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '008',
                'label' => 'DESA TOTOLAN',
            ),
            606 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '009',
                'label' => 'DESA TOUNTIMOMOR',
            ),
            607 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'desa' => '010',
                'label' => 'DESA PASSO',
            ),
            608 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '001',
                'label' => 'DESA KALEOSAN',
            ),
            609 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '002',
                'label' => 'DESA KAROR',
            ),
            610 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '003',
                'label' => 'DESA WATULANEY',
            ),
            611 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '004',
                'label' => 'DESA KAYUROYA',
            ),
            612 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '005',
                'label' => 'DESA ATEP OKI',
            ),
            613 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '006',
                'label' => 'DESA KAPATARAN',
            ),
            614 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '007',
                'label' => 'DESA SERETAN',
            ),
            615 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '008',
                'label' => 'DESA PARENTEK',
            ),
            616 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '009',
                'label' => 'DESA KAPATARAN SATU',
            ),
            617 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '010',
                'label' => 'DESA SERETAN TIMU',
            ),
            618 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'desa' => '011',
                'label' => 'DESA WATULANEY AMIAN',
            ),
            619 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '001',
                'label' => 'DESA TELAP',
            ),
            620 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '002',
                'label' => 'DESA WATUMEA',
            ),
            621 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '003',
                'label' => 'DESA ERIS',
            ),
            622 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '004',
                'label' => 'DESA MAUMBI',
            ),
            623 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '005',
                'label' => 'DESA TANDENGAN',
            ),
            624 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '006',
                'label' => 'DESA RANOMERUT',
            ),
            625 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '007',
                'label' => 'DESA TOULIANG OKI',
            ),
            626 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'desa' => '008',
                'label' => 'DESA TANDENGAN SATU',
            ),
            627 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '001',
                'label' => 'DESA TULAP',
            ),
            628 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '002',
                'label' => 'DESA KAYU BESI',
            ),
            629 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '003',
                'label' => 'DESA LALUMPE',
            ),
            630 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '004',
                'label' => 'DESA RANOWANGKO DUA',
            ),
            631 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '005',
                'label' => 'DESA KOMBI',
            ),
            632 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '006',
                'label' => 'DESA SAWANGAN',
            ),
            633 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '007',
                'label' => 'DESA KOLONGAN',
            ),
            634 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '008',
                'label' => 'DESA RERER',
            ),
            635 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '009',
                'label' => 'DESA MAKALISUNG',
            ),
            636 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '010',
                'label' => 'DESA KALAWIRAN',
            ),
            637 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '011',
                'label' => 'DESA KINALEOSAN',
            ),
            638 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '012',
                'label' => 'DESA KOLONGAN SATU',
            ),
            639 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'desa' => '013',
                'label' => 'DESA RERER SATU',
            ),
            640 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '001',
                'label' => 'KELURAHAN TOULOUR',
            ),
            641 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '002',
                'label' => 'KELURAHAN KINIAR',
            ),
            642 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '003',
                'label' => 'KELURAHAN TALER',
            ),
            643 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '004',
                'label' => 'KELURAHAN LININGAAN',
            ),
            644 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '005',
                'label' => 'KELURAHAN KATINGGOLAN',
            ),
            645 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '006',
                'label' => 'KELURAHAN KENDIS',
            ),
            646 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '007',
                'label' => 'KELURAHAN WENGKOL',
            ),
            647 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '008',
                'label' => 'KELURAHAN RANOWANGKO',
            ),
            648 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '009',
                'label' => 'KELURAHAN LUAAN',
            ),
            649 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '013',
                'label' => 'KELURAHAN PAPAKELAN',
            ),
            650 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'desa' => '014',
                'label' => 'KELURAHAN MAKALONSOUW',
            ),
            651 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '001',
                'label' => 'KELURAHAN SUMALANGKA',
            ),
            652 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '002',
                'label' => 'KELURAHAN SASARAN',
            ),
            653 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '003',
                'label' => 'DESA KEMBUAN',
            ),
            654 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '004',
                'label' => 'DESA TONSEA LAMA',
            ),
            655 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '005',
                'label' => 'KELURAHAN KAMPUNG JAWA',
            ),
            656 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '006',
                'label' => 'KELURAHAN WULAUAN',
            ),
            657 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '007',
                'label' => 'KELURAHAN MARAWAS',
            ),
            658 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'desa' => '008',
                'label' => 'DESA KEMBUAN SATU',
            ),
            659 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA BATUNDERANG',
            ),
            660 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA NGALIPAENG DUA',
            ),
            661 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA NGALIPAENG SATU',
            ),
            662 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '009',
                'label' => 'DESA SOWAENG',
            ),
            663 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '010',
                'label' => 'DESA LAPANGO',
            ),
            664 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '011',
                'label' => 'DESA LAINE',
            ),
            665 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '012',
                'label' => 'DESA KALUWATU',
            ),
            666 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '013',
                'label' => 'DESA MAWIRA',
            ),
            667 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '014',
                'label' => 'DESA LAPEPAHE',
            ),
            668 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '015',
                'label' => 'DESA PINDANG',
            ),
            669 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '016',
                'label' => 'DESA LEHIMI TARIANG',
            ),
            670 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'desa' => '017',
                'label' => 'DESA LAPANGO I',
            ),
            671 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '001',
                'label' => 'DESA PARA',
            ),
            672 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '002',
                'label' => 'DESA MAHENGETANG',
            ),
            673 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '003',
                'label' => 'DESA KAHAKITANG',
            ),
            674 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '004',
                'label' => 'DESA KALAMA',
            ),
            675 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '005',
                'label' => 'DESA DALAKO BEMBANAHE',
            ),
            676 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '006',
                'label' => 'DESA TALEKO BATUSAIKI',
            ),
            677 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'desa' => '007',
                'label' => 'DESA PARA I',
            ),
            678 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '001',
                'label' => 'DESA MAHUMU',
            ),
            679 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA MAKALEKUHE',
            ),
            680 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA BEBU',
            ),
            681 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA KALINDA',
            ),
            682 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA PANANARU',
            ),
            683 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA DAGHO',
            ),
            684 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA MENGGAWA I',
            ),
            685 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '008',
                'label' => 'DESA POKOL',
            ),
            686 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA BALANE',
            ),
            687 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA BINALA',
            ),
            688 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '011',
                'label' => 'DESA NAGHA SATU',
            ),
            689 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '012',
                'label' => 'DESA NAGHA DUA',
            ),
            690 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '013',
                'label' => 'DESA ULUNGPELIANG',
            ),
            691 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '014',
                'label' => 'DESA LELIPANG',
            ),
            692 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '015',
                'label' => 'DESA MENGGAWA II',
            ),
            693 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '016',
                'label' => 'DESA KALAMA DARAT',
            ),
            694 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '017',
                'label' => 'DESA MAHUMU I',
            ),
            695 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '018',
                'label' => 'DESA MAHUMU II',
            ),
            696 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '019',
                'label' => 'DESA KALINDA I',
            ),
            697 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'desa' => '020',
                'label' => 'DESA HESANG',
            ),
            698 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA MANDOI',
            ),
            699 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA MALAMENGGU',
            ),
            700 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA BIRAHI',
            ),
            701 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA BINEBAS',
            ),
            702 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA PALARENG',
            ),
            703 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '013',
                'label' => 'DESA BATUWINGKUNG',
            ),
            704 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '014',
                'label' => 'DESA LESABE',
            ),
            705 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '015',
                'label' => 'DESA BENTUNG',
            ),
            706 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '016',
                'label' => 'DESA SIMUENG',
            ),
            707 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '017',
                'label' => 'DESA BUKIDE',
            ),
            708 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '018',
                'label' => 'DESA LAOTONGAN',
            ),
            709 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '019',
                'label' => 'DESA BULO',
            ),
            710 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '020',
                'label' => 'DESA LESABE I',
            ),
            711 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'desa' => '021',
                'label' => 'DESA KALAGHENG',
            ),
            712 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '001',
                'label' => 'DESA LEHUPU',
            ),
            713 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '002',
                'label' => 'DESA TAMBUNG',
            ),
            714 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '003',
                'label' => 'DESA BEENG',
            ),
            715 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '004',
                'label' => 'DESA SALURANG',
            ),
            716 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '005',
                'label' => 'DESA HANGKE',
            ),
            717 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '006',
                'label' => 'DESA BOWONE',
            ),
            718 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '007',
                'label' => 'DESA BEENG LAUT',
            ),
            719 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '008',
                'label' => 'DESA TENDA',
            ),
            720 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'desa' => '009',
                'label' => 'DESA AHA PATUNG',
            ),
            721 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '001',
                'label' => 'DESA PINTARENG',
            ),
            722 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '002',
                'label' => 'DESA BASAUH',
            ),
            723 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '003',
                'label' => 'DESA TUMALEDE',
            ),
            724 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '004',
                'label' => 'DESA DALOKAWENG',
            ),
            725 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '005',
                'label' => 'DESA SAMPAKANG',
            ),
            726 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'desa' => '006',
                'label' => 'DESA MALISADE',
            ),
            727 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '001',
                'label' => 'DESA BOWONGKALI',
            ),
            728 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '002',
                'label' => 'DESA KULUR II',
            ),
            729 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '003',
                'label' => 'DESA KULUR I',
            ),
            730 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '004',
                'label' => 'DESA BIRA',
            ),
            731 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '005',
                'label' => 'DESA KUMA',
            ),
            732 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '006',
                'label' => 'DESA BUNGALAWANG',
            ),
            733 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '007',
                'label' => 'DESA MIULU',
            ),
            734 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '008',
                'label' => 'DESA GUNUNG',
            ),
            735 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '009',
                'label' => 'DESA TALENGEN',
            ),
            736 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '010',
                'label' => 'DESA BIRU',
            ),
            737 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '011',
                'label' => 'DESA RENDINGAN',
            ),
            738 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '012',
                'label' => 'DESA TARIANGBARU',
            ),
            739 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '013',
                'label' => 'DESA SENSONG',
            ),
            740 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '014',
                'label' => 'DESA PALAHANAENG',
            ),
            741 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '015',
                'label' => 'DESA TIMBELANG',
            ),
            742 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '016',
                'label' => 'DESA PALELANGEN',
            ),
            743 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '017',
                'label' => 'DESA MALUENG',
            ),
            744 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'desa' => '018',
                'label' => 'DESA KUMA I',
            ),
            745 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '001',
                'label' => 'DESA BARANGKALANG',
            ),
            746 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '002',
                'label' => 'DESA BELENGANG',
            ),
            747 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '003',
                'label' => 'DESA LEBO',
            ),
            748 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '004',
                'label' => 'DESA SESIWUNG',
            ),
            749 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '005',
                'label' => 'DESA KAUHIS',
            ),
            750 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '006',
                'label' => 'DESA KARATUNG II',
            ),
            751 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '007',
                'label' => 'DESA KARATUNG I',
            ),
            752 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '008',
                'label' => 'DESA MALA',
            ),
            753 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '009',
                'label' => 'DESA MANUMPITAENG',
            ),
            754 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '010',
                'label' => 'DESA TALOARANE',
            ),
            755 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '011',
                'label' => 'DESA BARANGKA',
            ),
            756 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '012',
                'label' => 'DESA NAHEPESE',
            ),
            757 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '013',
                'label' => 'DESA TAWOALI',
            ),
            758 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '014',
                'label' => 'DESA HIUNG',
            ),
            759 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '015',
                'label' => 'DESA BAKALAENG',
            ),
            760 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '016',
                'label' => 'DESA PINEBENTENGAN',
            ),
            761 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '017',
                'label' => 'DESA TALOARANE I',
            ),
            762 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'desa' => '018',
                'label' => 'DESA BENGKA',
            ),
            763 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '007',
                'label' => 'KELURAHAN SAWANG BENDAR',
            ),
            764 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '008',
                'label' => 'KELURAHAN APENG SEMBEKA',
            ),
            765 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '009',
                'label' => 'KELURAHAN MAHENA',
            ),
            766 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '010',
                'label' => 'KELURAHAN SOATALOARA l',
            ),
            767 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '011',
                'label' => 'KELURAHAN SOATALOARA ll',
            ),
            768 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '012',
                'label' => 'KELURAHAN BUNGALAWANG',
            ),
            769 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '013',
                'label' => 'KELURAHAN MANENTE',
            ),
            770 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'desa' => '014',
                'label' => 'KELURAHAN SANTIAGO',
            ),
            771 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '001',
                'label' => 'KELURAHAN LESA',
            ),
            772 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '002',
                'label' => 'KELURAHAN BATULEWEHE',
            ),
            773 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '003',
                'label' => 'KELURAHAN TIDORE',
            ),
            774 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '004',
                'label' => 'KELURAHAN TONA I',
            ),
            775 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '005',
                'label' => 'KELURAHAN DUMUHUNG',
            ),
            776 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '006',
                'label' => 'KELURAHAN ENENGPAHEMBANG',
            ),
            777 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '007',
                'label' => 'KELURAHAN TAPUANG',
            ),
            778 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'desa' => '008',
                'label' => 'KELURAHAN TONA II',
            ),
            779 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '001',
                'label' => 'KELURAHAN PANANEKENG',
            ),
            780 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '002',
                'label' => 'KELURAHAN ANGGES',
            ),
            781 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '003',
                'label' => 'KELURAHAN MITUNG',
            ),
            782 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '004',
                'label' => 'KELURAHAN BEHA',
            ),
            783 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '005',
                'label' => 'KELURAHAN AKEMBAWI',
            ),
            784 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'desa' => '006',
                'label' => 'KELURAHAN BEHA BARU',
            ),
            785 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '001',
                'label' => 'DESA LENGANENG',
            ),
            786 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '002',
                'label' => 'DESA TAROLANG',
            ),
            787 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '003',
                'label' => 'DESA TOLA',
            ),
            788 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '004',
                'label' => 'DESA BOWONGKULU',
            ),
            789 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '005',
                'label' => 'DESA PETTA',
            ),
            790 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '006',
                'label' => 'DESA BENGKETANG',
            ),
            791 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '007',
                'label' => 'DESA KALURAE',
            ),
            792 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '008',
                'label' => 'DESA UTAURANO',
            ),
            793 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '009',
                'label' => 'DESA NAHASAHABE',
            ),
            794 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '010',
                'label' => 'DESA BEHA',
            ),
            795 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '011',
                'label' => 'DESA KALEKUBE',
            ),
            796 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '012',
                'label' => 'DESA MALA',
            ),
            797 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '013',
                'label' => 'DESA BAHU',
            ),
            798 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '014',
                'label' => 'DESA KALASUGE',
            ),
            799 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '019',
                'label' => 'DESA PUSUNGE',
            ),
            800 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '020',
                'label' => 'DESA MOADE',
            ),
            801 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '021',
                'label' => 'DESA PETTA TIMUR',
            ),
            802 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '022',
                'label' => 'DESA PETTA SELATAN',
            ),
            803 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '023',
                'label' => 'DESA PETTA BARAT',
            ),
            804 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '024',
                'label' => 'DESA LIKUANG',
            ),
            805 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '025',
                'label' => 'DESA RAKU',
            ),
            806 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '026',
                'label' => 'DESA KALEKUBE I',
            ),
            807 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '027',
                'label' => 'DESA BOWONGKULU I',
            ),
            808 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'desa' => '028',
                'label' => 'DESA NAHA I',
            ),
            809 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '001',
                'label' => 'DESA NUSA',
            ),
            810 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '002',
                'label' => 'DESA NANEDAKELE',
            ),
            811 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '003',
                'label' => 'DESA BUKIDE',
            ),
            812 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '004',
                'label' => 'DESA BUKIDE TIMUR',
            ),
            813 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'desa' => '005',
                'label' => 'DESA NANUSA',
            ),
            814 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '102',
                'desa' => '001',
                'label' => 'DESA KAWIO',
            ),
            815 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '102',
                'desa' => '002',
                'label' => 'DESA MARORE',
            ),
            816 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '102',
                'desa' => '003',
                'label' => 'DESA MATUTUANG',
            ),
            817 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '001',
                'label' => 'DESA KENDAHE DUA',
            ),
            818 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '002',
                'label' => 'DESA KENDAHE SATU',
            ),
            819 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '003',
                'label' => 'DESA TALAWID',
            ),
            820 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '004',
                'label' => 'DESA TARIANGLAMA',
            ),
            821 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '005',
                'label' => 'DESA PEMPALARAENG',
            ),
            822 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '006',
                'label' => 'DESA MOHONGSAWANG',
            ),
            823 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '007',
                'label' => 'DESA LIPAENG',
            ),
            824 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'desa' => '008',
                'label' => 'DESA KAWALUSO',
            ),
            825 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA PANTUGE',
            ),
            826 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA KABARUAN',
            ),
            827 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA MANGARAN',
            ),
            828 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA KORDAKEL',
            ),
            829 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '011',
                'label' => 'DESA BULUDE',
            ),
            830 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '012',
                'label' => 'DESA RARANGE',
            ),
            831 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '013',
                'label' => 'DESA TADUNA',
            ),
            832 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '014',
                'label' => 'DESA KABARUAN TIMUR',
            ),
            833 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '015',
                'label' => 'DESA PANTUGE TIMUR',
            ),
            834 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '016',
                'label' => 'DESA BULUDE SELATAN',
            ),
            835 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'desa' => '017',
                'label' => 'DESA PANULAN',
            ),
            836 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '001',
                'label' => 'DESA PERET',
            ),
            837 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '002',
                'label' => 'DESA TADUWALE',
            ),
            838 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '003',
                'label' => 'DESA DAMAU',
            ),
            839 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '004',
                'label' => 'DESA AKAS',
            ),
            840 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '005',
                'label' => 'DESA BIRANG',
            ),
            841 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '006',
                'label' => 'DESA IGHIK',
            ),
            842 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '007',
                'label' => 'DESA DAMAU BAWONE',
            ),
            843 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'desa' => '008',
                'label' => 'DESA AKAS BALANE',
            ),
            844 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '005',
                'label' => 'KELURAHAN LIRUNG',
            ),
            845 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '007',
                'label' => 'DESA SEREH',
            ),
            846 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA MUSI',
            ),
            847 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '011',
                'label' => 'KELURAHAN LIRUNG I',
            ),
            848 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA TALOLANG',
            ),
            849 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '014',
                'label' => 'KELURAHAN LIRUNG MATANE',
            ),
            850 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'desa' => '019',
                'label' => 'DESA SEREH I',
            ),
            851 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '001',
                'label' => 'DESA BITUNURIS',
            ),
            852 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '002',
                'label' => 'DESA SALIBABU',
            ),
            853 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '003',
                'label' => 'DESA BALANG',
            ),
            854 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '004',
                'label' => 'DESA SALIBABU UTARA',
            ),
            855 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '005',
                'label' => 'DESA DALUM',
            ),
            856 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'desa' => '006',
                'label' => 'DESA BITUNURIS SELATAN',
            ),
            857 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '001',
                'label' => 'DESA ALUDE',
            ),
            858 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '002',
                'label' => 'DESA KALONGAN',
            ),
            859 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '003',
                'label' => 'DESA KALONGAN SELATAN',
            ),
            860 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '004',
                'label' => 'DESA KALONGAN UTARA',
            ),
            861 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'desa' => '005',
                'label' => 'DESA MUSI I',
            ),
            862 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '001',
                'label' => 'DESA MORONGE SELATAN',
            ),
            863 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '002',
                'label' => 'DESA MORONGE SELATAN I',
            ),
            864 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '003',
                'label' => 'DESA MORONGE SELATAN II',
            ),
            865 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '004',
                'label' => 'DESA MORONGE',
            ),
            866 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '005',
                'label' => 'DESA MORONGE I',
            ),
            867 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'desa' => '006',
                'label' => 'DESA MORONGE II',
            ),
            868 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '001',
                'label' => 'KELURAHAN MELONGUANE',
            ),
            869 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '002',
                'label' => 'DESA MALA',
            ),
            870 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '003',
                'label' => 'DESA SAWANG',
            ),
            871 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '004',
                'label' => 'DESA TARUN',
            ),
            872 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '005',
                'label' => 'DESA KIAMA',
            ),
            873 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '008',
                'label' => 'DESA AMBELA',
            ),
            874 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '010',
                'label' => 'KELURAHAN MELONGUANE BARAT',
            ),
            875 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '011',
                'label' => 'KELURAHAN MELONGUANE TIMUR',
            ),
            876 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '012',
                'label' => 'DESA KIAMA BARAT',
            ),
            877 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '013',
                'label' => 'DESA TARUN SELATAN',
            ),
            878 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '015',
                'label' => 'DESA MALA TIMUR',
            ),
            879 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '016',
                'label' => 'DESA SAWANG UTARA',
            ),
            880 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'desa' => '017',
                'label' => 'DESA MAREDAREN KIAMA',
            ),
            881 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '001',
                'label' => 'DESA TULE',
            ),
            882 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '002',
                'label' => 'DESA TULE UTARA',
            ),
            883 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '003',
                'label' => 'DESA TULE TENGAH',
            ),
            884 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '004',
                'label' => 'DESA BOWOMBARU',
            ),
            885 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '005',
                'label' => 'DESA BOWOMBARU TENGAH',
            ),
            886 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'desa' => '006',
                'label' => 'DESA BOWOMBARU UTARA',
            ),
            887 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '006',
                'label' => 'KELURAHAN BEO',
            ),
            888 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA BANTIK',
            ),
            889 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '012',
                'label' => 'DESA BANTIK LAMA',
            ),
            890 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '013',
                'label' => 'KELURAHAN BEO BARAT',
            ),
            891 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '014',
                'label' => 'KELURAHAN BEO TIMUR',
            ),
            892 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'desa' => '015',
                'label' => 'DESA BENGEL',
            ),
            893 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '001',
                'label' => 'KELURAHAN MAKATARA',
            ),
            894 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '002',
                'label' => 'KELURAHAN MAKATARA TIMUR',
            ),
            895 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '003',
                'label' => 'DESA LOBBO',
            ),
            896 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '004',
                'label' => 'DESA LOBBO I',
            ),
            897 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '005',
                'label' => 'DESA RAE',
            ),
            898 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '006',
                'label' => 'DESA RAE SELATAN',
            ),
            899 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '007',
                'label' => 'DESA AWIT',
            ),
            900 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'desa' => '008',
                'label' => 'DESA AWIT SELATAN',
            ),
            901 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '001',
                'label' => 'DESA PAMPALU',
            ),
            902 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '002',
                'label' => 'DESA RUSSOH',
            ),
            903 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '003',
                'label' => 'DESA NIAMPAK',
            ),
            904 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '004',
                'label' => 'DESA NIAMPAK UTARA',
            ),
            905 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '005',
                'label' => 'DESA TAROHAN',
            ),
            906 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '006',
                'label' => 'DESA TAROHAN SELATAN',
            ),
            907 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'desa' => '007',
                'label' => 'DESA MATAHIT',
            ),
            908 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA NUNU',
            ),
            909 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA RAINIS',
            ),
            910 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA BANTANE',
            ),
            911 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA TABANG',
            ),
            912 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '008',
                'label' => 'DESA ALO',
            ),
            913 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA ALO UTARA',
            ),
            914 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA PERANGEN',
            ),
            915 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '011',
                'label' => 'DESA NUNU UTARA',
            ),
            916 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '012',
                'label' => 'DESA RAINIS BATU PENGA',
            ),
            917 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '013',
                'label' => 'DESA BANTANE UTARA',
            ),
            918 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'desa' => '014',
                'label' => 'DESA TABANG BARAT',
            ),
            919 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '001',
                'label' => 'DESA TUABATU',
            ),
            920 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '002',
                'label' => 'DESA BINALANG',
            ),
            921 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '003',
                'label' => 'DESA RIUNG',
            ),
            922 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '004',
                'label' => 'DESA DAPALAN',
            ),
            923 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '005',
                'label' => 'DESA AMMAT',
            ),
            924 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '006',
                'label' => 'DESA GANALO',
            ),
            925 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '007',
                'label' => 'DESA DAPIHE',
            ),
            926 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '008',
                'label' => 'DESA TUABATU BARAT',
            ),
            927 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '009',
                'label' => 'DESA BINALANG SELATAN',
            ),
            928 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '010',
                'label' => 'DESA RIUNG UTARA',
            ),
            929 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'desa' => '011',
                'label' => 'DESA AMMAT SELATAN',
            ),
            930 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '001',
                'label' => 'DESA PULUTAN',
            ),
            931 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '002',
                'label' => 'DESA PULUTAN UTARA',
            ),
            932 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '003',
                'label' => 'DESA PULUTAN SELATAN',
            ),
            933 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '004',
                'label' => 'DESA DARAN',
            ),
            934 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'desa' => '005',
                'label' => 'DESA DARAN UTARA',
            ),
            935 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA ESSANG',
            ),
            936 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '007',
                'label' => 'DESA LALUE',
            ),
            937 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA BULUDE',
            ),
            938 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA ESSANG SELATAN',
            ),
            939 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA LALUE TENGAH',
            ),
            940 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA LALUE UTARA',
            ),
            941 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA BULUDE SELATAN',
            ),
            942 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'desa' => '016',
                'label' => 'DESA MARIRIK',
            ),
            943 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '001',
                'label' => 'DESA SAMBUARA',
            ),
            944 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '002',
                'label' => 'DESA SAMBUARA SATU',
            ),
            945 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '003',
                'label' => 'DESA ENSEM I',
            ),
            946 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '004',
                'label' => 'DESA ENSEM TIMUR',
            ),
            947 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '005',
                'label' => 'DESA BATUMBALANGO',
            ),
            948 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '006',
                'label' => 'DESA AMBIA',
            ),
            949 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '007',
                'label' => 'DESA AMBIA UTARA',
            ),
            950 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '008',
                'label' => 'DESA KUMA',
            ),
            951 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'desa' => '009',
                'label' => 'DESA KUMA SELATAN',
            ),
            952 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '001',
                'label' => 'DESA MAMAHAN',
            ),
            953 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '002',
                'label' => 'DESA BAMBUNG',
            ),
            954 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '003',
                'label' => 'DESA TATURAN',
            ),
            955 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '004',
                'label' => 'DESA GEMEH',
            ),
            956 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '005',
                'label' => 'DESA ARANGKAA',
            ),
            957 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '006',
                'label' => 'DESA MALAT',
            ),
            958 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '007',
                'label' => 'DESA APAN',
            ),
            959 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '008',
                'label' => 'DESA TARUAN',
            ),
            960 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '009',
                'label' => 'DESA BANNADA',
            ),
            961 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '010',
                'label' => 'DESA LAHU',
            ),
            962 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '011',
                'label' => 'DESA MAMAHAN BARAT',
            ),
            963 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '012',
                'label' => 'DESA BAMBUNG TIMUR',
            ),
            964 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '013',
                'label' => 'DESA GEMEH RAAMATA',
            ),
            965 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '014',
                'label' => 'DESA GEMEH WANTANE',
            ),
            966 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'desa' => '015',
                'label' => 'DESA MALAT UTARA',
            ),
            967 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '001',
                'label' => 'DESA KAKOROTAN',
            ),
            968 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '002',
                'label' => 'DESA MARAMPIT',
            ),
            969 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '003',
                'label' => 'DESA LALUHE',
            ),
            970 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '004',
                'label' => 'DESA DAMPULIS',
            ),
            971 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '005',
                'label' => 'DESA KARATUNG',
            ),
            972 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '007',
                'label' => 'DESA MARAMPIT TIMUR',
            ),
            973 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '008',
                'label' => 'DESA DAMPULIS SELATAN',
            ),
            974 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '009',
                'label' => 'DESA KARATUNG TENGAH',
            ),
            975 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'desa' => '010',
                'label' => 'DESA KARATUNG SELATAN',
            ),
            976 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '081',
                'desa' => '001',
                'label' => 'DESA MIANGAS',
            ),
            977 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA KAKENTURAN',
            ),
            978 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA LINELEAN',
            ),
            979 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA PINASUNGKULAN',
            ),
            980 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA MAKAARUYEN',
            ),
            981 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA PALELON',
            ),
            982 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA WULURMAATUS',
            ),
            983 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA MOKOBANG',
            ),
            984 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA KAKENTURAN BARAT',
            ),
            985 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA PINASUNGKULAN UTARA',
            ),
            986 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '009',
                'label' => 'DESA RARAATEAN',
            ),
            987 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA SION',
            ),
            988 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '011',
                'label' => 'DESA TOMPASO BARU DUA',
            ),
            989 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA KINALAWIRAN',
            ),
            990 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '013',
                'label' => 'DESA TOMPASO BARU SATU',
            ),
            991 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '014',
                'label' => 'DESA PINAESAAN',
            ),
            992 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '015',
                'label' => 'DESA TOROUT',
            ),
            993 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '016',
                'label' => 'DESA LINDANGAN',
            ),
            994 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '017',
                'label' => 'DESA KAROWA',
            ),
            995 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '018',
                'label' => 'DESA LIANDOK',
            ),
            996 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'desa' => '019',
                'label' => 'UPT/SPT UPT LIANDOK',
            ),
            997 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '001',
                'label' => 'DESA TAMBELANG',
            ),
            998 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '002',
                'label' => 'DESA KINAMANG',
            ),
            999 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '003',
                'label' => 'DESA LININGAAN',
            ),
            1000 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '004',
                'label' => 'DESA BOJONEGORO',
            ),
            1001 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '005',
                'label' => 'DESA KINAWERUAN',
            ),
            1002 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '006',
                'label' => 'DESA TUMANI',
            ),
            1003 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '007',
                'label' => 'DESA LOWIAN',
            ),
            1004 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '008',
                'label' => 'DESA TEMBOAN',
            ),
            1005 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '009',
                'label' => 'DESA KINAMANG SATU',
            ),
            1006 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '010',
                'label' => 'DESA TUMANI UTARA',
            ),
            1007 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '011',
                'label' => 'DESA TUMANI SELATAN',
            ),
            1008 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'desa' => '012',
                'label' => 'DESA LOWIAN SATU',
            ),
            1009 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '002',
                'label' => 'DESA POOPO',
            ),
            1010 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '003',
                'label' => 'DESA RANOIAPO',
            ),
            1011 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '004',
                'label' => 'DESA PONTAK',
            ),
            1012 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '005',
                'label' => 'DESA MOPOLO',
            ),
            1013 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '006',
                'label' => 'DESA POWALUTAN',
            ),
            1014 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '007',
                'label' => 'DESA BERINGIN',
            ),
            1015 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '009',
                'label' => 'DESA LOMPAD',
            ),
            1016 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '010',
                'label' => 'DESA LOMPAD BARU',
            ),
            1017 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '011',
                'label' => 'DESA PONTAK SATU',
            ),
            1018 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '012',
                'label' => 'DESA POOPO BARAT',
            ),
            1019 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '013',
                'label' => 'DESA POOPO UTARA',
            ),
            1020 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'desa' => '014',
                'label' => 'DESA MOPOLO ESA',
            ),
            1021 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '008',
                'label' => 'DESA LALUMPE',
            ),
            1022 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '009',
                'label' => 'DESA RAANAN LAMA',
            ),
            1023 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '010',
                'label' => 'DESA MOTOLING DUA',
            ),
            1024 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '011',
                'label' => 'DESA MOTOLING SATU',
            ),
            1025 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '012',
                'label' => 'DESA MOTOLING MAWALE',
            ),
            1026 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '013',
                'label' => 'DESA MOTOLING',
            ),
            1027 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'desa' => '014',
                'label' => 'DESA PICUAN BARU',
            ),
            1028 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '001',
                'label' => 'DESA MALOLA I',
            ),
            1029 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '002',
                'label' => 'DESA MALOLA',
            ),
            1030 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '003',
                'label' => 'DESA MAKASILI',
            ),
            1031 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '004',
                'label' => 'DESA KUMELEMBUAI ATAS',
            ),
            1032 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '005',
                'label' => 'DESA KUMELEMBUAI',
            ),
            1033 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '006',
                'label' => 'DESA KUMELEMBUAI I',
            ),
            1034 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '012',
                'label' => 'DESA KUMELEMBUAI II',
            ),
            1035 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'desa' => '013',
                'label' => 'DESA LOLOMBULAN MAKASILI',
            ),
            1036 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '001',
                'label' => 'DESA TOYOPON',
            ),
            1037 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '002',
                'label' => 'DESA KEROIT',
            ),
            1038 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '003',
                'label' => 'DESA RAANAN BARU I',
            ),
            1039 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '004',
                'label' => 'DESA RAANAN BARU',
            ),
            1040 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '005',
                'label' => 'DESA RAANAN BARU II',
            ),
            1041 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '006',
                'label' => 'DESA TONDEI SATU',
            ),
            1042 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '007',
                'label' => 'DESA TONDEI',
            ),
            1043 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'desa' => '008',
                'label' => 'DESA TONDEI DUA',
            ),
            1044 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '001',
                'label' => 'DESA PICUAN',
            ),
            1045 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '002',
                'label' => 'DESA PICUAN SATU',
            ),
            1046 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '003',
                'label' => 'DESA WANGA',
            ),
            1047 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '004',
                'label' => 'DESA WANGA  AMONGENA',
            ),
            1048 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '005',
                'label' => 'DESA TOKIN',
            ),
            1049 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '006',
                'label' => 'DESA TOKIN BARU',
            ),
            1050 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '007',
                'label' => 'DESA KARIMBOW TALIKURAN',
            ),
            1051 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'desa' => '008',
                'label' => 'DESA KARIMBOW',
            ),
            1052 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '001',
                'label' => 'DESA DURIAN',
            ),
            1053 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '002',
                'label' => 'DESA POIGAR II',
            ),
            1054 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '003',
                'label' => 'DESA POIGAR I',
            ),
            1055 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '004',
                'label' => 'DESA TANAMON',
            ),
            1056 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '005',
                'label' => 'DESA AERGALE',
            ),
            1057 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '006',
                'label' => 'DESA ONGKAW II',
            ),
            1058 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '007',
                'label' => 'DESA ONGKAW I',
            ),
            1059 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '008',
                'label' => 'DESA TINIAWANGKO',
            ),
            1060 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '009',
                'label' => 'DESA BOYONG PANTE',
            ),
            1061 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '010',
                'label' => 'DESA BLONGKO',
            ),
            1062 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '011',
                'label' => 'DESA TANAMON UTARA',
            ),
            1063 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '012',
                'label' => 'DESA ONGKAW TIGA',
            ),
            1064 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'desa' => '013',
                'label' => 'DESA BOYONG PANTE DUA',
            ),
            1065 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '011',
                'label' => 'DESA BOYONG ATAS',
            ),
            1066 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '012',
                'label' => 'DESA PAKUURE III',
            ),
            1067 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '013',
                'label' => 'DESA PAKUURE II',
            ),
            1068 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '014',
                'label' => 'DESA PAKUURE I',
            ),
            1069 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '015',
                'label' => 'DESA SAPA',
            ),
            1070 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '016',
                'label' => 'DESA PAKUWERU',
            ),
            1071 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '017',
                'label' => 'DESA TENGA',
            ),
            1072 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '018',
                'label' => 'DESA RADEY',
            ),
            1073 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '019',
                'label' => 'DESA TAWAANG',
            ),
            1074 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '024',
                'label' => 'DESA MOLINOW',
            ),
            1075 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '025',
                'label' => 'DESA PAKUURE TINANIAN',
            ),
            1076 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '026',
                'label' => 'DESA PAKUURE KINAMANG',
            ),
            1077 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '027',
                'label' => 'DESA PAKUURE',
            ),
            1078 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '028',
                'label' => 'DESA PAKUWERU UTARA',
            ),
            1079 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '029',
                'label' => 'DESA SAPA BARAT',
            ),
            1080 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '030',
                'label' => 'DESA SAPA TIMUR',
            ),
            1081 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '031',
                'label' => 'DESA TAWAANG TIMUR',
            ),
            1082 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'desa' => '032',
                'label' => 'DESA TAWAANG BARAT',
            ),
            1083 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '001',
                'label' => 'KELURAHAN BUYUNGON',
            ),
            1084 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '002',
                'label' => 'KELURAHAN RANOYAPO',
            ),
            1085 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '003',
                'label' => 'KELURAHAN UWURAN SATU',
            ),
            1086 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '004',
                'label' => 'KELURAHAN UWURAN DUA',
            ),
            1087 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '005',
                'label' => 'KELURAHAN LEWET',
            ),
            1088 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '006',
                'label' => 'DESA RANOKETANG TUA',
            ),
            1089 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '007',
                'label' => 'KELURAHAN BITUNG',
            ),
            1090 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'desa' => '008',
                'label' => 'DESA KILOMETER TIGA',
            ),
            1091 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '001',
                'label' => 'DESA PONDOS',
            ),
            1092 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '002',
                'label' => 'DESA ELUSAN',
            ),
            1093 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '003',
                'label' => 'DESA TEWASEN',
            ),
            1094 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '004',
                'label' => 'DESA TEEP',
            ),
            1095 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '005',
                'label' => 'DESA KAPITU',
            ),
            1096 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '006',
                'label' => 'KELURAHAN KAWANGKOAN BAWAH',
            ),
            1097 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '007',
                'label' => 'KELURAHAN RUMOONG BAWAH',
            ),
            1098 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '008',
                'label' => 'DESA DESA RUMOONG BAWAH',
            ),
            1099 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '009',
                'label' => 'DESA WAKAN',
            ),
            1100 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'desa' => '010',
                'label' => 'DESA TEEP TRANS',
            ),
            1101 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '001',
                'label' => 'KELURAHAN RANOMEA',
            ),
            1102 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '002',
                'label' => 'KELURAHAN PONDANG',
            ),
            1103 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '003',
                'label' => 'DESA PINALING',
            ),
            1104 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '004',
                'label' => 'DESA KOTA MENARA',
            ),
            1105 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '005',
                'label' => 'DESA MALIKU',
            ),
            1106 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '006',
                'label' => 'DESA RITEY',
            ),
            1107 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '007',
                'label' => 'DESA MALENOS BARU',
            ),
            1108 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '008',
                'label' => 'DESA LOPANA',
            ),
            1109 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '009',
                'label' => 'DESA LOPANA SATU',
            ),
            1110 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'desa' => '010',
                'label' => 'DESA MALIKU SATU',
            ),
            1111 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '001',
                'label' => 'DESA KANEYAN',
            ),
            1112 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '002',
                'label' => 'DESA KORENG',
            ),
            1113 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '003',
                'label' => 'DESA TUMALUNTUNG',
            ),
            1114 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '004',
                'label' => 'DESA LANSOT',
            ),
            1115 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '005',
                'label' => 'DESA RUMOONG ATAS',
            ),
            1116 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '006',
                'label' => 'DESA WUWUK',
            ),
            1117 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '007',
                'label' => 'DESA PINAMORONGAN',
            ),
            1118 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '010',
                'label' => 'DESA WIAU LAPI',
            ),
            1119 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '014',
                'label' => 'DESA RUMOONG ATAS DUA',
            ),
            1120 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '015',
                'label' => 'DESA TUMALUNTUNG SATU',
            ),
            1121 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '016',
                'label' => 'DESA WUWUK BARAT',
            ),
            1122 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '017',
                'label' => 'DESA WIAU LAPI BARAT',
            ),
            1123 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'desa' => '018',
                'label' => 'DESA LANSOT TIMUR',
            ),
            1124 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '001',
                'label' => 'DESA KAPOYA',
            ),
            1125 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '002',
                'label' => 'DESA PINAPALANGKOW',
            ),
            1126 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '003',
                'label' => 'DESA SULUUN DUA',
            ),
            1127 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '004',
                'label' => 'DESA SULUUN EMPAT',
            ),
            1128 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '005',
                'label' => 'DESA SULUUN SATU',
            ),
            1129 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '006',
                'label' => 'DESA SULUUN TIGA',
            ),
            1130 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '007',
                'label' => 'DESA TALAITAD',
            ),
            1131 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '008',
                'label' => 'DESA KAPOYA SATU',
            ),
            1132 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'desa' => '009',
                'label' => 'DESA TALAITAD UTARA',
            ),
            1133 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '001',
                'label' => 'DESA TUMPAAN',
            ),
            1134 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '002',
                'label' => 'DESA TUMPAAN SATU',
            ),
            1135 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '003',
                'label' => 'DESA MATANI',
            ),
            1136 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '004',
                'label' => 'DESA POPONTOLEN',
            ),
            1137 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '005',
                'label' => 'DESA LELEMA',
            ),
            1138 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '006',
                'label' => 'DESA TANGKUNEY',
            ),
            1139 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '007',
                'label' => 'DESA MUNTE',
            ),
            1140 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '008',
                'label' => 'DESA TUMPAAN BARU',
            ),
            1141 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '009',
                'label' => 'DESA TUMPAAN DUA',
            ),
            1142 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'desa' => '010',
                'label' => 'DESA MATANI SATU',
            ),
            1143 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '001',
                'label' => 'DESA SULU',
            ),
            1144 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '002',
                'label' => 'DESA PASLATEN',
            ),
            1145 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '003',
                'label' => 'DESA BAJO',
            ),
            1146 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '004',
                'label' => 'DESA POPARENG',
            ),
            1147 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '005',
                'label' => 'DESA WAWONTULAP',
            ),
            1148 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '006',
                'label' => 'DESA WAWONA',
            ),
            1149 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '007',
                'label' => 'DESA SONDAKEN',
            ),
            1150 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '008',
                'label' => 'DESA RAP-RAP',
            ),
            1151 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '009',
                'label' => 'DESA PUNGKOL',
            ),
            1152 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '010',
                'label' => 'DESA PASLATEN SATU',
            ),
            1153 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'desa' => '011',
                'label' => 'DESA ARAKAN',
            ),
            1154 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA WALEO',
            ),
            1155 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA LILANG',
            ),
            1156 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA LANSOT',
            ),
            1157 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA KEMA III',
            ),
            1158 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA KEMA II',
            ),
            1159 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA KEMA I',
            ),
            1160 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA TONTALETE',
            ),
            1161 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA TONTELETE ROK ROK',
            ),
            1162 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA WALEO DUA',
            ),
            1163 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA WATUDAMBO',
            ),
            1164 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA KAUDITAN DUA',
            ),
            1165 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '011',
                'label' => 'DESA KAUDITAN SATU',
            ),
            1166 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA KAWILEI',
            ),
            1167 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '013',
                'label' => 'DESA TREMAN',
            ),
            1168 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '014',
                'label' => 'DESA KAIMA',
            ),
            1169 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '015',
                'label' => 'DESA KAREGESAN',
            ),
            1170 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '016',
                'label' => 'DESA KAASAR',
            ),
            1171 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '017',
                'label' => 'DESA LEMBEAN',
            ),
            1172 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '018',
                'label' => 'DESA PASLATEN',
            ),
            1173 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '019',
                'label' => 'DESA TUMALUNTUNG',
            ),
            1174 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'desa' => '020',
                'label' => 'DESA WATUDAMBO DUA',
            ),
            1175 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '004',
                'label' => 'DESA TANGGARI',
            ),
            1176 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '006',
                'label' => 'DESA SAMPIRI',
            ),
            1177 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '007',
                'label' => 'DESA SAWANGAN',
            ),
            1178 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '008',
                'label' => 'KELURAHAN AIRMADIDI BAWAH',
            ),
            1179 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '009',
                'label' => 'KELURAHAN AIRMADIDI ATAS',
            ),
            1180 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '010',
                'label' => 'KELURAHAN SARONGSONG SATU',
            ),
            1181 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '011',
                'label' => 'KELURAHAN SARONGSONG DUA',
            ),
            1182 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '012',
                'label' => 'KELURAHAN RAP-RAP',
            ),
            1183 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'desa' => '013',
                'label' => 'KELURAHAN SUKUR',
            ),
            1184 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '001',
                'label' => 'DESA SUWAAN',
            ),
            1185 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '002',
                'label' => 'DESA KOLONGAN',
            ),
            1186 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '003',
                'label' => 'DESA KAWANGKOAN',
            ),
            1187 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA KALEOSAN',
            ),
            1188 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA KUWIL',
            ),
            1189 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA WATUTUMOU',
            ),
            1190 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA MAUMBI',
            ),
            1191 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA KOLONGAN TETEMPANGAN',
            ),
            1192 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '009',
                'label' => 'DESA KAWANGKOAN BARU',
            ),
            1193 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '010',
                'label' => 'DESA KALAWAT',
            ),
            1194 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '011',
                'label' => 'DESA WATUTUMOU II',
            ),
            1195 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'desa' => '012',
                'label' => 'DESA WATUTUMOU III',
            ),
            1196 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA MATUNGKAS',
            ),
            1197 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA LAIKIT',
            ),
            1198 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA DIMEMBE',
            ),
            1199 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA KLABAT',
            ),
            1200 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA WARUKAPAS',
            ),
            1201 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA TETEY',
            ),
            1202 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '011',
                'label' => 'DESA TATELU',
            ),
            1203 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '012',
                'label' => 'DESA PINILIH',
            ),
            1204 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '013',
                'label' => 'DESA TATELU RONDOR',
            ),
            1205 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '014',
                'label' => 'DESA WASIAN',
            ),
            1206 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'desa' => '015',
                'label' => 'DESA LUMPIAS',
            ),
            1207 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '001',
                'label' => 'DESA TALAWAAN',
            ),
            1208 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '002',
                'label' => 'DESA TUMBOHON',
            ),
            1209 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '003',
                'label' => 'DESA KOLONGAN',
            ),
            1210 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '004',
                'label' => 'DESA MAPANGET',
            ),
            1211 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '005',
                'label' => 'DESA WINETIN',
            ),
            1212 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '006',
                'label' => 'DESA PATOKAAN',
            ),
            1213 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '007',
                'label' => 'DESA WUSA',
            ),
            1214 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '008',
                'label' => 'DESA WARISA',
            ),
            1215 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '009',
                'label' => 'DESA TEEP WARISA',
            ),
            1216 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '010',
                'label' => 'DESA PANIKI ATAS',
            ),
            1217 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '011',
                'label' => 'DESA WARISA KAMPUNG BARU',
            ),
            1218 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'desa' => '012',
                'label' => 'DESA PANIKI BARU',
            ),
            1219 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '001',
                'label' => 'DESA TIWOHO',
            ),
            1220 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '002',
                'label' => 'DESA WORI',
            ),
            1221 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '003',
                'label' => 'DESA KIMA BAJO',
            ),
            1222 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '004',
                'label' => 'DESA MINAESA',
            ),
            1223 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '005',
                'label' => 'DESA TALAWAAN BANTIK',
            ),
            1224 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA TALAWAAN ATAS',
            ),
            1225 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '007',
                'label' => 'DESA BUDO',
            ),
            1226 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA DARUNU',
            ),
            1227 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA BULO',
            ),
            1228 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA PONTO',
            ),
            1229 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA LANSA',
            ),
            1230 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA LANTUNG',
            ),
            1231 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '013',
                'label' => 'DESA KULU',
            ),
            1232 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '014',
                'label' => 'DESA MANTEHAGE I',
            ),
            1233 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '015',
                'label' => 'DESA MANTEHAGE III',
            ),
            1234 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '016',
                'label' => 'DESA MANTEHAGE',
            ),
            1235 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '017',
                'label' => 'DESA MANTEHAGE II',
            ),
            1236 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '018',
                'label' => 'DESA NAIN',
            ),
            1237 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '019',
                'label' => 'DESA TATAMPI',
            ),
            1238 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'desa' => '020',
                'label' => 'DESA NAIN SATU',
            ),
            1239 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '001',
                'label' => 'DESA PALAES',
            ),
            1240 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '002',
                'label' => 'DESA MALIAMBAO',
            ),
            1241 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '003',
                'label' => 'DESA TEREMAAL',
            ),
            1242 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '004',
                'label' => 'DESA JAYAKARSA',
            ),
            1243 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '005',
                'label' => 'DESA PAPUTUNGAN',
            ),
            1244 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '006',
                'label' => 'DESA TANAH PUTIH',
            ),
            1245 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '007',
                'label' => 'DESA SONSILO',
            ),
            1246 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '008',
                'label' => 'DESA TARABITAN',
            ),
            1247 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '009',
                'label' => 'DESA SEREY',
            ),
            1248 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '010',
                'label' => 'DESA BAHOI',
            ),
            1249 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '011',
                'label' => 'DESA MUBUNE',
            ),
            1250 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '012',
                'label' => 'DESA MUNTE',
            ),
            1251 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '013',
                'label' => 'DESA GANGGA SATU',
            ),
            1252 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '014',
                'label' => 'DESA GANGGA DUA',
            ),
            1253 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '015',
                'label' => 'DESA AER BANUA',
            ),
            1254 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '016',
                'label' => 'DESA TALISE',
            ),
            1255 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '017',
                'label' => 'DESA KINABUHUTAN',
            ),
            1256 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '018',
                'label' => 'DESA TAMBUN',
            ),
            1257 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '019',
                'label' => 'DESA WAWUNIAN',
            ),
            1258 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'desa' => '020',
                'label' => 'DESA BULUTUI',
            ),
            1259 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '008',
                'label' => 'DESA SARAWET',
            ),
            1260 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '009',
                'label' => 'DESA LIKUPANG DUA',
            ),
            1261 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '010',
                'label' => 'DESA LIKUPANG SATU',
            ),
            1262 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '011',
                'label' => 'DESA WINERU',
            ),
            1263 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '012',
                'label' => 'DESA MAEN',
            ),
            1264 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '013',
                'label' => 'DESA WINURI',
            ),
            1265 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '014',
                'label' => 'DESA PINENEK',
            ),
            1266 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '015',
                'label' => 'DESA RINONDORAN',
            ),
            1267 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '016',
                'label' => 'DESA KALINAUN',
            ),
            1268 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '017',
                'label' => 'DESA MARINSOW',
            ),
            1269 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '018',
                'label' => 'DESA PULISAN',
            ),
            1270 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '019',
                'label' => 'DESA LIHUNU',
            ),
            1271 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '020',
                'label' => 'DESA KAHUKU',
            ),
            1272 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '021',
                'label' => 'DESA LIBAS',
            ),
            1273 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '022',
                'label' => 'DESA LIKUPANG KAMPUNG AMBONG',
            ),
            1274 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '023',
                'label' => 'DESA RESETLEMEN',
            ),
            1275 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '024',
                'label' => 'DESA KINUNANG',
            ),
            1276 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'desa' => '025',
                'label' => 'DESA EHE',
            ),
            1277 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '001',
                'label' => 'DESA WANGURER',
            ),
            1278 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '002',
                'label' => 'DESA KAWERUAN',
            ),
            1279 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '003',
                'label' => 'DESA KOKOLEH DUA',
            ),
            1280 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '004',
                'label' => 'DESA KOKOLEH SATU',
            ),
            1281 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '005',
                'label' => 'DESA PASLATEN',
            ),
            1282 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '006',
                'label' => 'DESA BATU',
            ),
            1283 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'desa' => '007',
                'label' => 'DESA WEROT',
            ),
            1284 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA SAMPIRO',
            ),
            1285 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA SANGKUB I',
            ),
            1286 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA SANGKUB II',
            ),
            1287 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA SANGKUB III',
            ),
            1288 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA TOMBOLANGO',
            ),
            1289 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA BUSISINGO',
            ),
            1290 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA PANGKUSA',
            ),
            1291 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA SIDODADI',
            ),
            1292 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA BUSISINGO UTARA',
            ),
            1293 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '011',
                'label' => 'DESA SANGKUB IV',
            ),
            1294 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '012',
                'label' => 'DESA APENG SEMBEKA',
            ),
            1295 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '013',
                'label' => 'DESA SANGKUB TIMUR',
            ),
            1296 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '014',
                'label' => 'DESA MONOMPIA',
            ),
            1297 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '015',
                'label' => 'DESA SUKA MAKMUR',
            ),
            1298 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'desa' => '016',
                'label' => 'DESA MOKUSATO',
            ),
            1299 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '001',
                'label' => 'DESA MOME',
            ),
            1300 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '002',
                'label' => 'DESA HUNTUK',
            ),
            1301 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '003',
                'label' => 'DESA PIMPI',
            ),
            1302 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '004',
                'label' => 'DESA BUNIA',
            ),
            1303 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '005',
                'label' => 'DESA KOPI',
            ),
            1304 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '006',
                'label' => 'DESA BINTAUNA PANTAI',
            ),
            1305 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '007',
                'label' => 'DESA MINANGA',
            ),
            1306 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA BATULINTIK',
            ),
            1307 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '009',
                'label' => 'KELURAHAN BINTAUNA',
            ),
            1308 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA TALAGA',
            ),
            1309 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '011',
                'label' => 'DESA VOA A',
            ),
            1310 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA PADANG',
            ),
            1311 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '013',
                'label' => 'DESA KUHANGA',
            ),
            1312 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '014',
                'label' => 'DESA BUNONG',
            ),
            1313 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '015',
                'label' => 'DESA PADANG BARAT',
            ),
            1314 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'desa' => '016',
                'label' => 'DESA VAHUTA',
            ),
            1315 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '001',
                'label' => 'DESA MOKODITEK I',
            ),
            1316 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '002',
                'label' => 'DESA MOKODITEK',
            ),
            1317 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '003',
                'label' => 'DESA NUNUKA',
            ),
            1318 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '004',
                'label' => 'DESA SALEO',
            ),
            1319 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '005',
                'label' => 'DESA BINUANGA',
            ),
            1320 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '006',
                'label' => 'DESA BOHABAK IV',
            ),
            1321 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '007',
                'label' => 'DESA BOHABAK II',
            ),
            1322 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '008',
                'label' => 'DESA BOHABAK I',
            ),
            1323 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '009',
                'label' => 'DESA BOHABAK III',
            ),
            1324 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '010',
                'label' => 'DESA BINJEITA',
            ),
            1325 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '011',
                'label' => 'DESA BINJEITA I',
            ),
            1326 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '012',
                'label' => 'DESA BINJEITA II',
            ),
            1327 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '013',
                'label' => 'DESA BIONTONG',
            ),
            1328 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '014',
                'label' => 'DESA BIONTONG II',
            ),
            1329 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '015',
                'label' => 'DESA BIONTONG I',
            ),
            1330 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '016',
                'label' => 'DESA SALEO I',
            ),
            1331 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '017',
                'label' => 'DESA NAGARA',
            ),
            1332 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '018',
                'label' => 'DESA TANJUNG LABUO',
            ),
            1333 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '019',
                'label' => 'DESA BINUNI',
            ),
            1334 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'desa' => '020',
                'label' => 'DESA LIPU BOGU',
            ),
            1335 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '001',
                'label' => 'DESA PAKU',
            ),
            1336 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '002',
                'label' => 'DESA OLLOT II',
            ),
            1337 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '003',
                'label' => 'DESA OLLOT',
            ),
            1338 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA OLLOT I',
            ),
            1339 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA SONUO',
            ),
            1340 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA WAKAT',
            ),
            1341 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA TOTE',
            ),
            1342 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA IYOK',
            ),
            1343 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '009',
                'label' => 'DESA LANGI',
            ),
            1344 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '010',
                'label' => 'DESA JAMBU SARANG',
            ),
            1345 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '011',
                'label' => 'DESA TALAGA TUMOAGU',
            ),
            1346 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '012',
                'label' => 'DESA BOLANGITANG',
            ),
            1347 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '013',
                'label' => 'DESA BOLANGITANG I',
            ),
            1348 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '014',
                'label' => 'DESA BOLANGITANG II',
            ),
            1349 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '015',
                'label' => 'DESA TALAGA',
            ),
            1350 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '016',
                'label' => 'DESA PAKU SELATAN',
            ),
            1351 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '017',
                'label' => 'DESA KEIMANGA',
            ),
            1352 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'desa' => '018',
                'label' => 'DESA TANJUNG BUAYA',
            ),
            1353 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '001',
                'label' => 'DESA KOMUS DUA',
            ),
            1354 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA SOLO',
            ),
            1355 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA INOMUNGA',
            ),
            1356 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA BOROKO',
            ),
            1357 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA BOROKO TIMUR',
            ),
            1358 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA BIGO',
            ),
            1359 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA KUALA',
            ),
            1360 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '008',
                'label' => 'DESA PONTAK',
            ),
            1361 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA KUALA UTARA',
            ),
            1362 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA KOMUS DUA TIMUR',
            ),
            1363 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '011',
                'label' => 'DESA INOMUNGA UTARA',
            ),
            1364 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '012',
                'label' => 'DESA BIGO SELATAN',
            ),
            1365 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '013',
                'label' => 'DESA SOLIGIR',
            ),
            1366 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '014',
                'label' => 'DESA BOROKO UTARA',
            ),
            1367 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'desa' => '015',
                'label' => 'DESA GIHANG',
            ),
            1368 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '001',
                'label' => 'DESA BUSATO',
            ),
            1369 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '002',
                'label' => 'DESA KAYUOGU',
            ),
            1370 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '003',
                'label' => 'DESA BATU BANTAYO',
            ),
            1371 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '004',
                'label' => 'DESA TONTULOW',
            ),
            1372 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '005',
                'label' => 'DESA TOMBULANG',
            ),
            1373 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA BUKO',
            ),
            1374 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '007',
                'label' => 'DESA BUKO SELATAN',
            ),
            1375 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA DALAPULI',
            ),
            1376 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA BATUTAJAM',
            ),
            1377 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA DENGI',
            ),
            1378 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA TUNTUNG',
            ),
            1379 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA KOMUS I',
            ),
            1380 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '013',
                'label' => 'DESA TANJUNG SIDUPA',
            ),
            1381 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '014',
                'label' => 'DESA TONTULOW UTARA',
            ),
            1382 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '015',
                'label' => 'DESA BUKO UTARA',
            ),
            1383 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '016',
                'label' => 'DESA DALAPULI BARAT',
            ),
            1384 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '017',
                'label' => 'DESA DALAPULI TIMUR',
            ),
            1385 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '018',
                'label' => 'DESA TOMBULANG TIMUR',
            ),
            1386 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '019',
                'label' => 'DESA TOMBULANG PANTAI',
            ),
            1387 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '020',
                'label' => 'DESA DUINI',
            ),
            1388 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '021',
                'label' => 'DESA TUNTUNG TIMUR',
            ),
            1389 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'desa' => '022',
                'label' => 'DESA PADANGO',
            ),
            1390 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA LAMANGGO',
            ),
            1391 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA DALINSAHENG',
            ),
            1392 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA KARUNGO',
            ),
            1393 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA TOPE',
            ),
            1394 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '001',
                'label' => 'DESA HUMBIA',
            ),
            1395 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '002',
                'label' => 'DESA KISIHANG',
            ),
            1396 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '003',
                'label' => 'DESA BIRAKIAMA',
            ),
            1397 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '004',
                'label' => 'DESA BUHA',
            ),
            1398 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '005',
                'label' => 'DESA BATUMAWIRA',
            ),
            1399 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'desa' => '006',
                'label' => 'DESA BIRARIKEI',
            ),
            1400 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '005',
                'label' => 'DESA LAINGPATEHI',
            ),
            1401 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '006',
                'label' => 'DESA PUMPENTE',
            ),
            1402 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '007',
                'label' => 'KELURAHAN BAHOI',
            ),
            1403 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '008',
                'label' => 'DESA MAHANGIANG',
            ),
            1404 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '009',
                'label' => 'DESA TULUSAN',
            ),
            1405 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '010',
                'label' => 'DESA HAASI',
            ),
            1406 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '021',
                'label' => 'DESA BOTO',
            ),
            1407 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '022',
                'label' => 'KELURAHAN BALEHUMARA',
            ),
            1408 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '023',
                'label' => 'DESA LESAH',
            ),
            1409 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '024',
                'label' => 'DESA MULENGEN',
            ),
            1410 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '025',
                'label' => 'DESA MOHONSAWANG',
            ),
            1411 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '026',
                'label' => 'DESA APENGSALA',
            ),
            1412 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '027',
                'label' => 'DESA LESAH RENDE',
            ),
            1413 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '028',
                'label' => 'DESA BARANGKAA PEHE',
            ),
            1414 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'desa' => '029',
                'label' => 'DESA PAHIAMA',
            ),
            1415 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '003',
                'label' => 'DESA BULANGAN',
            ),
            1416 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA MINANGA',
            ),
            1417 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA W O',
            ),
            1418 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA BAWOLEU',
            ),
            1419 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA LUMBO',
            ),
            1420 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA BAWO',
            ),
            1421 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '001',
                'label' => 'DESA TANAKI',
            ),
            1422 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA KAPETA',
            ),
            1423 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA TALAWID',
            ),
            1424 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA MAKOA/MEKAR SARI',
            ),
            1425 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA LAGHAENG',
            ),
            1426 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA BATUSENGGO',
            ),
            1427 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA MAHUNENI',
            ),
            1428 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '001',
                'label' => 'DESA TAPILE',
            ),
            1429 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '002',
                'label' => 'DESA BUHIAS',
            ),
            1430 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '003',
                'label' => 'DESA BALIRANGEN',
            ),
            1431 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '004',
                'label' => 'DESA BIAU',
            ),
            1432 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '005',
                'label' => 'DESA BANDIL',
            ),
            1433 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '006',
                'label' => 'DESA SAWANG',
            ),
            1434 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '007',
                'label' => 'DESA PANGIROLONG',
            ),
            1435 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '008',
                'label' => 'DESA MALA',
            ),
            1436 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA BINALU',
            ),
            1437 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA KALIHIANG',
            ),
            1438 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA LAHOPANG',
            ),
            1439 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA PAHEPA',
            ),
            1440 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '013',
                'label' => 'DESA MATOLE',
            ),
            1441 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'desa' => '014',
                'label' => 'DESA BIAU SEHA',
            ),
            1442 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '006',
                'label' => 'DESA PELINGSAWANG',
            ),
            1443 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '007',
                'label' => 'DESA PELING',
            ),
            1444 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '008',
                'label' => 'KELURAHAN PASENG',
            ),
            1445 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '009',
                'label' => 'KELURAHAN PANIKI',
            ),
            1446 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '013',
                'label' => 'KELURAHAN ONDONG',
            ),
            1447 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '014',
                'label' => 'DESA KANAWONG',
            ),
            1448 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '015',
                'label' => 'DESA LEHI',
            ),
            1449 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '022',
                'label' => 'DESA MAKALEHI',
            ),
            1450 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '023',
                'label' => 'DESA BUMBIHA',
            ),
            1451 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '024',
                'label' => 'DESA PEHE',
            ),
            1452 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '025',
                'label' => 'DESA MAKALEHI TIMUR',
            ),
            1453 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'desa' => '026',
                'label' => 'DESA MAKALEHI UTARA',
            ),
            1454 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'desa' => '001',
                'label' => 'DESA LAI',
            ),
            1455 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'desa' => '002',
                'label' => 'DESA SALILI',
            ),
            1456 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'desa' => '003',
                'label' => 'DESA BEONG',
            ),
            1457 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'desa' => '004',
                'label' => 'DESA DOMPASE',
            ),
            1458 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '009',
                'label' => 'KELURAHAN BAHU',
            ),
            1459 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '010',
                'label' => 'KELURAHAN AKESIMBEKA',
            ),
            1460 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '011',
                'label' => 'KELURAHAN BEBALI',
            ),
            1461 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '012',
                'label' => 'KELURAHAN TARORANE',
            ),
            1462 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '013',
                'label' => 'KELURAHAN TATEHADENG',
            ),
            1463 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '014',
                'label' => 'DESA DAME',
            ),
            1464 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '015',
                'label' => 'DESA KARALUNG',
            ),
            1465 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '016',
                'label' => 'DESA BUISE',
            ),
            1466 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '017',
                'label' => 'DESA KANANG',
            ),
            1467 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '018',
                'label' => 'DESA LIA',
            ),
            1468 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '019',
                'label' => 'DESA DEAHE',
            ),
            1469 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '020',
                'label' => 'DESA APELAWO',
            ),
            1470 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '021',
                'label' => 'DESA BUKIDE',
            ),
            1471 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '022',
                'label' => 'DESA DAME I',
            ),
            1472 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '023',
                'label' => 'DESA KARALUNG I',
            ),
            1473 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'desa' => '024',
                'label' => 'DESA LIA I',
            ),
            1474 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '001',
                'label' => 'DESA KINALI',
            ),
            1475 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '002',
                'label' => 'DESA HIUNG',
            ),
            1476 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '003',
                'label' => 'DESA KIAWANG',
            ),
            1477 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '004',
                'label' => 'DESA KAWAHANG',
            ),
            1478 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '005',
                'label' => 'DESA BATUBULAN',
            ),
            1479 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '006',
                'label' => 'DESA NAMENG',
            ),
            1480 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '007',
                'label' => 'DESA MINI',
            ),
            1481 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'desa' => '008',
                'label' => 'DESA WINANGUN',
            ),
            1482 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA RATATOTOK DUA',
            ),
            1483 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA RATATOTOK SATU',
            ),
            1484 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA RATATOTOK SELATAN',
            ),
            1485 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA SOYOWAN',
            ),
            1486 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA MOREAH',
            ),
            1487 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA MOREAH SATU',
            ),
            1488 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA BASAAN',
            ),
            1489 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA BASAAN SATU',
            ),
            1490 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA RATATOTOK MUARA',
            ),
            1491 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '011',
                'label' => 'DESA RATATOTOK TENGAH',
            ),
            1492 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '012',
                'label' => 'DESA RATATOTOK',
            ),
            1493 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '013',
                'label' => 'DESA RATATOTOK UTARA',
            ),
            1494 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '014',
                'label' => 'DESA RATATOTOK TENGGARA',
            ),
            1495 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'desa' => '015',
                'label' => 'DESA BASAAN DUA',
            ),
            1496 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '001',
                'label' => 'DESA MINANGA',
            ),
            1497 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '002',
                'label' => 'DESA MINANGA SATU',
            ),
            1498 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '003',
                'label' => 'DESA MAKALU',
            ),
            1499 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '004',
                'label' => 'DESA TUMBAK',
            ),
            1500 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '005',
                'label' => 'DESA TATENGESAN',
            ),
            1501 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '006',
                'label' => 'DESA BENTENAN',
            ),
            1502 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '007',
                'label' => 'DESA WIAU',
            ),
            1503 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA BENTENAN INDAH',
            ),
            1504 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '009',
                'label' => 'DESA MINANGA TIMUR',
            ),
            1505 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA MINANGA DUA',
            ),
            1506 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '011',
                'label' => 'DESA MINANGA TIGA',
            ),
            1507 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA MAKALU SELATAN',
            ),
            1508 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '013',
                'label' => 'DESA TUMBAK MADANI',
            ),
            1509 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '014',
                'label' => 'DESA TATENGESAN SATU',
            ),
            1510 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'desa' => '015',
                'label' => 'DESA BENTENAN SATU',
            ),
            1511 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '010',
                'label' => 'DESA MANGKIT',
            ),
            1512 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '011',
                'label' => 'DESA BERINGIN',
            ),
            1513 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '012',
                'label' => 'DESA BORGO',
            ),
            1514 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '013',
                'label' => 'DESA BELANG',
            ),
            1515 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '014',
                'label' => 'DESA BUKU',
            ),
            1516 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '015',
                'label' => 'DESA TABABO',
            ),
            1517 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '016',
                'label' => 'DESA WATULINEY',
            ),
            1518 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '017',
                'label' => 'DESA MOLOMPAR',
            ),
            1519 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '018',
                'label' => 'DESA BUKU UTARA',
            ),
            1520 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '019',
                'label' => 'DESA BUKU SELATAN',
            ),
            1521 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '020',
                'label' => 'DESA BORGO SATU',
            ),
            1522 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '021',
                'label' => 'DESA PONOSAKAN BELANG',
            ),
            1523 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '022',
                'label' => 'DESA BUKU TENGAH',
            ),
            1524 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '023',
                'label' => 'DESA TABABO SELATAN',
            ),
            1525 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '024',
                'label' => 'DESA WATULINEY TENGAH',
            ),
            1526 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '025',
                'label' => 'DESA WATULINEY INDAH',
            ),
            1527 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '026',
                'label' => 'DESA MOLOMPAR UTARA',
            ),
            1528 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '027',
                'label' => 'DESA MOLOMPAR TIMUR',
            ),
            1529 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '028',
                'label' => 'DESA PONOSAKAN INDAH',
            ),
            1530 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'desa' => '029',
                'label' => 'DESA BUKU TENGGARA',
            ),
            1531 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA RASI',
            ),
            1532 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '007',
                'label' => 'KELURAHAN TOSURAYA',
            ),
            1533 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '008',
                'label' => 'KELURAHAN LOWU SATU',
            ),
            1534 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '009',
                'label' => 'KELURAHAN LOWU DUA',
            ),
            1535 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '010',
                'label' => 'KELURAHAN WAWALI',
            ),
            1536 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '016',
                'label' => 'DESA RASI SATU',
            ),
            1537 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '017',
                'label' => 'KELURAHAN TOSURAYA BARAT',
            ),
            1538 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '018',
                'label' => 'KELURAHAN TOSURAYA SELATAN',
            ),
            1539 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '019',
                'label' => 'KELURAHAN LOWU UTARA',
            ),
            1540 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '020',
                'label' => 'KELURAHAN NATAAN',
            ),
            1541 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'desa' => '021',
                'label' => 'KELURAHAN WAWALI PASAN',
            ),
            1542 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '001',
                'label' => 'DESA PONIKI',
            ),
            1543 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '002',
                'label' => 'DESA MAULIT',
            ),
            1544 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '003',
                'label' => 'DESA TOWUNTU',
            ),
            1545 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '004',
                'label' => 'DESA TOWUNTU BARAT',
            ),
            1546 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '005',
                'label' => 'DESA TOWUNTU TIMUR',
            ),
            1547 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '006',
                'label' => 'DESA TOLOMBUKAN',
            ),
            1548 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '007',
                'label' => 'DESA TOLOMBUKAN BARAT',
            ),
            1549 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '008',
                'label' => 'DESA TOLOMBUKAN SATU',
            ),
            1550 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '009',
                'label' => 'DESA LIWUTUNG',
            ),
            1551 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '010',
                'label' => 'DESA LIWUTUNG SATU',
            ),
            1552 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'desa' => '011',
                'label' => 'DESA LIWUTUNG DUA',
            ),
            1553 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '001',
                'label' => 'DESA WIOY',
            ),
            1554 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '002',
                'label' => 'DESA WIOY SATU',
            ),
            1555 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '003',
                'label' => 'DESA WIOY DUA',
            ),
            1556 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '004',
                'label' => 'DESA WIOY TIGA',
            ),
            1557 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '005',
                'label' => 'DESA WIOY TIMUR',
            ),
            1558 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '006',
                'label' => 'DESA WONGKAI',
            ),
            1559 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '007',
                'label' => 'DESA WONGKAI SATU',
            ),
            1560 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '008',
                'label' => 'DESA PANGU',
            ),
            1561 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '009',
                'label' => 'DESA PANGU SATU',
            ),
            1562 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'desa' => '010',
                'label' => 'DESA PANGU DUA',
            ),
            1563 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA TONSAWANG',
            ),
            1564 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA TOMBATU SATU',
            ),
            1565 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA BETELEN',
            ),
            1566 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '015',
                'label' => 'DESA KALI',
            ),
            1567 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '029',
                'label' => 'DESA TOMBATU',
            ),
            1568 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '030',
                'label' => 'DESA BETELEN SATU',
            ),
            1569 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '031',
                'label' => 'DESA KALI OKI',
            ),
            1570 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '032',
                'label' => 'DESA TONSAWANG SATU',
            ),
            1571 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '033',
                'label' => 'DESA TOMBATU TIGA TIMUR',
            ),
            1572 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '034',
                'label' => 'DESA TOMBATU TIGA SELATAN',
            ),
            1573 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'desa' => '035',
                'label' => 'DESA PISA',
            ),
            1574 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '001',
                'label' => 'DESA MOLOMPAR SATU',
            ),
            1575 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '002',
                'label' => 'DESA MOLOMPAR',
            ),
            1576 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '003',
                'label' => 'DESA MOLOMPAR ATAS',
            ),
            1577 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '004',
                'label' => 'DESA MOLOMPAR DUA',
            ),
            1578 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '005',
                'label' => 'DESA MOLOMPAR DUA UTARA',
            ),
            1579 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '006',
                'label' => 'DESA MOLOMPAR DUA SELATAN',
            ),
            1580 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '007',
                'label' => 'DESA ESANDOM',
            ),
            1581 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '008',
                'label' => 'DESA ESANDOM SATU',
            ),
            1582 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '009',
                'label' => 'DESA ESANDOM DUA',
            ),
            1583 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '010',
                'label' => 'DESA MUNDUNG',
            ),
            1584 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'desa' => '011',
                'label' => 'DESA MUNDUNG SATU',
            ),
            1585 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '001',
                'label' => 'DESA KUYANGA',
            ),
            1586 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '002',
                'label' => 'DESA KUYANGA SATU',
            ),
            1587 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '003',
                'label' => 'DESA TOMBATU DUA',
            ),
            1588 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '004',
                'label' => 'DESA TOMBATU DUA UTARA',
            ),
            1589 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '005',
                'label' => 'DESA TOMBATU DUA BARAT',
            ),
            1590 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '006',
                'label' => 'DESA TOMBATU DUA TENGAH',
            ),
            1591 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '007',
                'label' => 'DESA TOMBATU TIGA',
            ),
            1592 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '008',
                'label' => 'DESA TOMBATU TIGA TENGAH',
            ),
            1593 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '009',
                'label' => 'DESA WINORANGIAN',
            ),
            1594 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'desa' => '010',
                'label' => 'DESA WINORANGIAN SATU',
            ),
            1595 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '009',
                'label' => 'DESA RANOKETANG ATAS',
            ),
            1596 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '010',
                'label' => 'DESA TOUNDANOU',
            ),
            1597 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '011',
                'label' => 'DESA LOBU DUA',
            ),
            1598 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '012',
                'label' => 'DESA LOBU SATU',
            ),
            1599 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '015',
                'label' => 'DESA TOUNDANOU SATU',
            ),
            1600 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '018',
                'label' => 'DESA RANOKETANG ATAS SATU',
            ),
            1601 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '019',
                'label' => 'DESA TOUNDANOU ATAS',
            ),
            1602 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '020',
                'label' => 'DESA LOBU',
            ),
            1603 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '021',
                'label' => 'DESA LOBU KOTA',
            ),
            1604 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'desa' => '022',
                'label' => 'DESA LOBU ATAS',
            ),
            1605 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '001',
                'label' => 'DESA LOWANTAG',
            ),
            1606 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '002',
                'label' => 'DESA BANGA',
            ),
            1607 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '003',
                'label' => 'DESA SUHUYON',
            ),
            1608 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '004',
                'label' => 'DESA TAMBELANG',
            ),
            1609 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '005',
                'label' => 'DESA BUNAG',
            ),
            1610 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '006',
                'label' => 'DESA RANOAKO',
            ),
            1611 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '007',
                'label' => 'DESA KALAIT',
            ),
            1612 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '008',
                'label' => 'DESA KALAIT SATU',
            ),
            1613 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '009',
                'label' => 'DESA KALAIT DUA',
            ),
            1614 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'desa' => '010',
                'label' => 'DESA KALAIT TIGA',
            ),
            1615 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '001',
                'label' => 'DESA SILIAN DUA',
            ),
            1616 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '002',
                'label' => 'DESA SILIAN TENGAH',
            ),
            1617 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '003',
                'label' => 'DESA SILIAN KOTA',
            ),
            1618 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '004',
                'label' => 'DESA SILIAN SATU',
            ),
            1619 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '005',
                'label' => 'DESA SILIAN SELATAN',
            ),
            1620 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '006',
                'label' => 'DESA SILIAN TIGA',
            ),
            1621 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '007',
                'label' => 'DESA SILIAN BARAT',
            ),
            1622 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '008',
                'label' => 'DESA SILIAN',
            ),
            1623 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '009',
                'label' => 'DESA SILIAN UTARA',
            ),
            1624 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'desa' => '010',
                'label' => 'DESA SILIAN TIMUR',
            ),
            1625 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA SAIBUAH',
            ),
            1626 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA MEYAMBANGA',
            ),
            1627 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA TONALA',
            ),
            1628 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA MANGGADAA',
            ),
            1629 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA MOMALIA II',
            ),
            1630 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA MOMALIA  I',
            ),
            1631 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '008',
                'label' => 'DESA PILOLAHUNGA',
            ),
            1632 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA LUWOO',
            ),
            1633 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '010',
                'label' => 'DESA SAKTI',
            ),
            1634 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '011',
                'label' => 'DESA SINOMBAYUGA',
            ),
            1635 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '016',
                'label' => 'DESA ILOHELUMA',
            ),
            1636 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '020',
                'label' => 'DESA MOLOSIPAT',
            ),
            1637 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '021',
                'label' => 'DESA MEYAMBANGA TIMUR',
            ),
            1638 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '022',
                'label' => 'DESA MOMALIA TIGA',
            ),
            1639 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'desa' => '023',
                'label' => 'DESA INOSOTA',
            ),
            1640 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '001',
                'label' => 'DESA MILANGODAA BARAT',
            ),
            1641 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '002',
                'label' => 'DESA MILANGODAA',
            ),
            1642 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '003',
                'label' => 'DESA TOLUTU',
            ),
            1643 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '004',
                'label' => 'DESA BOTULIODU',
            ),
            1644 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '005',
                'label' => 'DESA NUNUKA RAYA',
            ),
            1645 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '006',
                'label' => 'DESA PAKUKU JAYA',
            ),
            1646 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'desa' => '007',
                'label' => 'DESA MILANGODAA UTARA',
            ),
            1647 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA TANGAGAH',
            ),
            1648 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '009',
                'label' => 'DESA DUDEPO',
            ),
            1649 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA PINOLANTUNGAN',
            ),
            1650 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '011',
                'label' => 'DESA SALONGO',
            ),
            1651 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '012',
                'label' => 'DESA SOGUO',
            ),
            1652 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '013',
                'label' => 'DESA TOLUAYA',
            ),
            1653 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '014',
                'label' => 'DESA MOLIBAGU',
            ),
            1654 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '015',
                'label' => 'DESA POPODU',
            ),
            1655 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '016',
                'label' => 'DESA SONDANA',
            ),
            1656 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '017',
                'label' => 'DESA TOLONDADU II',
            ),
            1657 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '018',
                'label' => 'DESA TOLONDADU I',
            ),
            1658 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '019',
                'label' => 'DESA TOLONDADU',
            ),
            1659 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '020',
                'label' => 'DESA TABILAA',
            ),
            1660 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '022',
                'label' => 'DESA PINTADIA',
            ),
            1661 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '023',
                'label' => 'DESA SALONGO TIMUR',
            ),
            1662 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '025',
                'label' => 'DESA SALONGO BARAT',
            ),
            1663 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'desa' => '028',
                'label' => 'DESA DUDEPO BARAT',
            ),
            1664 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '001',
                'label' => 'DESA PANGIA',
            ),
            1665 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '002',
                'label' => 'DESA SOPUTA',
            ),
            1666 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '003',
                'label' => 'DESA SINANDAKA',
            ),
            1667 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '004',
                'label' => 'DESA BAKIDA',
            ),
            1668 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '005',
                'label' => 'DESA DUMINANGA',
            ),
            1669 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '006',
                'label' => 'DESA BINIHA',
            ),
            1670 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '007',
                'label' => 'DESA BINIHA TIMUR',
            ),
            1671 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '008',
                'label' => 'DESA MOTOLOHU',
            ),
            1672 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '009',
                'label' => 'DESA TRANS PATOA',
            ),
            1673 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '010',
                'label' => 'DESA BINIHA SELATAN',
            ),
            1674 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'desa' => '011',
                'label' => 'DESA HALABOLU',
            ),
            1675 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '001',
                'label' => 'DESA LINAWAN',
            ),
            1676 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '002',
                'label' => 'DESA LINAWAN I',
            ),
            1677 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '003',
                'label' => 'DESA NUNUK',
            ),
            1678 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '004',
                'label' => 'DESA ILOMATA',
            ),
            1679 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '005',
                'label' => 'DESA PINOLOSIAN SELATAN',
            ),
            1680 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '006',
                'label' => 'DESA PINOLOSIAN',
            ),
            1681 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '007',
                'label' => 'DESA TOLOTOYON',
            ),
            1682 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '008',
                'label' => 'DESA KOMBOT',
            ),
            1683 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '009',
                'label' => 'DESA LUNGKAP',
            ),
            1684 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'desa' => '010',
                'label' => 'DESA KOMBOT TIMUR',
            ),
            1685 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '001',
                'label' => 'DESA MATAINDO',
            ),
            1686 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '002',
                'label' => 'DESA TOROSIK',
            ),
            1687 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '003',
                'label' => 'DESA ADOW SELATAN',
            ),
            1688 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA ADOW',
            ),
            1689 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA TOBAYAGAN',
            ),
            1690 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA DEAGA',
            ),
            1691 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA TOBAYAGAN SELATAN',
            ),
            1692 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA MATAINDO UTARA',
            ),
            1693 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '001',
                'label' => 'DESA MOTANDOI',
            ),
            1694 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA DUMAGIN B',
            ),
            1695 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA DUMAGIN A',
            ),
            1696 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA DAYOW',
            ),
            1697 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA PIDUNG',
            ),
            1698 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA ONGGUNOI',
            ),
            1699 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA MODISI',
            ),
            1700 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '008',
                'label' => 'DESA POSILAGON',
            ),
            1701 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA ILIGON',
            ),
            1702 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA MOTANDOI SELATAN',
            ),
            1703 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '011',
                'label' => 'DESA PERJUANGAN',
            ),
            1704 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'desa' => '012',
                'label' => 'DESA ONGGUNOI SELATAN',
            ),
            1705 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA MATABULU',
            ),
            1706 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA LOYOW',
            ),
            1707 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA IYOK',
            ),
            1708 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA NUANGAN',
            ),
            1709 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '006',
                'label' => 'DESA NUANGAN I',
            ),
            1710 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '007',
                'label' => 'DESA IDUMUN',
            ),
            1711 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA B A I',
            ),
            1712 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '016',
                'label' => 'DESA MATABULU TIMUR',
            ),
            1713 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '020',
                'label' => 'DESA NUANGAN SELATAN',
            ),
            1714 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'desa' => '021',
                'label' => 'DESA NUANGAN BARAT',
            ),
            1715 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '001',
                'label' => 'DESA JIKO',
            ),
            1716 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '002',
                'label' => 'DESA JIKO UTARA',
            ),
            1717 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '003',
                'label' => 'DESA MOLOBOG BARAT',
            ),
            1718 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '004',
                'label' => 'DESA MOLOBOG',
            ),
            1719 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '005',
                'label' => 'DESA ATOGA',
            ),
            1720 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '006',
                'label' => 'DESA ATOGA TIMUR',
            ),
            1721 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '007',
                'label' => 'DESA MOTONGKAD SELATAN',
            ),
            1722 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '008',
                'label' => 'DESA MOTONGKAD',
            ),
            1723 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '009',
                'label' => 'DESA MOTONGKAD TENGAH',
            ),
            1724 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '010',
                'label' => 'DESA MOTONGKAD UTARA',
            ),
            1725 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'desa' => '011',
                'label' => 'DESA MOLOBOG TIMUR',
            ),
            1726 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '001',
                'label' => 'DESA DODAP',
            ),
            1727 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '002',
                'label' => 'DESA DODAP PANTAI',
            ),
            1728 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '003',
                'label' => 'DESA TOGID',
            ),
            1729 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '004',
                'label' => 'DESA TUTUYAN II',
            ),
            1730 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '005',
                'label' => 'DESA TUTUYAN',
            ),
            1731 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '006',
                'label' => 'DESA TUTUYAN III',
            ),
            1732 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '007',
                'label' => 'DESA TOMBOLIKAT SELATAN',
            ),
            1733 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '008',
                'label' => 'DESA TOMBOLIKAT',
            ),
            1734 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '009',
                'label' => 'DESA KAYUMOYONDI',
            ),
            1735 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA DODAP MIKASA',
            ),
            1736 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '001',
                'label' => 'DESA PARET',
            ),
            1737 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '002',
                'label' => 'DESA KOTABUNAN',
            ),
            1738 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '003',
                'label' => 'DESA BUKAKA',
            ),
            1739 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '004',
                'label' => 'DESA BULAWAN',
            ),
            1740 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '005',
                'label' => 'DESA BUYAT',
            ),
            1741 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '006',
                'label' => 'DESA BUYAT I',
            ),
            1742 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '007',
                'label' => 'DESA BUYAT II',
            ),
            1743 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '008',
                'label' => 'DESA BUYAT BARAT',
            ),
            1744 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '009',
                'label' => 'DESA BUYAT SELATAN',
            ),
            1745 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '010',
                'label' => 'DESA BUYAT TENGAH',
            ),
            1746 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '011',
                'label' => 'DESA BULAWAN I',
            ),
            1747 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '012',
                'label' => 'DESA BULAWAN II',
            ),
            1748 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '013',
                'label' => 'DESA KOTABUNAN SELATAN',
            ),
            1749 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '014',
                'label' => 'DESA KOTABUNAN BARAT',
            ),
            1750 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'desa' => '015',
                'label' => 'DESA PARET TIMUR',
            ),
            1751 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '001',
                'label' => 'DESA MODAYAG II',
            ),
            1752 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '002',
                'label' => 'DESA MODAYAG',
            ),
            1753 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '003',
                'label' => 'DESA MODAYAG III',
            ),
            1754 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA TOBONGON',
            ),
            1755 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA BADARO',
            ),
            1756 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA LANUT',
            ),
            1757 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA BUYANDI',
            ),
            1758 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA PURWOREJO',
            ),
            1759 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '009',
                'label' => 'DESA PURWOREJO TENGAH',
            ),
            1760 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '010',
                'label' => 'DESA PURWOREJO TIMUR',
            ),
            1761 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '011',
                'label' => 'DESA LIBERIA TIMUR',
            ),
            1762 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '012',
                'label' => 'DESA LIBERIA',
            ),
            1763 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '018',
                'label' => 'DESA CANDI REJO',
            ),
            1764 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'desa' => '023',
                'label' => 'DESA SUMBER REJO',
            ),
            1765 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '001',
                'label' => 'DESA MOAT',
            ),
            1766 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '002',
                'label' => 'DESA BONGKUDAI SELATAN',
            ),
            1767 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '003',
                'label' => 'DESA BONGKUDAI BARU',
            ),
            1768 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '004',
                'label' => 'DESA BONGKUDAI UTARA',
            ),
            1769 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '005',
                'label' => 'DESA BONGKUDAI TIMUR',
            ),
            1770 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '006',
                'label' => 'DESA GUAAN',
            ),
            1771 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '007',
                'label' => 'DESA MOTOTOMPIAAN',
            ),
            1772 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '008',
                'label' => 'DESA MOKITOMPIA',
            ),
            1773 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '009',
                'label' => 'DESA KOKAPOY',
            ),
            1774 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'desa' => '010',
                'label' => 'DESA KOKAPOY TIMUR',
            ),
            1775 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '001',
                'label' => 'DESA MOYONGKOTA BARU',
            ),
            1776 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '002',
                'label' => 'DESA MOYONGKOTA',
            ),
            1777 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '003',
                'label' => 'DESA BANGUNAN WUWUK',
            ),
            1778 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '004',
                'label' => 'DESA BONGKUDAI BARAT',
            ),
            1779 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '005',
                'label' => 'DESA BONGKUDAI',
            ),
            1780 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '006',
                'label' => 'DESA PINONOBATUAN',
            ),
            1781 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '007',
                'label' => 'DESA MOONOW',
            ),
            1782 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '008',
                'label' => 'DESA INATON',
            ),
            1783 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '009',
                'label' => 'DESA BANGUNAN WUWUK TIMUR',
            ),
            1784 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'desa' => '010',
                'label' => 'DESA TANGATON',
            ),
            1785 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '002',
                'label' => 'KELURAHAN MALALAYANG I',
            ),
            1786 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '004',
                'label' => 'KELURAHAN BAHU',
            ),
            1787 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '005',
                'label' => 'KELURAHAN KLEAK',
            ),
            1788 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '006',
                'label' => 'KELURAHAN MALALAYANG I TIMUR',
            ),
            1789 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '007',
                'label' => 'KELURAHAN MALALAYANG I BARAT',
            ),
            1790 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '008',
                'label' => 'KELURAHAN WINANGUN I',
            ),
            1791 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '009',
                'label' => 'KELURAHAN WINANGUN II',
            ),
            1792 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'desa' => '010',
                'label' => 'KELURAHAN BATU KOTA',
            ),
            1793 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '004',
                'label' => 'KELURAHAN RANOTANA',
            ),
            1794 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '006',
                'label' => 'KELURAHAN SARIO KOTA BARU',
            ),
            1795 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '007',
                'label' => 'KELURAHAN SARIO',
            ),
            1796 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '008',
                'label' => 'KELURAHAN SARIO TUMPAAN',
            ),
            1797 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '009',
                'label' => 'KELURAHAN SARIO UTARA',
            ),
            1798 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '011',
                'label' => 'KELURAHAN TITIWUNGEN SELATAN',
            ),
            1799 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'desa' => '012',
                'label' => 'KELURAHAN TITIWUNGEN UTARA',
            ),
            1800 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '001',
                'label' => 'KELURAHAN KAROMBASAN UTARA',
            ),
            1801 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '002',
                'label' => 'KELURAHAN KAROMBASAN SELATAN',
            ),
            1802 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '003',
                'label' => 'KELURAHAN RANOTANA WERU',
            ),
            1803 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '004',
                'label' => 'KELURAHAN PAKOWA',
            ),
            1804 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '005',
                'label' => 'KELURAHAN BUMI NYIUR',
            ),
            1805 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '006',
                'label' => 'KELURAHAN TELING ATAS',
            ),
            1806 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '007',
                'label' => 'KELURAHAN WANEA',
            ),
            1807 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '008',
                'label' => 'KELURAHAN TANJUNG BATU',
            ),
            1808 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'desa' => '009',
                'label' => 'KELURAHAN TINGKULU',
            ),
            1809 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '001',
                'label' => 'KELURAHAN BUMI BERINGIN',
            ),
            1810 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '002',
                'label' => 'KELURAHAN TELING BAWAH',
            ),
            1811 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '010',
                'label' => 'KELURAHAN TIKALA KUMARAKA',
            ),
            1812 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '011',
                'label' => 'KELURAHAN MAHAKERET BARAT',
            ),
            1813 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '012',
                'label' => 'KELURAHAN MAHAKERET TIMUR',
            ),
            1814 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '013',
                'label' => 'KELURAHAN WENANG UTARA',
            ),
            1815 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '014',
                'label' => 'KELURAHAN WENANG SELATAN',
            ),
            1816 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '015',
                'label' => 'KELURAHAN LAWANGIRUNG',
            ),
            1817 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '016',
                'label' => 'KELURAHAN KOMO LUAR',
            ),
            1818 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '017',
                'label' => 'KELURAHAN PINAESAAN',
            ),
            1819 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '018',
                'label' => 'KELURAHAN ISTIQLAL',
            ),
            1820 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'desa' => '019',
                'label' => 'KELURAHAN CALACA',
            ),
            1821 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '001',
                'label' => 'KELURAHAN BANJER',
            ),
            1822 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '002',
                'label' => 'KELURAHAN TIKALA BARU',
            ),
            1823 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '003',
                'label' => 'KELURAHAN PAAL IV',
            ),
            1824 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '004',
                'label' => 'KELURAHAN TAAS',
            ),
            1825 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'desa' => '009',
                'label' => 'KELURAHAN TIKALA ARES',
            ),
            1826 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '001',
                'label' => 'KELURAHAN RANOMUUT',
            ),
            1827 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '002',
                'label' => 'KELURAHAN PERKAMIL',
            ),
            1828 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '003',
                'label' => 'KELURAHAN MALENDENG',
            ),
            1829 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '004',
                'label' => 'KELURAHAN DENDENGAN DALAM',
            ),
            1830 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '005',
                'label' => 'KELURAHAN DENDENGAN LUAR',
            ),
            1831 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '006',
                'label' => 'KELURAHAN PAAL DUA',
            ),
            1832 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'desa' => '007',
                'label' => 'KELURAHAN KAIRAGI WERU',
            ),
            1833 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '002',
                'label' => 'KELURAHAN KAIRAGI SATU',
            ),
            1834 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '003',
                'label' => 'KELURAHAN KAIRAGI DUA',
            ),
            1835 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '004',
                'label' => 'KELURAHAN PANIKI BAWAH',
            ),
            1836 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '005',
                'label' => 'KELURAHAN PANIKI DUA',
            ),
            1837 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '006',
                'label' => 'KELURAHAN LAPANGAN',
            ),
            1838 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '007',
                'label' => 'KELURAHAN MAPANGET BARAT',
            ),
            1839 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '008',
                'label' => 'KELURAHAN KIMA ATAS',
            ),
            1840 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '009',
                'label' => 'KELURAHAN BENGKOL',
            ),
            1841 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '010',
                'label' => 'KELURAHAN BUHA',
            ),
            1842 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'desa' => '012',
                'label' => 'KELURAHAN PANIKI SATU',
            ),
            1843 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '001',
                'label' => 'KELURAHAN KARAME',
            ),
            1844 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '002',
                'label' => 'KELURAHAN KETANG BARU',
            ),
            1845 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '003',
                'label' => 'KELURAHAN WAWONASA',
            ),
            1846 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '004',
                'label' => 'KELURAHAN TERNATE BARU',
            ),
            1847 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '005',
                'label' => 'KELURAHAN TERNATE TANJUNG',
            ),
            1848 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '006',
                'label' => 'KELURAHAN KOMBOS BARAT',
            ),
            1849 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '007',
                'label' => 'KELURAHAN KOMBOS TIMUR',
            ),
            1850 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '008',
                'label' => 'KELURAHAN SINGKIL SATU',
            ),
            1851 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'desa' => '009',
                'label' => 'KELURAHAN SINGKIL DUA',
            ),
            1852 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '001',
                'label' => 'KELURAHAN SINDULANG SATU',
            ),
            1853 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '002',
                'label' => 'KELURAHAN KAMPUNG ISLAM',
            ),
            1854 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '003',
                'label' => 'KELURAHAN SINDULANG DUA',
            ),
            1855 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '004',
                'label' => 'KELURAHAN BITUNG KARANG RIA',
            ),
            1856 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '005',
                'label' => 'KELURAHAN MAASING',
            ),
            1857 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '006',
                'label' => 'KELURAHAN TUMINTING',
            ),
            1858 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '007',
                'label' => 'KELURAHAN MAHAWU',
            ),
            1859 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '008',
                'label' => 'KELURAHAN SUMOMPO',
            ),
            1860 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '009',
                'label' => 'KELURAHAN TUMUMPA SATU',
            ),
            1861 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'desa' => '010',
                'label' => 'KELURAHAN TUMUMPA DUA',
            ),
            1862 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '001',
                'label' => 'KELURAHAN BAILANG',
            ),
            1863 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '002',
                'label' => 'KELURAHAN MOLAS',
            ),
            1864 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '003',
                'label' => 'KELURAHAN MERAS',
            ),
            1865 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '004',
                'label' => 'KELURAHAN TONGKEINA',
            ),
            1866 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'desa' => '005',
                'label' => 'KELURAHAN PANDU',
            ),
            1867 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'desa' => '001',
                'label' => 'KELURAHAN BUNAKEN',
            ),
            1868 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'desa' => '002',
                'label' => 'KELURAHAN ALUNG BANUA',
            ),
            1869 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'desa' => '003',
                'label' => 'KELURAHAN MANADO TUA SATU',
            ),
            1870 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'desa' => '004',
                'label' => 'KELURAHAN MANADO TUA DUA',
            ),
            1871 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '009',
                'label' => 'KELURAHAN MADIDIR UNET',
            ),
            1872 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '010',
                'label' => 'KELURAHAN MADIDIR URE',
            ),
            1873 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '011',
                'label' => 'KELURAHAN MADIDIR WERU',
            ),
            1874 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '012',
                'label' => 'KELURAHAN KADOODAN',
            ),
            1875 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '015',
                'label' => 'KELURAHAN WANGURER BARAT',
            ),
            1876 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '016',
                'label' => 'KELURAHAN WANGURER TIMUR',
            ),
            1877 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'desa' => '017',
                'label' => 'KELURAHAN WANGURER UTARA',
            ),
            1878 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '001',
                'label' => 'KELURAHAN TANJUNG MERAH',
            ),
            1879 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '002',
                'label' => 'KELURAHAN SAGERAT',
            ),
            1880 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '003',
                'label' => 'KELURAHAN MANEMBO NEMBO ATAS',
            ),
            1881 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '004',
                'label' => 'KELURAHAN MANEMBO NEMBO',
            ),
            1882 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '011',
                'label' => 'KELURAHAN SAGERAT WERU SATU',
            ),
            1883 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '012',
                'label' => 'KELURAHAN SAGERAT WERU DUA',
            ),
            1884 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '013',
                'label' => 'KELURAHAN TENDEKI',
            ),
            1885 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'desa' => '014',
                'label' => 'KELURAHAN MANEMBO-NEMBO TENGAH',
            ),
            1886 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '001',
                'label' => 'KELURAHAN GIRIAN WERU SATU',
            ),
            1887 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '002',
                'label' => 'KELURAHAN GIRIAN BAWAH',
            ),
            1888 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '003',
                'label' => 'KELURAHAN WANGURER',
            ),
            1889 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '004',
                'label' => 'KELURAHAN GIRIAN INDAH',
            ),
            1890 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '005',
                'label' => 'KELURAHAN GIRIAN WERU DUA',
            ),
            1891 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '006',
                'label' => 'KELURAHAN GIRIAN ATAS',
            ),
            1892 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'desa' => '007',
                'label' => 'KELURAHAN GIRIAN PERMAI',
            ),
            1893 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '001',
                'label' => 'KELURAHAN PASIRPANJANG',
            ),
            1894 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '002',
                'label' => 'KELURAHAN PAUDEAN',
            ),
            1895 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '003',
                'label' => 'KELURAHAN BATULUBANG',
            ),
            1896 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '004',
                'label' => 'KELURAHAN DORBOLAANG',
            ),
            1897 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '005',
                'label' => 'KELURAHAN PANCURAN',
            ),
            1898 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '006',
                'label' => 'KELURAHAN PAPUSUNGAN',
            ),
            1899 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'desa' => '007',
                'label' => 'KELURAHAN KELAPA DUA',
            ),
            1900 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '001',
                'label' => 'KELURAHAN MAWALI',
            ),
            1901 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '002',
                'label' => 'KELURAHAN PINTUKOTA',
            ),
            1902 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '003',
                'label' => 'KELURAHAN BATUKOTA',
            ),
            1903 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '004',
                'label' => 'KELURAHAN GUNUNG WOKA',
            ),
            1904 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '005',
                'label' => 'KELURAHAN POSOKAN',
            ),
            1905 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '006',
                'label' => 'KELURAHAN MOTTO',
            ),
            1906 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '007',
                'label' => 'KELURAHAN LIRANG',
            ),
            1907 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '008',
                'label' => 'KELURAHAN NUSU',
            ),
            1908 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '009',
                'label' => 'KELURAHAN BINUANG',
            ),
            1909 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'desa' => '010',
                'label' => 'KELURAHAN KAREKO',
            ),
            1910 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '006',
                'label' => 'KELURAHAN AERTEMBAGA SATU',
            ),
            1911 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '007',
                'label' => 'KELURAHAN TANDU RUSA',
            ),
            1912 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '008',
                'label' => 'KELURAHAN MAKAWIDEY',
            ),
            1913 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '009',
                'label' => 'KELURAHAN PINANGUNIAN',
            ),
            1914 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '012',
                'label' => 'KELURAHAN PATETEN SATU',
            ),
            1915 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '013',
                'label' => 'KELURAHAN PATETEN DUA',
            ),
            1916 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '014',
                'label' => 'KELURAHAN WINENET SATU',
            ),
            1917 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '015',
                'label' => 'KELURAHAN WINENET DUA',
            ),
            1918 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '016',
                'label' => 'KELURAHAN KASAWARI',
            ),
            1919 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'desa' => '017',
                'label' => 'KELURAHAN AERTEMBAGA DUA',
            ),
            1920 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '001',
                'label' => 'KELURAHAN PAKADOODAN',
            ),
            1921 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '002',
                'label' => 'KELURAHAN BITUNG BARAT SATU',
            ),
            1922 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '003',
                'label' => 'KELURAHAN BITUNG BARAT DUA',
            ),
            1923 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '004',
                'label' => 'KELURAHAN KAKENTURAN SATU',
            ),
            1924 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '005',
                'label' => 'KELURAHAN KAKENTURAN DUA',
            ),
            1925 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '006',
                'label' => 'KELURAHAN BITUNG TENGAH',
            ),
            1926 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '007',
                'label' => 'KELURAHAN BITUNG TIMUR',
            ),
            1927 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'desa' => '008',
                'label' => 'KELURAHAN PATETEN TIGA',
            ),
            1928 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '001',
                'label' => 'KELURAHAN KUMERSOT',
            ),
            1929 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '003',
                'label' => 'KELURAHAN PINOKALAN',
            ),
            1930 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '004',
                'label' => 'KELURAHAN TEWAAN',
            ),
            1931 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '005',
                'label' => 'KELURAHAN DANOWUDU',
            ),
            1932 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '006',
                'label' => 'KELURAHAN DUA SUDARA',
            ),
            1933 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '007',
                'label' => 'KELURAHAN APELA DUA',
            ),
            1934 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '008',
                'label' => 'KELURAHAN APELA SATU',
            ),
            1935 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '009',
                'label' => 'KELURAHAN KARONDORAN',
            ),
            1936 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '010',
                'label' => 'KELURAHAN PINASUNGKULAN',
            ),
            1937 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '012',
                'label' => 'KELURAHAN BATU PUTIH ATAS',
            ),
            1938 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'desa' => '013',
                'label' => 'KELURAHAN BATU PUTIH  BAWAH',
            ),
            1939 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '002',
                'label' => 'KELURAHAN PANGOLOMBIAN',
            ),
            1940 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '003',
                'label' => 'KELURAHAN LAHENDONG',
            ),
            1941 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '004',
                'label' => 'KELURAHAN PINARAS',
            ),
            1942 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '005',
                'label' => 'KELURAHAN KAMPUNG JAWA',
            ),
            1943 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '006',
                'label' => 'KELURAHAN TUMATANGTANG',
            ),
            1944 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '007',
                'label' => 'KELURAHAN LANSOT',
            ),
            1945 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '008',
                'label' => 'KELURAHAN ULUINDANO',
            ),
            1946 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '009',
                'label' => 'KELURAHAN WALIAN',
            ),
            1947 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '010',
                'label' => 'KELURAHAN WALIAN SATU',
            ),
            1948 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '011',
                'label' => 'KELURAHAN WALIAN DUA',
            ),
            1949 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'desa' => '012',
                'label' => 'KELURAHAN TUMATANGTANG SATU',
            ),
            1950 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '001',
                'label' => 'KELURAHAN MATANI TIGA',
            ),
            1951 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '002',
                'label' => 'KELURAHAN MATANI DUA',
            ),
            1952 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '003',
                'label' => 'KELURAHAN MATANI SATU',
            ),
            1953 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '005',
                'label' => 'KELURAHAN KOLONGAN',
            ),
            1954 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '011',
                'label' => 'KELURAHAN KAMASI',
            ),
            1955 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '016',
                'label' => 'KELURAHAN TALETE SATU',
            ),
            1956 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '017',
                'label' => 'KELURAHAN TALETE DUA',
            ),
            1957 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '018',
                'label' => 'KELURAHAN KOLONGAN SATU',
            ),
            1958 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'desa' => '019',
                'label' => 'KELURAHAN KAMASI SATU',
            ),
            1959 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '001',
                'label' => 'KELURAHAN PASLATEN DUA',
            ),
            1960 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '002',
                'label' => 'KELURAHAN PASLATEN SATU',
            ),
            1961 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '003',
                'label' => 'KELURAHAN RURUKAN',
            ),
            1962 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '004',
                'label' => 'KELURAHAN RURUKAN SATU',
            ),
            1963 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'desa' => '005',
                'label' => 'KELURAHAN KUMELEMBUAI',
            ),
            1964 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '001',
                'label' => 'KELURAHAN WOLOAN SATU',
            ),
            1965 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '002',
                'label' => 'KELURAHAN WOLOAN DUA',
            ),
            1966 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '003',
                'label' => 'KELURAHAN WOLOAN TIGA',
            ),
            1967 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '004',
                'label' => 'KELURAHAN TARATARA SATU',
            ),
            1968 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '005',
                'label' => 'KELURAHAN TARATARA DUA',
            ),
            1969 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '006',
                'label' => 'KELURAHAN WOLOAN SATU UTARA',
            ),
            1970 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '007',
                'label' => 'KELURAHAN TARATARA',
            ),
            1971 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'desa' => '008',
                'label' => 'KELURAHAN TARATARA TIGA',
            ),
            1972 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '001',
                'label' => 'KELURAHAN KAYAWU',
            ),
            1973 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '002',
                'label' => 'KELURAHAN WAILAN',
            ),
            1974 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '003',
                'label' => 'KELURAHAN KAKASKASEN TIGA',
            ),
            1975 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '004',
                'label' => 'KELURAHAN KAKASKASEN DUA',
            ),
            1976 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '005',
                'label' => 'KELURAHAN KAKASKASEN SATU',
            ),
            1977 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '006',
                'label' => 'KELURAHAN KINILOW',
            ),
            1978 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '007',
                'label' => 'KELURAHAN TINOOR SATU',
            ),
            1979 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '008',
                'label' => 'KELURAHAN TINOOR DUA',
            ),
            1980 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '009',
                'label' => 'KELURAHAN KINILOW SATU',
            ),
            1981 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'desa' => '010',
                'label' => 'KELURAHAN KAKASKASEN',
            ),
            1982 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '002',
                'label' => 'DESA BUNGKO',
            ),
            1983 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '003',
                'label' => 'DESA TABANG',
            ),
            1984 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '004',
                'label' => 'DESA POYOWA BESAR I',
            ),
            1985 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '005',
                'label' => 'DESA POYOWA BESAR II',
            ),
            1986 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '006',
                'label' => 'KELURAHAN POBUNDAYAN',
            ),
            1987 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '007',
                'label' => 'KELURAHAN MOTOBOI KECIL',
            ),
            1988 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '008',
                'label' => 'KELURAHAN MONGONDOW',
            ),
            1989 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'desa' => '009',
                'label' => 'DESA POYOWA KECIL',
            ),
            1990 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '001',
                'label' => 'KELURAHAN MATALI',
            ),
            1991 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '002',
                'label' => 'KELURAHAN MOTOBOI BESAR',
            ),
            1992 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '003',
                'label' => 'DESA KOBO KECIL',
            ),
            1993 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '004',
                'label' => 'DESA MOYAG',
            ),
            1994 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '005',
                'label' => 'KELURAHAN KOBO BESAR',
            ),
            1995 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '006',
                'label' => 'KELURAHAN TUMOBUY',
            ),
            1996 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '007',
                'label' => 'KELURAHAN SININDIAN',
            ),
            1997 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '008',
                'label' => 'KELURAHAN KOTABANGON',
            ),
            1998 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '009',
                'label' => 'DESA MOYAG TAMPOAN',
            ),
            1999 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'desa' => '010',
                'label' => 'DESA MOYAG TODULAN',
            ),
            2000 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '001',
                'label' => 'KELURAHAN MONGKONAI',
            ),
            2001 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '002',
                'label' => 'KELURAHAN MOLINOW',
            ),
            2002 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '003',
                'label' => 'KELURAHAN MOGOLAING',
            ),
            2003 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '004',
                'label' => 'KELURAHAN GOGAGOMAN',
            ),
            2004 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '005',
                'label' => 'KELURAHAN KOTAMOBAGU',
            ),
            2005 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'desa' => '006',
                'label' => 'KELURAHAN MONGKONAI BARAT',
            ),
            2006 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '001',
                'label' => 'KELURAHAN UPAI',
            ),
            2007 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '002',
                'label' => 'KELURAHAN GENGGULANG',
            ),
            2008 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '003',
                'label' => 'KELURAHAN BIGA',
            ),
            2009 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '004',
                'label' => 'DESA SIA',
            ),
            2010 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '005',
                'label' => 'DESA PONTODON',
            ),
            2011 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '006',
                'label' => 'DESA BILALANG II',
            ),
            2012 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '007',
                'label' => 'DESA BILALANG I',
            ),
            2013 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'desa' => '008',
                'label' => 'DESA PONTODON TIMUR',
            ),
        );
        MasterWilayah::insert($wilayah_data);
    }
}
