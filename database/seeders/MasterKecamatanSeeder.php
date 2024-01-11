<?php

namespace Database\Seeders;

use App\Models\MasterKecamatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MasterKecamatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kec_data = array(
            0 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '021',
                'label' => 'DUMOGA BARAT',
            ),
            1 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '022',
                'label' => 'DUMOGA UTARA',
            ),
            2 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '023',
                'label' => 'DUMOGA TIMUR',
            ),
            3 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '024',
                'label' => 'DUMOGA TENGAH',
            ),
            4 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '025',
                'label' => 'DUMOGA TENGGARA',
            ),
            5 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '026',
                'label' => 'DUMOGA',
            ),
            6 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '060',
                'label' => 'LOLAYAN',
            ),
            7 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '081',
                'label' => 'PASSI BARAT',
            ),
            8 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '082',
                'label' => 'PASSI TIMUR',
            ),
            9 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '083',
                'label' => 'BILALANG',
            ),
            10 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '090',
                'label' => 'POIGAR',
            ),
            11 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '100',
                'label' => 'BOLAANG',
            ),
            12 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '101',
                'label' => 'BOLAANG TIMUR',
            ),
            13 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '110',
                'label' => 'LOLAK',
            ),
            14 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '120',
                'label' => 'SANGTOMBOLANG',
            ),
            15 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '091',
                'label' => 'LANGOWAN TIMUR',
            ),
            16 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '092',
                'label' => 'LANGOWAN BARAT',
            ),
            17 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '093',
                'label' => 'LANGOWAN SELATAN',
            ),
            18 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '094',
                'label' => 'LANGOWAN UTARA',
            ),
            19 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '110',
                'label' => 'TOMPASO',
            ),
            20 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '111',
                'label' => 'TOMPASO BARAT',
            ),
            21 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '120',
                'label' => 'KAWANGKOAN',
            ),
            22 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '121',
                'label' => 'KAWANGKOAN BARAT',
            ),
            23 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '122',
                'label' => 'KAWANGKOAN UTARA',
            ),
            24 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '130',
                'label' => 'SONDER',
            ),
            25 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '160',
                'label' => 'TOMBARIRI',
            ),
            26 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '161',
                'label' => 'TOMBARIRI TIMUR',
            ),
            27 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '170',
                'label' => 'PINELENG',
            ),
            28 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '171',
                'label' => 'TOMBULU',
            ),
            29 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '172',
                'label' => 'MANDOLANG',
            ),
            30 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '190',
                'label' => 'TONDANO BARAT',
            ),
            31 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '191',
                'label' => 'TONDANO SELATAN',
            ),
            32 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '200',
                'label' => 'REMBOKEN',
            ),
            33 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '210',
                'label' => 'KAKAS',
            ),
            34 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '211',
                'label' => 'KAKAS BARAT',
            ),
            35 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '220',
                'label' => 'LEMBEAN TIMUR',
            ),
            36 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '230',
                'label' => 'ERIS',
            ),
            37 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '240',
                'label' => 'KOMBI',
            ),
            38 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '250',
                'label' => 'TONDANO TIMUR',
            ),
            39 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '251',
                'label' => 'TONDANO UTARA',
            ),
            40 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '040',
                'label' => 'MANGANITU SELATAN',
            ),
            41 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '041',
                'label' => 'TATOARENG',
            ),
            42 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '050',
                'label' => 'TAMAKO',
            ),
            43 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '060',
                'label' => 'TABUKAN SELATAN',
            ),
            44 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '061',
                'label' => 'TABUKAN SELATAN TENGAH',
            ),
            45 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '062',
                'label' => 'TABUKAN SELATAN TENGGARA',
            ),
            46 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '070',
                'label' => 'TABUKAN TENGAH',
            ),
            47 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '080',
                'label' => 'MANGANITU',
            ),
            48 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '090',
                'label' => 'TAHUNA',
            ),
            49 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '091',
                'label' => 'TAHUNA TIMUR',
            ),
            50 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '092',
                'label' => 'TAHUNA BARAT',
            ),
            51 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '100',
                'label' => 'TABUKAN UTARA',
            ),
            52 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '101',
                'label' => 'NUSA TABUKAN',
            ),
            53 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '102',
                'label' => 'KEPULAUAN MARORE',
            ),
            54 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '110',
                'label' => 'KENDAHE',
            ),
            55 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '010',
                'label' => 'KABARUAN',
            ),
            56 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '011',
                'label' => 'DAMAU',
            ),
            57 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '020',
                'label' => 'LIRUNG',
            ),
            58 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '021',
                'label' => 'SALIBABU',
            ),
            59 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '022',
                'label' => 'KALONGAN',
            ),
            60 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '023',
                'label' => 'MORONGE',
            ),
            61 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '030',
                'label' => 'MELONGUANE',
            ),
            62 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '031',
                'label' => 'MELONGUANE TIMUR',
            ),
            63 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '040',
                'label' => 'BEO',
            ),
            64 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '041',
                'label' => 'BEO UTARA',
            ),
            65 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '042',
                'label' => 'BEO SELATAN',
            ),
            66 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '050',
                'label' => 'RAINIS',
            ),
            67 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '051',
                'label' => 'TAMPAN\'AMMA',
            ),
            68 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '052',
                'label' => 'PULUTAN',
            ),
            69 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '060',
                'label' => 'ESSANG',
            ),
            70 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '061',
                'label' => 'ESSANG SELATAN',
            ),
            71 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '070',
                'label' => 'GEMEH',
            ),
            72 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '080',
                'label' => 'NANUSA',
            ),
            73 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '081',
                'label' => 'MIANGAS',
            ),
            74 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '010',
                'label' => 'MODOINDING',
            ),
            75 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '020',
                'label' => 'TOMPASO BARU',
            ),
            76 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '021',
                'label' => 'MAESAAN',
            ),
            77 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '070',
                'label' => 'RANOYAPO',
            ),
            78 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '080',
                'label' => 'MOTOLING',
            ),
            79 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '081',
                'label' => 'KUMELEMBUAI',
            ),
            80 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '082',
                'label' => 'MOTOLING BARAT',
            ),
            81 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '083',
                'label' => 'MOTOLING TIMUR',
            ),
            82 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '090',
                'label' => 'SINONSAYANG',
            ),
            83 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '100',
                'label' => 'TENGA',
            ),
            84 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '111',
                'label' => 'AMURANG',
            ),
            85 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '112',
                'label' => 'AMURANG BARAT',
            ),
            86 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '113',
                'label' => 'AMURANG TIMUR',
            ),
            87 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '120',
                'label' => 'TARERAN',
            ),
            88 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '121',
                'label' => 'SULUUN TARERAN',
            ),
            89 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '130',
                'label' => 'TUMPAAN',
            ),
            90 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '131',
                'label' => 'TATAPAAN',
            ),
            91 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '010',
                'label' => 'KEMA',
            ),
            92 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '020',
                'label' => 'KAUDITAN',
            ),
            93 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '030',
                'label' => 'AIRMADIDI',
            ),
            94 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '040',
                'label' => 'KALAWAT',
            ),
            95 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '050',
                'label' => 'DIMEMBE',
            ),
            96 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '051',
                'label' => 'TALAWAAN',
            ),
            97 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '060',
                'label' => 'WORI',
            ),
            98 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '070',
                'label' => 'LIKUPANG BARAT',
            ),
            99 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '080',
                'label' => 'LIKUPANG TIMUR',
            ),
            100 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '081',
                'label' => 'LIKUPANG SELATAN',
            ),
            101 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '010',
                'label' => 'SANGKUB',
            ),
            102 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '020',
                'label' => 'BINTAUNA',
            ),
            103 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '030',
                'label' => 'BOLANG ITANG TIMUR',
            ),
            104 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '040',
                'label' => 'BOLANG ITANG BARAT',
            ),
            105 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '050',
                'label' => 'KAIDIPANG',
            ),
            106 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '060',
                'label' => 'PINOGALUMAN',
            ),
            107 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '010',
                'label' => 'BIARO',
            ),
            108 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '020',
                'label' => 'TAGULANDANG SELATAN',
            ),
            109 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '030',
                'label' => 'TAGULANDANG',
            ),
            110 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '040',
                'label' => 'TAGULANDANG UTARA',
            ),
            111 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '050',
                'label' => 'SIAU BARAT SELATAN',
            ),
            112 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '060',
                'label' => 'SIAU TIMUR SELATAN',
            ),
            113 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '070',
                'label' => 'SIAU BARAT',
            ),
            114 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '080',
                'label' => 'SIAU TENGAH',
            ),
            115 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '090',
                'label' => 'SIAU TIMUR',
            ),
            116 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '100',
                'label' => 'SIAU BARAT UTARA',
            ),
            117 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '010',
                'label' => 'RATATOTOK',
            ),
            118 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '020',
                'label' => 'PUSOMAEN',
            ),
            119 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '030',
                'label' => 'BELANG',
            ),
            120 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '040',
                'label' => 'RATAHAN',
            ),
            121 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '041',
                'label' => 'PASAN',
            ),
            122 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '042',
                'label' => 'RATAHAN TIMUR',
            ),
            123 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '050',
                'label' => 'TOMBATU',
            ),
            124 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '051',
                'label' => 'TOMBATU TIMUR',
            ),
            125 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '052',
                'label' => 'TOMBATU UTARA',
            ),
            126 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '060',
                'label' => 'TOULUAAN',
            ),
            127 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '061',
                'label' => 'TOULUAAN SELATAN',
            ),
            128 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '062',
                'label' => 'SILIAN RAYA',
            ),
            129 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '010',
                'label' => 'POSIGADAN',
            ),
            130 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '011',
                'label' => 'TOMINI',
            ),
            131 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '020',
                'label' => 'BOLAANG UKI',
            ),
            132 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '021',
                'label' => 'HELUMO',
            ),
            133 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '030',
                'label' => 'PINOLOSIAN',
            ),
            134 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '040',
                'label' => 'PINOLOSIAN TENGAH',
            ),
            135 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '050',
                'label' => 'PINOLOSIAN TIMUR',
            ),
            136 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '010',
                'label' => 'NUANGAN',
            ),
            137 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '011',
                'label' => 'MOTONGKAD',
            ),
            138 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '020',
                'label' => 'TUTUYAN',
            ),
            139 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '030',
                'label' => 'KOTABUNAN',
            ),
            140 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '040',
                'label' => 'MODAYAG',
            ),
            141 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '041',
                'label' => 'MOOAT',
            ),
            142 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '050',
                'label' => 'MODAYAG BARAT',
            ),
            143 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '010',
                'label' => 'MALALAYANG',
            ),
            144 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '020',
                'label' => 'SARIO',
            ),
            145 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '021',
                'label' => 'WANEA',
            ),
            146 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '030',
                'label' => 'WENANG',
            ),
            147 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '031',
                'label' => 'TIKALA',
            ),
            148 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '032',
                'label' => 'PAAL DUA',
            ),
            149 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '040',
                'label' => 'MAPANGET',
            ),
            150 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '051',
                'label' => 'SINGKIL',
            ),
            151 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '052',
                'label' => 'TUMINTING',
            ),
            152 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '053',
                'label' => 'BUNAKEN',
            ),
            153 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '054',
                'label' => 'BUNAKEN KEPULAUAN',
            ),
            154 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '010',
                'label' => 'MADIDIR',
            ),
            155 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '011',
                'label' => 'MATUARI',
            ),
            156 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '012',
                'label' => 'GIRIAN',
            ),
            157 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '021',
                'label' => 'LEMBEH SELATAN',
            ),
            158 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '022',
                'label' => 'LEMBEH UTARA',
            ),
            159 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '030',
                'label' => 'AERTEMBAGA',
            ),
            160 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '031',
                'label' => 'MAESA',
            ),
            161 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '040',
                'label' => 'RANOWULU',
            ),
            162 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '010',
                'label' => 'TOMOHON SELATAN',
            ),
            163 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '020',
                'label' => 'TOMOHON TENGAH',
            ),
            164 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '021',
                'label' => 'TOMOHON TIMUR',
            ),
            165 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '022',
                'label' => 'TOMOHON BARAT',
            ),
            166 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '030',
                'label' => 'TOMOHON UTARA',
            ),
            167 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '010',
                'label' => 'KOTAMOBAGU SELATAN',
            ),
            168 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '020',
                'label' => 'KOTAMOBAGU TIMUR',
            ),
            169 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '030',
                'label' => 'KOTAMOBAGU BARAT',
            ),
            170 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '040',
                'label' => 'KOTAMOBAGU UTARA',
            ),
            171 =>
            array(
                'prov' => '71',
                'kab' => '00',
                'kec' => '000',
                'label' => 'PROVINSI SULAWESI UTARA',
            ),
            172 =>
            array(
                'prov' => '71',
                'kab' => '01',
                'kec' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW',
            ),
            173 =>
            array(
                'prov' => '71',
                'kab' => '02',
                'kec' => '000',
                'label' => 'KABUPATEN MINAHASA',
            ),
            174 =>
            array(
                'prov' => '71',
                'kab' => '03',
                'kec' => '000',
                'label' => 'KABUPATEN KEPULAUAN SANGIHE',
            ),
            175 =>
            array(
                'prov' => '71',
                'kab' => '04',
                'kec' => '000',
                'label' => 'KABUPATEN KEPULAUAN TALAUD',
            ),
            176 =>
            array(
                'prov' => '71',
                'kab' => '05',
                'kec' => '000',
                'label' => 'KABUPATEN MINAHASA SELATAN',
            ),
            177 =>
            array(
                'prov' => '71',
                'kab' => '06',
                'kec' => '000',
                'label' => 'KABUPATEN MINAHASA UTARA',
            ),
            178 =>
            array(
                'prov' => '71',
                'kab' => '07',
                'kec' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW UTARA',
            ),
            179 =>
            array(
                'prov' => '71',
                'kab' => '08',
                'kec' => '000',
                'label' => 'KABUPATEN SIAU TAGULANDANG BIARO',
            ),
            180 =>
            array(
                'prov' => '71',
                'kab' => '09',
                'kec' => '000',
                'label' => 'KABUPATEN MINAHASA TENGGARA',
            ),
            181 =>
            array(
                'prov' => '71',
                'kab' => '10',
                'kec' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW SELATAN',
            ),
            182 =>
            array(
                'prov' => '71',
                'kab' => '11',
                'kec' => '000',
                'label' => 'KABUPATEN BOLAANG MONGONDOW TIMUR',
            ),
            183 =>
            array(
                'prov' => '71',
                'kab' => '71',
                'kec' => '000',
                'label' => 'KOTA MANADO',
            ),
            184 =>
            array(
                'prov' => '71',
                'kab' => '72',
                'kec' => '000',
                'label' => 'KOTA BITUNG',
            ),
            185 =>
            array(
                'prov' => '71',
                'kab' => '73',
                'kec' => '000',
                'label' => 'KOTA TOMOHON',
            ),
            186 =>
            array(
                'prov' => '71',
                'kab' => '74',
                'kec' => '000',
                'label' => 'KOTA KOTAMOBAGU',
            ),
        );
        // MasterKecamatan::insert($kec_data);
        foreach ($kec_data as $key => $value) {
            try {
                MasterKecamatan::create($value);
            } catch (\Throwable $th) {
                continue;
            }
        }
    }
}
