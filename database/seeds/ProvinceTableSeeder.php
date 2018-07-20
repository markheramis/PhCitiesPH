<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('province')->delete();
        
        \DB::table('province')->insert(array (
            0 => 
            array (
                'id' => 1,
                'psgcCode' => '012800000',
                'provDesc' => 'ILOCOS NORTE',
                'regCode' => '01',
                'provCode' => '0128',
            ),
            1 => 
            array (
                'id' => 2,
                'psgcCode' => '012900000',
                'provDesc' => 'ILOCOS SUR',
                'regCode' => '01',
                'provCode' => '0129',
            ),
            2 => 
            array (
                'id' => 3,
                'psgcCode' => '013300000',
                'provDesc' => 'LA UNION',
                'regCode' => '01',
                'provCode' => '0133',
            ),
            3 => 
            array (
                'id' => 4,
                'psgcCode' => '015500000',
                'provDesc' => 'PANGASINAN',
                'regCode' => '01',
                'provCode' => '0155',
            ),
            4 => 
            array (
                'id' => 5,
                'psgcCode' => '020900000',
                'provDesc' => 'BATANES',
                'regCode' => '02',
                'provCode' => '0209',
            ),
            5 => 
            array (
                'id' => 6,
                'psgcCode' => '021500000',
                'provDesc' => 'CAGAYAN',
                'regCode' => '02',
                'provCode' => '0215',
            ),
            6 => 
            array (
                'id' => 7,
                'psgcCode' => '023100000',
                'provDesc' => 'ISABELA',
                'regCode' => '02',
                'provCode' => '0231',
            ),
            7 => 
            array (
                'id' => 8,
                'psgcCode' => '025000000',
                'provDesc' => 'NUEVA VIZCAYA',
                'regCode' => '02',
                'provCode' => '0250',
            ),
            8 => 
            array (
                'id' => 9,
                'psgcCode' => '025700000',
                'provDesc' => 'QUIRINO',
                'regCode' => '02',
                'provCode' => '0257',
            ),
            9 => 
            array (
                'id' => 10,
                'psgcCode' => '030800000',
                'provDesc' => 'BATAAN',
                'regCode' => '03',
                'provCode' => '0308',
            ),
            10 => 
            array (
                'id' => 11,
                'psgcCode' => '031400000',
                'provDesc' => 'BULACAN',
                'regCode' => '03',
                'provCode' => '0314',
            ),
            11 => 
            array (
                'id' => 12,
                'psgcCode' => '034900000',
                'provDesc' => 'NUEVA ECIJA',
                'regCode' => '03',
                'provCode' => '0349',
            ),
            12 => 
            array (
                'id' => 13,
                'psgcCode' => '035400000',
                'provDesc' => 'PAMPANGA',
                'regCode' => '03',
                'provCode' => '0354',
            ),
            13 => 
            array (
                'id' => 14,
                'psgcCode' => '036900000',
                'provDesc' => 'TARLAC',
                'regCode' => '03',
                'provCode' => '0369',
            ),
            14 => 
            array (
                'id' => 15,
                'psgcCode' => '037100000',
                'provDesc' => 'ZAMBALES',
                'regCode' => '03',
                'provCode' => '0371',
            ),
            15 => 
            array (
                'id' => 16,
                'psgcCode' => '037700000',
                'provDesc' => 'AURORA',
                'regCode' => '03',
                'provCode' => '0377',
            ),
            16 => 
            array (
                'id' => 17,
                'psgcCode' => '041000000',
                'provDesc' => 'BATANGAS',
                'regCode' => '04',
                'provCode' => '0410',
            ),
            17 => 
            array (
                'id' => 18,
                'psgcCode' => '042100000',
                'provDesc' => 'CAVITE',
                'regCode' => '04',
                'provCode' => '0421',
            ),
            18 => 
            array (
                'id' => 19,
                'psgcCode' => '043400000',
                'provDesc' => 'LAGUNA',
                'regCode' => '04',
                'provCode' => '0434',
            ),
            19 => 
            array (
                'id' => 20,
                'psgcCode' => '045600000',
                'provDesc' => 'QUEZON',
                'regCode' => '04',
                'provCode' => '0456',
            ),
            20 => 
            array (
                'id' => 21,
                'psgcCode' => '045800000',
                'provDesc' => 'RIZAL',
                'regCode' => '04',
                'provCode' => '0458',
            ),
            21 => 
            array (
                'id' => 22,
                'psgcCode' => '174000000',
                'provDesc' => 'MARINDUQUE',
                'regCode' => '17',
                'provCode' => '1740',
            ),
            22 => 
            array (
                'id' => 23,
                'psgcCode' => '175100000',
                'provDesc' => 'OCCIDENTAL MINDORO',
                'regCode' => '17',
                'provCode' => '1751',
            ),
            23 => 
            array (
                'id' => 24,
                'psgcCode' => '175200000',
                'provDesc' => 'ORIENTAL MINDORO',
                'regCode' => '17',
                'provCode' => '1752',
            ),
            24 => 
            array (
                'id' => 25,
                'psgcCode' => '175300000',
                'provDesc' => 'PALAWAN',
                'regCode' => '17',
                'provCode' => '1753',
            ),
            25 => 
            array (
                'id' => 26,
                'psgcCode' => '175900000',
                'provDesc' => 'ROMBLON',
                'regCode' => '17',
                'provCode' => '1759',
            ),
            26 => 
            array (
                'id' => 27,
                'psgcCode' => '050500000',
                'provDesc' => 'ALBAY',
                'regCode' => '05',
                'provCode' => '0505',
            ),
            27 => 
            array (
                'id' => 28,
                'psgcCode' => '051600000',
                'provDesc' => 'CAMARINES NORTE',
                'regCode' => '05',
                'provCode' => '0516',
            ),
            28 => 
            array (
                'id' => 29,
                'psgcCode' => '051700000',
                'provDesc' => 'CAMARINES SUR',
                'regCode' => '05',
                'provCode' => '0517',
            ),
            29 => 
            array (
                'id' => 30,
                'psgcCode' => '052000000',
                'provDesc' => 'CATANDUANES',
                'regCode' => '05',
                'provCode' => '0520',
            ),
            30 => 
            array (
                'id' => 31,
                'psgcCode' => '054100000',
                'provDesc' => 'MASBATE',
                'regCode' => '05',
                'provCode' => '0541',
            ),
            31 => 
            array (
                'id' => 32,
                'psgcCode' => '056200000',
                'provDesc' => 'SORSOGON',
                'regCode' => '05',
                'provCode' => '0562',
            ),
            32 => 
            array (
                'id' => 33,
                'psgcCode' => '060400000',
                'provDesc' => 'AKLAN',
                'regCode' => '06',
                'provCode' => '0604',
            ),
            33 => 
            array (
                'id' => 34,
                'psgcCode' => '060600000',
                'provDesc' => 'ANTIQUE',
                'regCode' => '06',
                'provCode' => '0606',
            ),
            34 => 
            array (
                'id' => 35,
                'psgcCode' => '061900000',
                'provDesc' => 'CAPIZ',
                'regCode' => '06',
                'provCode' => '0619',
            ),
            35 => 
            array (
                'id' => 36,
                'psgcCode' => '063000000',
                'provDesc' => 'ILOILO',
                'regCode' => '06',
                'provCode' => '0630',
            ),
            36 => 
            array (
                'id' => 37,
                'psgcCode' => '064500000',
                'provDesc' => 'NEGROS OCCIDENTAL',
                'regCode' => '06',
                'provCode' => '0645',
            ),
            37 => 
            array (
                'id' => 38,
                'psgcCode' => '067900000',
                'provDesc' => 'GUIMARAS',
                'regCode' => '06',
                'provCode' => '0679',
            ),
            38 => 
            array (
                'id' => 39,
                'psgcCode' => '071200000',
                'provDesc' => 'BOHOL',
                'regCode' => '07',
                'provCode' => '0712',
            ),
            39 => 
            array (
                'id' => 40,
                'psgcCode' => '072200000',
                'provDesc' => 'CEBU',
                'regCode' => '07',
                'provCode' => '0722',
            ),
            40 => 
            array (
                'id' => 41,
                'psgcCode' => '074600000',
                'provDesc' => 'NEGROS ORIENTAL',
                'regCode' => '07',
                'provCode' => '0746',
            ),
            41 => 
            array (
                'id' => 42,
                'psgcCode' => '076100000',
                'provDesc' => 'SIQUIJOR',
                'regCode' => '07',
                'provCode' => '0761',
            ),
            42 => 
            array (
                'id' => 43,
                'psgcCode' => '082600000',
                'provDesc' => 'EASTERN SAMAR',
                'regCode' => '08',
                'provCode' => '0826',
            ),
            43 => 
            array (
                'id' => 44,
                'psgcCode' => '083700000',
                'provDesc' => 'LEYTE',
                'regCode' => '08',
                'provCode' => '0837',
            ),
            44 => 
            array (
                'id' => 45,
                'psgcCode' => '084800000',
                'provDesc' => 'NORTHERN SAMAR',
                'regCode' => '08',
                'provCode' => '0848',
            ),
            45 => 
            array (
                'id' => 46,
                'psgcCode' => '086000000',
            'provDesc' => 'SAMAR (WESTERN SAMAR)',
                'regCode' => '08',
                'provCode' => '0860',
            ),
            46 => 
            array (
                'id' => 47,
                'psgcCode' => '086400000',
                'provDesc' => 'SOUTHERN LEYTE',
                'regCode' => '08',
                'provCode' => '0864',
            ),
            47 => 
            array (
                'id' => 48,
                'psgcCode' => '087800000',
                'provDesc' => 'BILIRAN',
                'regCode' => '08',
                'provCode' => '0878',
            ),
            48 => 
            array (
                'id' => 49,
                'psgcCode' => '097200000',
                'provDesc' => 'ZAMBOANGA DEL NORTE',
                'regCode' => '09',
                'provCode' => '0972',
            ),
            49 => 
            array (
                'id' => 50,
                'psgcCode' => '097300000',
                'provDesc' => 'ZAMBOANGA DEL SUR',
                'regCode' => '09',
                'provCode' => '0973',
            ),
            50 => 
            array (
                'id' => 51,
                'psgcCode' => '098300000',
                'provDesc' => 'ZAMBOANGA SIBUGAY',
                'regCode' => '09',
                'provCode' => '0983',
            ),
            51 => 
            array (
                'id' => 52,
                'psgcCode' => '099700000',
                'provDesc' => 'CITY OF ISABELA',
                'regCode' => '09',
                'provCode' => '0997',
            ),
            52 => 
            array (
                'id' => 53,
                'psgcCode' => '101300000',
                'provDesc' => 'BUKIDNON',
                'regCode' => '10',
                'provCode' => '1013',
            ),
            53 => 
            array (
                'id' => 54,
                'psgcCode' => '101800000',
                'provDesc' => 'CAMIGUIN',
                'regCode' => '10',
                'provCode' => '1018',
            ),
            54 => 
            array (
                'id' => 55,
                'psgcCode' => '103500000',
                'provDesc' => 'LANAO DEL NORTE',
                'regCode' => '10',
                'provCode' => '1035',
            ),
            55 => 
            array (
                'id' => 56,
                'psgcCode' => '104200000',
                'provDesc' => 'MISAMIS OCCIDENTAL',
                'regCode' => '10',
                'provCode' => '1042',
            ),
            56 => 
            array (
                'id' => 57,
                'psgcCode' => '104300000',
                'provDesc' => 'MISAMIS ORIENTAL',
                'regCode' => '10',
                'provCode' => '1043',
            ),
            57 => 
            array (
                'id' => 58,
                'psgcCode' => '112300000',
                'provDesc' => 'DAVAO DEL NORTE',
                'regCode' => '11',
                'provCode' => '1123',
            ),
            58 => 
            array (
                'id' => 59,
                'psgcCode' => '112400000',
                'provDesc' => 'DAVAO DEL SUR',
                'regCode' => '11',
                'provCode' => '1124',
            ),
            59 => 
            array (
                'id' => 60,
                'psgcCode' => '112500000',
                'provDesc' => 'DAVAO ORIENTAL',
                'regCode' => '11',
                'provCode' => '1125',
            ),
            60 => 
            array (
                'id' => 61,
                'psgcCode' => '118200000',
                'provDesc' => 'COMPOSTELA VALLEY',
                'regCode' => '11',
                'provCode' => '1182',
            ),
            61 => 
            array (
                'id' => 62,
                'psgcCode' => '118600000',
                'provDesc' => 'DAVAO OCCIDENTAL',
                'regCode' => '11',
                'provCode' => '1186',
            ),
            62 => 
            array (
                'id' => 63,
                'psgcCode' => '124700000',
            'provDesc' => 'COTABATO (NORTH COTABATO)',
                'regCode' => '12',
                'provCode' => '1247',
            ),
            63 => 
            array (
                'id' => 64,
                'psgcCode' => '126300000',
                'provDesc' => 'SOUTH COTABATO',
                'regCode' => '12',
                'provCode' => '1263',
            ),
            64 => 
            array (
                'id' => 65,
                'psgcCode' => '126500000',
                'provDesc' => 'SULTAN KUDARAT',
                'regCode' => '12',
                'provCode' => '1265',
            ),
            65 => 
            array (
                'id' => 66,
                'psgcCode' => '128000000',
                'provDesc' => 'SARANGANI',
                'regCode' => '12',
                'provCode' => '1280',
            ),
            66 => 
            array (
                'id' => 67,
                'psgcCode' => '129800000',
                'provDesc' => 'COTABATO CITY',
                'regCode' => '12',
                'provCode' => '1298',
            ),
            67 => 
            array (
                'id' => 68,
                'psgcCode' => '133900000',
                'provDesc' => 'NCR, CITY OF MANILA, FIRST DISTRICT',
                'regCode' => '13',
                'provCode' => '1339',
            ),
            68 => 
            array (
                'id' => 69,
                'psgcCode' => '133900000',
                'provDesc' => 'CITY OF MANILA',
                'regCode' => '13',
                'provCode' => '1339',
            ),
            69 => 
            array (
                'id' => 70,
                'psgcCode' => '137400000',
                'provDesc' => 'NCR, SECOND DISTRICT',
                'regCode' => '13',
                'provCode' => '1374',
            ),
            70 => 
            array (
                'id' => 71,
                'psgcCode' => '137500000',
                'provDesc' => 'NCR, THIRD DISTRICT',
                'regCode' => '13',
                'provCode' => '1375',
            ),
            71 => 
            array (
                'id' => 72,
                'psgcCode' => '137600000',
                'provDesc' => 'NCR, FOURTH DISTRICT',
                'regCode' => '13',
                'provCode' => '1376',
            ),
            72 => 
            array (
                'id' => 73,
                'psgcCode' => '140100000',
                'provDesc' => 'ABRA',
                'regCode' => '14',
                'provCode' => '1401',
            ),
            73 => 
            array (
                'id' => 74,
                'psgcCode' => '141100000',
                'provDesc' => 'BENGUET',
                'regCode' => '14',
                'provCode' => '1411',
            ),
            74 => 
            array (
                'id' => 75,
                'psgcCode' => '142700000',
                'provDesc' => 'IFUGAO',
                'regCode' => '14',
                'provCode' => '1427',
            ),
            75 => 
            array (
                'id' => 76,
                'psgcCode' => '143200000',
                'provDesc' => 'KALINGA',
                'regCode' => '14',
                'provCode' => '1432',
            ),
            76 => 
            array (
                'id' => 77,
                'psgcCode' => '144400000',
                'provDesc' => 'MOUNTAIN PROVINCE',
                'regCode' => '14',
                'provCode' => '1444',
            ),
            77 => 
            array (
                'id' => 78,
                'psgcCode' => '148100000',
                'provDesc' => 'APAYAO',
                'regCode' => '14',
                'provCode' => '1481',
            ),
            78 => 
            array (
                'id' => 79,
                'psgcCode' => '150700000',
                'provDesc' => 'BASILAN',
                'regCode' => '15',
                'provCode' => '1507',
            ),
            79 => 
            array (
                'id' => 80,
                'psgcCode' => '153600000',
                'provDesc' => 'LANAO DEL SUR',
                'regCode' => '15',
                'provCode' => '1536',
            ),
            80 => 
            array (
                'id' => 81,
                'psgcCode' => '153800000',
                'provDesc' => 'MAGUINDANAO',
                'regCode' => '15',
                'provCode' => '1538',
            ),
            81 => 
            array (
                'id' => 82,
                'psgcCode' => '156600000',
                'provDesc' => 'SULU',
                'regCode' => '15',
                'provCode' => '1566',
            ),
            82 => 
            array (
                'id' => 83,
                'psgcCode' => '157000000',
                'provDesc' => 'TAWI-TAWI',
                'regCode' => '15',
                'provCode' => '1570',
            ),
            83 => 
            array (
                'id' => 84,
                'psgcCode' => '160200000',
                'provDesc' => 'AGUSAN DEL NORTE',
                'regCode' => '16',
                'provCode' => '1602',
            ),
            84 => 
            array (
                'id' => 85,
                'psgcCode' => '160300000',
                'provDesc' => 'AGUSAN DEL SUR',
                'regCode' => '16',
                'provCode' => '1603',
            ),
            85 => 
            array (
                'id' => 86,
                'psgcCode' => '166700000',
                'provDesc' => 'SURIGAO DEL NORTE',
                'regCode' => '16',
                'provCode' => '1667',
            ),
            86 => 
            array (
                'id' => 87,
                'psgcCode' => '166800000',
                'provDesc' => 'SURIGAO DEL SUR',
                'regCode' => '16',
                'provCode' => '1668',
            ),
            87 => 
            array (
                'id' => 88,
                'psgcCode' => '168500000',
                'provDesc' => 'DINAGAT ISLANDS',
                'regCode' => '16',
                'provCode' => '1685',
            ),
        ));
        
        
    }
}