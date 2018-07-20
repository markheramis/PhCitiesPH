<?php

use Illuminate\Database\Seeder;

class CityTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('city')->delete();
        
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1,
                'psgcCode' => '012801000',
                'citymunDesc' => 'ADAMS',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012801',
            ),
            1 => 
            array (
                'id' => 2,
                'psgcCode' => '012802000',
                'citymunDesc' => 'BACARRA',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012802',
            ),
            2 => 
            array (
                'id' => 3,
                'psgcCode' => '012803000',
                'citymunDesc' => 'BADOC',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012803',
            ),
            3 => 
            array (
                'id' => 4,
                'psgcCode' => '012804000',
                'citymunDesc' => 'BANGUI',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012804',
            ),
            4 => 
            array (
                'id' => 5,
                'psgcCode' => '012805000',
                'citymunDesc' => 'CITY OF BATAC',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012805',
            ),
            5 => 
            array (
                'id' => 6,
                'psgcCode' => '012806000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012806',
            ),
            6 => 
            array (
                'id' => 7,
                'psgcCode' => '012807000',
                'citymunDesc' => 'CARASI',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012807',
            ),
            7 => 
            array (
                'id' => 8,
                'psgcCode' => '012808000',
                'citymunDesc' => 'CURRIMAO',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012808',
            ),
            8 => 
            array (
                'id' => 9,
                'psgcCode' => '012809000',
                'citymunDesc' => 'DINGRAS',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012809',
            ),
            9 => 
            array (
                'id' => 10,
                'psgcCode' => '012810000',
                'citymunDesc' => 'DUMALNEG',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012810',
            ),
            10 => 
            array (
                'id' => 11,
                'psgcCode' => '012811000',
            'citymunDesc' => 'BANNA (ESPIRITU)',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012811',
            ),
            11 => 
            array (
                'id' => 12,
                'psgcCode' => '012812000',
            'citymunDesc' => 'LAOAG CITY (Capital)',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012812',
            ),
            12 => 
            array (
                'id' => 13,
                'psgcCode' => '012813000',
                'citymunDesc' => 'MARCOS',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012813',
            ),
            13 => 
            array (
                'id' => 14,
                'psgcCode' => '012814000',
                'citymunDesc' => 'NUEVA ERA',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012814',
            ),
            14 => 
            array (
                'id' => 15,
                'psgcCode' => '012815000',
                'citymunDesc' => 'PAGUDPUD',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012815',
            ),
            15 => 
            array (
                'id' => 16,
                'psgcCode' => '012816000',
                'citymunDesc' => 'PAOAY',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012816',
            ),
            16 => 
            array (
                'id' => 17,
                'psgcCode' => '012817000',
                'citymunDesc' => 'PASUQUIN',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012817',
            ),
            17 => 
            array (
                'id' => 18,
                'psgcCode' => '012818000',
                'citymunDesc' => 'PIDDIG',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012818',
            ),
            18 => 
            array (
                'id' => 19,
                'psgcCode' => '012819000',
                'citymunDesc' => 'PINILI',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012819',
            ),
            19 => 
            array (
                'id' => 20,
                'psgcCode' => '012820000',
                'citymunDesc' => 'SAN NICOLAS',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012820',
            ),
            20 => 
            array (
                'id' => 21,
                'psgcCode' => '012821000',
                'citymunDesc' => 'SARRAT',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012821',
            ),
            21 => 
            array (
                'id' => 22,
                'psgcCode' => '012822000',
                'citymunDesc' => 'SOLSONA',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012822',
            ),
            22 => 
            array (
                'id' => 23,
                'psgcCode' => '012823000',
                'citymunDesc' => 'VINTAR',
                'regDesc' => '01',
                'provCode' => '0128',
                'citymunCode' => '012823',
            ),
            23 => 
            array (
                'id' => 24,
                'psgcCode' => '012901000',
                'citymunDesc' => 'ALILEM',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012901',
            ),
            24 => 
            array (
                'id' => 25,
                'psgcCode' => '012902000',
                'citymunDesc' => 'BANAYOYO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012902',
            ),
            25 => 
            array (
                'id' => 26,
                'psgcCode' => '012903000',
                'citymunDesc' => 'BANTAY',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012903',
            ),
            26 => 
            array (
                'id' => 27,
                'psgcCode' => '012904000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012904',
            ),
            27 => 
            array (
                'id' => 28,
                'psgcCode' => '012905000',
                'citymunDesc' => 'CABUGAO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012905',
            ),
            28 => 
            array (
                'id' => 29,
                'psgcCode' => '012906000',
                'citymunDesc' => 'CITY OF CANDON',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012906',
            ),
            29 => 
            array (
                'id' => 30,
                'psgcCode' => '012907000',
                'citymunDesc' => 'CAOAYAN',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012907',
            ),
            30 => 
            array (
                'id' => 31,
                'psgcCode' => '012908000',
                'citymunDesc' => 'CERVANTES',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012908',
            ),
            31 => 
            array (
                'id' => 32,
                'psgcCode' => '012909000',
                'citymunDesc' => 'GALIMUYOD',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012909',
            ),
            32 => 
            array (
                'id' => 33,
                'psgcCode' => '012910000',
            'citymunDesc' => 'GREGORIO DEL PILAR (CONCEPCION)',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012910',
            ),
            33 => 
            array (
                'id' => 34,
                'psgcCode' => '012911000',
                'citymunDesc' => 'LIDLIDDA',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012911',
            ),
            34 => 
            array (
                'id' => 35,
                'psgcCode' => '012912000',
                'citymunDesc' => 'MAGSINGAL',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012912',
            ),
            35 => 
            array (
                'id' => 36,
                'psgcCode' => '012913000',
                'citymunDesc' => 'NAGBUKEL',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012913',
            ),
            36 => 
            array (
                'id' => 37,
                'psgcCode' => '012914000',
                'citymunDesc' => 'NARVACAN',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012914',
            ),
            37 => 
            array (
                'id' => 38,
                'psgcCode' => '012915000',
            'citymunDesc' => 'QUIRINO (ANGKAKI)',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012915',
            ),
            38 => 
            array (
                'id' => 39,
                'psgcCode' => '012916000',
            'citymunDesc' => 'SALCEDO (BAUGEN)',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012916',
            ),
            39 => 
            array (
                'id' => 40,
                'psgcCode' => '012917000',
                'citymunDesc' => 'SAN EMILIO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012917',
            ),
            40 => 
            array (
                'id' => 41,
                'psgcCode' => '012918000',
                'citymunDesc' => 'SAN ESTEBAN',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012918',
            ),
            41 => 
            array (
                'id' => 42,
                'psgcCode' => '012919000',
                'citymunDesc' => 'SAN ILDEFONSO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012919',
            ),
            42 => 
            array (
                'id' => 43,
                'psgcCode' => '012920000',
            'citymunDesc' => 'SAN JUAN (LAPOG)',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012920',
            ),
            43 => 
            array (
                'id' => 44,
                'psgcCode' => '012921000',
                'citymunDesc' => 'SAN VICENTE',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012921',
            ),
            44 => 
            array (
                'id' => 45,
                'psgcCode' => '012922000',
                'citymunDesc' => 'SANTA',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012922',
            ),
            45 => 
            array (
                'id' => 46,
                'psgcCode' => '012923000',
                'citymunDesc' => 'SANTA CATALINA',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012923',
            ),
            46 => 
            array (
                'id' => 47,
                'psgcCode' => '012924000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012924',
            ),
            47 => 
            array (
                'id' => 48,
                'psgcCode' => '012925000',
                'citymunDesc' => 'SANTA LUCIA',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012925',
            ),
            48 => 
            array (
                'id' => 49,
                'psgcCode' => '012926000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012926',
            ),
            49 => 
            array (
                'id' => 50,
                'psgcCode' => '012927000',
                'citymunDesc' => 'SANTIAGO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012927',
            ),
            50 => 
            array (
                'id' => 51,
                'psgcCode' => '012928000',
                'citymunDesc' => 'SANTO DOMINGO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012928',
            ),
            51 => 
            array (
                'id' => 52,
                'psgcCode' => '012929000',
                'citymunDesc' => 'SIGAY',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012929',
            ),
            52 => 
            array (
                'id' => 53,
                'psgcCode' => '012930000',
                'citymunDesc' => 'SINAIT',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012930',
            ),
            53 => 
            array (
                'id' => 54,
                'psgcCode' => '012931000',
                'citymunDesc' => 'SUGPON',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012931',
            ),
            54 => 
            array (
                'id' => 55,
                'psgcCode' => '012932000',
                'citymunDesc' => 'SUYO',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012932',
            ),
            55 => 
            array (
                'id' => 56,
                'psgcCode' => '012933000',
                'citymunDesc' => 'TAGUDIN',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012933',
            ),
            56 => 
            array (
                'id' => 57,
                'psgcCode' => '012934000',
            'citymunDesc' => 'CITY OF VIGAN (Capital)',
                'regDesc' => '01',
                'provCode' => '0129',
                'citymunCode' => '012934',
            ),
            57 => 
            array (
                'id' => 58,
                'psgcCode' => '013301000',
                'citymunDesc' => 'AGOO',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013301',
            ),
            58 => 
            array (
                'id' => 59,
                'psgcCode' => '013302000',
                'citymunDesc' => 'ARINGAY',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013302',
            ),
            59 => 
            array (
                'id' => 60,
                'psgcCode' => '013303000',
                'citymunDesc' => 'BACNOTAN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013303',
            ),
            60 => 
            array (
                'id' => 61,
                'psgcCode' => '013304000',
                'citymunDesc' => 'BAGULIN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013304',
            ),
            61 => 
            array (
                'id' => 62,
                'psgcCode' => '013305000',
                'citymunDesc' => 'BALAOAN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013305',
            ),
            62 => 
            array (
                'id' => 63,
                'psgcCode' => '013306000',
                'citymunDesc' => 'BANGAR',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013306',
            ),
            63 => 
            array (
                'id' => 64,
                'psgcCode' => '013307000',
                'citymunDesc' => 'BAUANG',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013307',
            ),
            64 => 
            array (
                'id' => 65,
                'psgcCode' => '013308000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013308',
            ),
            65 => 
            array (
                'id' => 66,
                'psgcCode' => '013309000',
                'citymunDesc' => 'CABA',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013309',
            ),
            66 => 
            array (
                'id' => 67,
                'psgcCode' => '013310000',
                'citymunDesc' => 'LUNA',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013310',
            ),
            67 => 
            array (
                'id' => 68,
                'psgcCode' => '013311000',
                'citymunDesc' => 'NAGUILIAN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013311',
            ),
            68 => 
            array (
                'id' => 69,
                'psgcCode' => '013312000',
                'citymunDesc' => 'PUGO',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013312',
            ),
            69 => 
            array (
                'id' => 70,
                'psgcCode' => '013313000',
                'citymunDesc' => 'ROSARIO',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013313',
            ),
            70 => 
            array (
                'id' => 71,
                'psgcCode' => '013314000',
            'citymunDesc' => 'CITY OF SAN FERNANDO (Capital)',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013314',
            ),
            71 => 
            array (
                'id' => 72,
                'psgcCode' => '013315000',
                'citymunDesc' => 'SAN GABRIEL',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013315',
            ),
            72 => 
            array (
                'id' => 73,
                'psgcCode' => '013316000',
                'citymunDesc' => 'SAN JUAN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013316',
            ),
            73 => 
            array (
                'id' => 74,
                'psgcCode' => '013317000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013317',
            ),
            74 => 
            array (
                'id' => 75,
                'psgcCode' => '013318000',
                'citymunDesc' => 'SANTOL',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013318',
            ),
            75 => 
            array (
                'id' => 76,
                'psgcCode' => '013319000',
                'citymunDesc' => 'SUDIPEN',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013319',
            ),
            76 => 
            array (
                'id' => 77,
                'psgcCode' => '013320000',
                'citymunDesc' => 'TUBAO',
                'regDesc' => '01',
                'provCode' => '0133',
                'citymunCode' => '013320',
            ),
            77 => 
            array (
                'id' => 78,
                'psgcCode' => '015501000',
                'citymunDesc' => 'AGNO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015501',
            ),
            78 => 
            array (
                'id' => 79,
                'psgcCode' => '015502000',
                'citymunDesc' => 'AGUILAR',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015502',
            ),
            79 => 
            array (
                'id' => 80,
                'psgcCode' => '015503000',
                'citymunDesc' => 'CITY OF ALAMINOS',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015503',
            ),
            80 => 
            array (
                'id' => 81,
                'psgcCode' => '015504000',
                'citymunDesc' => 'ALCALA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015504',
            ),
            81 => 
            array (
                'id' => 82,
                'psgcCode' => '015505000',
                'citymunDesc' => 'ANDA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015505',
            ),
            82 => 
            array (
                'id' => 83,
                'psgcCode' => '015506000',
                'citymunDesc' => 'ASINGAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015506',
            ),
            83 => 
            array (
                'id' => 84,
                'psgcCode' => '015507000',
                'citymunDesc' => 'BALUNGAO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015507',
            ),
            84 => 
            array (
                'id' => 85,
                'psgcCode' => '015508000',
                'citymunDesc' => 'BANI',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015508',
            ),
            85 => 
            array (
                'id' => 86,
                'psgcCode' => '015509000',
                'citymunDesc' => 'BASISTA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015509',
            ),
            86 => 
            array (
                'id' => 87,
                'psgcCode' => '015510000',
                'citymunDesc' => 'BAUTISTA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015510',
            ),
            87 => 
            array (
                'id' => 88,
                'psgcCode' => '015511000',
                'citymunDesc' => 'BAYAMBANG',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015511',
            ),
            88 => 
            array (
                'id' => 89,
                'psgcCode' => '015512000',
                'citymunDesc' => 'BINALONAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015512',
            ),
            89 => 
            array (
                'id' => 90,
                'psgcCode' => '015513000',
                'citymunDesc' => 'BINMALEY',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015513',
            ),
            90 => 
            array (
                'id' => 91,
                'psgcCode' => '015514000',
                'citymunDesc' => 'BOLINAO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015514',
            ),
            91 => 
            array (
                'id' => 92,
                'psgcCode' => '015515000',
                'citymunDesc' => 'BUGALLON',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015515',
            ),
            92 => 
            array (
                'id' => 93,
                'psgcCode' => '015516000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015516',
            ),
            93 => 
            array (
                'id' => 94,
                'psgcCode' => '015517000',
                'citymunDesc' => 'CALASIAO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015517',
            ),
            94 => 
            array (
                'id' => 95,
                'psgcCode' => '015518000',
                'citymunDesc' => 'DAGUPAN CITY',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015518',
            ),
            95 => 
            array (
                'id' => 96,
                'psgcCode' => '015519000',
                'citymunDesc' => 'DASOL',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015519',
            ),
            96 => 
            array (
                'id' => 97,
                'psgcCode' => '015520000',
                'citymunDesc' => 'INFANTA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015520',
            ),
            97 => 
            array (
                'id' => 98,
                'psgcCode' => '015521000',
                'citymunDesc' => 'LABRADOR',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015521',
            ),
            98 => 
            array (
                'id' => 99,
                'psgcCode' => '015522000',
            'citymunDesc' => 'LINGAYEN (Capital)',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015522',
            ),
            99 => 
            array (
                'id' => 100,
                'psgcCode' => '015523000',
                'citymunDesc' => 'MABINI',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015523',
            ),
            100 => 
            array (
                'id' => 101,
                'psgcCode' => '015524000',
                'citymunDesc' => 'MALASIQUI',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015524',
            ),
            101 => 
            array (
                'id' => 102,
                'psgcCode' => '015525000',
                'citymunDesc' => 'MANAOAG',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015525',
            ),
            102 => 
            array (
                'id' => 103,
                'psgcCode' => '015526000',
                'citymunDesc' => 'MANGALDAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015526',
            ),
            103 => 
            array (
                'id' => 104,
                'psgcCode' => '015527000',
                'citymunDesc' => 'MANGATAREM',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015527',
            ),
            104 => 
            array (
                'id' => 105,
                'psgcCode' => '015528000',
                'citymunDesc' => 'MAPANDAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015528',
            ),
            105 => 
            array (
                'id' => 106,
                'psgcCode' => '015529000',
                'citymunDesc' => 'NATIVIDAD',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015529',
            ),
            106 => 
            array (
                'id' => 107,
                'psgcCode' => '015530000',
                'citymunDesc' => 'POZORRUBIO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015530',
            ),
            107 => 
            array (
                'id' => 108,
                'psgcCode' => '015531000',
                'citymunDesc' => 'ROSALES',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015531',
            ),
            108 => 
            array (
                'id' => 109,
                'psgcCode' => '015532000',
                'citymunDesc' => 'SAN CARLOS CITY',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015532',
            ),
            109 => 
            array (
                'id' => 110,
                'psgcCode' => '015533000',
                'citymunDesc' => 'SAN FABIAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015533',
            ),
            110 => 
            array (
                'id' => 111,
                'psgcCode' => '015534000',
                'citymunDesc' => 'SAN JACINTO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015534',
            ),
            111 => 
            array (
                'id' => 112,
                'psgcCode' => '015535000',
                'citymunDesc' => 'SAN MANUEL',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015535',
            ),
            112 => 
            array (
                'id' => 113,
                'psgcCode' => '015536000',
                'citymunDesc' => 'SAN NICOLAS',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015536',
            ),
            113 => 
            array (
                'id' => 114,
                'psgcCode' => '015537000',
                'citymunDesc' => 'SAN QUINTIN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015537',
            ),
            114 => 
            array (
                'id' => 115,
                'psgcCode' => '015538000',
                'citymunDesc' => 'SANTA BARBARA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015538',
            ),
            115 => 
            array (
                'id' => 116,
                'psgcCode' => '015539000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015539',
            ),
            116 => 
            array (
                'id' => 117,
                'psgcCode' => '015540000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015540',
            ),
            117 => 
            array (
                'id' => 118,
                'psgcCode' => '015541000',
                'citymunDesc' => 'SISON',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015541',
            ),
            118 => 
            array (
                'id' => 119,
                'psgcCode' => '015542000',
                'citymunDesc' => 'SUAL',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015542',
            ),
            119 => 
            array (
                'id' => 120,
                'psgcCode' => '015543000',
                'citymunDesc' => 'TAYUG',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015543',
            ),
            120 => 
            array (
                'id' => 121,
                'psgcCode' => '015544000',
                'citymunDesc' => 'UMINGAN',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015544',
            ),
            121 => 
            array (
                'id' => 122,
                'psgcCode' => '015545000',
                'citymunDesc' => 'URBIZTONDO',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015545',
            ),
            122 => 
            array (
                'id' => 123,
                'psgcCode' => '015546000',
                'citymunDesc' => 'CITY OF URDANETA',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015546',
            ),
            123 => 
            array (
                'id' => 124,
                'psgcCode' => '015547000',
                'citymunDesc' => 'VILLASIS',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015547',
            ),
            124 => 
            array (
                'id' => 125,
                'psgcCode' => '015548000',
                'citymunDesc' => 'LAOAC',
                'regDesc' => '01',
                'provCode' => '0155',
                'citymunCode' => '015548',
            ),
            125 => 
            array (
                'id' => 126,
                'psgcCode' => '020901000',
            'citymunDesc' => 'BASCO (Capital)',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020901',
            ),
            126 => 
            array (
                'id' => 127,
                'psgcCode' => '020902000',
                'citymunDesc' => 'ITBAYAT',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020902',
            ),
            127 => 
            array (
                'id' => 128,
                'psgcCode' => '020903000',
                'citymunDesc' => 'IVANA',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020903',
            ),
            128 => 
            array (
                'id' => 129,
                'psgcCode' => '020904000',
                'citymunDesc' => 'MAHATAO',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020904',
            ),
            129 => 
            array (
                'id' => 130,
                'psgcCode' => '020905000',
                'citymunDesc' => 'SABTANG',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020905',
            ),
            130 => 
            array (
                'id' => 131,
                'psgcCode' => '020906000',
                'citymunDesc' => 'UYUGAN',
                'regDesc' => '02',
                'provCode' => '0209',
                'citymunCode' => '020906',
            ),
            131 => 
            array (
                'id' => 132,
                'psgcCode' => '021501000',
                'citymunDesc' => 'ABULUG',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021501',
            ),
            132 => 
            array (
                'id' => 133,
                'psgcCode' => '021502000',
                'citymunDesc' => 'ALCALA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021502',
            ),
            133 => 
            array (
                'id' => 134,
                'psgcCode' => '021503000',
                'citymunDesc' => 'ALLACAPAN',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021503',
            ),
            134 => 
            array (
                'id' => 135,
                'psgcCode' => '021504000',
                'citymunDesc' => 'AMULUNG',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021504',
            ),
            135 => 
            array (
                'id' => 136,
                'psgcCode' => '021505000',
                'citymunDesc' => 'APARRI',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021505',
            ),
            136 => 
            array (
                'id' => 137,
                'psgcCode' => '021506000',
                'citymunDesc' => 'BAGGAO',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021506',
            ),
            137 => 
            array (
                'id' => 138,
                'psgcCode' => '021507000',
                'citymunDesc' => 'BALLESTEROS',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021507',
            ),
            138 => 
            array (
                'id' => 139,
                'psgcCode' => '021508000',
                'citymunDesc' => 'BUGUEY',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021508',
            ),
            139 => 
            array (
                'id' => 140,
                'psgcCode' => '021509000',
                'citymunDesc' => 'CALAYAN',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021509',
            ),
            140 => 
            array (
                'id' => 141,
                'psgcCode' => '021510000',
                'citymunDesc' => 'CAMALANIUGAN',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021510',
            ),
            141 => 
            array (
                'id' => 142,
                'psgcCode' => '021511000',
                'citymunDesc' => 'CLAVERIA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021511',
            ),
            142 => 
            array (
                'id' => 143,
                'psgcCode' => '021512000',
                'citymunDesc' => 'ENRILE',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021512',
            ),
            143 => 
            array (
                'id' => 144,
                'psgcCode' => '021513000',
                'citymunDesc' => 'GATTARAN',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021513',
            ),
            144 => 
            array (
                'id' => 145,
                'psgcCode' => '021514000',
                'citymunDesc' => 'GONZAGA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021514',
            ),
            145 => 
            array (
                'id' => 146,
                'psgcCode' => '021515000',
                'citymunDesc' => 'IGUIG',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021515',
            ),
            146 => 
            array (
                'id' => 147,
                'psgcCode' => '021516000',
                'citymunDesc' => 'LAL-LO',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021516',
            ),
            147 => 
            array (
                'id' => 148,
                'psgcCode' => '021517000',
                'citymunDesc' => 'LASAM',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021517',
            ),
            148 => 
            array (
                'id' => 149,
                'psgcCode' => '021518000',
                'citymunDesc' => 'PAMPLONA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021518',
            ),
            149 => 
            array (
                'id' => 150,
                'psgcCode' => '021519000',
                'citymunDesc' => 'PEÑABLANCA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021519',
            ),
            150 => 
            array (
                'id' => 151,
                'psgcCode' => '021520000',
                'citymunDesc' => 'PIAT',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021520',
            ),
            151 => 
            array (
                'id' => 152,
                'psgcCode' => '021521000',
                'citymunDesc' => 'RIZAL',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021521',
            ),
            152 => 
            array (
                'id' => 153,
                'psgcCode' => '021522000',
                'citymunDesc' => 'SANCHEZ-MIRA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021522',
            ),
            153 => 
            array (
                'id' => 154,
                'psgcCode' => '021523000',
                'citymunDesc' => 'SANTA ANA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021523',
            ),
            154 => 
            array (
                'id' => 155,
                'psgcCode' => '021524000',
                'citymunDesc' => 'SANTA PRAXEDES',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021524',
            ),
            155 => 
            array (
                'id' => 156,
                'psgcCode' => '021525000',
                'citymunDesc' => 'SANTA TERESITA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021525',
            ),
            156 => 
            array (
                'id' => 157,
                'psgcCode' => '021526000',
            'citymunDesc' => 'SANTO NIÑO (FAIRE)',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021526',
            ),
            157 => 
            array (
                'id' => 158,
                'psgcCode' => '021527000',
                'citymunDesc' => 'SOLANA',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021527',
            ),
            158 => 
            array (
                'id' => 159,
                'psgcCode' => '021528000',
                'citymunDesc' => 'TUAO',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021528',
            ),
            159 => 
            array (
                'id' => 160,
                'psgcCode' => '021529000',
            'citymunDesc' => 'TUGUEGARAO CITY (Capital)',
                'regDesc' => '02',
                'provCode' => '0215',
                'citymunCode' => '021529',
            ),
            160 => 
            array (
                'id' => 161,
                'psgcCode' => '023101000',
                'citymunDesc' => 'ALICIA',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023101',
            ),
            161 => 
            array (
                'id' => 162,
                'psgcCode' => '023102000',
                'citymunDesc' => 'ANGADANAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023102',
            ),
            162 => 
            array (
                'id' => 163,
                'psgcCode' => '023103000',
                'citymunDesc' => 'AURORA',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023103',
            ),
            163 => 
            array (
                'id' => 164,
                'psgcCode' => '023104000',
                'citymunDesc' => 'BENITO SOLIVEN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023104',
            ),
            164 => 
            array (
                'id' => 165,
                'psgcCode' => '023105000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023105',
            ),
            165 => 
            array (
                'id' => 166,
                'psgcCode' => '023106000',
                'citymunDesc' => 'CABAGAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023106',
            ),
            166 => 
            array (
                'id' => 167,
                'psgcCode' => '023107000',
                'citymunDesc' => 'CABATUAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023107',
            ),
            167 => 
            array (
                'id' => 168,
                'psgcCode' => '023108000',
                'citymunDesc' => 'CITY OF CAUAYAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023108',
            ),
            168 => 
            array (
                'id' => 169,
                'psgcCode' => '023109000',
                'citymunDesc' => 'CORDON',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023109',
            ),
            169 => 
            array (
                'id' => 170,
                'psgcCode' => '023110000',
                'citymunDesc' => 'DINAPIGUE',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023110',
            ),
            170 => 
            array (
                'id' => 171,
                'psgcCode' => '023111000',
                'citymunDesc' => 'DIVILACAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023111',
            ),
            171 => 
            array (
                'id' => 172,
                'psgcCode' => '023112000',
                'citymunDesc' => 'ECHAGUE',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023112',
            ),
            172 => 
            array (
                'id' => 173,
                'psgcCode' => '023113000',
                'citymunDesc' => 'GAMU',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023113',
            ),
            173 => 
            array (
                'id' => 174,
                'psgcCode' => '023114000',
            'citymunDesc' => 'ILAGAN CITY (Capital)',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023114',
            ),
            174 => 
            array (
                'id' => 175,
                'psgcCode' => '023115000',
                'citymunDesc' => 'JONES',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023115',
            ),
            175 => 
            array (
                'id' => 176,
                'psgcCode' => '023116000',
                'citymunDesc' => 'LUNA',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023116',
            ),
            176 => 
            array (
                'id' => 177,
                'psgcCode' => '023117000',
                'citymunDesc' => 'MACONACON',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023117',
            ),
            177 => 
            array (
                'id' => 178,
                'psgcCode' => '023118000',
            'citymunDesc' => 'DELFIN ALBANO (MAGSAYSAY)',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023118',
            ),
            178 => 
            array (
                'id' => 179,
                'psgcCode' => '023119000',
                'citymunDesc' => 'MALLIG',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023119',
            ),
            179 => 
            array (
                'id' => 180,
                'psgcCode' => '023120000',
                'citymunDesc' => 'NAGUILIAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023120',
            ),
            180 => 
            array (
                'id' => 181,
                'psgcCode' => '023121000',
                'citymunDesc' => 'PALANAN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023121',
            ),
            181 => 
            array (
                'id' => 182,
                'psgcCode' => '023122000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023122',
            ),
            182 => 
            array (
                'id' => 183,
                'psgcCode' => '023123000',
                'citymunDesc' => 'QUIRINO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023123',
            ),
            183 => 
            array (
                'id' => 184,
                'psgcCode' => '023124000',
                'citymunDesc' => 'RAMON',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023124',
            ),
            184 => 
            array (
                'id' => 185,
                'psgcCode' => '023125000',
                'citymunDesc' => 'REINA MERCEDES',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023125',
            ),
            185 => 
            array (
                'id' => 186,
                'psgcCode' => '023126000',
                'citymunDesc' => 'ROXAS',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023126',
            ),
            186 => 
            array (
                'id' => 187,
                'psgcCode' => '023127000',
                'citymunDesc' => 'SAN AGUSTIN',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023127',
            ),
            187 => 
            array (
                'id' => 188,
                'psgcCode' => '023128000',
                'citymunDesc' => 'SAN GUILLERMO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023128',
            ),
            188 => 
            array (
                'id' => 189,
                'psgcCode' => '023129000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023129',
            ),
            189 => 
            array (
                'id' => 190,
                'psgcCode' => '023130000',
                'citymunDesc' => 'SAN MANUEL',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023130',
            ),
            190 => 
            array (
                'id' => 191,
                'psgcCode' => '023131000',
                'citymunDesc' => 'SAN MARIANO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023131',
            ),
            191 => 
            array (
                'id' => 192,
                'psgcCode' => '023132000',
                'citymunDesc' => 'SAN MATEO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023132',
            ),
            192 => 
            array (
                'id' => 193,
                'psgcCode' => '023133000',
                'citymunDesc' => 'SAN PABLO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023133',
            ),
            193 => 
            array (
                'id' => 194,
                'psgcCode' => '023134000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023134',
            ),
            194 => 
            array (
                'id' => 195,
                'psgcCode' => '023135000',
                'citymunDesc' => 'CITY OF SANTIAGO',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023135',
            ),
            195 => 
            array (
                'id' => 196,
                'psgcCode' => '023136000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023136',
            ),
            196 => 
            array (
                'id' => 197,
                'psgcCode' => '023137000',
                'citymunDesc' => 'TUMAUINI',
                'regDesc' => '02',
                'provCode' => '0231',
                'citymunCode' => '023137',
            ),
            197 => 
            array (
                'id' => 198,
                'psgcCode' => '025001000',
                'citymunDesc' => 'AMBAGUIO',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025001',
            ),
            198 => 
            array (
                'id' => 199,
                'psgcCode' => '025002000',
                'citymunDesc' => 'ARITAO',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025002',
            ),
            199 => 
            array (
                'id' => 200,
                'psgcCode' => '025003000',
                'citymunDesc' => 'BAGABAG',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025003',
            ),
            200 => 
            array (
                'id' => 201,
                'psgcCode' => '025004000',
                'citymunDesc' => 'BAMBANG',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025004',
            ),
            201 => 
            array (
                'id' => 202,
                'psgcCode' => '025005000',
            'citymunDesc' => 'BAYOMBONG (Capital)',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025005',
            ),
            202 => 
            array (
                'id' => 203,
                'psgcCode' => '025006000',
                'citymunDesc' => 'DIADI',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025006',
            ),
            203 => 
            array (
                'id' => 204,
                'psgcCode' => '025007000',
                'citymunDesc' => 'DUPAX DEL NORTE',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025007',
            ),
            204 => 
            array (
                'id' => 205,
                'psgcCode' => '025008000',
                'citymunDesc' => 'DUPAX DEL SUR',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025008',
            ),
            205 => 
            array (
                'id' => 206,
                'psgcCode' => '025009000',
                'citymunDesc' => 'KASIBU',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025009',
            ),
            206 => 
            array (
                'id' => 207,
                'psgcCode' => '025010000',
                'citymunDesc' => 'KAYAPA',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025010',
            ),
            207 => 
            array (
                'id' => 208,
                'psgcCode' => '025011000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025011',
            ),
            208 => 
            array (
                'id' => 209,
                'psgcCode' => '025012000',
                'citymunDesc' => 'SANTA FE',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025012',
            ),
            209 => 
            array (
                'id' => 210,
                'psgcCode' => '025013000',
                'citymunDesc' => 'SOLANO',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025013',
            ),
            210 => 
            array (
                'id' => 211,
                'psgcCode' => '025014000',
                'citymunDesc' => 'VILLAVERDE',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025014',
            ),
            211 => 
            array (
                'id' => 212,
                'psgcCode' => '025015000',
                'citymunDesc' => 'ALFONSO CASTANEDA',
                'regDesc' => '02',
                'provCode' => '0250',
                'citymunCode' => '025015',
            ),
            212 => 
            array (
                'id' => 213,
                'psgcCode' => '025701000',
                'citymunDesc' => 'AGLIPAY',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025701',
            ),
            213 => 
            array (
                'id' => 214,
                'psgcCode' => '025702000',
            'citymunDesc' => 'CABARROGUIS (Capital)',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025702',
            ),
            214 => 
            array (
                'id' => 215,
                'psgcCode' => '025703000',
                'citymunDesc' => 'DIFFUN',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025703',
            ),
            215 => 
            array (
                'id' => 216,
                'psgcCode' => '025704000',
                'citymunDesc' => 'MADDELA',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025704',
            ),
            216 => 
            array (
                'id' => 217,
                'psgcCode' => '025705000',
                'citymunDesc' => 'SAGUDAY',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025705',
            ),
            217 => 
            array (
                'id' => 218,
                'psgcCode' => '025706000',
                'citymunDesc' => 'NAGTIPUNAN',
                'regDesc' => '02',
                'provCode' => '0257',
                'citymunCode' => '025706',
            ),
            218 => 
            array (
                'id' => 219,
                'psgcCode' => '030801000',
                'citymunDesc' => 'ABUCAY',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030801',
            ),
            219 => 
            array (
                'id' => 220,
                'psgcCode' => '030802000',
                'citymunDesc' => 'BAGAC',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030802',
            ),
            220 => 
            array (
                'id' => 221,
                'psgcCode' => '030803000',
            'citymunDesc' => 'CITY OF BALANGA (Capital)',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030803',
            ),
            221 => 
            array (
                'id' => 222,
                'psgcCode' => '030804000',
                'citymunDesc' => 'DINALUPIHAN',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030804',
            ),
            222 => 
            array (
                'id' => 223,
                'psgcCode' => '030805000',
                'citymunDesc' => 'HERMOSA',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030805',
            ),
            223 => 
            array (
                'id' => 224,
                'psgcCode' => '030806000',
                'citymunDesc' => 'LIMAY',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030806',
            ),
            224 => 
            array (
                'id' => 225,
                'psgcCode' => '030807000',
                'citymunDesc' => 'MARIVELES',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030807',
            ),
            225 => 
            array (
                'id' => 226,
                'psgcCode' => '030808000',
                'citymunDesc' => 'MORONG',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030808',
            ),
            226 => 
            array (
                'id' => 227,
                'psgcCode' => '030809000',
                'citymunDesc' => 'ORANI',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030809',
            ),
            227 => 
            array (
                'id' => 228,
                'psgcCode' => '030810000',
                'citymunDesc' => 'ORION',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030810',
            ),
            228 => 
            array (
                'id' => 229,
                'psgcCode' => '030811000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030811',
            ),
            229 => 
            array (
                'id' => 230,
                'psgcCode' => '030812000',
                'citymunDesc' => 'SAMAL',
                'regDesc' => '03',
                'provCode' => '0308',
                'citymunCode' => '030812',
            ),
            230 => 
            array (
                'id' => 231,
                'psgcCode' => '031401000',
                'citymunDesc' => 'ANGAT',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031401',
            ),
            231 => 
            array (
                'id' => 232,
                'psgcCode' => '031402000',
            'citymunDesc' => 'BALAGTAS (BIGAA)',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031402',
            ),
            232 => 
            array (
                'id' => 233,
                'psgcCode' => '031403000',
                'citymunDesc' => 'BALIUAG',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031403',
            ),
            233 => 
            array (
                'id' => 234,
                'psgcCode' => '031404000',
                'citymunDesc' => 'BOCAUE',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031404',
            ),
            234 => 
            array (
                'id' => 235,
                'psgcCode' => '031405000',
                'citymunDesc' => 'BULACAN',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031405',
            ),
            235 => 
            array (
                'id' => 236,
                'psgcCode' => '031406000',
                'citymunDesc' => 'BUSTOS',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031406',
            ),
            236 => 
            array (
                'id' => 237,
                'psgcCode' => '031407000',
                'citymunDesc' => 'CALUMPIT',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031407',
            ),
            237 => 
            array (
                'id' => 238,
                'psgcCode' => '031408000',
                'citymunDesc' => 'GUIGUINTO',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031408',
            ),
            238 => 
            array (
                'id' => 239,
                'psgcCode' => '031409000',
                'citymunDesc' => 'HAGONOY',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031409',
            ),
            239 => 
            array (
                'id' => 240,
                'psgcCode' => '031410000',
            'citymunDesc' => 'CITY OF MALOLOS (Capital)',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031410',
            ),
            240 => 
            array (
                'id' => 241,
                'psgcCode' => '031411000',
                'citymunDesc' => 'MARILAO',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031411',
            ),
            241 => 
            array (
                'id' => 242,
                'psgcCode' => '031412000',
                'citymunDesc' => 'CITY OF MEYCAUAYAN',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031412',
            ),
            242 => 
            array (
                'id' => 243,
                'psgcCode' => '031413000',
                'citymunDesc' => 'NORZAGARAY',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031413',
            ),
            243 => 
            array (
                'id' => 244,
                'psgcCode' => '031414000',
                'citymunDesc' => 'OBANDO',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031414',
            ),
            244 => 
            array (
                'id' => 245,
                'psgcCode' => '031415000',
                'citymunDesc' => 'PANDI',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031415',
            ),
            245 => 
            array (
                'id' => 246,
                'psgcCode' => '031416000',
                'citymunDesc' => 'PAOMBONG',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031416',
            ),
            246 => 
            array (
                'id' => 247,
                'psgcCode' => '031417000',
                'citymunDesc' => 'PLARIDEL',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031417',
            ),
            247 => 
            array (
                'id' => 248,
                'psgcCode' => '031418000',
                'citymunDesc' => 'PULILAN',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031418',
            ),
            248 => 
            array (
                'id' => 249,
                'psgcCode' => '031419000',
                'citymunDesc' => 'SAN ILDEFONSO',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031419',
            ),
            249 => 
            array (
                'id' => 250,
                'psgcCode' => '031420000',
                'citymunDesc' => 'CITY OF SAN JOSE DEL MONTE',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031420',
            ),
            250 => 
            array (
                'id' => 251,
                'psgcCode' => '031421000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031421',
            ),
            251 => 
            array (
                'id' => 252,
                'psgcCode' => '031422000',
                'citymunDesc' => 'SAN RAFAEL',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031422',
            ),
            252 => 
            array (
                'id' => 253,
                'psgcCode' => '031423000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031423',
            ),
            253 => 
            array (
                'id' => 254,
                'psgcCode' => '031424000',
                'citymunDesc' => 'DOÑA REMEDIOS TRINIDAD',
                'regDesc' => '03',
                'provCode' => '0314',
                'citymunCode' => '031424',
            ),
            254 => 
            array (
                'id' => 255,
                'psgcCode' => '034901000',
                'citymunDesc' => 'ALIAGA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034901',
            ),
            255 => 
            array (
                'id' => 256,
                'psgcCode' => '034902000',
                'citymunDesc' => 'BONGABON',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034902',
            ),
            256 => 
            array (
                'id' => 257,
                'psgcCode' => '034903000',
                'citymunDesc' => 'CABANATUAN CITY',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034903',
            ),
            257 => 
            array (
                'id' => 258,
                'psgcCode' => '034904000',
                'citymunDesc' => 'CABIAO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034904',
            ),
            258 => 
            array (
                'id' => 259,
                'psgcCode' => '034905000',
                'citymunDesc' => 'CARRANGLAN',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034905',
            ),
            259 => 
            array (
                'id' => 260,
                'psgcCode' => '034906000',
                'citymunDesc' => 'CUYAPO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034906',
            ),
            260 => 
            array (
                'id' => 261,
                'psgcCode' => '034907000',
            'citymunDesc' => 'GABALDON (BITULOK & SABANI)',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034907',
            ),
            261 => 
            array (
                'id' => 262,
                'psgcCode' => '034908000',
                'citymunDesc' => 'CITY OF GAPAN',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034908',
            ),
            262 => 
            array (
                'id' => 263,
                'psgcCode' => '034909000',
                'citymunDesc' => 'GENERAL MAMERTO NATIVIDAD',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034909',
            ),
            263 => 
            array (
                'id' => 264,
                'psgcCode' => '034910000',
            'citymunDesc' => 'GENERAL TINIO (PAPAYA)',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034910',
            ),
            264 => 
            array (
                'id' => 265,
                'psgcCode' => '034911000',
                'citymunDesc' => 'GUIMBA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034911',
            ),
            265 => 
            array (
                'id' => 266,
                'psgcCode' => '034912000',
                'citymunDesc' => 'JAEN',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034912',
            ),
            266 => 
            array (
                'id' => 267,
                'psgcCode' => '034913000',
                'citymunDesc' => 'LAUR',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034913',
            ),
            267 => 
            array (
                'id' => 268,
                'psgcCode' => '034914000',
                'citymunDesc' => 'LICAB',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034914',
            ),
            268 => 
            array (
                'id' => 269,
                'psgcCode' => '034915000',
                'citymunDesc' => 'LLANERA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034915',
            ),
            269 => 
            array (
                'id' => 270,
                'psgcCode' => '034916000',
                'citymunDesc' => 'LUPAO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034916',
            ),
            270 => 
            array (
                'id' => 271,
                'psgcCode' => '034917000',
                'citymunDesc' => 'SCIENCE CITY OF MUÑOZ',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034917',
            ),
            271 => 
            array (
                'id' => 272,
                'psgcCode' => '034918000',
                'citymunDesc' => 'NAMPICUAN',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034918',
            ),
            272 => 
            array (
                'id' => 273,
                'psgcCode' => '034919000',
            'citymunDesc' => 'PALAYAN CITY (Capital)',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034919',
            ),
            273 => 
            array (
                'id' => 274,
                'psgcCode' => '034920000',
                'citymunDesc' => 'PANTABANGAN',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034920',
            ),
            274 => 
            array (
                'id' => 275,
                'psgcCode' => '034921000',
                'citymunDesc' => 'PEÑARANDA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034921',
            ),
            275 => 
            array (
                'id' => 276,
                'psgcCode' => '034922000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034922',
            ),
            276 => 
            array (
                'id' => 277,
                'psgcCode' => '034923000',
                'citymunDesc' => 'RIZAL',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034923',
            ),
            277 => 
            array (
                'id' => 278,
                'psgcCode' => '034924000',
                'citymunDesc' => 'SAN ANTONIO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034924',
            ),
            278 => 
            array (
                'id' => 279,
                'psgcCode' => '034925000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034925',
            ),
            279 => 
            array (
                'id' => 280,
                'psgcCode' => '034926000',
                'citymunDesc' => 'SAN JOSE CITY',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034926',
            ),
            280 => 
            array (
                'id' => 281,
                'psgcCode' => '034927000',
                'citymunDesc' => 'SAN LEONARDO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034927',
            ),
            281 => 
            array (
                'id' => 282,
                'psgcCode' => '034928000',
                'citymunDesc' => 'SANTA ROSA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034928',
            ),
            282 => 
            array (
                'id' => 283,
                'psgcCode' => '034929000',
                'citymunDesc' => 'SANTO DOMINGO',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034929',
            ),
            283 => 
            array (
                'id' => 284,
                'psgcCode' => '034930000',
                'citymunDesc' => 'TALAVERA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034930',
            ),
            284 => 
            array (
                'id' => 285,
                'psgcCode' => '034931000',
                'citymunDesc' => 'TALUGTUG',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034931',
            ),
            285 => 
            array (
                'id' => 286,
                'psgcCode' => '034932000',
                'citymunDesc' => 'ZARAGOZA',
                'regDesc' => '03',
                'provCode' => '0349',
                'citymunCode' => '034932',
            ),
            286 => 
            array (
                'id' => 287,
                'psgcCode' => '035401000',
                'citymunDesc' => 'ANGELES CITY',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035401',
            ),
            287 => 
            array (
                'id' => 288,
                'psgcCode' => '035402000',
                'citymunDesc' => 'APALIT',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035402',
            ),
            288 => 
            array (
                'id' => 289,
                'psgcCode' => '035403000',
                'citymunDesc' => 'ARAYAT',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035403',
            ),
            289 => 
            array (
                'id' => 290,
                'psgcCode' => '035404000',
                'citymunDesc' => 'BACOLOR',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035404',
            ),
            290 => 
            array (
                'id' => 291,
                'psgcCode' => '035405000',
                'citymunDesc' => 'CANDABA',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035405',
            ),
            291 => 
            array (
                'id' => 292,
                'psgcCode' => '035406000',
                'citymunDesc' => 'FLORIDABLANCA',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035406',
            ),
            292 => 
            array (
                'id' => 293,
                'psgcCode' => '035407000',
                'citymunDesc' => 'GUAGUA',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035407',
            ),
            293 => 
            array (
                'id' => 294,
                'psgcCode' => '035408000',
                'citymunDesc' => 'LUBAO',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035408',
            ),
            294 => 
            array (
                'id' => 295,
                'psgcCode' => '035409000',
                'citymunDesc' => 'MABALACAT CITY',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035409',
            ),
            295 => 
            array (
                'id' => 296,
                'psgcCode' => '035410000',
                'citymunDesc' => 'MACABEBE',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035410',
            ),
            296 => 
            array (
                'id' => 297,
                'psgcCode' => '035411000',
                'citymunDesc' => 'MAGALANG',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035411',
            ),
            297 => 
            array (
                'id' => 298,
                'psgcCode' => '035412000',
                'citymunDesc' => 'MASANTOL',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035412',
            ),
            298 => 
            array (
                'id' => 299,
                'psgcCode' => '035413000',
                'citymunDesc' => 'MEXICO',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035413',
            ),
            299 => 
            array (
                'id' => 300,
                'psgcCode' => '035414000',
                'citymunDesc' => 'MINALIN',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035414',
            ),
            300 => 
            array (
                'id' => 301,
                'psgcCode' => '035415000',
                'citymunDesc' => 'PORAC',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035415',
            ),
            301 => 
            array (
                'id' => 302,
                'psgcCode' => '035416000',
            'citymunDesc' => 'CITY OF SAN FERNANDO (Capital)',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035416',
            ),
            302 => 
            array (
                'id' => 303,
                'psgcCode' => '035417000',
                'citymunDesc' => 'SAN LUIS',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035417',
            ),
            303 => 
            array (
                'id' => 304,
                'psgcCode' => '035418000',
                'citymunDesc' => 'SAN SIMON',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035418',
            ),
            304 => 
            array (
                'id' => 305,
                'psgcCode' => '035419000',
                'citymunDesc' => 'SANTA ANA',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035419',
            ),
            305 => 
            array (
                'id' => 306,
                'psgcCode' => '035420000',
                'citymunDesc' => 'SANTA RITA',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035420',
            ),
            306 => 
            array (
                'id' => 307,
                'psgcCode' => '035421000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035421',
            ),
            307 => 
            array (
                'id' => 308,
                'psgcCode' => '035422000',
            'citymunDesc' => 'SASMUAN (Sexmoan)',
                'regDesc' => '03',
                'provCode' => '0354',
                'citymunCode' => '035422',
            ),
            308 => 
            array (
                'id' => 309,
                'psgcCode' => '036901000',
                'citymunDesc' => 'ANAO',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036901',
            ),
            309 => 
            array (
                'id' => 310,
                'psgcCode' => '036902000',
                'citymunDesc' => 'BAMBAN',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036902',
            ),
            310 => 
            array (
                'id' => 311,
                'psgcCode' => '036903000',
                'citymunDesc' => 'CAMILING',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036903',
            ),
            311 => 
            array (
                'id' => 312,
                'psgcCode' => '036904000',
                'citymunDesc' => 'CAPAS',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036904',
            ),
            312 => 
            array (
                'id' => 313,
                'psgcCode' => '036905000',
                'citymunDesc' => 'CONCEPCION',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036905',
            ),
            313 => 
            array (
                'id' => 314,
                'psgcCode' => '036906000',
                'citymunDesc' => 'GERONA',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036906',
            ),
            314 => 
            array (
                'id' => 315,
                'psgcCode' => '036907000',
                'citymunDesc' => 'LA PAZ',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036907',
            ),
            315 => 
            array (
                'id' => 316,
                'psgcCode' => '036908000',
                'citymunDesc' => 'MAYANTOC',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036908',
            ),
            316 => 
            array (
                'id' => 317,
                'psgcCode' => '036909000',
                'citymunDesc' => 'MONCADA',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036909',
            ),
            317 => 
            array (
                'id' => 318,
                'psgcCode' => '036910000',
                'citymunDesc' => 'PANIQUI',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036910',
            ),
            318 => 
            array (
                'id' => 319,
                'psgcCode' => '036911000',
                'citymunDesc' => 'PURA',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036911',
            ),
            319 => 
            array (
                'id' => 320,
                'psgcCode' => '036912000',
                'citymunDesc' => 'RAMOS',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036912',
            ),
            320 => 
            array (
                'id' => 321,
                'psgcCode' => '036913000',
                'citymunDesc' => 'SAN CLEMENTE',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036913',
            ),
            321 => 
            array (
                'id' => 322,
                'psgcCode' => '036914000',
                'citymunDesc' => 'SAN MANUEL',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036914',
            ),
            322 => 
            array (
                'id' => 323,
                'psgcCode' => '036915000',
                'citymunDesc' => 'SANTA IGNACIA',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036915',
            ),
            323 => 
            array (
                'id' => 324,
                'psgcCode' => '036916000',
            'citymunDesc' => 'CITY OF TARLAC (Capital)',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036916',
            ),
            324 => 
            array (
                'id' => 325,
                'psgcCode' => '036917000',
                'citymunDesc' => 'VICTORIA',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036917',
            ),
            325 => 
            array (
                'id' => 326,
                'psgcCode' => '036918000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '03',
                'provCode' => '0369',
                'citymunCode' => '036918',
            ),
            326 => 
            array (
                'id' => 327,
                'psgcCode' => '037101000',
                'citymunDesc' => 'BOTOLAN',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037101',
            ),
            327 => 
            array (
                'id' => 328,
                'psgcCode' => '037102000',
                'citymunDesc' => 'CABANGAN',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037102',
            ),
            328 => 
            array (
                'id' => 329,
                'psgcCode' => '037103000',
                'citymunDesc' => 'CANDELARIA',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037103',
            ),
            329 => 
            array (
                'id' => 330,
                'psgcCode' => '037104000',
                'citymunDesc' => 'CASTILLEJOS',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037104',
            ),
            330 => 
            array (
                'id' => 331,
                'psgcCode' => '037105000',
            'citymunDesc' => 'IBA (Capital)',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037105',
            ),
            331 => 
            array (
                'id' => 332,
                'psgcCode' => '037106000',
                'citymunDesc' => 'MASINLOC',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037106',
            ),
            332 => 
            array (
                'id' => 333,
                'psgcCode' => '037107000',
                'citymunDesc' => 'OLONGAPO CITY',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037107',
            ),
            333 => 
            array (
                'id' => 334,
                'psgcCode' => '037108000',
                'citymunDesc' => 'PALAUIG',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037108',
            ),
            334 => 
            array (
                'id' => 335,
                'psgcCode' => '037109000',
                'citymunDesc' => 'SAN ANTONIO',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037109',
            ),
            335 => 
            array (
                'id' => 336,
                'psgcCode' => '037110000',
                'citymunDesc' => 'SAN FELIPE',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037110',
            ),
            336 => 
            array (
                'id' => 337,
                'psgcCode' => '037111000',
                'citymunDesc' => 'SAN MARCELINO',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037111',
            ),
            337 => 
            array (
                'id' => 338,
                'psgcCode' => '037112000',
                'citymunDesc' => 'SAN NARCISO',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037112',
            ),
            338 => 
            array (
                'id' => 339,
                'psgcCode' => '037113000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037113',
            ),
            339 => 
            array (
                'id' => 340,
                'psgcCode' => '037114000',
                'citymunDesc' => 'SUBIC',
                'regDesc' => '03',
                'provCode' => '0371',
                'citymunCode' => '037114',
            ),
            340 => 
            array (
                'id' => 341,
                'psgcCode' => '037701000',
            'citymunDesc' => 'BALER (Capital)',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037701',
            ),
            341 => 
            array (
                'id' => 342,
                'psgcCode' => '037702000',
                'citymunDesc' => 'CASIGURAN',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037702',
            ),
            342 => 
            array (
                'id' => 343,
                'psgcCode' => '037703000',
                'citymunDesc' => 'DILASAG',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037703',
            ),
            343 => 
            array (
                'id' => 344,
                'psgcCode' => '037704000',
                'citymunDesc' => 'DINALUNGAN',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037704',
            ),
            344 => 
            array (
                'id' => 345,
                'psgcCode' => '037705000',
                'citymunDesc' => 'DINGALAN',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037705',
            ),
            345 => 
            array (
                'id' => 346,
                'psgcCode' => '037706000',
                'citymunDesc' => 'DIPACULAO',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037706',
            ),
            346 => 
            array (
                'id' => 347,
                'psgcCode' => '037707000',
                'citymunDesc' => 'MARIA AURORA',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037707',
            ),
            347 => 
            array (
                'id' => 348,
                'psgcCode' => '037708000',
                'citymunDesc' => 'SAN LUIS',
                'regDesc' => '03',
                'provCode' => '0377',
                'citymunCode' => '037708',
            ),
            348 => 
            array (
                'id' => 349,
                'psgcCode' => '041001000',
                'citymunDesc' => 'AGONCILLO',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041001',
            ),
            349 => 
            array (
                'id' => 350,
                'psgcCode' => '041002000',
                'citymunDesc' => 'ALITAGTAG',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041002',
            ),
            350 => 
            array (
                'id' => 351,
                'psgcCode' => '041003000',
                'citymunDesc' => 'BALAYAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041003',
            ),
            351 => 
            array (
                'id' => 352,
                'psgcCode' => '041004000',
                'citymunDesc' => 'BALETE',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041004',
            ),
            352 => 
            array (
                'id' => 353,
                'psgcCode' => '041005000',
            'citymunDesc' => 'BATANGAS CITY (Capital)',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041005',
            ),
            353 => 
            array (
                'id' => 354,
                'psgcCode' => '041006000',
                'citymunDesc' => 'BAUAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041006',
            ),
            354 => 
            array (
                'id' => 355,
                'psgcCode' => '041007000',
                'citymunDesc' => 'CALACA',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041007',
            ),
            355 => 
            array (
                'id' => 356,
                'psgcCode' => '041008000',
                'citymunDesc' => 'CALATAGAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041008',
            ),
            356 => 
            array (
                'id' => 357,
                'psgcCode' => '041009000',
                'citymunDesc' => 'CUENCA',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041009',
            ),
            357 => 
            array (
                'id' => 358,
                'psgcCode' => '041010000',
                'citymunDesc' => 'IBAAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041010',
            ),
            358 => 
            array (
                'id' => 359,
                'psgcCode' => '041011000',
                'citymunDesc' => 'LAUREL',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041011',
            ),
            359 => 
            array (
                'id' => 360,
                'psgcCode' => '041012000',
                'citymunDesc' => 'LEMERY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041012',
            ),
            360 => 
            array (
                'id' => 361,
                'psgcCode' => '041013000',
                'citymunDesc' => 'LIAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041013',
            ),
            361 => 
            array (
                'id' => 362,
                'psgcCode' => '041014000',
                'citymunDesc' => 'LIPA CITY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041014',
            ),
            362 => 
            array (
                'id' => 363,
                'psgcCode' => '041015000',
                'citymunDesc' => 'LOBO',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041015',
            ),
            363 => 
            array (
                'id' => 364,
                'psgcCode' => '041016000',
                'citymunDesc' => 'MABINI',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041016',
            ),
            364 => 
            array (
                'id' => 365,
                'psgcCode' => '041017000',
                'citymunDesc' => 'MALVAR',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041017',
            ),
            365 => 
            array (
                'id' => 366,
                'psgcCode' => '041018000',
                'citymunDesc' => 'MATAASNAKAHOY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041018',
            ),
            366 => 
            array (
                'id' => 367,
                'psgcCode' => '041019000',
                'citymunDesc' => 'NASUGBU',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041019',
            ),
            367 => 
            array (
                'id' => 368,
                'psgcCode' => '041020000',
                'citymunDesc' => 'PADRE GARCIA',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041020',
            ),
            368 => 
            array (
                'id' => 369,
                'psgcCode' => '041021000',
                'citymunDesc' => 'ROSARIO',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041021',
            ),
            369 => 
            array (
                'id' => 370,
                'psgcCode' => '041022000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041022',
            ),
            370 => 
            array (
                'id' => 371,
                'psgcCode' => '041023000',
                'citymunDesc' => 'SAN JUAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041023',
            ),
            371 => 
            array (
                'id' => 372,
                'psgcCode' => '041024000',
                'citymunDesc' => 'SAN LUIS',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041024',
            ),
            372 => 
            array (
                'id' => 373,
                'psgcCode' => '041025000',
                'citymunDesc' => 'SAN NICOLAS',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041025',
            ),
            373 => 
            array (
                'id' => 374,
                'psgcCode' => '041026000',
                'citymunDesc' => 'SAN PASCUAL',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041026',
            ),
            374 => 
            array (
                'id' => 375,
                'psgcCode' => '041027000',
                'citymunDesc' => 'SANTA TERESITA',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041027',
            ),
            375 => 
            array (
                'id' => 376,
                'psgcCode' => '041028000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041028',
            ),
            376 => 
            array (
                'id' => 377,
                'psgcCode' => '041029000',
                'citymunDesc' => 'TAAL',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041029',
            ),
            377 => 
            array (
                'id' => 378,
                'psgcCode' => '041030000',
                'citymunDesc' => 'TALISAY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041030',
            ),
            378 => 
            array (
                'id' => 379,
                'psgcCode' => '041031000',
                'citymunDesc' => 'CITY OF TANAUAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041031',
            ),
            379 => 
            array (
                'id' => 380,
                'psgcCode' => '041032000',
                'citymunDesc' => 'TAYSAN',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041032',
            ),
            380 => 
            array (
                'id' => 381,
                'psgcCode' => '041033000',
                'citymunDesc' => 'TINGLOY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041033',
            ),
            381 => 
            array (
                'id' => 382,
                'psgcCode' => '041034000',
                'citymunDesc' => 'TUY',
                'regDesc' => '04',
                'provCode' => '0410',
                'citymunCode' => '041034',
            ),
            382 => 
            array (
                'id' => 383,
                'psgcCode' => '042101000',
                'citymunDesc' => 'ALFONSO',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042101',
            ),
            383 => 
            array (
                'id' => 384,
                'psgcCode' => '042102000',
                'citymunDesc' => 'AMADEO',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042102',
            ),
            384 => 
            array (
                'id' => 385,
                'psgcCode' => '042103000',
                'citymunDesc' => 'BACOOR CITY',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042103',
            ),
            385 => 
            array (
                'id' => 386,
                'psgcCode' => '042104000',
                'citymunDesc' => 'CARMONA',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042104',
            ),
            386 => 
            array (
                'id' => 387,
                'psgcCode' => '042105000',
                'citymunDesc' => 'CAVITE CITY',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042105',
            ),
            387 => 
            array (
                'id' => 388,
                'psgcCode' => '042106000',
                'citymunDesc' => 'CITY OF DASMARIÑAS',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042106',
            ),
            388 => 
            array (
                'id' => 389,
                'psgcCode' => '042107000',
                'citymunDesc' => 'GENERAL EMILIO AGUINALDO',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042107',
            ),
            389 => 
            array (
                'id' => 390,
                'psgcCode' => '042108000',
                'citymunDesc' => 'GENERAL TRIAS',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042108',
            ),
            390 => 
            array (
                'id' => 391,
                'psgcCode' => '042109000',
                'citymunDesc' => 'IMUS CITY',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042109',
            ),
            391 => 
            array (
                'id' => 392,
                'psgcCode' => '042110000',
                'citymunDesc' => 'INDANG',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042110',
            ),
            392 => 
            array (
                'id' => 393,
                'psgcCode' => '042111000',
                'citymunDesc' => 'KAWIT',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042111',
            ),
            393 => 
            array (
                'id' => 394,
                'psgcCode' => '042112000',
                'citymunDesc' => 'MAGALLANES',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042112',
            ),
            394 => 
            array (
                'id' => 395,
                'psgcCode' => '042113000',
                'citymunDesc' => 'MARAGONDON',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042113',
            ),
            395 => 
            array (
                'id' => 396,
                'psgcCode' => '042114000',
            'citymunDesc' => 'MENDEZ (MENDEZ-NUÑEZ)',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042114',
            ),
            396 => 
            array (
                'id' => 397,
                'psgcCode' => '042115000',
                'citymunDesc' => 'NAIC',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042115',
            ),
            397 => 
            array (
                'id' => 398,
                'psgcCode' => '042116000',
                'citymunDesc' => 'NOVELETA',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042116',
            ),
            398 => 
            array (
                'id' => 399,
                'psgcCode' => '042117000',
                'citymunDesc' => 'ROSARIO',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042117',
            ),
            399 => 
            array (
                'id' => 400,
                'psgcCode' => '042118000',
                'citymunDesc' => 'SILANG',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042118',
            ),
            400 => 
            array (
                'id' => 401,
                'psgcCode' => '042119000',
                'citymunDesc' => 'TAGAYTAY CITY',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042119',
            ),
            401 => 
            array (
                'id' => 402,
                'psgcCode' => '042120000',
                'citymunDesc' => 'TANZA',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042120',
            ),
            402 => 
            array (
                'id' => 403,
                'psgcCode' => '042121000',
                'citymunDesc' => 'TERNATE',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042121',
            ),
            403 => 
            array (
                'id' => 404,
                'psgcCode' => '042122000',
            'citymunDesc' => 'TRECE MARTIRES CITY (Capital)',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042122',
            ),
            404 => 
            array (
                'id' => 405,
                'psgcCode' => '042123000',
                'citymunDesc' => 'GEN. MARIANO ALVAREZ',
                'regDesc' => '04',
                'provCode' => '0421',
                'citymunCode' => '042123',
            ),
            405 => 
            array (
                'id' => 406,
                'psgcCode' => '043401000',
                'citymunDesc' => 'ALAMINOS',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043401',
            ),
            406 => 
            array (
                'id' => 407,
                'psgcCode' => '043402000',
                'citymunDesc' => 'BAY',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043402',
            ),
            407 => 
            array (
                'id' => 408,
                'psgcCode' => '043403000',
                'citymunDesc' => 'CITY OF BIÑAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043403',
            ),
            408 => 
            array (
                'id' => 409,
                'psgcCode' => '043404000',
                'citymunDesc' => 'CABUYAO CITY',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043404',
            ),
            409 => 
            array (
                'id' => 410,
                'psgcCode' => '043405000',
                'citymunDesc' => 'CITY OF CALAMBA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043405',
            ),
            410 => 
            array (
                'id' => 411,
                'psgcCode' => '043406000',
                'citymunDesc' => 'CALAUAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043406',
            ),
            411 => 
            array (
                'id' => 412,
                'psgcCode' => '043407000',
                'citymunDesc' => 'CAVINTI',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043407',
            ),
            412 => 
            array (
                'id' => 413,
                'psgcCode' => '043408000',
                'citymunDesc' => 'FAMY',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043408',
            ),
            413 => 
            array (
                'id' => 414,
                'psgcCode' => '043409000',
                'citymunDesc' => 'KALAYAAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043409',
            ),
            414 => 
            array (
                'id' => 415,
                'psgcCode' => '043410000',
                'citymunDesc' => 'LILIW',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043410',
            ),
            415 => 
            array (
                'id' => 416,
                'psgcCode' => '043411000',
                'citymunDesc' => 'LOS BAÑOS',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043411',
            ),
            416 => 
            array (
                'id' => 417,
                'psgcCode' => '043412000',
                'citymunDesc' => 'LUISIANA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043412',
            ),
            417 => 
            array (
                'id' => 418,
                'psgcCode' => '043413000',
                'citymunDesc' => 'LUMBAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043413',
            ),
            418 => 
            array (
                'id' => 419,
                'psgcCode' => '043414000',
                'citymunDesc' => 'MABITAC',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043414',
            ),
            419 => 
            array (
                'id' => 420,
                'psgcCode' => '043415000',
                'citymunDesc' => 'MAGDALENA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043415',
            ),
            420 => 
            array (
                'id' => 421,
                'psgcCode' => '043416000',
                'citymunDesc' => 'MAJAYJAY',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043416',
            ),
            421 => 
            array (
                'id' => 422,
                'psgcCode' => '043417000',
                'citymunDesc' => 'NAGCARLAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043417',
            ),
            422 => 
            array (
                'id' => 423,
                'psgcCode' => '043418000',
                'citymunDesc' => 'PAETE',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043418',
            ),
            423 => 
            array (
                'id' => 424,
                'psgcCode' => '043419000',
                'citymunDesc' => 'PAGSANJAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043419',
            ),
            424 => 
            array (
                'id' => 425,
                'psgcCode' => '043420000',
                'citymunDesc' => 'PAKIL',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043420',
            ),
            425 => 
            array (
                'id' => 426,
                'psgcCode' => '043421000',
                'citymunDesc' => 'PANGIL',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043421',
            ),
            426 => 
            array (
                'id' => 427,
                'psgcCode' => '043422000',
                'citymunDesc' => 'PILA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043422',
            ),
            427 => 
            array (
                'id' => 428,
                'psgcCode' => '043423000',
                'citymunDesc' => 'RIZAL',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043423',
            ),
            428 => 
            array (
                'id' => 429,
                'psgcCode' => '043424000',
                'citymunDesc' => 'SAN PABLO CITY',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043424',
            ),
            429 => 
            array (
                'id' => 430,
                'psgcCode' => '043425000',
                'citymunDesc' => 'CITY OF SAN PEDRO',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043425',
            ),
            430 => 
            array (
                'id' => 431,
                'psgcCode' => '043426000',
            'citymunDesc' => 'SANTA CRUZ (Capital)',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043426',
            ),
            431 => 
            array (
                'id' => 432,
                'psgcCode' => '043427000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043427',
            ),
            432 => 
            array (
                'id' => 433,
                'psgcCode' => '043428000',
                'citymunDesc' => 'CITY OF SANTA ROSA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043428',
            ),
            433 => 
            array (
                'id' => 434,
                'psgcCode' => '043429000',
                'citymunDesc' => 'SINILOAN',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043429',
            ),
            434 => 
            array (
                'id' => 435,
                'psgcCode' => '043430000',
                'citymunDesc' => 'VICTORIA',
                'regDesc' => '04',
                'provCode' => '0434',
                'citymunCode' => '043430',
            ),
            435 => 
            array (
                'id' => 436,
                'psgcCode' => '045601000',
                'citymunDesc' => 'AGDANGAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045601',
            ),
            436 => 
            array (
                'id' => 437,
                'psgcCode' => '045602000',
                'citymunDesc' => 'ALABAT',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045602',
            ),
            437 => 
            array (
                'id' => 438,
                'psgcCode' => '045603000',
                'citymunDesc' => 'ATIMONAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045603',
            ),
            438 => 
            array (
                'id' => 439,
                'psgcCode' => '045605000',
                'citymunDesc' => 'BUENAVISTA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045605',
            ),
            439 => 
            array (
                'id' => 440,
                'psgcCode' => '045606000',
                'citymunDesc' => 'BURDEOS',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045606',
            ),
            440 => 
            array (
                'id' => 441,
                'psgcCode' => '045607000',
                'citymunDesc' => 'CALAUAG',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045607',
            ),
            441 => 
            array (
                'id' => 442,
                'psgcCode' => '045608000',
                'citymunDesc' => 'CANDELARIA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045608',
            ),
            442 => 
            array (
                'id' => 443,
                'psgcCode' => '045610000',
                'citymunDesc' => 'CATANAUAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045610',
            ),
            443 => 
            array (
                'id' => 444,
                'psgcCode' => '045615000',
                'citymunDesc' => 'DOLORES',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045615',
            ),
            444 => 
            array (
                'id' => 445,
                'psgcCode' => '045616000',
                'citymunDesc' => 'GENERAL LUNA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045616',
            ),
            445 => 
            array (
                'id' => 446,
                'psgcCode' => '045617000',
                'citymunDesc' => 'GENERAL NAKAR',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045617',
            ),
            446 => 
            array (
                'id' => 447,
                'psgcCode' => '045618000',
                'citymunDesc' => 'GUINAYANGAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045618',
            ),
            447 => 
            array (
                'id' => 448,
                'psgcCode' => '045619000',
                'citymunDesc' => 'GUMACA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045619',
            ),
            448 => 
            array (
                'id' => 449,
                'psgcCode' => '045620000',
                'citymunDesc' => 'INFANTA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045620',
            ),
            449 => 
            array (
                'id' => 450,
                'psgcCode' => '045621000',
                'citymunDesc' => 'JOMALIG',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045621',
            ),
            450 => 
            array (
                'id' => 451,
                'psgcCode' => '045622000',
                'citymunDesc' => 'LOPEZ',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045622',
            ),
            451 => 
            array (
                'id' => 452,
                'psgcCode' => '045623000',
                'citymunDesc' => 'LUCBAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045623',
            ),
            452 => 
            array (
                'id' => 453,
                'psgcCode' => '045624000',
            'citymunDesc' => 'LUCENA CITY (Capital)',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045624',
            ),
            453 => 
            array (
                'id' => 454,
                'psgcCode' => '045625000',
                'citymunDesc' => 'MACALELON',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045625',
            ),
            454 => 
            array (
                'id' => 455,
                'psgcCode' => '045627000',
                'citymunDesc' => 'MAUBAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045627',
            ),
            455 => 
            array (
                'id' => 456,
                'psgcCode' => '045628000',
                'citymunDesc' => 'MULANAY',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045628',
            ),
            456 => 
            array (
                'id' => 457,
                'psgcCode' => '045629000',
                'citymunDesc' => 'PADRE BURGOS',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045629',
            ),
            457 => 
            array (
                'id' => 458,
                'psgcCode' => '045630000',
                'citymunDesc' => 'PAGBILAO',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045630',
            ),
            458 => 
            array (
                'id' => 459,
                'psgcCode' => '045631000',
                'citymunDesc' => 'PANUKULAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045631',
            ),
            459 => 
            array (
                'id' => 460,
                'psgcCode' => '045632000',
                'citymunDesc' => 'PATNANUNGAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045632',
            ),
            460 => 
            array (
                'id' => 461,
                'psgcCode' => '045633000',
                'citymunDesc' => 'PEREZ',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045633',
            ),
            461 => 
            array (
                'id' => 462,
                'psgcCode' => '045634000',
                'citymunDesc' => 'PITOGO',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045634',
            ),
            462 => 
            array (
                'id' => 463,
                'psgcCode' => '045635000',
                'citymunDesc' => 'PLARIDEL',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045635',
            ),
            463 => 
            array (
                'id' => 464,
                'psgcCode' => '045636000',
                'citymunDesc' => 'POLILLO',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045636',
            ),
            464 => 
            array (
                'id' => 465,
                'psgcCode' => '045637000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045637',
            ),
            465 => 
            array (
                'id' => 466,
                'psgcCode' => '045638000',
                'citymunDesc' => 'REAL',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045638',
            ),
            466 => 
            array (
                'id' => 467,
                'psgcCode' => '045639000',
                'citymunDesc' => 'SAMPALOC',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045639',
            ),
            467 => 
            array (
                'id' => 468,
                'psgcCode' => '045640000',
                'citymunDesc' => 'SAN ANDRES',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045640',
            ),
            468 => 
            array (
                'id' => 469,
                'psgcCode' => '045641000',
                'citymunDesc' => 'SAN ANTONIO',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045641',
            ),
            469 => 
            array (
                'id' => 470,
                'psgcCode' => '045642000',
            'citymunDesc' => 'SAN FRANCISCO (AURORA)',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045642',
            ),
            470 => 
            array (
                'id' => 471,
                'psgcCode' => '045644000',
                'citymunDesc' => 'SAN NARCISO',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045644',
            ),
            471 => 
            array (
                'id' => 472,
                'psgcCode' => '045645000',
                'citymunDesc' => 'SARIAYA',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045645',
            ),
            472 => 
            array (
                'id' => 473,
                'psgcCode' => '045646000',
                'citymunDesc' => 'TAGKAWAYAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045646',
            ),
            473 => 
            array (
                'id' => 474,
                'psgcCode' => '045647000',
                'citymunDesc' => 'CITY OF TAYABAS',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045647',
            ),
            474 => 
            array (
                'id' => 475,
                'psgcCode' => '045648000',
                'citymunDesc' => 'TIAONG',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045648',
            ),
            475 => 
            array (
                'id' => 476,
                'psgcCode' => '045649000',
                'citymunDesc' => 'UNISAN',
                'regDesc' => '04',
                'provCode' => '0456',
                'citymunCode' => '045649',
            ),
            476 => 
            array (
                'id' => 477,
                'psgcCode' => '045801000',
                'citymunDesc' => 'ANGONO',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045801',
            ),
            477 => 
            array (
                'id' => 478,
                'psgcCode' => '045802000',
                'citymunDesc' => 'CITY OF ANTIPOLO',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045802',
            ),
            478 => 
            array (
                'id' => 479,
                'psgcCode' => '045803000',
                'citymunDesc' => 'BARAS',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045803',
            ),
            479 => 
            array (
                'id' => 480,
                'psgcCode' => '045804000',
                'citymunDesc' => 'BINANGONAN',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045804',
            ),
            480 => 
            array (
                'id' => 481,
                'psgcCode' => '045805000',
                'citymunDesc' => 'CAINTA',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045805',
            ),
            481 => 
            array (
                'id' => 482,
                'psgcCode' => '045806000',
                'citymunDesc' => 'CARDONA',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045806',
            ),
            482 => 
            array (
                'id' => 483,
                'psgcCode' => '045807000',
                'citymunDesc' => 'JALA-JALA',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045807',
            ),
            483 => 
            array (
                'id' => 484,
                'psgcCode' => '045808000',
            'citymunDesc' => 'RODRIGUEZ (MONTALBAN)',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045808',
            ),
            484 => 
            array (
                'id' => 485,
                'psgcCode' => '045809000',
                'citymunDesc' => 'MORONG',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045809',
            ),
            485 => 
            array (
                'id' => 486,
                'psgcCode' => '045810000',
                'citymunDesc' => 'PILILLA',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045810',
            ),
            486 => 
            array (
                'id' => 487,
                'psgcCode' => '045811000',
                'citymunDesc' => 'SAN MATEO',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045811',
            ),
            487 => 
            array (
                'id' => 488,
                'psgcCode' => '045812000',
                'citymunDesc' => 'TANAY',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045812',
            ),
            488 => 
            array (
                'id' => 489,
                'psgcCode' => '045813000',
                'citymunDesc' => 'TAYTAY',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045813',
            ),
            489 => 
            array (
                'id' => 490,
                'psgcCode' => '045814000',
                'citymunDesc' => 'TERESA',
                'regDesc' => '04',
                'provCode' => '0458',
                'citymunCode' => '045814',
            ),
            490 => 
            array (
                'id' => 491,
                'psgcCode' => '174001000',
            'citymunDesc' => 'BOAC (Capital)',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174001',
            ),
            491 => 
            array (
                'id' => 492,
                'psgcCode' => '174002000',
                'citymunDesc' => 'BUENAVISTA',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174002',
            ),
            492 => 
            array (
                'id' => 493,
                'psgcCode' => '174003000',
                'citymunDesc' => 'GASAN',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174003',
            ),
            493 => 
            array (
                'id' => 494,
                'psgcCode' => '174004000',
                'citymunDesc' => 'MOGPOG',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174004',
            ),
            494 => 
            array (
                'id' => 495,
                'psgcCode' => '174005000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174005',
            ),
            495 => 
            array (
                'id' => 496,
                'psgcCode' => '174006000',
                'citymunDesc' => 'TORRIJOS',
                'regDesc' => '17',
                'provCode' => '1740',
                'citymunCode' => '174006',
            ),
            496 => 
            array (
                'id' => 497,
                'psgcCode' => '175101000',
                'citymunDesc' => 'ABRA DE ILOG',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175101',
            ),
            497 => 
            array (
                'id' => 498,
                'psgcCode' => '175102000',
                'citymunDesc' => 'CALINTAAN',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175102',
            ),
            498 => 
            array (
                'id' => 499,
                'psgcCode' => '175103000',
                'citymunDesc' => 'LOOC',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175103',
            ),
            499 => 
            array (
                'id' => 500,
                'psgcCode' => '175104000',
                'citymunDesc' => 'LUBANG',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175104',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 501,
                'psgcCode' => '175105000',
                'citymunDesc' => 'MAGSAYSAY',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175105',
            ),
            1 => 
            array (
                'id' => 502,
                'psgcCode' => '175106000',
            'citymunDesc' => 'MAMBURAO (Capital)',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175106',
            ),
            2 => 
            array (
                'id' => 503,
                'psgcCode' => '175107000',
                'citymunDesc' => 'PALUAN',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175107',
            ),
            3 => 
            array (
                'id' => 504,
                'psgcCode' => '175108000',
                'citymunDesc' => 'RIZAL',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175108',
            ),
            4 => 
            array (
                'id' => 505,
                'psgcCode' => '175109000',
                'citymunDesc' => 'SABLAYAN',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175109',
            ),
            5 => 
            array (
                'id' => 506,
                'psgcCode' => '175110000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175110',
            ),
            6 => 
            array (
                'id' => 507,
                'psgcCode' => '175111000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '17',
                'provCode' => '1751',
                'citymunCode' => '175111',
            ),
            7 => 
            array (
                'id' => 508,
                'psgcCode' => '175201000',
                'citymunDesc' => 'BACO',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175201',
            ),
            8 => 
            array (
                'id' => 509,
                'psgcCode' => '175202000',
                'citymunDesc' => 'BANSUD',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175202',
            ),
            9 => 
            array (
                'id' => 510,
                'psgcCode' => '175203000',
                'citymunDesc' => 'BONGABONG',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175203',
            ),
            10 => 
            array (
                'id' => 511,
                'psgcCode' => '175204000',
            'citymunDesc' => 'BULALACAO (SAN PEDRO)',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175204',
            ),
            11 => 
            array (
                'id' => 512,
                'psgcCode' => '175205000',
            'citymunDesc' => 'CITY OF CALAPAN (Capital)',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175205',
            ),
            12 => 
            array (
                'id' => 513,
                'psgcCode' => '175206000',
                'citymunDesc' => 'GLORIA',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175206',
            ),
            13 => 
            array (
                'id' => 514,
                'psgcCode' => '175207000',
                'citymunDesc' => 'MANSALAY',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175207',
            ),
            14 => 
            array (
                'id' => 515,
                'psgcCode' => '175208000',
                'citymunDesc' => 'NAUJAN',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175208',
            ),
            15 => 
            array (
                'id' => 516,
                'psgcCode' => '175209000',
                'citymunDesc' => 'PINAMALAYAN',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175209',
            ),
            16 => 
            array (
                'id' => 517,
                'psgcCode' => '175210000',
                'citymunDesc' => 'POLA',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175210',
            ),
            17 => 
            array (
                'id' => 518,
                'psgcCode' => '175211000',
                'citymunDesc' => 'PUERTO GALERA',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175211',
            ),
            18 => 
            array (
                'id' => 519,
                'psgcCode' => '175212000',
                'citymunDesc' => 'ROXAS',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175212',
            ),
            19 => 
            array (
                'id' => 520,
                'psgcCode' => '175213000',
                'citymunDesc' => 'SAN TEODORO',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175213',
            ),
            20 => 
            array (
                'id' => 521,
                'psgcCode' => '175214000',
                'citymunDesc' => 'SOCORRO',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175214',
            ),
            21 => 
            array (
                'id' => 522,
                'psgcCode' => '175215000',
                'citymunDesc' => 'VICTORIA',
                'regDesc' => '17',
                'provCode' => '1752',
                'citymunCode' => '175215',
            ),
            22 => 
            array (
                'id' => 523,
                'psgcCode' => '175301000',
                'citymunDesc' => 'ABORLAN',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175301',
            ),
            23 => 
            array (
                'id' => 524,
                'psgcCode' => '175302000',
                'citymunDesc' => 'AGUTAYA',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175302',
            ),
            24 => 
            array (
                'id' => 525,
                'psgcCode' => '175303000',
                'citymunDesc' => 'ARACELI',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175303',
            ),
            25 => 
            array (
                'id' => 526,
                'psgcCode' => '175304000',
                'citymunDesc' => 'BALABAC',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175304',
            ),
            26 => 
            array (
                'id' => 527,
                'psgcCode' => '175305000',
                'citymunDesc' => 'BATARAZA',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175305',
            ),
            27 => 
            array (
                'id' => 528,
                'psgcCode' => '175306000',
                'citymunDesc' => 'BROOKE\'S POINT',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175306',
            ),
            28 => 
            array (
                'id' => 529,
                'psgcCode' => '175307000',
                'citymunDesc' => 'BUSUANGA',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175307',
            ),
            29 => 
            array (
                'id' => 530,
                'psgcCode' => '175308000',
                'citymunDesc' => 'CAGAYANCILLO',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175308',
            ),
            30 => 
            array (
                'id' => 531,
                'psgcCode' => '175309000',
                'citymunDesc' => 'CORON',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175309',
            ),
            31 => 
            array (
                'id' => 532,
                'psgcCode' => '175310000',
                'citymunDesc' => 'CUYO',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175310',
            ),
            32 => 
            array (
                'id' => 533,
                'psgcCode' => '175311000',
                'citymunDesc' => 'DUMARAN',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175311',
            ),
            33 => 
            array (
                'id' => 534,
                'psgcCode' => '175312000',
            'citymunDesc' => 'EL NIDO (BACUIT)',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175312',
            ),
            34 => 
            array (
                'id' => 535,
                'psgcCode' => '175313000',
                'citymunDesc' => 'LINAPACAN',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175313',
            ),
            35 => 
            array (
                'id' => 536,
                'psgcCode' => '175314000',
                'citymunDesc' => 'MAGSAYSAY',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175314',
            ),
            36 => 
            array (
                'id' => 537,
                'psgcCode' => '175315000',
                'citymunDesc' => 'NARRA',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175315',
            ),
            37 => 
            array (
                'id' => 538,
                'psgcCode' => '175316000',
            'citymunDesc' => 'PUERTO PRINCESA CITY (Capital)',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175316',
            ),
            38 => 
            array (
                'id' => 539,
                'psgcCode' => '175317000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175317',
            ),
            39 => 
            array (
                'id' => 540,
                'psgcCode' => '175318000',
                'citymunDesc' => 'ROXAS',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175318',
            ),
            40 => 
            array (
                'id' => 541,
                'psgcCode' => '175319000',
                'citymunDesc' => 'SAN VICENTE',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175319',
            ),
            41 => 
            array (
                'id' => 542,
                'psgcCode' => '175320000',
                'citymunDesc' => 'TAYTAY',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175320',
            ),
            42 => 
            array (
                'id' => 543,
                'psgcCode' => '175321000',
                'citymunDesc' => 'KALAYAAN',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175321',
            ),
            43 => 
            array (
                'id' => 544,
                'psgcCode' => '175322000',
                'citymunDesc' => 'CULION',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175322',
            ),
            44 => 
            array (
                'id' => 545,
                'psgcCode' => '175323000',
            'citymunDesc' => 'RIZAL (MARCOS)',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175323',
            ),
            45 => 
            array (
                'id' => 546,
                'psgcCode' => '175324000',
                'citymunDesc' => 'SOFRONIO ESPAÑOLA',
                'regDesc' => '17',
                'provCode' => '1753',
                'citymunCode' => '175324',
            ),
            46 => 
            array (
                'id' => 547,
                'psgcCode' => '175901000',
                'citymunDesc' => 'ALCANTARA',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175901',
            ),
            47 => 
            array (
                'id' => 548,
                'psgcCode' => '175902000',
                'citymunDesc' => 'BANTON',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175902',
            ),
            48 => 
            array (
                'id' => 549,
                'psgcCode' => '175903000',
                'citymunDesc' => 'CAJIDIOCAN',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175903',
            ),
            49 => 
            array (
                'id' => 550,
                'psgcCode' => '175904000',
                'citymunDesc' => 'CALATRAVA',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175904',
            ),
            50 => 
            array (
                'id' => 551,
                'psgcCode' => '175905000',
                'citymunDesc' => 'CONCEPCION',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175905',
            ),
            51 => 
            array (
                'id' => 552,
                'psgcCode' => '175906000',
                'citymunDesc' => 'CORCUERA',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175906',
            ),
            52 => 
            array (
                'id' => 553,
                'psgcCode' => '175907000',
                'citymunDesc' => 'LOOC',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175907',
            ),
            53 => 
            array (
                'id' => 554,
                'psgcCode' => '175908000',
                'citymunDesc' => 'MAGDIWANG',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175908',
            ),
            54 => 
            array (
                'id' => 555,
                'psgcCode' => '175909000',
                'citymunDesc' => 'ODIONGAN',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175909',
            ),
            55 => 
            array (
                'id' => 556,
                'psgcCode' => '175910000',
            'citymunDesc' => 'ROMBLON (Capital)',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175910',
            ),
            56 => 
            array (
                'id' => 557,
                'psgcCode' => '175911000',
                'citymunDesc' => 'SAN AGUSTIN',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175911',
            ),
            57 => 
            array (
                'id' => 558,
                'psgcCode' => '175912000',
                'citymunDesc' => 'SAN ANDRES',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175912',
            ),
            58 => 
            array (
                'id' => 559,
                'psgcCode' => '175913000',
                'citymunDesc' => 'SAN FERNANDO',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175913',
            ),
            59 => 
            array (
                'id' => 560,
                'psgcCode' => '175914000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175914',
            ),
            60 => 
            array (
                'id' => 561,
                'psgcCode' => '175915000',
                'citymunDesc' => 'SANTA FE',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175915',
            ),
            61 => 
            array (
                'id' => 562,
                'psgcCode' => '175916000',
                'citymunDesc' => 'FERROL',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175916',
            ),
            62 => 
            array (
                'id' => 563,
                'psgcCode' => '175917000',
            'citymunDesc' => 'SANTA MARIA (IMELDA)',
                'regDesc' => '17',
                'provCode' => '1759',
                'citymunCode' => '175917',
            ),
            63 => 
            array (
                'id' => 564,
                'psgcCode' => '050501000',
                'citymunDesc' => 'BACACAY',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050501',
            ),
            64 => 
            array (
                'id' => 565,
                'psgcCode' => '050502000',
                'citymunDesc' => 'CAMALIG',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050502',
            ),
            65 => 
            array (
                'id' => 566,
                'psgcCode' => '050503000',
            'citymunDesc' => 'DARAGA (LOCSIN)',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050503',
            ),
            66 => 
            array (
                'id' => 567,
                'psgcCode' => '050504000',
                'citymunDesc' => 'GUINOBATAN',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050504',
            ),
            67 => 
            array (
                'id' => 568,
                'psgcCode' => '050505000',
                'citymunDesc' => 'JOVELLAR',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050505',
            ),
            68 => 
            array (
                'id' => 569,
                'psgcCode' => '050506000',
            'citymunDesc' => 'LEGAZPI CITY (Capital)',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050506',
            ),
            69 => 
            array (
                'id' => 570,
                'psgcCode' => '050507000',
                'citymunDesc' => 'LIBON',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050507',
            ),
            70 => 
            array (
                'id' => 571,
                'psgcCode' => '050508000',
                'citymunDesc' => 'CITY OF LIGAO',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050508',
            ),
            71 => 
            array (
                'id' => 572,
                'psgcCode' => '050509000',
                'citymunDesc' => 'MALILIPOT',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050509',
            ),
            72 => 
            array (
                'id' => 573,
                'psgcCode' => '050510000',
                'citymunDesc' => 'MALINAO',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050510',
            ),
            73 => 
            array (
                'id' => 574,
                'psgcCode' => '050511000',
                'citymunDesc' => 'MANITO',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050511',
            ),
            74 => 
            array (
                'id' => 575,
                'psgcCode' => '050512000',
                'citymunDesc' => 'OAS',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050512',
            ),
            75 => 
            array (
                'id' => 576,
                'psgcCode' => '050513000',
                'citymunDesc' => 'PIO DURAN',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050513',
            ),
            76 => 
            array (
                'id' => 577,
                'psgcCode' => '050514000',
                'citymunDesc' => 'POLANGUI',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050514',
            ),
            77 => 
            array (
                'id' => 578,
                'psgcCode' => '050515000',
                'citymunDesc' => 'RAPU-RAPU',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050515',
            ),
            78 => 
            array (
                'id' => 579,
                'psgcCode' => '050516000',
            'citymunDesc' => 'SANTO DOMINGO (LIBOG)',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050516',
            ),
            79 => 
            array (
                'id' => 580,
                'psgcCode' => '050517000',
                'citymunDesc' => 'CITY OF TABACO',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050517',
            ),
            80 => 
            array (
                'id' => 581,
                'psgcCode' => '050518000',
                'citymunDesc' => 'TIWI',
                'regDesc' => '05',
                'provCode' => '0505',
                'citymunCode' => '050518',
            ),
            81 => 
            array (
                'id' => 582,
                'psgcCode' => '051601000',
                'citymunDesc' => 'BASUD',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051601',
            ),
            82 => 
            array (
                'id' => 583,
                'psgcCode' => '051602000',
                'citymunDesc' => 'CAPALONGA',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051602',
            ),
            83 => 
            array (
                'id' => 584,
                'psgcCode' => '051603000',
            'citymunDesc' => 'DAET (Capital)',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051603',
            ),
            84 => 
            array (
                'id' => 585,
                'psgcCode' => '051604000',
            'citymunDesc' => 'SAN LORENZO RUIZ (IMELDA)',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051604',
            ),
            85 => 
            array (
                'id' => 586,
                'psgcCode' => '051605000',
                'citymunDesc' => 'JOSE PANGANIBAN',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051605',
            ),
            86 => 
            array (
                'id' => 587,
                'psgcCode' => '051606000',
                'citymunDesc' => 'LABO',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051606',
            ),
            87 => 
            array (
                'id' => 588,
                'psgcCode' => '051607000',
                'citymunDesc' => 'MERCEDES',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051607',
            ),
            88 => 
            array (
                'id' => 589,
                'psgcCode' => '051608000',
                'citymunDesc' => 'PARACALE',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051608',
            ),
            89 => 
            array (
                'id' => 590,
                'psgcCode' => '051609000',
                'citymunDesc' => 'SAN VICENTE',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051609',
            ),
            90 => 
            array (
                'id' => 591,
                'psgcCode' => '051610000',
                'citymunDesc' => 'SANTA ELENA',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051610',
            ),
            91 => 
            array (
                'id' => 592,
                'psgcCode' => '051611000',
                'citymunDesc' => 'TALISAY',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051611',
            ),
            92 => 
            array (
                'id' => 593,
                'psgcCode' => '051612000',
                'citymunDesc' => 'VINZONS',
                'regDesc' => '05',
                'provCode' => '0516',
                'citymunCode' => '051612',
            ),
            93 => 
            array (
                'id' => 594,
                'psgcCode' => '051701000',
                'citymunDesc' => 'BAAO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051701',
            ),
            94 => 
            array (
                'id' => 595,
                'psgcCode' => '051702000',
                'citymunDesc' => 'BALATAN',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051702',
            ),
            95 => 
            array (
                'id' => 596,
                'psgcCode' => '051703000',
                'citymunDesc' => 'BATO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051703',
            ),
            96 => 
            array (
                'id' => 597,
                'psgcCode' => '051704000',
                'citymunDesc' => 'BOMBON',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051704',
            ),
            97 => 
            array (
                'id' => 598,
                'psgcCode' => '051705000',
                'citymunDesc' => 'BUHI',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051705',
            ),
            98 => 
            array (
                'id' => 599,
                'psgcCode' => '051706000',
                'citymunDesc' => 'BULA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051706',
            ),
            99 => 
            array (
                'id' => 600,
                'psgcCode' => '051707000',
                'citymunDesc' => 'CABUSAO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051707',
            ),
            100 => 
            array (
                'id' => 601,
                'psgcCode' => '051708000',
                'citymunDesc' => 'CALABANGA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051708',
            ),
            101 => 
            array (
                'id' => 602,
                'psgcCode' => '051709000',
                'citymunDesc' => 'CAMALIGAN',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051709',
            ),
            102 => 
            array (
                'id' => 603,
                'psgcCode' => '051710000',
                'citymunDesc' => 'CANAMAN',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051710',
            ),
            103 => 
            array (
                'id' => 604,
                'psgcCode' => '051711000',
                'citymunDesc' => 'CARAMOAN',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051711',
            ),
            104 => 
            array (
                'id' => 605,
                'psgcCode' => '051712000',
                'citymunDesc' => 'DEL GALLEGO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051712',
            ),
            105 => 
            array (
                'id' => 606,
                'psgcCode' => '051713000',
                'citymunDesc' => 'GAINZA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051713',
            ),
            106 => 
            array (
                'id' => 607,
                'psgcCode' => '051714000',
                'citymunDesc' => 'GARCHITORENA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051714',
            ),
            107 => 
            array (
                'id' => 608,
                'psgcCode' => '051715000',
                'citymunDesc' => 'GOA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051715',
            ),
            108 => 
            array (
                'id' => 609,
                'psgcCode' => '051716000',
                'citymunDesc' => 'IRIGA CITY',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051716',
            ),
            109 => 
            array (
                'id' => 610,
                'psgcCode' => '051717000',
                'citymunDesc' => 'LAGONOY',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051717',
            ),
            110 => 
            array (
                'id' => 611,
                'psgcCode' => '051718000',
                'citymunDesc' => 'LIBMANAN',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051718',
            ),
            111 => 
            array (
                'id' => 612,
                'psgcCode' => '051719000',
                'citymunDesc' => 'LUPI',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051719',
            ),
            112 => 
            array (
                'id' => 613,
                'psgcCode' => '051720000',
                'citymunDesc' => 'MAGARAO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051720',
            ),
            113 => 
            array (
                'id' => 614,
                'psgcCode' => '051721000',
                'citymunDesc' => 'MILAOR',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051721',
            ),
            114 => 
            array (
                'id' => 615,
                'psgcCode' => '051722000',
                'citymunDesc' => 'MINALABAC',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051722',
            ),
            115 => 
            array (
                'id' => 616,
                'psgcCode' => '051723000',
                'citymunDesc' => 'NABUA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051723',
            ),
            116 => 
            array (
                'id' => 617,
                'psgcCode' => '051724000',
                'citymunDesc' => 'NAGA CITY',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051724',
            ),
            117 => 
            array (
                'id' => 618,
                'psgcCode' => '051725000',
                'citymunDesc' => 'OCAMPO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051725',
            ),
            118 => 
            array (
                'id' => 619,
                'psgcCode' => '051726000',
                'citymunDesc' => 'PAMPLONA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051726',
            ),
            119 => 
            array (
                'id' => 620,
                'psgcCode' => '051727000',
                'citymunDesc' => 'PASACAO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051727',
            ),
            120 => 
            array (
                'id' => 621,
                'psgcCode' => '051728000',
            'citymunDesc' => 'PILI (Capital)',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051728',
            ),
            121 => 
            array (
                'id' => 622,
                'psgcCode' => '051729000',
            'citymunDesc' => 'PRESENTACION (PARUBCAN)',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051729',
            ),
            122 => 
            array (
                'id' => 623,
                'psgcCode' => '051730000',
                'citymunDesc' => 'RAGAY',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051730',
            ),
            123 => 
            array (
                'id' => 624,
                'psgcCode' => '051731000',
                'citymunDesc' => 'SAGÑAY',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051731',
            ),
            124 => 
            array (
                'id' => 625,
                'psgcCode' => '051732000',
                'citymunDesc' => 'SAN FERNANDO',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051732',
            ),
            125 => 
            array (
                'id' => 626,
                'psgcCode' => '051733000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051733',
            ),
            126 => 
            array (
                'id' => 627,
                'psgcCode' => '051734000',
                'citymunDesc' => 'SIPOCOT',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051734',
            ),
            127 => 
            array (
                'id' => 628,
                'psgcCode' => '051735000',
                'citymunDesc' => 'SIRUMA',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051735',
            ),
            128 => 
            array (
                'id' => 629,
                'psgcCode' => '051736000',
                'citymunDesc' => 'TIGAON',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051736',
            ),
            129 => 
            array (
                'id' => 630,
                'psgcCode' => '051737000',
                'citymunDesc' => 'TINAMBAC',
                'regDesc' => '05',
                'provCode' => '0517',
                'citymunCode' => '051737',
            ),
            130 => 
            array (
                'id' => 631,
                'psgcCode' => '052001000',
                'citymunDesc' => 'BAGAMANOC',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052001',
            ),
            131 => 
            array (
                'id' => 632,
                'psgcCode' => '052002000',
                'citymunDesc' => 'BARAS',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052002',
            ),
            132 => 
            array (
                'id' => 633,
                'psgcCode' => '052003000',
                'citymunDesc' => 'BATO',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052003',
            ),
            133 => 
            array (
                'id' => 634,
                'psgcCode' => '052004000',
                'citymunDesc' => 'CARAMORAN',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052004',
            ),
            134 => 
            array (
                'id' => 635,
                'psgcCode' => '052005000',
                'citymunDesc' => 'GIGMOTO',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052005',
            ),
            135 => 
            array (
                'id' => 636,
                'psgcCode' => '052006000',
                'citymunDesc' => 'PANDAN',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052006',
            ),
            136 => 
            array (
                'id' => 637,
                'psgcCode' => '052007000',
            'citymunDesc' => 'PANGANIBAN (PAYO)',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052007',
            ),
            137 => 
            array (
                'id' => 638,
                'psgcCode' => '052008000',
            'citymunDesc' => 'SAN ANDRES (CALOLBON)',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052008',
            ),
            138 => 
            array (
                'id' => 639,
                'psgcCode' => '052009000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052009',
            ),
            139 => 
            array (
                'id' => 640,
                'psgcCode' => '052010000',
                'citymunDesc' => 'VIGA',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052010',
            ),
            140 => 
            array (
                'id' => 641,
                'psgcCode' => '052011000',
            'citymunDesc' => 'VIRAC (Capital)',
                'regDesc' => '05',
                'provCode' => '0520',
                'citymunCode' => '052011',
            ),
            141 => 
            array (
                'id' => 642,
                'psgcCode' => '054101000',
                'citymunDesc' => 'AROROY',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054101',
            ),
            142 => 
            array (
                'id' => 643,
                'psgcCode' => '054102000',
                'citymunDesc' => 'BALENO',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054102',
            ),
            143 => 
            array (
                'id' => 644,
                'psgcCode' => '054103000',
                'citymunDesc' => 'BALUD',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054103',
            ),
            144 => 
            array (
                'id' => 645,
                'psgcCode' => '054104000',
                'citymunDesc' => 'BATUAN',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054104',
            ),
            145 => 
            array (
                'id' => 646,
                'psgcCode' => '054105000',
                'citymunDesc' => 'CATAINGAN',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054105',
            ),
            146 => 
            array (
                'id' => 647,
                'psgcCode' => '054106000',
                'citymunDesc' => 'CAWAYAN',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054106',
            ),
            147 => 
            array (
                'id' => 648,
                'psgcCode' => '054107000',
                'citymunDesc' => 'CLAVERIA',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054107',
            ),
            148 => 
            array (
                'id' => 649,
                'psgcCode' => '054108000',
                'citymunDesc' => 'DIMASALANG',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054108',
            ),
            149 => 
            array (
                'id' => 650,
                'psgcCode' => '054109000',
                'citymunDesc' => 'ESPERANZA',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054109',
            ),
            150 => 
            array (
                'id' => 651,
                'psgcCode' => '054110000',
                'citymunDesc' => 'MANDAON',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054110',
            ),
            151 => 
            array (
                'id' => 652,
                'psgcCode' => '054111000',
            'citymunDesc' => 'CITY OF MASBATE (Capital)',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054111',
            ),
            152 => 
            array (
                'id' => 653,
                'psgcCode' => '054112000',
                'citymunDesc' => 'MILAGROS',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054112',
            ),
            153 => 
            array (
                'id' => 654,
                'psgcCode' => '054113000',
                'citymunDesc' => 'MOBO',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054113',
            ),
            154 => 
            array (
                'id' => 655,
                'psgcCode' => '054114000',
                'citymunDesc' => 'MONREAL',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054114',
            ),
            155 => 
            array (
                'id' => 656,
                'psgcCode' => '054115000',
                'citymunDesc' => 'PALANAS',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054115',
            ),
            156 => 
            array (
                'id' => 657,
                'psgcCode' => '054116000',
            'citymunDesc' => 'PIO V. CORPUZ (LIMBUHAN)',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054116',
            ),
            157 => 
            array (
                'id' => 658,
                'psgcCode' => '054117000',
                'citymunDesc' => 'PLACER',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054117',
            ),
            158 => 
            array (
                'id' => 659,
                'psgcCode' => '054118000',
                'citymunDesc' => 'SAN FERNANDO',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054118',
            ),
            159 => 
            array (
                'id' => 660,
                'psgcCode' => '054119000',
                'citymunDesc' => 'SAN JACINTO',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054119',
            ),
            160 => 
            array (
                'id' => 661,
                'psgcCode' => '054120000',
                'citymunDesc' => 'SAN PASCUAL',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054120',
            ),
            161 => 
            array (
                'id' => 662,
                'psgcCode' => '054121000',
                'citymunDesc' => 'USON',
                'regDesc' => '05',
                'provCode' => '0541',
                'citymunCode' => '054121',
            ),
            162 => 
            array (
                'id' => 663,
                'psgcCode' => '056202000',
                'citymunDesc' => 'BARCELONA',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056202',
            ),
            163 => 
            array (
                'id' => 664,
                'psgcCode' => '056203000',
                'citymunDesc' => 'BULAN',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056203',
            ),
            164 => 
            array (
                'id' => 665,
                'psgcCode' => '056204000',
                'citymunDesc' => 'BULUSAN',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056204',
            ),
            165 => 
            array (
                'id' => 666,
                'psgcCode' => '056205000',
                'citymunDesc' => 'CASIGURAN',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056205',
            ),
            166 => 
            array (
                'id' => 667,
                'psgcCode' => '056206000',
                'citymunDesc' => 'CASTILLA',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056206',
            ),
            167 => 
            array (
                'id' => 668,
                'psgcCode' => '056207000',
                'citymunDesc' => 'DONSOL',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056207',
            ),
            168 => 
            array (
                'id' => 669,
                'psgcCode' => '056208000',
                'citymunDesc' => 'GUBAT',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056208',
            ),
            169 => 
            array (
                'id' => 670,
                'psgcCode' => '056209000',
                'citymunDesc' => 'IROSIN',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056209',
            ),
            170 => 
            array (
                'id' => 671,
                'psgcCode' => '056210000',
                'citymunDesc' => 'JUBAN',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056210',
            ),
            171 => 
            array (
                'id' => 672,
                'psgcCode' => '056211000',
                'citymunDesc' => 'MAGALLANES',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056211',
            ),
            172 => 
            array (
                'id' => 673,
                'psgcCode' => '056212000',
                'citymunDesc' => 'MATNOG',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056212',
            ),
            173 => 
            array (
                'id' => 674,
                'psgcCode' => '056213000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056213',
            ),
            174 => 
            array (
                'id' => 675,
                'psgcCode' => '056214000',
                'citymunDesc' => 'PRIETO DIAZ',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056214',
            ),
            175 => 
            array (
                'id' => 676,
                'psgcCode' => '056215000',
                'citymunDesc' => 'SANTA MAGDALENA',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056215',
            ),
            176 => 
            array (
                'id' => 677,
                'psgcCode' => '056216000',
            'citymunDesc' => 'CITY OF SORSOGON (Capital)',
                'regDesc' => '05',
                'provCode' => '0562',
                'citymunCode' => '056216',
            ),
            177 => 
            array (
                'id' => 678,
                'psgcCode' => '060401000',
                'citymunDesc' => 'ALTAVAS',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060401',
            ),
            178 => 
            array (
                'id' => 679,
                'psgcCode' => '060402000',
                'citymunDesc' => 'BALETE',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060402',
            ),
            179 => 
            array (
                'id' => 680,
                'psgcCode' => '060403000',
                'citymunDesc' => 'BANGA',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060403',
            ),
            180 => 
            array (
                'id' => 681,
                'psgcCode' => '060404000',
                'citymunDesc' => 'BATAN',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060404',
            ),
            181 => 
            array (
                'id' => 682,
                'psgcCode' => '060405000',
                'citymunDesc' => 'BURUANGA',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060405',
            ),
            182 => 
            array (
                'id' => 683,
                'psgcCode' => '060406000',
                'citymunDesc' => 'IBAJAY',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060406',
            ),
            183 => 
            array (
                'id' => 684,
                'psgcCode' => '060407000',
            'citymunDesc' => 'KALIBO (Capital)',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060407',
            ),
            184 => 
            array (
                'id' => 685,
                'psgcCode' => '060408000',
                'citymunDesc' => 'LEZO',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060408',
            ),
            185 => 
            array (
                'id' => 686,
                'psgcCode' => '060409000',
                'citymunDesc' => 'LIBACAO',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060409',
            ),
            186 => 
            array (
                'id' => 687,
                'psgcCode' => '060410000',
                'citymunDesc' => 'MADALAG',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060410',
            ),
            187 => 
            array (
                'id' => 688,
                'psgcCode' => '060411000',
                'citymunDesc' => 'MAKATO',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060411',
            ),
            188 => 
            array (
                'id' => 689,
                'psgcCode' => '060412000',
                'citymunDesc' => 'MALAY',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060412',
            ),
            189 => 
            array (
                'id' => 690,
                'psgcCode' => '060413000',
                'citymunDesc' => 'MALINAO',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060413',
            ),
            190 => 
            array (
                'id' => 691,
                'psgcCode' => '060414000',
                'citymunDesc' => 'NABAS',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060414',
            ),
            191 => 
            array (
                'id' => 692,
                'psgcCode' => '060415000',
                'citymunDesc' => 'NEW WASHINGTON',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060415',
            ),
            192 => 
            array (
                'id' => 693,
                'psgcCode' => '060416000',
                'citymunDesc' => 'NUMANCIA',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060416',
            ),
            193 => 
            array (
                'id' => 694,
                'psgcCode' => '060417000',
                'citymunDesc' => 'TANGALAN',
                'regDesc' => '06',
                'provCode' => '0604',
                'citymunCode' => '060417',
            ),
            194 => 
            array (
                'id' => 695,
                'psgcCode' => '060601000',
                'citymunDesc' => 'ANINI-Y',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060601',
            ),
            195 => 
            array (
                'id' => 696,
                'psgcCode' => '060602000',
                'citymunDesc' => 'BARBAZA',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060602',
            ),
            196 => 
            array (
                'id' => 697,
                'psgcCode' => '060603000',
                'citymunDesc' => 'BELISON',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060603',
            ),
            197 => 
            array (
                'id' => 698,
                'psgcCode' => '060604000',
                'citymunDesc' => 'BUGASONG',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060604',
            ),
            198 => 
            array (
                'id' => 699,
                'psgcCode' => '060605000',
                'citymunDesc' => 'CALUYA',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060605',
            ),
            199 => 
            array (
                'id' => 700,
                'psgcCode' => '060606000',
                'citymunDesc' => 'CULASI',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060606',
            ),
            200 => 
            array (
                'id' => 701,
                'psgcCode' => '060607000',
            'citymunDesc' => 'TOBIAS FORNIER (DAO)',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060607',
            ),
            201 => 
            array (
                'id' => 702,
                'psgcCode' => '060608000',
                'citymunDesc' => 'HAMTIC',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060608',
            ),
            202 => 
            array (
                'id' => 703,
                'psgcCode' => '060609000',
                'citymunDesc' => 'LAUA-AN',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060609',
            ),
            203 => 
            array (
                'id' => 704,
                'psgcCode' => '060610000',
                'citymunDesc' => 'LIBERTAD',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060610',
            ),
            204 => 
            array (
                'id' => 705,
                'psgcCode' => '060611000',
                'citymunDesc' => 'PANDAN',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060611',
            ),
            205 => 
            array (
                'id' => 706,
                'psgcCode' => '060612000',
                'citymunDesc' => 'PATNONGON',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060612',
            ),
            206 => 
            array (
                'id' => 707,
                'psgcCode' => '060613000',
            'citymunDesc' => 'SAN JOSE (Capital)',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060613',
            ),
            207 => 
            array (
                'id' => 708,
                'psgcCode' => '060614000',
                'citymunDesc' => 'SAN REMIGIO',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060614',
            ),
            208 => 
            array (
                'id' => 709,
                'psgcCode' => '060615000',
                'citymunDesc' => 'SEBASTE',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060615',
            ),
            209 => 
            array (
                'id' => 710,
                'psgcCode' => '060616000',
                'citymunDesc' => 'SIBALOM',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060616',
            ),
            210 => 
            array (
                'id' => 711,
                'psgcCode' => '060617000',
                'citymunDesc' => 'TIBIAO',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060617',
            ),
            211 => 
            array (
                'id' => 712,
                'psgcCode' => '060618000',
                'citymunDesc' => 'VALDERRAMA',
                'regDesc' => '06',
                'provCode' => '0606',
                'citymunCode' => '060618',
            ),
            212 => 
            array (
                'id' => 713,
                'psgcCode' => '061901000',
                'citymunDesc' => 'CUARTERO',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061901',
            ),
            213 => 
            array (
                'id' => 714,
                'psgcCode' => '061902000',
                'citymunDesc' => 'DAO',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061902',
            ),
            214 => 
            array (
                'id' => 715,
                'psgcCode' => '061903000',
                'citymunDesc' => 'DUMALAG',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061903',
            ),
            215 => 
            array (
                'id' => 716,
                'psgcCode' => '061904000',
                'citymunDesc' => 'DUMARAO',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061904',
            ),
            216 => 
            array (
                'id' => 717,
                'psgcCode' => '061905000',
                'citymunDesc' => 'IVISAN',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061905',
            ),
            217 => 
            array (
                'id' => 718,
                'psgcCode' => '061906000',
                'citymunDesc' => 'JAMINDAN',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061906',
            ),
            218 => 
            array (
                'id' => 719,
                'psgcCode' => '061907000',
                'citymunDesc' => 'MA-AYON',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061907',
            ),
            219 => 
            array (
                'id' => 720,
                'psgcCode' => '061908000',
                'citymunDesc' => 'MAMBUSAO',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061908',
            ),
            220 => 
            array (
                'id' => 721,
                'psgcCode' => '061909000',
                'citymunDesc' => 'PANAY',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061909',
            ),
            221 => 
            array (
                'id' => 722,
                'psgcCode' => '061910000',
                'citymunDesc' => 'PANITAN',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061910',
            ),
            222 => 
            array (
                'id' => 723,
                'psgcCode' => '061911000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061911',
            ),
            223 => 
            array (
                'id' => 724,
                'psgcCode' => '061912000',
                'citymunDesc' => 'PONTEVEDRA',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061912',
            ),
            224 => 
            array (
                'id' => 725,
                'psgcCode' => '061913000',
                'citymunDesc' => 'PRESIDENT ROXAS',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061913',
            ),
            225 => 
            array (
                'id' => 726,
                'psgcCode' => '061914000',
            'citymunDesc' => 'ROXAS CITY (Capital)',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061914',
            ),
            226 => 
            array (
                'id' => 727,
                'psgcCode' => '061915000',
                'citymunDesc' => 'SAPI-AN',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061915',
            ),
            227 => 
            array (
                'id' => 728,
                'psgcCode' => '061916000',
                'citymunDesc' => 'SIGMA',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061916',
            ),
            228 => 
            array (
                'id' => 729,
                'psgcCode' => '061917000',
                'citymunDesc' => 'TAPAZ',
                'regDesc' => '06',
                'provCode' => '0619',
                'citymunCode' => '061917',
            ),
            229 => 
            array (
                'id' => 730,
                'psgcCode' => '063001000',
                'citymunDesc' => 'AJUY',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063001',
            ),
            230 => 
            array (
                'id' => 731,
                'psgcCode' => '063002000',
                'citymunDesc' => 'ALIMODIAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063002',
            ),
            231 => 
            array (
                'id' => 732,
                'psgcCode' => '063003000',
                'citymunDesc' => 'ANILAO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063003',
            ),
            232 => 
            array (
                'id' => 733,
                'psgcCode' => '063004000',
                'citymunDesc' => 'BADIANGAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063004',
            ),
            233 => 
            array (
                'id' => 734,
                'psgcCode' => '063005000',
                'citymunDesc' => 'BALASAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063005',
            ),
            234 => 
            array (
                'id' => 735,
                'psgcCode' => '063006000',
                'citymunDesc' => 'BANATE',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063006',
            ),
            235 => 
            array (
                'id' => 736,
                'psgcCode' => '063007000',
                'citymunDesc' => 'BAROTAC NUEVO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063007',
            ),
            236 => 
            array (
                'id' => 737,
                'psgcCode' => '063008000',
                'citymunDesc' => 'BAROTAC VIEJO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063008',
            ),
            237 => 
            array (
                'id' => 738,
                'psgcCode' => '063009000',
                'citymunDesc' => 'BATAD',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063009',
            ),
            238 => 
            array (
                'id' => 739,
                'psgcCode' => '063010000',
                'citymunDesc' => 'BINGAWAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063010',
            ),
            239 => 
            array (
                'id' => 740,
                'psgcCode' => '063012000',
                'citymunDesc' => 'CABATUAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063012',
            ),
            240 => 
            array (
                'id' => 741,
                'psgcCode' => '063013000',
                'citymunDesc' => 'CALINOG',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063013',
            ),
            241 => 
            array (
                'id' => 742,
                'psgcCode' => '063014000',
                'citymunDesc' => 'CARLES',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063014',
            ),
            242 => 
            array (
                'id' => 743,
                'psgcCode' => '063015000',
                'citymunDesc' => 'CONCEPCION',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063015',
            ),
            243 => 
            array (
                'id' => 744,
                'psgcCode' => '063016000',
                'citymunDesc' => 'DINGLE',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063016',
            ),
            244 => 
            array (
                'id' => 745,
                'psgcCode' => '063017000',
                'citymunDesc' => 'DUEÑAS',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063017',
            ),
            245 => 
            array (
                'id' => 746,
                'psgcCode' => '063018000',
                'citymunDesc' => 'DUMANGAS',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063018',
            ),
            246 => 
            array (
                'id' => 747,
                'psgcCode' => '063019000',
                'citymunDesc' => 'ESTANCIA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063019',
            ),
            247 => 
            array (
                'id' => 748,
                'psgcCode' => '063020000',
                'citymunDesc' => 'GUIMBAL',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063020',
            ),
            248 => 
            array (
                'id' => 749,
                'psgcCode' => '063021000',
                'citymunDesc' => 'IGBARAS',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063021',
            ),
            249 => 
            array (
                'id' => 750,
                'psgcCode' => '063022000',
            'citymunDesc' => 'ILOILO CITY (Capital)',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063022',
            ),
            250 => 
            array (
                'id' => 751,
                'psgcCode' => '063023000',
                'citymunDesc' => 'JANIUAY',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063023',
            ),
            251 => 
            array (
                'id' => 752,
                'psgcCode' => '063025000',
                'citymunDesc' => 'LAMBUNAO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063025',
            ),
            252 => 
            array (
                'id' => 753,
                'psgcCode' => '063026000',
                'citymunDesc' => 'LEGANES',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063026',
            ),
            253 => 
            array (
                'id' => 754,
                'psgcCode' => '063027000',
                'citymunDesc' => 'LEMERY',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063027',
            ),
            254 => 
            array (
                'id' => 755,
                'psgcCode' => '063028000',
                'citymunDesc' => 'LEON',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063028',
            ),
            255 => 
            array (
                'id' => 756,
                'psgcCode' => '063029000',
                'citymunDesc' => 'MAASIN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063029',
            ),
            256 => 
            array (
                'id' => 757,
                'psgcCode' => '063030000',
                'citymunDesc' => 'MIAGAO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063030',
            ),
            257 => 
            array (
                'id' => 758,
                'psgcCode' => '063031000',
                'citymunDesc' => 'MINA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063031',
            ),
            258 => 
            array (
                'id' => 759,
                'psgcCode' => '063032000',
                'citymunDesc' => 'NEW LUCENA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063032',
            ),
            259 => 
            array (
                'id' => 760,
                'psgcCode' => '063034000',
                'citymunDesc' => 'OTON',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063034',
            ),
            260 => 
            array (
                'id' => 761,
                'psgcCode' => '063035000',
                'citymunDesc' => 'CITY OF PASSI',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063035',
            ),
            261 => 
            array (
                'id' => 762,
                'psgcCode' => '063036000',
                'citymunDesc' => 'PAVIA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063036',
            ),
            262 => 
            array (
                'id' => 763,
                'psgcCode' => '063037000',
                'citymunDesc' => 'POTOTAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063037',
            ),
            263 => 
            array (
                'id' => 764,
                'psgcCode' => '063038000',
                'citymunDesc' => 'SAN DIONISIO',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063038',
            ),
            264 => 
            array (
                'id' => 765,
                'psgcCode' => '063039000',
                'citymunDesc' => 'SAN ENRIQUE',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063039',
            ),
            265 => 
            array (
                'id' => 766,
                'psgcCode' => '063040000',
                'citymunDesc' => 'SAN JOAQUIN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063040',
            ),
            266 => 
            array (
                'id' => 767,
                'psgcCode' => '063041000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063041',
            ),
            267 => 
            array (
                'id' => 768,
                'psgcCode' => '063042000',
                'citymunDesc' => 'SAN RAFAEL',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063042',
            ),
            268 => 
            array (
                'id' => 769,
                'psgcCode' => '063043000',
                'citymunDesc' => 'SANTA BARBARA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063043',
            ),
            269 => 
            array (
                'id' => 770,
                'psgcCode' => '063044000',
                'citymunDesc' => 'SARA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063044',
            ),
            270 => 
            array (
                'id' => 771,
                'psgcCode' => '063045000',
                'citymunDesc' => 'TIGBAUAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063045',
            ),
            271 => 
            array (
                'id' => 772,
                'psgcCode' => '063046000',
                'citymunDesc' => 'TUBUNGAN',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063046',
            ),
            272 => 
            array (
                'id' => 773,
                'psgcCode' => '063047000',
                'citymunDesc' => 'ZARRAGA',
                'regDesc' => '06',
                'provCode' => '0630',
                'citymunCode' => '063047',
            ),
            273 => 
            array (
                'id' => 774,
                'psgcCode' => '064501000',
            'citymunDesc' => 'BACOLOD CITY (Capital)',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064501',
            ),
            274 => 
            array (
                'id' => 775,
                'psgcCode' => '064502000',
                'citymunDesc' => 'BAGO CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064502',
            ),
            275 => 
            array (
                'id' => 776,
                'psgcCode' => '064503000',
                'citymunDesc' => 'BINALBAGAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064503',
            ),
            276 => 
            array (
                'id' => 777,
                'psgcCode' => '064504000',
                'citymunDesc' => 'CADIZ CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064504',
            ),
            277 => 
            array (
                'id' => 778,
                'psgcCode' => '064505000',
                'citymunDesc' => 'CALATRAVA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064505',
            ),
            278 => 
            array (
                'id' => 779,
                'psgcCode' => '064506000',
                'citymunDesc' => 'CANDONI',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064506',
            ),
            279 => 
            array (
                'id' => 780,
                'psgcCode' => '064507000',
                'citymunDesc' => 'CAUAYAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064507',
            ),
            280 => 
            array (
                'id' => 781,
                'psgcCode' => '064508000',
            'citymunDesc' => 'ENRIQUE B. MAGALONA (SARAVIA)',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064508',
            ),
            281 => 
            array (
                'id' => 782,
                'psgcCode' => '064509000',
                'citymunDesc' => 'CITY OF ESCALANTE',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064509',
            ),
            282 => 
            array (
                'id' => 783,
                'psgcCode' => '064510000',
                'citymunDesc' => 'CITY OF HIMAMAYLAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064510',
            ),
            283 => 
            array (
                'id' => 784,
                'psgcCode' => '064511000',
                'citymunDesc' => 'HINIGARAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064511',
            ),
            284 => 
            array (
                'id' => 785,
                'psgcCode' => '064512000',
            'citymunDesc' => 'HINOBA-AN (ASIA)',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064512',
            ),
            285 => 
            array (
                'id' => 786,
                'psgcCode' => '064513000',
                'citymunDesc' => 'ILOG',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064513',
            ),
            286 => 
            array (
                'id' => 787,
                'psgcCode' => '064514000',
                'citymunDesc' => 'ISABELA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064514',
            ),
            287 => 
            array (
                'id' => 788,
                'psgcCode' => '064515000',
                'citymunDesc' => 'CITY OF KABANKALAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064515',
            ),
            288 => 
            array (
                'id' => 789,
                'psgcCode' => '064516000',
                'citymunDesc' => 'LA CARLOTA CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064516',
            ),
            289 => 
            array (
                'id' => 790,
                'psgcCode' => '064517000',
                'citymunDesc' => 'LA CASTELLANA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064517',
            ),
            290 => 
            array (
                'id' => 791,
                'psgcCode' => '064518000',
                'citymunDesc' => 'MANAPLA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064518',
            ),
            291 => 
            array (
                'id' => 792,
                'psgcCode' => '064519000',
            'citymunDesc' => 'MOISES PADILLA (MAGALLON)',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064519',
            ),
            292 => 
            array (
                'id' => 793,
                'psgcCode' => '064520000',
                'citymunDesc' => 'MURCIA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064520',
            ),
            293 => 
            array (
                'id' => 794,
                'psgcCode' => '064521000',
                'citymunDesc' => 'PONTEVEDRA',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064521',
            ),
            294 => 
            array (
                'id' => 795,
                'psgcCode' => '064522000',
                'citymunDesc' => 'PULUPANDAN',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064522',
            ),
            295 => 
            array (
                'id' => 796,
                'psgcCode' => '064523000',
                'citymunDesc' => 'SAGAY CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064523',
            ),
            296 => 
            array (
                'id' => 797,
                'psgcCode' => '064524000',
                'citymunDesc' => 'SAN CARLOS CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064524',
            ),
            297 => 
            array (
                'id' => 798,
                'psgcCode' => '064525000',
                'citymunDesc' => 'SAN ENRIQUE',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064525',
            ),
            298 => 
            array (
                'id' => 799,
                'psgcCode' => '064526000',
                'citymunDesc' => 'SILAY CITY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064526',
            ),
            299 => 
            array (
                'id' => 800,
                'psgcCode' => '064527000',
                'citymunDesc' => 'CITY OF SIPALAY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064527',
            ),
            300 => 
            array (
                'id' => 801,
                'psgcCode' => '064528000',
                'citymunDesc' => 'CITY OF TALISAY',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064528',
            ),
            301 => 
            array (
                'id' => 802,
                'psgcCode' => '064529000',
                'citymunDesc' => 'TOBOSO',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064529',
            ),
            302 => 
            array (
                'id' => 803,
                'psgcCode' => '064530000',
                'citymunDesc' => 'VALLADOLID',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064530',
            ),
            303 => 
            array (
                'id' => 804,
                'psgcCode' => '064531000',
                'citymunDesc' => 'CITY OF VICTORIAS',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064531',
            ),
            304 => 
            array (
                'id' => 805,
                'psgcCode' => '064532000',
                'citymunDesc' => 'SALVADOR BENEDICTO',
                'regDesc' => '06',
                'provCode' => '0645',
                'citymunCode' => '064532',
            ),
            305 => 
            array (
                'id' => 806,
                'psgcCode' => '067901000',
                'citymunDesc' => 'BUENAVISTA',
                'regDesc' => '06',
                'provCode' => '0679',
                'citymunCode' => '067901',
            ),
            306 => 
            array (
                'id' => 807,
                'psgcCode' => '067902000',
            'citymunDesc' => 'JORDAN (Capital)',
                'regDesc' => '06',
                'provCode' => '0679',
                'citymunCode' => '067902',
            ),
            307 => 
            array (
                'id' => 808,
                'psgcCode' => '067903000',
                'citymunDesc' => 'NUEVA VALENCIA',
                'regDesc' => '06',
                'provCode' => '0679',
                'citymunCode' => '067903',
            ),
            308 => 
            array (
                'id' => 809,
                'psgcCode' => '067904000',
                'citymunDesc' => 'SAN LORENZO',
                'regDesc' => '06',
                'provCode' => '0679',
                'citymunCode' => '067904',
            ),
            309 => 
            array (
                'id' => 810,
                'psgcCode' => '067905000',
                'citymunDesc' => 'SIBUNAG',
                'regDesc' => '06',
                'provCode' => '0679',
                'citymunCode' => '067905',
            ),
            310 => 
            array (
                'id' => 811,
                'psgcCode' => '071201000',
                'citymunDesc' => 'ALBURQUERQUE',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071201',
            ),
            311 => 
            array (
                'id' => 812,
                'psgcCode' => '071202000',
                'citymunDesc' => 'ALICIA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071202',
            ),
            312 => 
            array (
                'id' => 813,
                'psgcCode' => '071203000',
                'citymunDesc' => 'ANDA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071203',
            ),
            313 => 
            array (
                'id' => 814,
                'psgcCode' => '071204000',
                'citymunDesc' => 'ANTEQUERA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071204',
            ),
            314 => 
            array (
                'id' => 815,
                'psgcCode' => '071205000',
                'citymunDesc' => 'BACLAYON',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071205',
            ),
            315 => 
            array (
                'id' => 816,
                'psgcCode' => '071206000',
                'citymunDesc' => 'BALILIHAN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071206',
            ),
            316 => 
            array (
                'id' => 817,
                'psgcCode' => '071207000',
                'citymunDesc' => 'BATUAN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071207',
            ),
            317 => 
            array (
                'id' => 818,
                'psgcCode' => '071208000',
                'citymunDesc' => 'BILAR',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071208',
            ),
            318 => 
            array (
                'id' => 819,
                'psgcCode' => '071209000',
                'citymunDesc' => 'BUENAVISTA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071209',
            ),
            319 => 
            array (
                'id' => 820,
                'psgcCode' => '071210000',
                'citymunDesc' => 'CALAPE',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071210',
            ),
            320 => 
            array (
                'id' => 821,
                'psgcCode' => '071211000',
                'citymunDesc' => 'CANDIJAY',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071211',
            ),
            321 => 
            array (
                'id' => 822,
                'psgcCode' => '071212000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071212',
            ),
            322 => 
            array (
                'id' => 823,
                'psgcCode' => '071213000',
                'citymunDesc' => 'CATIGBIAN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071213',
            ),
            323 => 
            array (
                'id' => 824,
                'psgcCode' => '071214000',
                'citymunDesc' => 'CLARIN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071214',
            ),
            324 => 
            array (
                'id' => 825,
                'psgcCode' => '071215000',
                'citymunDesc' => 'CORELLA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071215',
            ),
            325 => 
            array (
                'id' => 826,
                'psgcCode' => '071216000',
                'citymunDesc' => 'CORTES',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071216',
            ),
            326 => 
            array (
                'id' => 827,
                'psgcCode' => '071217000',
                'citymunDesc' => 'DAGOHOY',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071217',
            ),
            327 => 
            array (
                'id' => 828,
                'psgcCode' => '071218000',
                'citymunDesc' => 'DANAO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071218',
            ),
            328 => 
            array (
                'id' => 829,
                'psgcCode' => '071219000',
                'citymunDesc' => 'DAUIS',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071219',
            ),
            329 => 
            array (
                'id' => 830,
                'psgcCode' => '071220000',
                'citymunDesc' => 'DIMIAO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071220',
            ),
            330 => 
            array (
                'id' => 831,
                'psgcCode' => '071221000',
                'citymunDesc' => 'DUERO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071221',
            ),
            331 => 
            array (
                'id' => 832,
                'psgcCode' => '071222000',
                'citymunDesc' => 'GARCIA HERNANDEZ',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071222',
            ),
            332 => 
            array (
                'id' => 833,
                'psgcCode' => '071223000',
                'citymunDesc' => 'GUINDULMAN',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071223',
            ),
            333 => 
            array (
                'id' => 834,
                'psgcCode' => '071224000',
                'citymunDesc' => 'INABANGA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071224',
            ),
            334 => 
            array (
                'id' => 835,
                'psgcCode' => '071225000',
                'citymunDesc' => 'JAGNA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071225',
            ),
            335 => 
            array (
                'id' => 836,
                'psgcCode' => '071226000',
                'citymunDesc' => 'JETAFE',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071226',
            ),
            336 => 
            array (
                'id' => 837,
                'psgcCode' => '071227000',
                'citymunDesc' => 'LILA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071227',
            ),
            337 => 
            array (
                'id' => 838,
                'psgcCode' => '071228000',
                'citymunDesc' => 'LOAY',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071228',
            ),
            338 => 
            array (
                'id' => 839,
                'psgcCode' => '071229000',
                'citymunDesc' => 'LOBOC',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071229',
            ),
            339 => 
            array (
                'id' => 840,
                'psgcCode' => '071230000',
                'citymunDesc' => 'LOON',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071230',
            ),
            340 => 
            array (
                'id' => 841,
                'psgcCode' => '071231000',
                'citymunDesc' => 'MABINI',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071231',
            ),
            341 => 
            array (
                'id' => 842,
                'psgcCode' => '071232000',
                'citymunDesc' => 'MARIBOJOC',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071232',
            ),
            342 => 
            array (
                'id' => 843,
                'psgcCode' => '071233000',
                'citymunDesc' => 'PANGLAO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071233',
            ),
            343 => 
            array (
                'id' => 844,
                'psgcCode' => '071234000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071234',
            ),
            344 => 
            array (
                'id' => 845,
                'psgcCode' => '071235000',
            'citymunDesc' => 'PRES. CARLOS P. GARCIA (PITOGO)',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071235',
            ),
            345 => 
            array (
                'id' => 846,
                'psgcCode' => '071236000',
            'citymunDesc' => 'SAGBAYAN (BORJA)',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071236',
            ),
            346 => 
            array (
                'id' => 847,
                'psgcCode' => '071237000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071237',
            ),
            347 => 
            array (
                'id' => 848,
                'psgcCode' => '071238000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071238',
            ),
            348 => 
            array (
                'id' => 849,
                'psgcCode' => '071239000',
                'citymunDesc' => 'SEVILLA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071239',
            ),
            349 => 
            array (
                'id' => 850,
                'psgcCode' => '071240000',
                'citymunDesc' => 'SIERRA BULLONES',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071240',
            ),
            350 => 
            array (
                'id' => 851,
                'psgcCode' => '071241000',
                'citymunDesc' => 'SIKATUNA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071241',
            ),
            351 => 
            array (
                'id' => 852,
                'psgcCode' => '071242000',
            'citymunDesc' => 'TAGBILARAN CITY (Capital)',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071242',
            ),
            352 => 
            array (
                'id' => 853,
                'psgcCode' => '071243000',
                'citymunDesc' => 'TALIBON',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071243',
            ),
            353 => 
            array (
                'id' => 854,
                'psgcCode' => '071244000',
                'citymunDesc' => 'TRINIDAD',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071244',
            ),
            354 => 
            array (
                'id' => 855,
                'psgcCode' => '071245000',
                'citymunDesc' => 'TUBIGON',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071245',
            ),
            355 => 
            array (
                'id' => 856,
                'psgcCode' => '071246000',
                'citymunDesc' => 'UBAY',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071246',
            ),
            356 => 
            array (
                'id' => 857,
                'psgcCode' => '071247000',
                'citymunDesc' => 'VALENCIA',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071247',
            ),
            357 => 
            array (
                'id' => 858,
                'psgcCode' => '071248000',
                'citymunDesc' => 'BIEN UNIDO',
                'regDesc' => '07',
                'provCode' => '0712',
                'citymunCode' => '071248',
            ),
            358 => 
            array (
                'id' => 859,
                'psgcCode' => '072201000',
                'citymunDesc' => 'ALCANTARA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072201',
            ),
            359 => 
            array (
                'id' => 860,
                'psgcCode' => '072202000',
                'citymunDesc' => 'ALCOY',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072202',
            ),
            360 => 
            array (
                'id' => 861,
                'psgcCode' => '072203000',
                'citymunDesc' => 'ALEGRIA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072203',
            ),
            361 => 
            array (
                'id' => 862,
                'psgcCode' => '072204000',
                'citymunDesc' => 'ALOGUINSAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072204',
            ),
            362 => 
            array (
                'id' => 863,
                'psgcCode' => '072205000',
                'citymunDesc' => 'ARGAO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072205',
            ),
            363 => 
            array (
                'id' => 864,
                'psgcCode' => '072206000',
                'citymunDesc' => 'ASTURIAS',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072206',
            ),
            364 => 
            array (
                'id' => 865,
                'psgcCode' => '072207000',
                'citymunDesc' => 'BADIAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072207',
            ),
            365 => 
            array (
                'id' => 866,
                'psgcCode' => '072208000',
                'citymunDesc' => 'BALAMBAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072208',
            ),
            366 => 
            array (
                'id' => 867,
                'psgcCode' => '072209000',
                'citymunDesc' => 'BANTAYAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072209',
            ),
            367 => 
            array (
                'id' => 868,
                'psgcCode' => '072210000',
                'citymunDesc' => 'BARILI',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072210',
            ),
            368 => 
            array (
                'id' => 869,
                'psgcCode' => '072211000',
                'citymunDesc' => 'CITY OF BOGO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072211',
            ),
            369 => 
            array (
                'id' => 870,
                'psgcCode' => '072212000',
                'citymunDesc' => 'BOLJOON',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072212',
            ),
            370 => 
            array (
                'id' => 871,
                'psgcCode' => '072213000',
                'citymunDesc' => 'BORBON',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072213',
            ),
            371 => 
            array (
                'id' => 872,
                'psgcCode' => '072214000',
                'citymunDesc' => 'CITY OF CARCAR',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072214',
            ),
            372 => 
            array (
                'id' => 873,
                'psgcCode' => '072215000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072215',
            ),
            373 => 
            array (
                'id' => 874,
                'psgcCode' => '072216000',
                'citymunDesc' => 'CATMON',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072216',
            ),
            374 => 
            array (
                'id' => 875,
                'psgcCode' => '072217000',
            'citymunDesc' => 'CEBU CITY (Capital)',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072217',
            ),
            375 => 
            array (
                'id' => 876,
                'psgcCode' => '072218000',
                'citymunDesc' => 'COMPOSTELA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072218',
            ),
            376 => 
            array (
                'id' => 877,
                'psgcCode' => '072219000',
                'citymunDesc' => 'CONSOLACION',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072219',
            ),
            377 => 
            array (
                'id' => 878,
                'psgcCode' => '072220000',
                'citymunDesc' => 'CORDOVA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072220',
            ),
            378 => 
            array (
                'id' => 879,
                'psgcCode' => '072221000',
                'citymunDesc' => 'DAANBANTAYAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072221',
            ),
            379 => 
            array (
                'id' => 880,
                'psgcCode' => '072222000',
                'citymunDesc' => 'DALAGUETE',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072222',
            ),
            380 => 
            array (
                'id' => 881,
                'psgcCode' => '072223000',
                'citymunDesc' => 'DANAO CITY',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072223',
            ),
            381 => 
            array (
                'id' => 882,
                'psgcCode' => '072224000',
                'citymunDesc' => 'DUMANJUG',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072224',
            ),
            382 => 
            array (
                'id' => 883,
                'psgcCode' => '072225000',
                'citymunDesc' => 'GINATILAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072225',
            ),
            383 => 
            array (
                'id' => 884,
                'psgcCode' => '072226000',
            'citymunDesc' => 'LAPU-LAPU CITY (OPON)',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072226',
            ),
            384 => 
            array (
                'id' => 885,
                'psgcCode' => '072227000',
                'citymunDesc' => 'LILOAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072227',
            ),
            385 => 
            array (
                'id' => 886,
                'psgcCode' => '072228000',
                'citymunDesc' => 'MADRIDEJOS',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072228',
            ),
            386 => 
            array (
                'id' => 887,
                'psgcCode' => '072229000',
                'citymunDesc' => 'MALABUYOC',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072229',
            ),
            387 => 
            array (
                'id' => 888,
                'psgcCode' => '072230000',
                'citymunDesc' => 'MANDAUE CITY',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072230',
            ),
            388 => 
            array (
                'id' => 889,
                'psgcCode' => '072231000',
                'citymunDesc' => 'MEDELLIN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072231',
            ),
            389 => 
            array (
                'id' => 890,
                'psgcCode' => '072232000',
                'citymunDesc' => 'MINGLANILLA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072232',
            ),
            390 => 
            array (
                'id' => 891,
                'psgcCode' => '072233000',
                'citymunDesc' => 'MOALBOAL',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072233',
            ),
            391 => 
            array (
                'id' => 892,
                'psgcCode' => '072234000',
                'citymunDesc' => 'CITY OF NAGA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072234',
            ),
            392 => 
            array (
                'id' => 893,
                'psgcCode' => '072235000',
                'citymunDesc' => 'OSLOB',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072235',
            ),
            393 => 
            array (
                'id' => 894,
                'psgcCode' => '072236000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072236',
            ),
            394 => 
            array (
                'id' => 895,
                'psgcCode' => '072237000',
                'citymunDesc' => 'PINAMUNGAHAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072237',
            ),
            395 => 
            array (
                'id' => 896,
                'psgcCode' => '072238000',
                'citymunDesc' => 'PORO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072238',
            ),
            396 => 
            array (
                'id' => 897,
                'psgcCode' => '072239000',
                'citymunDesc' => 'RONDA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072239',
            ),
            397 => 
            array (
                'id' => 898,
                'psgcCode' => '072240000',
                'citymunDesc' => 'SAMBOAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072240',
            ),
            398 => 
            array (
                'id' => 899,
                'psgcCode' => '072241000',
                'citymunDesc' => 'SAN FERNANDO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072241',
            ),
            399 => 
            array (
                'id' => 900,
                'psgcCode' => '072242000',
                'citymunDesc' => 'SAN FRANCISCO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072242',
            ),
            400 => 
            array (
                'id' => 901,
                'psgcCode' => '072243000',
                'citymunDesc' => 'SAN REMIGIO',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072243',
            ),
            401 => 
            array (
                'id' => 902,
                'psgcCode' => '072244000',
                'citymunDesc' => 'SANTA FE',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072244',
            ),
            402 => 
            array (
                'id' => 903,
                'psgcCode' => '072245000',
                'citymunDesc' => 'SANTANDER',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072245',
            ),
            403 => 
            array (
                'id' => 904,
                'psgcCode' => '072246000',
                'citymunDesc' => 'SIBONGA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072246',
            ),
            404 => 
            array (
                'id' => 905,
                'psgcCode' => '072247000',
                'citymunDesc' => 'SOGOD',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072247',
            ),
            405 => 
            array (
                'id' => 906,
                'psgcCode' => '072248000',
                'citymunDesc' => 'TABOGON',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072248',
            ),
            406 => 
            array (
                'id' => 907,
                'psgcCode' => '072249000',
                'citymunDesc' => 'TABUELAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072249',
            ),
            407 => 
            array (
                'id' => 908,
                'psgcCode' => '072250000',
                'citymunDesc' => 'CITY OF TALISAY',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072250',
            ),
            408 => 
            array (
                'id' => 909,
                'psgcCode' => '072251000',
                'citymunDesc' => 'TOLEDO CITY',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072251',
            ),
            409 => 
            array (
                'id' => 910,
                'psgcCode' => '072252000',
                'citymunDesc' => 'TUBURAN',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072252',
            ),
            410 => 
            array (
                'id' => 911,
                'psgcCode' => '072253000',
                'citymunDesc' => 'TUDELA',
                'regDesc' => '07',
                'provCode' => '0722',
                'citymunCode' => '072253',
            ),
            411 => 
            array (
                'id' => 912,
                'psgcCode' => '074601000',
            'citymunDesc' => 'AMLAN (AYUQUITAN)',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074601',
            ),
            412 => 
            array (
                'id' => 913,
                'psgcCode' => '074602000',
                'citymunDesc' => 'AYUNGON',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074602',
            ),
            413 => 
            array (
                'id' => 914,
                'psgcCode' => '074603000',
                'citymunDesc' => 'BACONG',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074603',
            ),
            414 => 
            array (
                'id' => 915,
                'psgcCode' => '074604000',
                'citymunDesc' => 'BAIS CITY',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074604',
            ),
            415 => 
            array (
                'id' => 916,
                'psgcCode' => '074605000',
                'citymunDesc' => 'BASAY',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074605',
            ),
            416 => 
            array (
                'id' => 917,
                'psgcCode' => '074606000',
            'citymunDesc' => 'CITY OF BAYAWAN (TULONG)',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074606',
            ),
            417 => 
            array (
                'id' => 918,
                'psgcCode' => '074607000',
            'citymunDesc' => 'BINDOY (PAYABON)',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074607',
            ),
            418 => 
            array (
                'id' => 919,
                'psgcCode' => '074608000',
                'citymunDesc' => 'CANLAON CITY',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074608',
            ),
            419 => 
            array (
                'id' => 920,
                'psgcCode' => '074609000',
                'citymunDesc' => 'DAUIN',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074609',
            ),
            420 => 
            array (
                'id' => 921,
                'psgcCode' => '074610000',
            'citymunDesc' => 'DUMAGUETE CITY (Capital)',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074610',
            ),
            421 => 
            array (
                'id' => 922,
                'psgcCode' => '074611000',
                'citymunDesc' => 'CITY OF GUIHULNGAN',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074611',
            ),
            422 => 
            array (
                'id' => 923,
                'psgcCode' => '074612000',
                'citymunDesc' => 'JIMALALUD',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074612',
            ),
            423 => 
            array (
                'id' => 924,
                'psgcCode' => '074613000',
                'citymunDesc' => 'LA LIBERTAD',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074613',
            ),
            424 => 
            array (
                'id' => 925,
                'psgcCode' => '074614000',
                'citymunDesc' => 'MABINAY',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074614',
            ),
            425 => 
            array (
                'id' => 926,
                'psgcCode' => '074615000',
                'citymunDesc' => 'MANJUYOD',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074615',
            ),
            426 => 
            array (
                'id' => 927,
                'psgcCode' => '074616000',
                'citymunDesc' => 'PAMPLONA',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074616',
            ),
            427 => 
            array (
                'id' => 928,
                'psgcCode' => '074617000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074617',
            ),
            428 => 
            array (
                'id' => 929,
                'psgcCode' => '074618000',
                'citymunDesc' => 'SANTA CATALINA',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074618',
            ),
            429 => 
            array (
                'id' => 930,
                'psgcCode' => '074619000',
                'citymunDesc' => 'SIATON',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074619',
            ),
            430 => 
            array (
                'id' => 931,
                'psgcCode' => '074620000',
                'citymunDesc' => 'SIBULAN',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074620',
            ),
            431 => 
            array (
                'id' => 932,
                'psgcCode' => '074621000',
                'citymunDesc' => 'CITY OF TANJAY',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074621',
            ),
            432 => 
            array (
                'id' => 933,
                'psgcCode' => '074622000',
                'citymunDesc' => 'TAYASAN',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074622',
            ),
            433 => 
            array (
                'id' => 934,
                'psgcCode' => '074623000',
            'citymunDesc' => 'VALENCIA (LUZURRIAGA)',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074623',
            ),
            434 => 
            array (
                'id' => 935,
                'psgcCode' => '074624000',
                'citymunDesc' => 'VALLEHERMOSO',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074624',
            ),
            435 => 
            array (
                'id' => 936,
                'psgcCode' => '074625000',
                'citymunDesc' => 'ZAMBOANGUITA',
                'regDesc' => '07',
                'provCode' => '0746',
                'citymunCode' => '074625',
            ),
            436 => 
            array (
                'id' => 937,
                'psgcCode' => '076101000',
                'citymunDesc' => 'ENRIQUE VILLANUEVA',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076101',
            ),
            437 => 
            array (
                'id' => 938,
                'psgcCode' => '076102000',
                'citymunDesc' => 'LARENA',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076102',
            ),
            438 => 
            array (
                'id' => 939,
                'psgcCode' => '076103000',
                'citymunDesc' => 'LAZI',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076103',
            ),
            439 => 
            array (
                'id' => 940,
                'psgcCode' => '076104000',
                'citymunDesc' => 'MARIA',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076104',
            ),
            440 => 
            array (
                'id' => 941,
                'psgcCode' => '076105000',
                'citymunDesc' => 'SAN JUAN',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076105',
            ),
            441 => 
            array (
                'id' => 942,
                'psgcCode' => '076106000',
            'citymunDesc' => 'SIQUIJOR (Capital)',
                'regDesc' => '07',
                'provCode' => '0761',
                'citymunCode' => '076106',
            ),
            442 => 
            array (
                'id' => 943,
                'psgcCode' => '082601000',
                'citymunDesc' => 'ARTECHE',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082601',
            ),
            443 => 
            array (
                'id' => 944,
                'psgcCode' => '082602000',
                'citymunDesc' => 'BALANGIGA',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082602',
            ),
            444 => 
            array (
                'id' => 945,
                'psgcCode' => '082603000',
                'citymunDesc' => 'BALANGKAYAN',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082603',
            ),
            445 => 
            array (
                'id' => 946,
                'psgcCode' => '082604000',
            'citymunDesc' => 'CITY OF BORONGAN (Capital)',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082604',
            ),
            446 => 
            array (
                'id' => 947,
                'psgcCode' => '082605000',
                'citymunDesc' => 'CAN-AVID',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082605',
            ),
            447 => 
            array (
                'id' => 948,
                'psgcCode' => '082606000',
                'citymunDesc' => 'DOLORES',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082606',
            ),
            448 => 
            array (
                'id' => 949,
                'psgcCode' => '082607000',
                'citymunDesc' => 'GENERAL MACARTHUR',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082607',
            ),
            449 => 
            array (
                'id' => 950,
                'psgcCode' => '082608000',
                'citymunDesc' => 'GIPORLOS',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082608',
            ),
            450 => 
            array (
                'id' => 951,
                'psgcCode' => '082609000',
                'citymunDesc' => 'GUIUAN',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082609',
            ),
            451 => 
            array (
                'id' => 952,
                'psgcCode' => '082610000',
                'citymunDesc' => 'HERNANI',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082610',
            ),
            452 => 
            array (
                'id' => 953,
                'psgcCode' => '082611000',
                'citymunDesc' => 'JIPAPAD',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082611',
            ),
            453 => 
            array (
                'id' => 954,
                'psgcCode' => '082612000',
                'citymunDesc' => 'LAWAAN',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082612',
            ),
            454 => 
            array (
                'id' => 955,
                'psgcCode' => '082613000',
                'citymunDesc' => 'LLORENTE',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082613',
            ),
            455 => 
            array (
                'id' => 956,
                'psgcCode' => '082614000',
                'citymunDesc' => 'MASLOG',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082614',
            ),
            456 => 
            array (
                'id' => 957,
                'psgcCode' => '082615000',
                'citymunDesc' => 'MAYDOLONG',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082615',
            ),
            457 => 
            array (
                'id' => 958,
                'psgcCode' => '082616000',
                'citymunDesc' => 'MERCEDES',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082616',
            ),
            458 => 
            array (
                'id' => 959,
                'psgcCode' => '082617000',
                'citymunDesc' => 'ORAS',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082617',
            ),
            459 => 
            array (
                'id' => 960,
                'psgcCode' => '082618000',
                'citymunDesc' => 'QUINAPONDAN',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082618',
            ),
            460 => 
            array (
                'id' => 961,
                'psgcCode' => '082619000',
                'citymunDesc' => 'SALCEDO',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082619',
            ),
            461 => 
            array (
                'id' => 962,
                'psgcCode' => '082620000',
                'citymunDesc' => 'SAN JULIAN',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082620',
            ),
            462 => 
            array (
                'id' => 963,
                'psgcCode' => '082621000',
                'citymunDesc' => 'SAN POLICARPO',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082621',
            ),
            463 => 
            array (
                'id' => 964,
                'psgcCode' => '082622000',
                'citymunDesc' => 'SULAT',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082622',
            ),
            464 => 
            array (
                'id' => 965,
                'psgcCode' => '082623000',
                'citymunDesc' => 'TAFT',
                'regDesc' => '08',
                'provCode' => '0826',
                'citymunCode' => '082623',
            ),
            465 => 
            array (
                'id' => 966,
                'psgcCode' => '083701000',
                'citymunDesc' => 'ABUYOG',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083701',
            ),
            466 => 
            array (
                'id' => 967,
                'psgcCode' => '083702000',
                'citymunDesc' => 'ALANGALANG',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083702',
            ),
            467 => 
            array (
                'id' => 968,
                'psgcCode' => '083703000',
                'citymunDesc' => 'ALBUERA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083703',
            ),
            468 => 
            array (
                'id' => 969,
                'psgcCode' => '083705000',
                'citymunDesc' => 'BABATNGON',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083705',
            ),
            469 => 
            array (
                'id' => 970,
                'psgcCode' => '083706000',
                'citymunDesc' => 'BARUGO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083706',
            ),
            470 => 
            array (
                'id' => 971,
                'psgcCode' => '083707000',
                'citymunDesc' => 'BATO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083707',
            ),
            471 => 
            array (
                'id' => 972,
                'psgcCode' => '083708000',
                'citymunDesc' => 'CITY OF BAYBAY',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083708',
            ),
            472 => 
            array (
                'id' => 973,
                'psgcCode' => '083710000',
                'citymunDesc' => 'BURAUEN',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083710',
            ),
            473 => 
            array (
                'id' => 974,
                'psgcCode' => '083713000',
                'citymunDesc' => 'CALUBIAN',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083713',
            ),
            474 => 
            array (
                'id' => 975,
                'psgcCode' => '083714000',
                'citymunDesc' => 'CAPOOCAN',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083714',
            ),
            475 => 
            array (
                'id' => 976,
                'psgcCode' => '083715000',
                'citymunDesc' => 'CARIGARA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083715',
            ),
            476 => 
            array (
                'id' => 977,
                'psgcCode' => '083717000',
                'citymunDesc' => 'DAGAMI',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083717',
            ),
            477 => 
            array (
                'id' => 978,
                'psgcCode' => '083718000',
                'citymunDesc' => 'DULAG',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083718',
            ),
            478 => 
            array (
                'id' => 979,
                'psgcCode' => '083719000',
                'citymunDesc' => 'HILONGOS',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083719',
            ),
            479 => 
            array (
                'id' => 980,
                'psgcCode' => '083720000',
                'citymunDesc' => 'HINDANG',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083720',
            ),
            480 => 
            array (
                'id' => 981,
                'psgcCode' => '083721000',
                'citymunDesc' => 'INOPACAN',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083721',
            ),
            481 => 
            array (
                'id' => 982,
                'psgcCode' => '083722000',
                'citymunDesc' => 'ISABEL',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083722',
            ),
            482 => 
            array (
                'id' => 983,
                'psgcCode' => '083723000',
                'citymunDesc' => 'JARO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083723',
            ),
            483 => 
            array (
                'id' => 984,
                'psgcCode' => '083724000',
            'citymunDesc' => 'JAVIER (BUGHO)',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083724',
            ),
            484 => 
            array (
                'id' => 985,
                'psgcCode' => '083725000',
                'citymunDesc' => 'JULITA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083725',
            ),
            485 => 
            array (
                'id' => 986,
                'psgcCode' => '083726000',
                'citymunDesc' => 'KANANGA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083726',
            ),
            486 => 
            array (
                'id' => 987,
                'psgcCode' => '083728000',
                'citymunDesc' => 'LA PAZ',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083728',
            ),
            487 => 
            array (
                'id' => 988,
                'psgcCode' => '083729000',
                'citymunDesc' => 'LEYTE',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083729',
            ),
            488 => 
            array (
                'id' => 989,
                'psgcCode' => '083730000',
                'citymunDesc' => 'MACARTHUR',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083730',
            ),
            489 => 
            array (
                'id' => 990,
                'psgcCode' => '083731000',
                'citymunDesc' => 'MAHAPLAG',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083731',
            ),
            490 => 
            array (
                'id' => 991,
                'psgcCode' => '083733000',
                'citymunDesc' => 'MATAG-OB',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083733',
            ),
            491 => 
            array (
                'id' => 992,
                'psgcCode' => '083734000',
                'citymunDesc' => 'MATALOM',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083734',
            ),
            492 => 
            array (
                'id' => 993,
                'psgcCode' => '083735000',
                'citymunDesc' => 'MAYORGA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083735',
            ),
            493 => 
            array (
                'id' => 994,
                'psgcCode' => '083736000',
                'citymunDesc' => 'MERIDA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083736',
            ),
            494 => 
            array (
                'id' => 995,
                'psgcCode' => '083738000',
                'citymunDesc' => 'ORMOC CITY',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083738',
            ),
            495 => 
            array (
                'id' => 996,
                'psgcCode' => '083739000',
                'citymunDesc' => 'PALO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083739',
            ),
            496 => 
            array (
                'id' => 997,
                'psgcCode' => '083740000',
                'citymunDesc' => 'PALOMPON',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083740',
            ),
            497 => 
            array (
                'id' => 998,
                'psgcCode' => '083741000',
                'citymunDesc' => 'PASTRANA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083741',
            ),
            498 => 
            array (
                'id' => 999,
                'psgcCode' => '083742000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083742',
            ),
            499 => 
            array (
                'id' => 1000,
                'psgcCode' => '083743000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083743',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'psgcCode' => '083744000',
                'citymunDesc' => 'SANTA FE',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083744',
            ),
            1 => 
            array (
                'id' => 1002,
                'psgcCode' => '083745000',
                'citymunDesc' => 'TABANGO',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083745',
            ),
            2 => 
            array (
                'id' => 1003,
                'psgcCode' => '083746000',
                'citymunDesc' => 'TABONTABON',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083746',
            ),
            3 => 
            array (
                'id' => 1004,
                'psgcCode' => '083747000',
            'citymunDesc' => 'TACLOBAN CITY (Capital)',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083747',
            ),
            4 => 
            array (
                'id' => 1005,
                'psgcCode' => '083748000',
                'citymunDesc' => 'TANAUAN',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083748',
            ),
            5 => 
            array (
                'id' => 1006,
                'psgcCode' => '083749000',
                'citymunDesc' => 'TOLOSA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083749',
            ),
            6 => 
            array (
                'id' => 1007,
                'psgcCode' => '083750000',
                'citymunDesc' => 'TUNGA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083750',
            ),
            7 => 
            array (
                'id' => 1008,
                'psgcCode' => '083751000',
                'citymunDesc' => 'VILLABA',
                'regDesc' => '08',
                'provCode' => '0837',
                'citymunCode' => '083751',
            ),
            8 => 
            array (
                'id' => 1009,
                'psgcCode' => '084801000',
                'citymunDesc' => 'ALLEN',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084801',
            ),
            9 => 
            array (
                'id' => 1010,
                'psgcCode' => '084802000',
                'citymunDesc' => 'BIRI',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084802',
            ),
            10 => 
            array (
                'id' => 1011,
                'psgcCode' => '084803000',
                'citymunDesc' => 'BOBON',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084803',
            ),
            11 => 
            array (
                'id' => 1012,
                'psgcCode' => '084804000',
                'citymunDesc' => 'CAPUL',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084804',
            ),
            12 => 
            array (
                'id' => 1013,
                'psgcCode' => '084805000',
            'citymunDesc' => 'CATARMAN (Capital)',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084805',
            ),
            13 => 
            array (
                'id' => 1014,
                'psgcCode' => '084806000',
                'citymunDesc' => 'CATUBIG',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084806',
            ),
            14 => 
            array (
                'id' => 1015,
                'psgcCode' => '084807000',
                'citymunDesc' => 'GAMAY',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084807',
            ),
            15 => 
            array (
                'id' => 1016,
                'psgcCode' => '084808000',
                'citymunDesc' => 'LAOANG',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084808',
            ),
            16 => 
            array (
                'id' => 1017,
                'psgcCode' => '084809000',
                'citymunDesc' => 'LAPINIG',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084809',
            ),
            17 => 
            array (
                'id' => 1018,
                'psgcCode' => '084810000',
                'citymunDesc' => 'LAS NAVAS',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084810',
            ),
            18 => 
            array (
                'id' => 1019,
                'psgcCode' => '084811000',
                'citymunDesc' => 'LAVEZARES',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084811',
            ),
            19 => 
            array (
                'id' => 1020,
                'psgcCode' => '084812000',
                'citymunDesc' => 'MAPANAS',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084812',
            ),
            20 => 
            array (
                'id' => 1021,
                'psgcCode' => '084813000',
                'citymunDesc' => 'MONDRAGON',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084813',
            ),
            21 => 
            array (
                'id' => 1022,
                'psgcCode' => '084814000',
                'citymunDesc' => 'PALAPAG',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084814',
            ),
            22 => 
            array (
                'id' => 1023,
                'psgcCode' => '084815000',
                'citymunDesc' => 'PAMBUJAN',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084815',
            ),
            23 => 
            array (
                'id' => 1024,
                'psgcCode' => '084816000',
                'citymunDesc' => 'ROSARIO',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084816',
            ),
            24 => 
            array (
                'id' => 1025,
                'psgcCode' => '084817000',
                'citymunDesc' => 'SAN ANTONIO',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084817',
            ),
            25 => 
            array (
                'id' => 1026,
                'psgcCode' => '084818000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084818',
            ),
            26 => 
            array (
                'id' => 1027,
                'psgcCode' => '084819000',
                'citymunDesc' => 'SAN JOSE',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084819',
            ),
            27 => 
            array (
                'id' => 1028,
                'psgcCode' => '084820000',
                'citymunDesc' => 'SAN ROQUE',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084820',
            ),
            28 => 
            array (
                'id' => 1029,
                'psgcCode' => '084821000',
                'citymunDesc' => 'SAN VICENTE',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084821',
            ),
            29 => 
            array (
                'id' => 1030,
                'psgcCode' => '084822000',
                'citymunDesc' => 'SILVINO LOBOS',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084822',
            ),
            30 => 
            array (
                'id' => 1031,
                'psgcCode' => '084823000',
                'citymunDesc' => 'VICTORIA',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084823',
            ),
            31 => 
            array (
                'id' => 1032,
                'psgcCode' => '084824000',
                'citymunDesc' => 'LOPE DE VEGA',
                'regDesc' => '08',
                'provCode' => '0848',
                'citymunCode' => '084824',
            ),
            32 => 
            array (
                'id' => 1033,
                'psgcCode' => '086001000',
                'citymunDesc' => 'ALMAGRO',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086001',
            ),
            33 => 
            array (
                'id' => 1034,
                'psgcCode' => '086002000',
                'citymunDesc' => 'BASEY',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086002',
            ),
            34 => 
            array (
                'id' => 1035,
                'psgcCode' => '086003000',
                'citymunDesc' => 'CALBAYOG CITY',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086003',
            ),
            35 => 
            array (
                'id' => 1036,
                'psgcCode' => '086004000',
                'citymunDesc' => 'CALBIGA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086004',
            ),
            36 => 
            array (
                'id' => 1037,
                'psgcCode' => '086005000',
            'citymunDesc' => 'CITY OF CATBALOGAN (Capital)',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086005',
            ),
            37 => 
            array (
                'id' => 1038,
                'psgcCode' => '086006000',
                'citymunDesc' => 'DARAM',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086006',
            ),
            38 => 
            array (
                'id' => 1039,
                'psgcCode' => '086007000',
                'citymunDesc' => 'GANDARA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086007',
            ),
            39 => 
            array (
                'id' => 1040,
                'psgcCode' => '086008000',
                'citymunDesc' => 'HINABANGAN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086008',
            ),
            40 => 
            array (
                'id' => 1041,
                'psgcCode' => '086009000',
                'citymunDesc' => 'JIABONG',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086009',
            ),
            41 => 
            array (
                'id' => 1042,
                'psgcCode' => '086010000',
                'citymunDesc' => 'MARABUT',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086010',
            ),
            42 => 
            array (
                'id' => 1043,
                'psgcCode' => '086011000',
                'citymunDesc' => 'MATUGUINAO',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086011',
            ),
            43 => 
            array (
                'id' => 1044,
                'psgcCode' => '086012000',
                'citymunDesc' => 'MOTIONG',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086012',
            ),
            44 => 
            array (
                'id' => 1045,
                'psgcCode' => '086013000',
                'citymunDesc' => 'PINABACDAO',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086013',
            ),
            45 => 
            array (
                'id' => 1046,
                'psgcCode' => '086014000',
                'citymunDesc' => 'SAN JOSE DE BUAN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086014',
            ),
            46 => 
            array (
                'id' => 1047,
                'psgcCode' => '086015000',
                'citymunDesc' => 'SAN SEBASTIAN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086015',
            ),
            47 => 
            array (
                'id' => 1048,
                'psgcCode' => '086016000',
                'citymunDesc' => 'SANTA MARGARITA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086016',
            ),
            48 => 
            array (
                'id' => 1049,
                'psgcCode' => '086017000',
                'citymunDesc' => 'SANTA RITA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086017',
            ),
            49 => 
            array (
                'id' => 1050,
                'psgcCode' => '086018000',
                'citymunDesc' => 'SANTO NIÑO',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086018',
            ),
            50 => 
            array (
                'id' => 1051,
                'psgcCode' => '086019000',
                'citymunDesc' => 'TALALORA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086019',
            ),
            51 => 
            array (
                'id' => 1052,
                'psgcCode' => '086020000',
                'citymunDesc' => 'TARANGNAN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086020',
            ),
            52 => 
            array (
                'id' => 1053,
                'psgcCode' => '086021000',
                'citymunDesc' => 'VILLAREAL',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086021',
            ),
            53 => 
            array (
                'id' => 1054,
                'psgcCode' => '086022000',
            'citymunDesc' => 'PARANAS (WRIGHT)',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086022',
            ),
            54 => 
            array (
                'id' => 1055,
                'psgcCode' => '086023000',
                'citymunDesc' => 'ZUMARRAGA',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086023',
            ),
            55 => 
            array (
                'id' => 1056,
                'psgcCode' => '086024000',
                'citymunDesc' => 'TAGAPUL-AN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086024',
            ),
            56 => 
            array (
                'id' => 1057,
                'psgcCode' => '086025000',
                'citymunDesc' => 'SAN JORGE',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086025',
            ),
            57 => 
            array (
                'id' => 1058,
                'psgcCode' => '086026000',
                'citymunDesc' => 'PAGSANGHAN',
                'regDesc' => '08',
                'provCode' => '0860',
                'citymunCode' => '086026',
            ),
            58 => 
            array (
                'id' => 1059,
                'psgcCode' => '086401000',
                'citymunDesc' => 'ANAHAWAN',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086401',
            ),
            59 => 
            array (
                'id' => 1060,
                'psgcCode' => '086402000',
                'citymunDesc' => 'BONTOC',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086402',
            ),
            60 => 
            array (
                'id' => 1061,
                'psgcCode' => '086403000',
                'citymunDesc' => 'HINUNANGAN',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086403',
            ),
            61 => 
            array (
                'id' => 1062,
                'psgcCode' => '086404000',
                'citymunDesc' => 'HINUNDAYAN',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086404',
            ),
            62 => 
            array (
                'id' => 1063,
                'psgcCode' => '086405000',
                'citymunDesc' => 'LIBAGON',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086405',
            ),
            63 => 
            array (
                'id' => 1064,
                'psgcCode' => '086406000',
                'citymunDesc' => 'LILOAN',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086406',
            ),
            64 => 
            array (
                'id' => 1065,
                'psgcCode' => '086407000',
            'citymunDesc' => 'CITY OF MAASIN (Capital)',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086407',
            ),
            65 => 
            array (
                'id' => 1066,
                'psgcCode' => '086408000',
                'citymunDesc' => 'MACROHON',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086408',
            ),
            66 => 
            array (
                'id' => 1067,
                'psgcCode' => '086409000',
                'citymunDesc' => 'MALITBOG',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086409',
            ),
            67 => 
            array (
                'id' => 1068,
                'psgcCode' => '086410000',
                'citymunDesc' => 'PADRE BURGOS',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086410',
            ),
            68 => 
            array (
                'id' => 1069,
                'psgcCode' => '086411000',
                'citymunDesc' => 'PINTUYAN',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086411',
            ),
            69 => 
            array (
                'id' => 1070,
                'psgcCode' => '086412000',
                'citymunDesc' => 'SAINT BERNARD',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086412',
            ),
            70 => 
            array (
                'id' => 1071,
                'psgcCode' => '086413000',
                'citymunDesc' => 'SAN FRANCISCO',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086413',
            ),
            71 => 
            array (
                'id' => 1072,
                'psgcCode' => '086414000',
            'citymunDesc' => 'SAN JUAN (CABALIAN)',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086414',
            ),
            72 => 
            array (
                'id' => 1073,
                'psgcCode' => '086415000',
                'citymunDesc' => 'SAN RICARDO',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086415',
            ),
            73 => 
            array (
                'id' => 1074,
                'psgcCode' => '086416000',
                'citymunDesc' => 'SILAGO',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086416',
            ),
            74 => 
            array (
                'id' => 1075,
                'psgcCode' => '086417000',
                'citymunDesc' => 'SOGOD',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086417',
            ),
            75 => 
            array (
                'id' => 1076,
                'psgcCode' => '086418000',
                'citymunDesc' => 'TOMAS OPPUS',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086418',
            ),
            76 => 
            array (
                'id' => 1077,
                'psgcCode' => '086419000',
                'citymunDesc' => 'LIMASAWA',
                'regDesc' => '08',
                'provCode' => '0864',
                'citymunCode' => '086419',
            ),
            77 => 
            array (
                'id' => 1078,
                'psgcCode' => '087801000',
                'citymunDesc' => 'ALMERIA',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087801',
            ),
            78 => 
            array (
                'id' => 1079,
                'psgcCode' => '087802000',
                'citymunDesc' => 'BILIRAN',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087802',
            ),
            79 => 
            array (
                'id' => 1080,
                'psgcCode' => '087803000',
                'citymunDesc' => 'CABUCGAYAN',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087803',
            ),
            80 => 
            array (
                'id' => 1081,
                'psgcCode' => '087804000',
                'citymunDesc' => 'CAIBIRAN',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087804',
            ),
            81 => 
            array (
                'id' => 1082,
                'psgcCode' => '087805000',
                'citymunDesc' => 'CULABA',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087805',
            ),
            82 => 
            array (
                'id' => 1083,
                'psgcCode' => '087806000',
                'citymunDesc' => 'KAWAYAN',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087806',
            ),
            83 => 
            array (
                'id' => 1084,
                'psgcCode' => '087807000',
                'citymunDesc' => 'MARIPIPI',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087807',
            ),
            84 => 
            array (
                'id' => 1085,
                'psgcCode' => '087808000',
            'citymunDesc' => 'NAVAL (Capital)',
                'regDesc' => '08',
                'provCode' => '0878',
                'citymunCode' => '087808',
            ),
            85 => 
            array (
                'id' => 1086,
                'psgcCode' => '097201000',
                'citymunDesc' => 'DAPITAN CITY',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097201',
            ),
            86 => 
            array (
                'id' => 1087,
                'psgcCode' => '097202000',
            'citymunDesc' => 'DIPOLOG CITY (Capital)',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097202',
            ),
            87 => 
            array (
                'id' => 1088,
                'psgcCode' => '097203000',
                'citymunDesc' => 'KATIPUNAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097203',
            ),
            88 => 
            array (
                'id' => 1089,
                'psgcCode' => '097204000',
                'citymunDesc' => 'LA LIBERTAD',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097204',
            ),
            89 => 
            array (
                'id' => 1090,
                'psgcCode' => '097205000',
                'citymunDesc' => 'LABASON',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097205',
            ),
            90 => 
            array (
                'id' => 1091,
                'psgcCode' => '097206000',
                'citymunDesc' => 'LILOY',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097206',
            ),
            91 => 
            array (
                'id' => 1092,
                'psgcCode' => '097207000',
                'citymunDesc' => 'MANUKAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097207',
            ),
            92 => 
            array (
                'id' => 1093,
                'psgcCode' => '097208000',
                'citymunDesc' => 'MUTIA',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097208',
            ),
            93 => 
            array (
                'id' => 1094,
                'psgcCode' => '097209000',
            'citymunDesc' => 'PIÑAN (NEW PIÑAN)',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097209',
            ),
            94 => 
            array (
                'id' => 1095,
                'psgcCode' => '097210000',
                'citymunDesc' => 'POLANCO',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097210',
            ),
            95 => 
            array (
                'id' => 1096,
                'psgcCode' => '097211000',
                'citymunDesc' => 'PRES. MANUEL A. ROXAS',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097211',
            ),
            96 => 
            array (
                'id' => 1097,
                'psgcCode' => '097212000',
                'citymunDesc' => 'RIZAL',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097212',
            ),
            97 => 
            array (
                'id' => 1098,
                'psgcCode' => '097213000',
                'citymunDesc' => 'SALUG',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097213',
            ),
            98 => 
            array (
                'id' => 1099,
                'psgcCode' => '097214000',
                'citymunDesc' => 'SERGIO OSMEÑA SR.',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097214',
            ),
            99 => 
            array (
                'id' => 1100,
                'psgcCode' => '097215000',
                'citymunDesc' => 'SIAYAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097215',
            ),
            100 => 
            array (
                'id' => 1101,
                'psgcCode' => '097216000',
                'citymunDesc' => 'SIBUCO',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097216',
            ),
            101 => 
            array (
                'id' => 1102,
                'psgcCode' => '097217000',
                'citymunDesc' => 'SIBUTAD',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097217',
            ),
            102 => 
            array (
                'id' => 1103,
                'psgcCode' => '097218000',
                'citymunDesc' => 'SINDANGAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097218',
            ),
            103 => 
            array (
                'id' => 1104,
                'psgcCode' => '097219000',
                'citymunDesc' => 'SIOCON',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097219',
            ),
            104 => 
            array (
                'id' => 1105,
                'psgcCode' => '097220000',
                'citymunDesc' => 'SIRAWAI',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097220',
            ),
            105 => 
            array (
                'id' => 1106,
                'psgcCode' => '097221000',
                'citymunDesc' => 'TAMPILISAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097221',
            ),
            106 => 
            array (
                'id' => 1107,
                'psgcCode' => '097222000',
            'citymunDesc' => 'JOSE DALMAN (PONOT)',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097222',
            ),
            107 => 
            array (
                'id' => 1108,
                'psgcCode' => '097223000',
                'citymunDesc' => 'GUTALAC',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097223',
            ),
            108 => 
            array (
                'id' => 1109,
                'psgcCode' => '097224000',
                'citymunDesc' => 'BALIGUIAN',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097224',
            ),
            109 => 
            array (
                'id' => 1110,
                'psgcCode' => '097225000',
                'citymunDesc' => 'GODOD',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097225',
            ),
            110 => 
            array (
                'id' => 1111,
                'psgcCode' => '097226000',
            'citymunDesc' => 'BACUNGAN (Leon T. Postigo)',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097226',
            ),
            111 => 
            array (
                'id' => 1112,
                'psgcCode' => '097227000',
                'citymunDesc' => 'KALAWIT',
                'regDesc' => '09',
                'provCode' => '0972',
                'citymunCode' => '097227',
            ),
            112 => 
            array (
                'id' => 1113,
                'psgcCode' => '097302000',
                'citymunDesc' => 'AURORA',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097302',
            ),
            113 => 
            array (
                'id' => 1114,
                'psgcCode' => '097303000',
                'citymunDesc' => 'BAYOG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097303',
            ),
            114 => 
            array (
                'id' => 1115,
                'psgcCode' => '097305000',
                'citymunDesc' => 'DIMATALING',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097305',
            ),
            115 => 
            array (
                'id' => 1116,
                'psgcCode' => '097306000',
                'citymunDesc' => 'DINAS',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097306',
            ),
            116 => 
            array (
                'id' => 1117,
                'psgcCode' => '097307000',
                'citymunDesc' => 'DUMALINAO',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097307',
            ),
            117 => 
            array (
                'id' => 1118,
                'psgcCode' => '097308000',
                'citymunDesc' => 'DUMINGAG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097308',
            ),
            118 => 
            array (
                'id' => 1119,
                'psgcCode' => '097311000',
                'citymunDesc' => 'KUMALARANG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097311',
            ),
            119 => 
            array (
                'id' => 1120,
                'psgcCode' => '097312000',
                'citymunDesc' => 'LABANGAN',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097312',
            ),
            120 => 
            array (
                'id' => 1121,
                'psgcCode' => '097313000',
                'citymunDesc' => 'LAPUYAN',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097313',
            ),
            121 => 
            array (
                'id' => 1122,
                'psgcCode' => '097315000',
                'citymunDesc' => 'MAHAYAG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097315',
            ),
            122 => 
            array (
                'id' => 1123,
                'psgcCode' => '097317000',
                'citymunDesc' => 'MARGOSATUBIG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097317',
            ),
            123 => 
            array (
                'id' => 1124,
                'psgcCode' => '097318000',
                'citymunDesc' => 'MIDSALIP',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097318',
            ),
            124 => 
            array (
                'id' => 1125,
                'psgcCode' => '097319000',
                'citymunDesc' => 'MOLAVE',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097319',
            ),
            125 => 
            array (
                'id' => 1126,
                'psgcCode' => '097322000',
            'citymunDesc' => 'PAGADIAN CITY (Capital)',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097322',
            ),
            126 => 
            array (
                'id' => 1127,
                'psgcCode' => '097323000',
            'citymunDesc' => 'RAMON MAGSAYSAY (LIARGO)',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097323',
            ),
            127 => 
            array (
                'id' => 1128,
                'psgcCode' => '097324000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097324',
            ),
            128 => 
            array (
                'id' => 1129,
                'psgcCode' => '097325000',
                'citymunDesc' => 'SAN PABLO',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097325',
            ),
            129 => 
            array (
                'id' => 1130,
                'psgcCode' => '097327000',
                'citymunDesc' => 'TABINA',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097327',
            ),
            130 => 
            array (
                'id' => 1131,
                'psgcCode' => '097328000',
                'citymunDesc' => 'TAMBULIG',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097328',
            ),
            131 => 
            array (
                'id' => 1132,
                'psgcCode' => '097330000',
                'citymunDesc' => 'TUKURAN',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097330',
            ),
            132 => 
            array (
                'id' => 1133,
                'psgcCode' => '097332000',
                'citymunDesc' => 'ZAMBOANGA CITY',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097332',
            ),
            133 => 
            array (
                'id' => 1134,
                'psgcCode' => '097333000',
                'citymunDesc' => 'LAKEWOOD',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097333',
            ),
            134 => 
            array (
                'id' => 1135,
                'psgcCode' => '097337000',
                'citymunDesc' => 'JOSEFINA',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097337',
            ),
            135 => 
            array (
                'id' => 1136,
                'psgcCode' => '097338000',
                'citymunDesc' => 'PITOGO',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097338',
            ),
            136 => 
            array (
                'id' => 1137,
                'psgcCode' => '097340000',
            'citymunDesc' => 'SOMINOT (DON MARIANO MARCOS)',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097340',
            ),
            137 => 
            array (
                'id' => 1138,
                'psgcCode' => '097341000',
                'citymunDesc' => 'VINCENZO A. SAGUN',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097341',
            ),
            138 => 
            array (
                'id' => 1139,
                'psgcCode' => '097343000',
                'citymunDesc' => 'GUIPOS',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097343',
            ),
            139 => 
            array (
                'id' => 1140,
                'psgcCode' => '097344000',
                'citymunDesc' => 'TIGBAO',
                'regDesc' => '09',
                'provCode' => '0973',
                'citymunCode' => '097344',
            ),
            140 => 
            array (
                'id' => 1141,
                'psgcCode' => '098301000',
                'citymunDesc' => 'ALICIA',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098301',
            ),
            141 => 
            array (
                'id' => 1142,
                'psgcCode' => '098302000',
                'citymunDesc' => 'BUUG',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098302',
            ),
            142 => 
            array (
                'id' => 1143,
                'psgcCode' => '098303000',
                'citymunDesc' => 'DIPLAHAN',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098303',
            ),
            143 => 
            array (
                'id' => 1144,
                'psgcCode' => '098304000',
                'citymunDesc' => 'IMELDA',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098304',
            ),
            144 => 
            array (
                'id' => 1145,
                'psgcCode' => '098305000',
            'citymunDesc' => 'IPIL (Capital)',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098305',
            ),
            145 => 
            array (
                'id' => 1146,
                'psgcCode' => '098306000',
                'citymunDesc' => 'KABASALAN',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098306',
            ),
            146 => 
            array (
                'id' => 1147,
                'psgcCode' => '098307000',
                'citymunDesc' => 'MABUHAY',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098307',
            ),
            147 => 
            array (
                'id' => 1148,
                'psgcCode' => '098308000',
                'citymunDesc' => 'MALANGAS',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098308',
            ),
            148 => 
            array (
                'id' => 1149,
                'psgcCode' => '098309000',
                'citymunDesc' => 'NAGA',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098309',
            ),
            149 => 
            array (
                'id' => 1150,
                'psgcCode' => '098310000',
                'citymunDesc' => 'OLUTANGA',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098310',
            ),
            150 => 
            array (
                'id' => 1151,
                'psgcCode' => '098311000',
                'citymunDesc' => 'PAYAO',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098311',
            ),
            151 => 
            array (
                'id' => 1152,
                'psgcCode' => '098312000',
                'citymunDesc' => 'ROSELLER LIM',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098312',
            ),
            152 => 
            array (
                'id' => 1153,
                'psgcCode' => '098313000',
                'citymunDesc' => 'SIAY',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098313',
            ),
            153 => 
            array (
                'id' => 1154,
                'psgcCode' => '098314000',
                'citymunDesc' => 'TALUSAN',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098314',
            ),
            154 => 
            array (
                'id' => 1155,
                'psgcCode' => '098315000',
                'citymunDesc' => 'TITAY',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098315',
            ),
            155 => 
            array (
                'id' => 1156,
                'psgcCode' => '098316000',
                'citymunDesc' => 'TUNGAWAN',
                'regDesc' => '09',
                'provCode' => '0983',
                'citymunCode' => '098316',
            ),
            156 => 
            array (
                'id' => 1157,
                'psgcCode' => '099701000',
                'citymunDesc' => 'CITY OF ISABELA',
                'regDesc' => '09',
                'provCode' => '0997',
                'citymunCode' => '099701',
            ),
            157 => 
            array (
                'id' => 1158,
                'psgcCode' => '101301000',
                'citymunDesc' => 'BAUNGON',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101301',
            ),
            158 => 
            array (
                'id' => 1159,
                'psgcCode' => '101302000',
                'citymunDesc' => 'DAMULOG',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101302',
            ),
            159 => 
            array (
                'id' => 1160,
                'psgcCode' => '101303000',
                'citymunDesc' => 'DANGCAGAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101303',
            ),
            160 => 
            array (
                'id' => 1161,
                'psgcCode' => '101304000',
                'citymunDesc' => 'DON CARLOS',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101304',
            ),
            161 => 
            array (
                'id' => 1162,
                'psgcCode' => '101305000',
                'citymunDesc' => 'IMPASUG-ONG',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101305',
            ),
            162 => 
            array (
                'id' => 1163,
                'psgcCode' => '101306000',
                'citymunDesc' => 'KADINGILAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101306',
            ),
            163 => 
            array (
                'id' => 1164,
                'psgcCode' => '101307000',
                'citymunDesc' => 'KALILANGAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101307',
            ),
            164 => 
            array (
                'id' => 1165,
                'psgcCode' => '101308000',
                'citymunDesc' => 'KIBAWE',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101308',
            ),
            165 => 
            array (
                'id' => 1166,
                'psgcCode' => '101309000',
                'citymunDesc' => 'KITAOTAO',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101309',
            ),
            166 => 
            array (
                'id' => 1167,
                'psgcCode' => '101310000',
                'citymunDesc' => 'LANTAPAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101310',
            ),
            167 => 
            array (
                'id' => 1168,
                'psgcCode' => '101311000',
                'citymunDesc' => 'LIBONA',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101311',
            ),
            168 => 
            array (
                'id' => 1169,
                'psgcCode' => '101312000',
            'citymunDesc' => 'CITY OF MALAYBALAY (Capital)',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101312',
            ),
            169 => 
            array (
                'id' => 1170,
                'psgcCode' => '101313000',
                'citymunDesc' => 'MALITBOG',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101313',
            ),
            170 => 
            array (
                'id' => 1171,
                'psgcCode' => '101314000',
                'citymunDesc' => 'MANOLO FORTICH',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101314',
            ),
            171 => 
            array (
                'id' => 1172,
                'psgcCode' => '101315000',
                'citymunDesc' => 'MARAMAG',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101315',
            ),
            172 => 
            array (
                'id' => 1173,
                'psgcCode' => '101316000',
                'citymunDesc' => 'PANGANTUCAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101316',
            ),
            173 => 
            array (
                'id' => 1174,
                'psgcCode' => '101317000',
                'citymunDesc' => 'QUEZON',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101317',
            ),
            174 => 
            array (
                'id' => 1175,
                'psgcCode' => '101318000',
                'citymunDesc' => 'SAN FERNANDO',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101318',
            ),
            175 => 
            array (
                'id' => 1176,
                'psgcCode' => '101319000',
                'citymunDesc' => 'SUMILAO',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101319',
            ),
            176 => 
            array (
                'id' => 1177,
                'psgcCode' => '101320000',
                'citymunDesc' => 'TALAKAG',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101320',
            ),
            177 => 
            array (
                'id' => 1178,
                'psgcCode' => '101321000',
                'citymunDesc' => 'CITY OF VALENCIA',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101321',
            ),
            178 => 
            array (
                'id' => 1179,
                'psgcCode' => '101322000',
                'citymunDesc' => 'CABANGLASAN',
                'regDesc' => '10',
                'provCode' => '1013',
                'citymunCode' => '101322',
            ),
            179 => 
            array (
                'id' => 1180,
                'psgcCode' => '101801000',
                'citymunDesc' => 'CATARMAN',
                'regDesc' => '10',
                'provCode' => '1018',
                'citymunCode' => '101801',
            ),
            180 => 
            array (
                'id' => 1181,
                'psgcCode' => '101802000',
                'citymunDesc' => 'GUINSILIBAN',
                'regDesc' => '10',
                'provCode' => '1018',
                'citymunCode' => '101802',
            ),
            181 => 
            array (
                'id' => 1182,
                'psgcCode' => '101803000',
                'citymunDesc' => 'MAHINOG',
                'regDesc' => '10',
                'provCode' => '1018',
                'citymunCode' => '101803',
            ),
            182 => 
            array (
                'id' => 1183,
                'psgcCode' => '101804000',
            'citymunDesc' => 'MAMBAJAO (Capital)',
                'regDesc' => '10',
                'provCode' => '1018',
                'citymunCode' => '101804',
            ),
            183 => 
            array (
                'id' => 1184,
                'psgcCode' => '101805000',
                'citymunDesc' => 'SAGAY',
                'regDesc' => '10',
                'provCode' => '1018',
                'citymunCode' => '101805',
            ),
            184 => 
            array (
                'id' => 1185,
                'psgcCode' => '103501000',
                'citymunDesc' => 'BACOLOD',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103501',
            ),
            185 => 
            array (
                'id' => 1186,
                'psgcCode' => '103502000',
                'citymunDesc' => 'BALOI',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103502',
            ),
            186 => 
            array (
                'id' => 1187,
                'psgcCode' => '103503000',
                'citymunDesc' => 'BAROY',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103503',
            ),
            187 => 
            array (
                'id' => 1188,
                'psgcCode' => '103504000',
                'citymunDesc' => 'ILIGAN CITY',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103504',
            ),
            188 => 
            array (
                'id' => 1189,
                'psgcCode' => '103505000',
                'citymunDesc' => 'KAPATAGAN',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103505',
            ),
            189 => 
            array (
                'id' => 1190,
                'psgcCode' => '103506000',
            'citymunDesc' => 'SULTAN NAGA DIMAPORO (KAROMATAN)',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103506',
            ),
            190 => 
            array (
                'id' => 1191,
                'psgcCode' => '103507000',
                'citymunDesc' => 'KAUSWAGAN',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103507',
            ),
            191 => 
            array (
                'id' => 1192,
                'psgcCode' => '103508000',
                'citymunDesc' => 'KOLAMBUGAN',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103508',
            ),
            192 => 
            array (
                'id' => 1193,
                'psgcCode' => '103509000',
                'citymunDesc' => 'LALA',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103509',
            ),
            193 => 
            array (
                'id' => 1194,
                'psgcCode' => '103510000',
                'citymunDesc' => 'LINAMON',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103510',
            ),
            194 => 
            array (
                'id' => 1195,
                'psgcCode' => '103511000',
                'citymunDesc' => 'MAGSAYSAY',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103511',
            ),
            195 => 
            array (
                'id' => 1196,
                'psgcCode' => '103512000',
                'citymunDesc' => 'MAIGO',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103512',
            ),
            196 => 
            array (
                'id' => 1197,
                'psgcCode' => '103513000',
                'citymunDesc' => 'MATUNGAO',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103513',
            ),
            197 => 
            array (
                'id' => 1198,
                'psgcCode' => '103514000',
                'citymunDesc' => 'MUNAI',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103514',
            ),
            198 => 
            array (
                'id' => 1199,
                'psgcCode' => '103515000',
                'citymunDesc' => 'NUNUNGAN',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103515',
            ),
            199 => 
            array (
                'id' => 1200,
                'psgcCode' => '103516000',
                'citymunDesc' => 'PANTAO RAGAT',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103516',
            ),
            200 => 
            array (
                'id' => 1201,
                'psgcCode' => '103517000',
                'citymunDesc' => 'POONA PIAGAPO',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103517',
            ),
            201 => 
            array (
                'id' => 1202,
                'psgcCode' => '103518000',
                'citymunDesc' => 'SALVADOR',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103518',
            ),
            202 => 
            array (
                'id' => 1203,
                'psgcCode' => '103519000',
                'citymunDesc' => 'SAPAD',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103519',
            ),
            203 => 
            array (
                'id' => 1204,
                'psgcCode' => '103520000',
                'citymunDesc' => 'TAGOLOAN',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103520',
            ),
            204 => 
            array (
                'id' => 1205,
                'psgcCode' => '103521000',
                'citymunDesc' => 'TANGCAL',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103521',
            ),
            205 => 
            array (
                'id' => 1206,
                'psgcCode' => '103522000',
            'citymunDesc' => 'TUBOD (Capital)',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103522',
            ),
            206 => 
            array (
                'id' => 1207,
                'psgcCode' => '103523000',
                'citymunDesc' => 'PANTAR',
                'regDesc' => '10',
                'provCode' => '1035',
                'citymunCode' => '103523',
            ),
            207 => 
            array (
                'id' => 1208,
                'psgcCode' => '104201000',
                'citymunDesc' => 'ALORAN',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104201',
            ),
            208 => 
            array (
                'id' => 1209,
                'psgcCode' => '104202000',
                'citymunDesc' => 'BALIANGAO',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104202',
            ),
            209 => 
            array (
                'id' => 1210,
                'psgcCode' => '104203000',
                'citymunDesc' => 'BONIFACIO',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104203',
            ),
            210 => 
            array (
                'id' => 1211,
                'psgcCode' => '104204000',
                'citymunDesc' => 'CALAMBA',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104204',
            ),
            211 => 
            array (
                'id' => 1212,
                'psgcCode' => '104205000',
                'citymunDesc' => 'CLARIN',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104205',
            ),
            212 => 
            array (
                'id' => 1213,
                'psgcCode' => '104206000',
                'citymunDesc' => 'CONCEPCION',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104206',
            ),
            213 => 
            array (
                'id' => 1214,
                'psgcCode' => '104207000',
                'citymunDesc' => 'JIMENEZ',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104207',
            ),
            214 => 
            array (
                'id' => 1215,
                'psgcCode' => '104208000',
                'citymunDesc' => 'LOPEZ JAENA',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104208',
            ),
            215 => 
            array (
                'id' => 1216,
                'psgcCode' => '104209000',
            'citymunDesc' => 'OROQUIETA CITY (Capital)',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104209',
            ),
            216 => 
            array (
                'id' => 1217,
                'psgcCode' => '104210000',
                'citymunDesc' => 'OZAMIS CITY',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104210',
            ),
            217 => 
            array (
                'id' => 1218,
                'psgcCode' => '104211000',
                'citymunDesc' => 'PANAON',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104211',
            ),
            218 => 
            array (
                'id' => 1219,
                'psgcCode' => '104212000',
                'citymunDesc' => 'PLARIDEL',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104212',
            ),
            219 => 
            array (
                'id' => 1220,
                'psgcCode' => '104213000',
                'citymunDesc' => 'SAPANG DALAGA',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104213',
            ),
            220 => 
            array (
                'id' => 1221,
                'psgcCode' => '104214000',
                'citymunDesc' => 'SINACABAN',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104214',
            ),
            221 => 
            array (
                'id' => 1222,
                'psgcCode' => '104215000',
                'citymunDesc' => 'TANGUB CITY',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104215',
            ),
            222 => 
            array (
                'id' => 1223,
                'psgcCode' => '104216000',
                'citymunDesc' => 'TUDELA',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104216',
            ),
            223 => 
            array (
                'id' => 1224,
                'psgcCode' => '104217000',
            'citymunDesc' => 'DON VICTORIANO CHIONGBIAN  (DON MARIANO MARCOS)',
                'regDesc' => '10',
                'provCode' => '1042',
                'citymunCode' => '104217',
            ),
            224 => 
            array (
                'id' => 1225,
                'psgcCode' => '104301000',
                'citymunDesc' => 'ALUBIJID',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104301',
            ),
            225 => 
            array (
                'id' => 1226,
                'psgcCode' => '104302000',
                'citymunDesc' => 'BALINGASAG',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104302',
            ),
            226 => 
            array (
                'id' => 1227,
                'psgcCode' => '104303000',
                'citymunDesc' => 'BALINGOAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104303',
            ),
            227 => 
            array (
                'id' => 1228,
                'psgcCode' => '104304000',
                'citymunDesc' => 'BINUANGAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104304',
            ),
            228 => 
            array (
                'id' => 1229,
                'psgcCode' => '104305000',
            'citymunDesc' => 'CAGAYAN DE ORO CITY (Capital)',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104305',
            ),
            229 => 
            array (
                'id' => 1230,
                'psgcCode' => '104306000',
                'citymunDesc' => 'CLAVERIA',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104306',
            ),
            230 => 
            array (
                'id' => 1231,
                'psgcCode' => '104307000',
                'citymunDesc' => 'CITY OF EL SALVADOR',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104307',
            ),
            231 => 
            array (
                'id' => 1232,
                'psgcCode' => '104308000',
                'citymunDesc' => 'GINGOOG CITY',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104308',
            ),
            232 => 
            array (
                'id' => 1233,
                'psgcCode' => '104309000',
                'citymunDesc' => 'GITAGUM',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104309',
            ),
            233 => 
            array (
                'id' => 1234,
                'psgcCode' => '104310000',
                'citymunDesc' => 'INITAO',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104310',
            ),
            234 => 
            array (
                'id' => 1235,
                'psgcCode' => '104311000',
                'citymunDesc' => 'JASAAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104311',
            ),
            235 => 
            array (
                'id' => 1236,
                'psgcCode' => '104312000',
                'citymunDesc' => 'KINOGUITAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104312',
            ),
            236 => 
            array (
                'id' => 1237,
                'psgcCode' => '104313000',
                'citymunDesc' => 'LAGONGLONG',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104313',
            ),
            237 => 
            array (
                'id' => 1238,
                'psgcCode' => '104314000',
                'citymunDesc' => 'LAGUINDINGAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104314',
            ),
            238 => 
            array (
                'id' => 1239,
                'psgcCode' => '104315000',
                'citymunDesc' => 'LIBERTAD',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104315',
            ),
            239 => 
            array (
                'id' => 1240,
                'psgcCode' => '104316000',
                'citymunDesc' => 'LUGAIT',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104316',
            ),
            240 => 
            array (
                'id' => 1241,
                'psgcCode' => '104317000',
            'citymunDesc' => 'MAGSAYSAY (LINUGOS)',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104317',
            ),
            241 => 
            array (
                'id' => 1242,
                'psgcCode' => '104318000',
                'citymunDesc' => 'MANTICAO',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104318',
            ),
            242 => 
            array (
                'id' => 1243,
                'psgcCode' => '104319000',
                'citymunDesc' => 'MEDINA',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104319',
            ),
            243 => 
            array (
                'id' => 1244,
                'psgcCode' => '104320000',
                'citymunDesc' => 'NAAWAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104320',
            ),
            244 => 
            array (
                'id' => 1245,
                'psgcCode' => '104321000',
                'citymunDesc' => 'OPOL',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104321',
            ),
            245 => 
            array (
                'id' => 1246,
                'psgcCode' => '104322000',
                'citymunDesc' => 'SALAY',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104322',
            ),
            246 => 
            array (
                'id' => 1247,
                'psgcCode' => '104323000',
                'citymunDesc' => 'SUGBONGCOGON',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104323',
            ),
            247 => 
            array (
                'id' => 1248,
                'psgcCode' => '104324000',
                'citymunDesc' => 'TAGOLOAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104324',
            ),
            248 => 
            array (
                'id' => 1249,
                'psgcCode' => '104325000',
                'citymunDesc' => 'TALISAYAN',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104325',
            ),
            249 => 
            array (
                'id' => 1250,
                'psgcCode' => '104326000',
                'citymunDesc' => 'VILLANUEVA',
                'regDesc' => '10',
                'provCode' => '1043',
                'citymunCode' => '104326',
            ),
            250 => 
            array (
                'id' => 1251,
                'psgcCode' => '112301000',
            'citymunDesc' => 'ASUNCION (SAUG)',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112301',
            ),
            251 => 
            array (
                'id' => 1252,
                'psgcCode' => '112303000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112303',
            ),
            252 => 
            array (
                'id' => 1253,
                'psgcCode' => '112305000',
                'citymunDesc' => 'KAPALONG',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112305',
            ),
            253 => 
            array (
                'id' => 1254,
                'psgcCode' => '112314000',
                'citymunDesc' => 'NEW CORELLA',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112314',
            ),
            254 => 
            array (
                'id' => 1255,
                'psgcCode' => '112315000',
                'citymunDesc' => 'CITY OF PANABO',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112315',
            ),
            255 => 
            array (
                'id' => 1256,
                'psgcCode' => '112317000',
                'citymunDesc' => 'ISLAND GARDEN CITY OF SAMAL',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112317',
            ),
            256 => 
            array (
                'id' => 1257,
                'psgcCode' => '112318000',
                'citymunDesc' => 'SANTO TOMAS',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112318',
            ),
            257 => 
            array (
                'id' => 1258,
                'psgcCode' => '112319000',
            'citymunDesc' => 'CITY OF TAGUM (Capital)',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112319',
            ),
            258 => 
            array (
                'id' => 1259,
                'psgcCode' => '112322000',
                'citymunDesc' => 'TALAINGOD',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112322',
            ),
            259 => 
            array (
                'id' => 1260,
                'psgcCode' => '112323000',
                'citymunDesc' => 'BRAULIO E. DUJALI',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112323',
            ),
            260 => 
            array (
                'id' => 1261,
                'psgcCode' => '112324000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '11',
                'provCode' => '1123',
                'citymunCode' => '112324',
            ),
            261 => 
            array (
                'id' => 1262,
                'psgcCode' => '112401000',
                'citymunDesc' => 'BANSALAN',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112401',
            ),
            262 => 
            array (
                'id' => 1263,
                'psgcCode' => '112402000',
                'citymunDesc' => 'DAVAO CITY',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112402',
            ),
            263 => 
            array (
                'id' => 1264,
                'psgcCode' => '112403000',
            'citymunDesc' => 'CITY OF DIGOS (Capital)',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112403',
            ),
            264 => 
            array (
                'id' => 1265,
                'psgcCode' => '112404000',
                'citymunDesc' => 'HAGONOY',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112404',
            ),
            265 => 
            array (
                'id' => 1266,
                'psgcCode' => '112406000',
                'citymunDesc' => 'KIBLAWAN',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112406',
            ),
            266 => 
            array (
                'id' => 1267,
                'psgcCode' => '112407000',
                'citymunDesc' => 'MAGSAYSAY',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112407',
            ),
            267 => 
            array (
                'id' => 1268,
                'psgcCode' => '112408000',
                'citymunDesc' => 'MALALAG',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112408',
            ),
            268 => 
            array (
                'id' => 1269,
                'psgcCode' => '112410000',
                'citymunDesc' => 'MATANAO',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112410',
            ),
            269 => 
            array (
                'id' => 1270,
                'psgcCode' => '112411000',
                'citymunDesc' => 'PADADA',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112411',
            ),
            270 => 
            array (
                'id' => 1271,
                'psgcCode' => '112412000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112412',
            ),
            271 => 
            array (
                'id' => 1272,
                'psgcCode' => '112414000',
                'citymunDesc' => 'SULOP',
                'regDesc' => '11',
                'provCode' => '1124',
                'citymunCode' => '112414',
            ),
            272 => 
            array (
                'id' => 1273,
                'psgcCode' => '112501000',
                'citymunDesc' => 'BAGANGA',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112501',
            ),
            273 => 
            array (
                'id' => 1274,
                'psgcCode' => '112502000',
                'citymunDesc' => 'BANAYBANAY',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112502',
            ),
            274 => 
            array (
                'id' => 1275,
                'psgcCode' => '112503000',
                'citymunDesc' => 'BOSTON',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112503',
            ),
            275 => 
            array (
                'id' => 1276,
                'psgcCode' => '112504000',
                'citymunDesc' => 'CARAGA',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112504',
            ),
            276 => 
            array (
                'id' => 1277,
                'psgcCode' => '112505000',
                'citymunDesc' => 'CATEEL',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112505',
            ),
            277 => 
            array (
                'id' => 1278,
                'psgcCode' => '112506000',
                'citymunDesc' => 'GOVERNOR GENEROSO',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112506',
            ),
            278 => 
            array (
                'id' => 1279,
                'psgcCode' => '112507000',
                'citymunDesc' => 'LUPON',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112507',
            ),
            279 => 
            array (
                'id' => 1280,
                'psgcCode' => '112508000',
                'citymunDesc' => 'MANAY',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112508',
            ),
            280 => 
            array (
                'id' => 1281,
                'psgcCode' => '112509000',
            'citymunDesc' => 'CITY OF MATI (Capital)',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112509',
            ),
            281 => 
            array (
                'id' => 1282,
                'psgcCode' => '112510000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112510',
            ),
            282 => 
            array (
                'id' => 1283,
                'psgcCode' => '112511000',
                'citymunDesc' => 'TARRAGONA',
                'regDesc' => '11',
                'provCode' => '1125',
                'citymunCode' => '112511',
            ),
            283 => 
            array (
                'id' => 1284,
                'psgcCode' => '118201000',
                'citymunDesc' => 'COMPOSTELA',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118201',
            ),
            284 => 
            array (
                'id' => 1285,
                'psgcCode' => '118202000',
            'citymunDesc' => 'LAAK (SAN VICENTE)',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118202',
            ),
            285 => 
            array (
                'id' => 1286,
                'psgcCode' => '118203000',
            'citymunDesc' => 'MABINI (DOÑA ALICIA)',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118203',
            ),
            286 => 
            array (
                'id' => 1287,
                'psgcCode' => '118204000',
                'citymunDesc' => 'MACO',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118204',
            ),
            287 => 
            array (
                'id' => 1288,
                'psgcCode' => '118205000',
            'citymunDesc' => 'MARAGUSAN (SAN MARIANO)',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118205',
            ),
            288 => 
            array (
                'id' => 1289,
                'psgcCode' => '118206000',
                'citymunDesc' => 'MAWAB',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118206',
            ),
            289 => 
            array (
                'id' => 1290,
                'psgcCode' => '118207000',
                'citymunDesc' => 'MONKAYO',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118207',
            ),
            290 => 
            array (
                'id' => 1291,
                'psgcCode' => '118208000',
                'citymunDesc' => 'MONTEVISTA',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118208',
            ),
            291 => 
            array (
                'id' => 1292,
                'psgcCode' => '118209000',
            'citymunDesc' => 'NABUNTURAN (Capital)',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118209',
            ),
            292 => 
            array (
                'id' => 1293,
                'psgcCode' => '118210000',
                'citymunDesc' => 'NEW BATAAN',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118210',
            ),
            293 => 
            array (
                'id' => 1294,
                'psgcCode' => '118211000',
                'citymunDesc' => 'PANTUKAN',
                'regDesc' => '11',
                'provCode' => '1182',
                'citymunCode' => '118211',
            ),
            294 => 
            array (
                'id' => 1295,
                'psgcCode' => '118601000',
                'citymunDesc' => 'DON MARCELINO',
                'regDesc' => '11',
                'provCode' => '1186',
                'citymunCode' => '118601',
            ),
            295 => 
            array (
                'id' => 1296,
                'psgcCode' => '118602000',
            'citymunDesc' => 'JOSE ABAD SANTOS (TRINIDAD)',
                'regDesc' => '11',
                'provCode' => '1186',
                'citymunCode' => '118602',
            ),
            296 => 
            array (
                'id' => 1297,
                'psgcCode' => '118603000',
                'citymunDesc' => 'MALITA',
                'regDesc' => '11',
                'provCode' => '1186',
                'citymunCode' => '118603',
            ),
            297 => 
            array (
                'id' => 1298,
                'psgcCode' => '118604000',
                'citymunDesc' => 'SANTA MARIA',
                'regDesc' => '11',
                'provCode' => '1186',
                'citymunCode' => '118604',
            ),
            298 => 
            array (
                'id' => 1299,
                'psgcCode' => '118605000',
                'citymunDesc' => 'SARANGANI',
                'regDesc' => '11',
                'provCode' => '1186',
                'citymunCode' => '118605',
            ),
            299 => 
            array (
                'id' => 1300,
                'psgcCode' => '124701000',
                'citymunDesc' => 'ALAMADA',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124701',
            ),
            300 => 
            array (
                'id' => 1301,
                'psgcCode' => '124702000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124702',
            ),
            301 => 
            array (
                'id' => 1302,
                'psgcCode' => '124703000',
                'citymunDesc' => 'KABACAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124703',
            ),
            302 => 
            array (
                'id' => 1303,
                'psgcCode' => '124704000',
            'citymunDesc' => 'CITY OF KIDAPAWAN (Capital)',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124704',
            ),
            303 => 
            array (
                'id' => 1304,
                'psgcCode' => '124705000',
                'citymunDesc' => 'LIBUNGAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124705',
            ),
            304 => 
            array (
                'id' => 1305,
                'psgcCode' => '124706000',
                'citymunDesc' => 'MAGPET',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124706',
            ),
            305 => 
            array (
                'id' => 1306,
                'psgcCode' => '124707000',
                'citymunDesc' => 'MAKILALA',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124707',
            ),
            306 => 
            array (
                'id' => 1307,
                'psgcCode' => '124708000',
                'citymunDesc' => 'MATALAM',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124708',
            ),
            307 => 
            array (
                'id' => 1308,
                'psgcCode' => '124709000',
                'citymunDesc' => 'MIDSAYAP',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124709',
            ),
            308 => 
            array (
                'id' => 1309,
                'psgcCode' => '124710000',
                'citymunDesc' => 'M\'LANG',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124710',
            ),
            309 => 
            array (
                'id' => 1310,
                'psgcCode' => '124711000',
                'citymunDesc' => 'PIGKAWAYAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124711',
            ),
            310 => 
            array (
                'id' => 1311,
                'psgcCode' => '124712000',
                'citymunDesc' => 'PIKIT',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124712',
            ),
            311 => 
            array (
                'id' => 1312,
                'psgcCode' => '124713000',
                'citymunDesc' => 'PRESIDENT ROXAS',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124713',
            ),
            312 => 
            array (
                'id' => 1313,
                'psgcCode' => '124714000',
                'citymunDesc' => 'TULUNAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124714',
            ),
            313 => 
            array (
                'id' => 1314,
                'psgcCode' => '124715000',
                'citymunDesc' => 'ANTIPAS',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124715',
            ),
            314 => 
            array (
                'id' => 1315,
                'psgcCode' => '124716000',
                'citymunDesc' => 'BANISILAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124716',
            ),
            315 => 
            array (
                'id' => 1316,
                'psgcCode' => '124717000',
                'citymunDesc' => 'ALEOSAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124717',
            ),
            316 => 
            array (
                'id' => 1317,
                'psgcCode' => '124718000',
                'citymunDesc' => 'ARAKAN',
                'regDesc' => '12',
                'provCode' => '1247',
                'citymunCode' => '124718',
            ),
            317 => 
            array (
                'id' => 1318,
                'psgcCode' => '126302000',
                'citymunDesc' => 'BANGA',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126302',
            ),
            318 => 
            array (
                'id' => 1319,
                'psgcCode' => '126303000',
            'citymunDesc' => 'GENERAL SANTOS CITY (DADIANGAS)',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126303',
            ),
            319 => 
            array (
                'id' => 1320,
                'psgcCode' => '126306000',
            'citymunDesc' => 'CITY OF KORONADAL (Capital)',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126306',
            ),
            320 => 
            array (
                'id' => 1321,
                'psgcCode' => '126311000',
                'citymunDesc' => 'NORALA',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126311',
            ),
            321 => 
            array (
                'id' => 1322,
                'psgcCode' => '126312000',
                'citymunDesc' => 'POLOMOLOK',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126312',
            ),
            322 => 
            array (
                'id' => 1323,
                'psgcCode' => '126313000',
                'citymunDesc' => 'SURALLAH',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126313',
            ),
            323 => 
            array (
                'id' => 1324,
                'psgcCode' => '126314000',
                'citymunDesc' => 'TAMPAKAN',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126314',
            ),
            324 => 
            array (
                'id' => 1325,
                'psgcCode' => '126315000',
                'citymunDesc' => 'TANTANGAN',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126315',
            ),
            325 => 
            array (
                'id' => 1326,
                'psgcCode' => '126316000',
                'citymunDesc' => 'T\'BOLI',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126316',
            ),
            326 => 
            array (
                'id' => 1327,
                'psgcCode' => '126317000',
                'citymunDesc' => 'TUPI',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126317',
            ),
            327 => 
            array (
                'id' => 1328,
                'psgcCode' => '126318000',
                'citymunDesc' => 'SANTO NIÑO',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126318',
            ),
            328 => 
            array (
                'id' => 1329,
                'psgcCode' => '126319000',
                'citymunDesc' => 'LAKE SEBU',
                'regDesc' => '12',
                'provCode' => '1263',
                'citymunCode' => '126319',
            ),
            329 => 
            array (
                'id' => 1330,
                'psgcCode' => '126501000',
                'citymunDesc' => 'BAGUMBAYAN',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126501',
            ),
            330 => 
            array (
                'id' => 1331,
                'psgcCode' => '126502000',
                'citymunDesc' => 'COLUMBIO',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126502',
            ),
            331 => 
            array (
                'id' => 1332,
                'psgcCode' => '126503000',
                'citymunDesc' => 'ESPERANZA',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126503',
            ),
            332 => 
            array (
                'id' => 1333,
                'psgcCode' => '126504000',
            'citymunDesc' => 'ISULAN (Capital)',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126504',
            ),
            333 => 
            array (
                'id' => 1334,
                'psgcCode' => '126505000',
                'citymunDesc' => 'KALAMANSIG',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126505',
            ),
            334 => 
            array (
                'id' => 1335,
                'psgcCode' => '126506000',
                'citymunDesc' => 'LEBAK',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126506',
            ),
            335 => 
            array (
                'id' => 1336,
                'psgcCode' => '126507000',
                'citymunDesc' => 'LUTAYAN',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126507',
            ),
            336 => 
            array (
                'id' => 1337,
                'psgcCode' => '126508000',
            'citymunDesc' => 'LAMBAYONG (MARIANO MARCOS)',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126508',
            ),
            337 => 
            array (
                'id' => 1338,
                'psgcCode' => '126509000',
                'citymunDesc' => 'PALIMBANG',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126509',
            ),
            338 => 
            array (
                'id' => 1339,
                'psgcCode' => '126510000',
                'citymunDesc' => 'PRESIDENT QUIRINO',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126510',
            ),
            339 => 
            array (
                'id' => 1340,
                'psgcCode' => '126511000',
                'citymunDesc' => 'CITY OF TACURONG',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126511',
            ),
            340 => 
            array (
                'id' => 1341,
                'psgcCode' => '126512000',
                'citymunDesc' => 'SEN. NINOY AQUINO',
                'regDesc' => '12',
                'provCode' => '1265',
                'citymunCode' => '126512',
            ),
            341 => 
            array (
                'id' => 1342,
                'psgcCode' => '128001000',
            'citymunDesc' => 'ALABEL (Capital)',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128001',
            ),
            342 => 
            array (
                'id' => 1343,
                'psgcCode' => '128002000',
                'citymunDesc' => 'GLAN',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128002',
            ),
            343 => 
            array (
                'id' => 1344,
                'psgcCode' => '128003000',
                'citymunDesc' => 'KIAMBA',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128003',
            ),
            344 => 
            array (
                'id' => 1345,
                'psgcCode' => '128004000',
                'citymunDesc' => 'MAASIM',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128004',
            ),
            345 => 
            array (
                'id' => 1346,
                'psgcCode' => '128005000',
                'citymunDesc' => 'MAITUM',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128005',
            ),
            346 => 
            array (
                'id' => 1347,
                'psgcCode' => '128006000',
                'citymunDesc' => 'MALAPATAN',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128006',
            ),
            347 => 
            array (
                'id' => 1348,
                'psgcCode' => '128007000',
                'citymunDesc' => 'MALUNGON',
                'regDesc' => '12',
                'provCode' => '1280',
                'citymunCode' => '128007',
            ),
            348 => 
            array (
                'id' => 1349,
                'psgcCode' => '129804000',
                'citymunDesc' => 'COTABATO CITY',
                'regDesc' => '12',
                'provCode' => '1298',
                'citymunCode' => '129804',
            ),
            349 => 
            array (
                'id' => 1350,
                'psgcCode' => '133901000',
                'citymunDesc' => 'TONDO I / II',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133901',
            ),
            350 => 
            array (
                'id' => 1351,
                'psgcCode' => '133902000',
                'citymunDesc' => 'BINONDO',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133902',
            ),
            351 => 
            array (
                'id' => 1352,
                'psgcCode' => '133903000',
                'citymunDesc' => 'QUIAPO',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133903',
            ),
            352 => 
            array (
                'id' => 1353,
                'psgcCode' => '133904000',
                'citymunDesc' => 'SAN NICOLAS',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133904',
            ),
            353 => 
            array (
                'id' => 1354,
                'psgcCode' => '133905000',
                'citymunDesc' => 'SANTA CRUZ',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133905',
            ),
            354 => 
            array (
                'id' => 1355,
                'psgcCode' => '133906000',
                'citymunDesc' => 'SAMPALOC',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133906',
            ),
            355 => 
            array (
                'id' => 1356,
                'psgcCode' => '133907000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133907',
            ),
            356 => 
            array (
                'id' => 1357,
                'psgcCode' => '133908000',
                'citymunDesc' => 'ERMITA',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133908',
            ),
            357 => 
            array (
                'id' => 1358,
                'psgcCode' => '133909000',
                'citymunDesc' => 'INTRAMUROS',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133909',
            ),
            358 => 
            array (
                'id' => 1359,
                'psgcCode' => '133910000',
                'citymunDesc' => 'MALATE',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133910',
            ),
            359 => 
            array (
                'id' => 1360,
                'psgcCode' => '133911000',
                'citymunDesc' => 'PACO',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133911',
            ),
            360 => 
            array (
                'id' => 1361,
                'psgcCode' => '133912000',
                'citymunDesc' => 'PANDACAN',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133912',
            ),
            361 => 
            array (
                'id' => 1362,
                'psgcCode' => '133913000',
                'citymunDesc' => 'PORT AREA',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133913',
            ),
            362 => 
            array (
                'id' => 1363,
                'psgcCode' => '133914000',
                'citymunDesc' => 'SANTA ANA',
                'regDesc' => '13',
                'provCode' => '1339',
                'citymunCode' => '133914',
            ),
            363 => 
            array (
                'id' => 1364,
                'psgcCode' => '137401000',
                'citymunDesc' => 'CITY OF MANDALUYONG',
                'regDesc' => '13',
                'provCode' => '1374',
                'citymunCode' => '137401',
            ),
            364 => 
            array (
                'id' => 1365,
                'psgcCode' => '137402000',
                'citymunDesc' => 'CITY OF MARIKINA',
                'regDesc' => '13',
                'provCode' => '1374',
                'citymunCode' => '137402',
            ),
            365 => 
            array (
                'id' => 1366,
                'psgcCode' => '137403000',
                'citymunDesc' => 'CITY OF PASIG',
                'regDesc' => '13',
                'provCode' => '1374',
                'citymunCode' => '137403',
            ),
            366 => 
            array (
                'id' => 1367,
                'psgcCode' => '137404000',
                'citymunDesc' => 'QUEZON CITY',
                'regDesc' => '13',
                'provCode' => '1374',
                'citymunCode' => '137404',
            ),
            367 => 
            array (
                'id' => 1368,
                'psgcCode' => '137405000',
                'citymunDesc' => 'CITY OF SAN JUAN',
                'regDesc' => '13',
                'provCode' => '1374',
                'citymunCode' => '137405',
            ),
            368 => 
            array (
                'id' => 1369,
                'psgcCode' => '137501000',
                'citymunDesc' => 'CALOOCAN CITY',
                'regDesc' => '13',
                'provCode' => '1375',
                'citymunCode' => '137501',
            ),
            369 => 
            array (
                'id' => 1370,
                'psgcCode' => '137502000',
                'citymunDesc' => 'CITY OF MALABON',
                'regDesc' => '13',
                'provCode' => '1375',
                'citymunCode' => '137502',
            ),
            370 => 
            array (
                'id' => 1371,
                'psgcCode' => '137503000',
                'citymunDesc' => 'CITY OF NAVOTAS',
                'regDesc' => '13',
                'provCode' => '1375',
                'citymunCode' => '137503',
            ),
            371 => 
            array (
                'id' => 1372,
                'psgcCode' => '137504000',
                'citymunDesc' => 'CITY OF VALENZUELA',
                'regDesc' => '13',
                'provCode' => '1375',
                'citymunCode' => '137504',
            ),
            372 => 
            array (
                'id' => 1373,
                'psgcCode' => '137601000',
                'citymunDesc' => 'CITY OF LAS PIÑAS',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137601',
            ),
            373 => 
            array (
                'id' => 1374,
                'psgcCode' => '137602000',
                'citymunDesc' => 'CITY OF MAKATI',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137602',
            ),
            374 => 
            array (
                'id' => 1375,
                'psgcCode' => '137603000',
                'citymunDesc' => 'CITY OF MUNTINLUPA',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137603',
            ),
            375 => 
            array (
                'id' => 1376,
                'psgcCode' => '137604000',
                'citymunDesc' => 'CITY OF PARAÑAQUE',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137604',
            ),
            376 => 
            array (
                'id' => 1377,
                'psgcCode' => '137605000',
                'citymunDesc' => 'PASAY CITY',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137605',
            ),
            377 => 
            array (
                'id' => 1378,
                'psgcCode' => '137606000',
                'citymunDesc' => 'PATEROS',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137606',
            ),
            378 => 
            array (
                'id' => 1379,
                'psgcCode' => '137607000',
                'citymunDesc' => 'TAGUIG CITY',
                'regDesc' => '13',
                'provCode' => '1376',
                'citymunCode' => '137607',
            ),
            379 => 
            array (
                'id' => 1380,
                'psgcCode' => '140101000',
            'citymunDesc' => 'BANGUED (Capital)',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140101',
            ),
            380 => 
            array (
                'id' => 1381,
                'psgcCode' => '140102000',
                'citymunDesc' => 'BOLINEY',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140102',
            ),
            381 => 
            array (
                'id' => 1382,
                'psgcCode' => '140103000',
                'citymunDesc' => 'BUCAY',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140103',
            ),
            382 => 
            array (
                'id' => 1383,
                'psgcCode' => '140104000',
                'citymunDesc' => 'BUCLOC',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140104',
            ),
            383 => 
            array (
                'id' => 1384,
                'psgcCode' => '140105000',
                'citymunDesc' => 'DAGUIOMAN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140105',
            ),
            384 => 
            array (
                'id' => 1385,
                'psgcCode' => '140106000',
                'citymunDesc' => 'DANGLAS',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140106',
            ),
            385 => 
            array (
                'id' => 1386,
                'psgcCode' => '140107000',
                'citymunDesc' => 'DOLORES',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140107',
            ),
            386 => 
            array (
                'id' => 1387,
                'psgcCode' => '140108000',
                'citymunDesc' => 'LA PAZ',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140108',
            ),
            387 => 
            array (
                'id' => 1388,
                'psgcCode' => '140109000',
                'citymunDesc' => 'LACUB',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140109',
            ),
            388 => 
            array (
                'id' => 1389,
                'psgcCode' => '140110000',
                'citymunDesc' => 'LAGANGILANG',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140110',
            ),
            389 => 
            array (
                'id' => 1390,
                'psgcCode' => '140111000',
                'citymunDesc' => 'LAGAYAN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140111',
            ),
            390 => 
            array (
                'id' => 1391,
                'psgcCode' => '140112000',
                'citymunDesc' => 'LANGIDEN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140112',
            ),
            391 => 
            array (
                'id' => 1392,
                'psgcCode' => '140113000',
            'citymunDesc' => 'LICUAN-BAAY (LICUAN)',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140113',
            ),
            392 => 
            array (
                'id' => 1393,
                'psgcCode' => '140114000',
                'citymunDesc' => 'LUBA',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140114',
            ),
            393 => 
            array (
                'id' => 1394,
                'psgcCode' => '140115000',
                'citymunDesc' => 'MALIBCONG',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140115',
            ),
            394 => 
            array (
                'id' => 1395,
                'psgcCode' => '140116000',
                'citymunDesc' => 'MANABO',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140116',
            ),
            395 => 
            array (
                'id' => 1396,
                'psgcCode' => '140117000',
                'citymunDesc' => 'PEÑARRUBIA',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140117',
            ),
            396 => 
            array (
                'id' => 1397,
                'psgcCode' => '140118000',
                'citymunDesc' => 'PIDIGAN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140118',
            ),
            397 => 
            array (
                'id' => 1398,
                'psgcCode' => '140119000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140119',
            ),
            398 => 
            array (
                'id' => 1399,
                'psgcCode' => '140120000',
                'citymunDesc' => 'SALLAPADAN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140120',
            ),
            399 => 
            array (
                'id' => 1400,
                'psgcCode' => '140121000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140121',
            ),
            400 => 
            array (
                'id' => 1401,
                'psgcCode' => '140122000',
                'citymunDesc' => 'SAN JUAN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140122',
            ),
            401 => 
            array (
                'id' => 1402,
                'psgcCode' => '140123000',
                'citymunDesc' => 'SAN QUINTIN',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140123',
            ),
            402 => 
            array (
                'id' => 1403,
                'psgcCode' => '140124000',
                'citymunDesc' => 'TAYUM',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140124',
            ),
            403 => 
            array (
                'id' => 1404,
                'psgcCode' => '140125000',
                'citymunDesc' => 'TINEG',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140125',
            ),
            404 => 
            array (
                'id' => 1405,
                'psgcCode' => '140126000',
                'citymunDesc' => 'TUBO',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140126',
            ),
            405 => 
            array (
                'id' => 1406,
                'psgcCode' => '140127000',
                'citymunDesc' => 'VILLAVICIOSA',
                'regDesc' => '14',
                'provCode' => '1401',
                'citymunCode' => '140127',
            ),
            406 => 
            array (
                'id' => 1407,
                'psgcCode' => '141101000',
                'citymunDesc' => 'ATOK',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141101',
            ),
            407 => 
            array (
                'id' => 1408,
                'psgcCode' => '141102000',
                'citymunDesc' => 'BAGUIO CITY',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141102',
            ),
            408 => 
            array (
                'id' => 1409,
                'psgcCode' => '141103000',
                'citymunDesc' => 'BAKUN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141103',
            ),
            409 => 
            array (
                'id' => 1410,
                'psgcCode' => '141104000',
                'citymunDesc' => 'BOKOD',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141104',
            ),
            410 => 
            array (
                'id' => 1411,
                'psgcCode' => '141105000',
                'citymunDesc' => 'BUGUIAS',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141105',
            ),
            411 => 
            array (
                'id' => 1412,
                'psgcCode' => '141106000',
                'citymunDesc' => 'ITOGON',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141106',
            ),
            412 => 
            array (
                'id' => 1413,
                'psgcCode' => '141107000',
                'citymunDesc' => 'KABAYAN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141107',
            ),
            413 => 
            array (
                'id' => 1414,
                'psgcCode' => '141108000',
                'citymunDesc' => 'KAPANGAN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141108',
            ),
            414 => 
            array (
                'id' => 1415,
                'psgcCode' => '141109000',
                'citymunDesc' => 'KIBUNGAN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141109',
            ),
            415 => 
            array (
                'id' => 1416,
                'psgcCode' => '141110000',
            'citymunDesc' => 'LA TRINIDAD (Capital)',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141110',
            ),
            416 => 
            array (
                'id' => 1417,
                'psgcCode' => '141111000',
                'citymunDesc' => 'MANKAYAN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141111',
            ),
            417 => 
            array (
                'id' => 1418,
                'psgcCode' => '141112000',
                'citymunDesc' => 'SABLAN',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141112',
            ),
            418 => 
            array (
                'id' => 1419,
                'psgcCode' => '141113000',
                'citymunDesc' => 'TUBA',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141113',
            ),
            419 => 
            array (
                'id' => 1420,
                'psgcCode' => '141114000',
                'citymunDesc' => 'TUBLAY',
                'regDesc' => '14',
                'provCode' => '1411',
                'citymunCode' => '141114',
            ),
            420 => 
            array (
                'id' => 1421,
                'psgcCode' => '142701000',
                'citymunDesc' => 'BANAUE',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142701',
            ),
            421 => 
            array (
                'id' => 1422,
                'psgcCode' => '142702000',
                'citymunDesc' => 'HUNGDUAN',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142702',
            ),
            422 => 
            array (
                'id' => 1423,
                'psgcCode' => '142703000',
                'citymunDesc' => 'KIANGAN',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142703',
            ),
            423 => 
            array (
                'id' => 1424,
                'psgcCode' => '142704000',
            'citymunDesc' => 'LAGAWE (Capital)',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142704',
            ),
            424 => 
            array (
                'id' => 1425,
                'psgcCode' => '142705000',
                'citymunDesc' => 'LAMUT',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142705',
            ),
            425 => 
            array (
                'id' => 1426,
                'psgcCode' => '142706000',
                'citymunDesc' => 'MAYOYAO',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142706',
            ),
            426 => 
            array (
                'id' => 1427,
                'psgcCode' => '142707000',
            'citymunDesc' => 'ALFONSO LISTA (POTIA)',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142707',
            ),
            427 => 
            array (
                'id' => 1428,
                'psgcCode' => '142708000',
                'citymunDesc' => 'AGUINALDO',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142708',
            ),
            428 => 
            array (
                'id' => 1429,
                'psgcCode' => '142709000',
                'citymunDesc' => 'HINGYON',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142709',
            ),
            429 => 
            array (
                'id' => 1430,
                'psgcCode' => '142710000',
                'citymunDesc' => 'TINOC',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142710',
            ),
            430 => 
            array (
                'id' => 1431,
                'psgcCode' => '142711000',
                'citymunDesc' => 'ASIPULO',
                'regDesc' => '14',
                'provCode' => '1427',
                'citymunCode' => '142711',
            ),
            431 => 
            array (
                'id' => 1432,
                'psgcCode' => '143201000',
                'citymunDesc' => 'BALBALAN',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143201',
            ),
            432 => 
            array (
                'id' => 1433,
                'psgcCode' => '143206000',
                'citymunDesc' => 'LUBUAGAN',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143206',
            ),
            433 => 
            array (
                'id' => 1434,
                'psgcCode' => '143208000',
                'citymunDesc' => 'PASIL',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143208',
            ),
            434 => 
            array (
                'id' => 1435,
                'psgcCode' => '143209000',
                'citymunDesc' => 'PINUKPUK',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143209',
            ),
            435 => 
            array (
                'id' => 1436,
                'psgcCode' => '143211000',
            'citymunDesc' => 'RIZAL (LIWAN)',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143211',
            ),
            436 => 
            array (
                'id' => 1437,
                'psgcCode' => '143213000',
            'citymunDesc' => 'CITY OF TABUK (Capital)',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143213',
            ),
            437 => 
            array (
                'id' => 1438,
                'psgcCode' => '143214000',
                'citymunDesc' => 'TANUDAN',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143214',
            ),
            438 => 
            array (
                'id' => 1439,
                'psgcCode' => '143215000',
                'citymunDesc' => 'TINGLAYAN',
                'regDesc' => '14',
                'provCode' => '1432',
                'citymunCode' => '143215',
            ),
            439 => 
            array (
                'id' => 1440,
                'psgcCode' => '144401000',
                'citymunDesc' => 'BARLIG',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144401',
            ),
            440 => 
            array (
                'id' => 1441,
                'psgcCode' => '144402000',
                'citymunDesc' => 'BAUKO',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144402',
            ),
            441 => 
            array (
                'id' => 1442,
                'psgcCode' => '144403000',
                'citymunDesc' => 'BESAO',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144403',
            ),
            442 => 
            array (
                'id' => 1443,
                'psgcCode' => '144404000',
            'citymunDesc' => 'BONTOC (Capital)',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144404',
            ),
            443 => 
            array (
                'id' => 1444,
                'psgcCode' => '144405000',
                'citymunDesc' => 'NATONIN',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144405',
            ),
            444 => 
            array (
                'id' => 1445,
                'psgcCode' => '144406000',
                'citymunDesc' => 'PARACELIS',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144406',
            ),
            445 => 
            array (
                'id' => 1446,
                'psgcCode' => '144407000',
                'citymunDesc' => 'SABANGAN',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144407',
            ),
            446 => 
            array (
                'id' => 1447,
                'psgcCode' => '144408000',
                'citymunDesc' => 'SADANGA',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144408',
            ),
            447 => 
            array (
                'id' => 1448,
                'psgcCode' => '144409000',
                'citymunDesc' => 'SAGADA',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144409',
            ),
            448 => 
            array (
                'id' => 1449,
                'psgcCode' => '144410000',
                'citymunDesc' => 'TADIAN',
                'regDesc' => '14',
                'provCode' => '1444',
                'citymunCode' => '144410',
            ),
            449 => 
            array (
                'id' => 1450,
                'psgcCode' => '148101000',
            'citymunDesc' => 'CALANASAN (BAYAG)',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148101',
            ),
            450 => 
            array (
                'id' => 1451,
                'psgcCode' => '148102000',
                'citymunDesc' => 'CONNER',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148102',
            ),
            451 => 
            array (
                'id' => 1452,
                'psgcCode' => '148103000',
                'citymunDesc' => 'FLORA',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148103',
            ),
            452 => 
            array (
                'id' => 1453,
                'psgcCode' => '148104000',
            'citymunDesc' => 'KABUGAO (Capital)',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148104',
            ),
            453 => 
            array (
                'id' => 1454,
                'psgcCode' => '148105000',
                'citymunDesc' => 'LUNA',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148105',
            ),
            454 => 
            array (
                'id' => 1455,
                'psgcCode' => '148106000',
                'citymunDesc' => 'PUDTOL',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148106',
            ),
            455 => 
            array (
                'id' => 1456,
                'psgcCode' => '148107000',
                'citymunDesc' => 'SANTA MARCELA',
                'regDesc' => '14',
                'provCode' => '1481',
                'citymunCode' => '148107',
            ),
            456 => 
            array (
                'id' => 1457,
                'psgcCode' => '150702000',
                'citymunDesc' => 'CITY OF LAMITAN',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150702',
            ),
            457 => 
            array (
                'id' => 1458,
                'psgcCode' => '150703000',
                'citymunDesc' => 'LANTAWAN',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150703',
            ),
            458 => 
            array (
                'id' => 1459,
                'psgcCode' => '150704000',
                'citymunDesc' => 'MALUSO',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150704',
            ),
            459 => 
            array (
                'id' => 1460,
                'psgcCode' => '150705000',
                'citymunDesc' => 'SUMISIP',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150705',
            ),
            460 => 
            array (
                'id' => 1461,
                'psgcCode' => '150706000',
                'citymunDesc' => 'TIPO-TIPO',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150706',
            ),
            461 => 
            array (
                'id' => 1462,
                'psgcCode' => '150707000',
                'citymunDesc' => 'TUBURAN',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150707',
            ),
            462 => 
            array (
                'id' => 1463,
                'psgcCode' => '150708000',
                'citymunDesc' => 'AKBAR',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150708',
            ),
            463 => 
            array (
                'id' => 1464,
                'psgcCode' => '150709000',
                'citymunDesc' => 'AL-BARKA',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150709',
            ),
            464 => 
            array (
                'id' => 1465,
                'psgcCode' => '150710000',
                'citymunDesc' => 'HADJI MOHAMMAD AJUL',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150710',
            ),
            465 => 
            array (
                'id' => 1466,
                'psgcCode' => '150711000',
                'citymunDesc' => 'UNGKAYA PUKAN',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150711',
            ),
            466 => 
            array (
                'id' => 1467,
                'psgcCode' => '150712000',
                'citymunDesc' => 'HADJI MUHTAMAD',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150712',
            ),
            467 => 
            array (
                'id' => 1468,
                'psgcCode' => '150713000',
                'citymunDesc' => 'TABUAN-LASA',
                'regDesc' => '15',
                'provCode' => '1507',
                'citymunCode' => '150713',
            ),
            468 => 
            array (
                'id' => 1469,
                'psgcCode' => '153601000',
            'citymunDesc' => 'BACOLOD-KALAWI (BACOLOD GRANDE)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153601',
            ),
            469 => 
            array (
                'id' => 1470,
                'psgcCode' => '153602000',
                'citymunDesc' => 'BALABAGAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153602',
            ),
            470 => 
            array (
                'id' => 1471,
                'psgcCode' => '153603000',
            'citymunDesc' => 'BALINDONG (WATU)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153603',
            ),
            471 => 
            array (
                'id' => 1472,
                'psgcCode' => '153604000',
                'citymunDesc' => 'BAYANG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153604',
            ),
            472 => 
            array (
                'id' => 1473,
                'psgcCode' => '153605000',
                'citymunDesc' => 'BINIDAYAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153605',
            ),
            473 => 
            array (
                'id' => 1474,
                'psgcCode' => '153606000',
                'citymunDesc' => 'BUBONG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153606',
            ),
            474 => 
            array (
                'id' => 1475,
                'psgcCode' => '153607000',
                'citymunDesc' => 'BUTIG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153607',
            ),
            475 => 
            array (
                'id' => 1476,
                'psgcCode' => '153609000',
                'citymunDesc' => 'GANASSI',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153609',
            ),
            476 => 
            array (
                'id' => 1477,
                'psgcCode' => '153610000',
                'citymunDesc' => 'KAPAI',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153610',
            ),
            477 => 
            array (
                'id' => 1478,
                'psgcCode' => '153611000',
            'citymunDesc' => 'LUMBA-BAYABAO (MAGUING)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153611',
            ),
            478 => 
            array (
                'id' => 1479,
                'psgcCode' => '153612000',
                'citymunDesc' => 'LUMBATAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153612',
            ),
            479 => 
            array (
                'id' => 1480,
                'psgcCode' => '153613000',
                'citymunDesc' => 'MADALUM',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153613',
            ),
            480 => 
            array (
                'id' => 1481,
                'psgcCode' => '153614000',
                'citymunDesc' => 'MADAMBA',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153614',
            ),
            481 => 
            array (
                'id' => 1482,
                'psgcCode' => '153615000',
                'citymunDesc' => 'MALABANG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153615',
            ),
            482 => 
            array (
                'id' => 1483,
                'psgcCode' => '153616000',
                'citymunDesc' => 'MARANTAO',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153616',
            ),
            483 => 
            array (
                'id' => 1484,
                'psgcCode' => '153617000',
            'citymunDesc' => 'MARAWI CITY (Capital)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153617',
            ),
            484 => 
            array (
                'id' => 1485,
                'psgcCode' => '153618000',
                'citymunDesc' => 'MASIU',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153618',
            ),
            485 => 
            array (
                'id' => 1486,
                'psgcCode' => '153619000',
                'citymunDesc' => 'MULONDO',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153619',
            ),
            486 => 
            array (
                'id' => 1487,
                'psgcCode' => '153620000',
            'citymunDesc' => 'PAGAYAWAN (TATARIKAN)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153620',
            ),
            487 => 
            array (
                'id' => 1488,
                'psgcCode' => '153621000',
                'citymunDesc' => 'PIAGAPO',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153621',
            ),
            488 => 
            array (
                'id' => 1489,
                'psgcCode' => '153622000',
            'citymunDesc' => 'POONA BAYABAO (GATA)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153622',
            ),
            489 => 
            array (
                'id' => 1490,
                'psgcCode' => '153623000',
                'citymunDesc' => 'PUALAS',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153623',
            ),
            490 => 
            array (
                'id' => 1491,
                'psgcCode' => '153624000',
                'citymunDesc' => 'DITSAAN-RAMAIN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153624',
            ),
            491 => 
            array (
                'id' => 1492,
                'psgcCode' => '153625000',
                'citymunDesc' => 'SAGUIARAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153625',
            ),
            492 => 
            array (
                'id' => 1493,
                'psgcCode' => '153626000',
                'citymunDesc' => 'TAMPARAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153626',
            ),
            493 => 
            array (
                'id' => 1494,
                'psgcCode' => '153627000',
                'citymunDesc' => 'TARAKA',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153627',
            ),
            494 => 
            array (
                'id' => 1495,
                'psgcCode' => '153628000',
                'citymunDesc' => 'TUBARAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153628',
            ),
            495 => 
            array (
                'id' => 1496,
                'psgcCode' => '153629000',
                'citymunDesc' => 'TUGAYA',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153629',
            ),
            496 => 
            array (
                'id' => 1497,
                'psgcCode' => '153630000',
                'citymunDesc' => 'WAO',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153630',
            ),
            497 => 
            array (
                'id' => 1498,
                'psgcCode' => '153631000',
                'citymunDesc' => 'MAROGONG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153631',
            ),
            498 => 
            array (
                'id' => 1499,
                'psgcCode' => '153632000',
                'citymunDesc' => 'CALANOGAS',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153632',
            ),
            499 => 
            array (
                'id' => 1500,
                'psgcCode' => '153633000',
                'citymunDesc' => 'BUADIPOSO-BUNTONG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153633',
            ),
        ));
        \DB::table('city')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'psgcCode' => '153634000',
                'citymunDesc' => 'MAGUING',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153634',
            ),
            1 => 
            array (
                'id' => 1502,
                'psgcCode' => '153635000',
            'citymunDesc' => 'PICONG (SULTAN GUMANDER)',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153635',
            ),
            2 => 
            array (
                'id' => 1503,
                'psgcCode' => '153636000',
                'citymunDesc' => 'LUMBAYANAGUE',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153636',
            ),
            3 => 
            array (
                'id' => 1504,
                'psgcCode' => '153637000',
                'citymunDesc' => 'BUMBARAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153637',
            ),
            4 => 
            array (
                'id' => 1505,
                'psgcCode' => '153638000',
                'citymunDesc' => 'TAGOLOAN II',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153638',
            ),
            5 => 
            array (
                'id' => 1506,
                'psgcCode' => '153639000',
                'citymunDesc' => 'KAPATAGAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153639',
            ),
            6 => 
            array (
                'id' => 1507,
                'psgcCode' => '153640000',
                'citymunDesc' => 'SULTAN DUMALONDONG',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153640',
            ),
            7 => 
            array (
                'id' => 1508,
                'psgcCode' => '153641000',
                'citymunDesc' => 'LUMBACA-UNAYAN',
                'regDesc' => '15',
                'provCode' => '1536',
                'citymunCode' => '153641',
            ),
            8 => 
            array (
                'id' => 1509,
                'psgcCode' => '153801000',
                'citymunDesc' => 'AMPATUAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153801',
            ),
            9 => 
            array (
                'id' => 1510,
                'psgcCode' => '153802000',
                'citymunDesc' => 'BULDON',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153802',
            ),
            10 => 
            array (
                'id' => 1511,
                'psgcCode' => '153803000',
                'citymunDesc' => 'BULUAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153803',
            ),
            11 => 
            array (
                'id' => 1512,
                'psgcCode' => '153805000',
                'citymunDesc' => 'DATU PAGLAS',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153805',
            ),
            12 => 
            array (
                'id' => 1513,
                'psgcCode' => '153806000',
                'citymunDesc' => 'DATU PIANG',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153806',
            ),
            13 => 
            array (
                'id' => 1514,
                'psgcCode' => '153807000',
            'citymunDesc' => 'DATU ODIN SINSUAT (DINAIG)',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153807',
            ),
            14 => 
            array (
                'id' => 1515,
                'psgcCode' => '153808000',
            'citymunDesc' => 'SHARIFF AGUAK (MAGANOY) (Capital)',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153808',
            ),
            15 => 
            array (
                'id' => 1516,
                'psgcCode' => '153809000',
                'citymunDesc' => 'MATANOG',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153809',
            ),
            16 => 
            array (
                'id' => 1517,
                'psgcCode' => '153810000',
                'citymunDesc' => 'PAGALUNGAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153810',
            ),
            17 => 
            array (
                'id' => 1518,
                'psgcCode' => '153811000',
                'citymunDesc' => 'PARANG',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153811',
            ),
            18 => 
            array (
                'id' => 1519,
                'psgcCode' => '153812000',
            'citymunDesc' => 'SULTAN KUDARAT (NULING)',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153812',
            ),
            19 => 
            array (
                'id' => 1520,
                'psgcCode' => '153813000',
            'citymunDesc' => 'SULTAN SA BARONGIS (LAMBAYONG)',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153813',
            ),
            20 => 
            array (
                'id' => 1521,
                'psgcCode' => '153814000',
            'citymunDesc' => 'KABUNTALAN (TUMBAO)',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153814',
            ),
            21 => 
            array (
                'id' => 1522,
                'psgcCode' => '153815000',
                'citymunDesc' => 'UPI',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153815',
            ),
            22 => 
            array (
                'id' => 1523,
                'psgcCode' => '153816000',
                'citymunDesc' => 'TALAYAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153816',
            ),
            23 => 
            array (
                'id' => 1524,
                'psgcCode' => '153817000',
                'citymunDesc' => 'SOUTH UPI',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153817',
            ),
            24 => 
            array (
                'id' => 1525,
                'psgcCode' => '153818000',
                'citymunDesc' => 'BARIRA',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153818',
            ),
            25 => 
            array (
                'id' => 1526,
                'psgcCode' => '153819000',
                'citymunDesc' => 'GEN. S. K. PENDATUN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153819',
            ),
            26 => 
            array (
                'id' => 1527,
                'psgcCode' => '153820000',
                'citymunDesc' => 'MAMASAPANO',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153820',
            ),
            27 => 
            array (
                'id' => 1528,
                'psgcCode' => '153821000',
                'citymunDesc' => 'TALITAY',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153821',
            ),
            28 => 
            array (
                'id' => 1529,
                'psgcCode' => '153822000',
                'citymunDesc' => 'PAGAGAWAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153822',
            ),
            29 => 
            array (
                'id' => 1530,
                'psgcCode' => '153823000',
                'citymunDesc' => 'PAGLAT',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153823',
            ),
            30 => 
            array (
                'id' => 1531,
                'psgcCode' => '153824000',
                'citymunDesc' => 'SULTAN MASTURA',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153824',
            ),
            31 => 
            array (
                'id' => 1532,
                'psgcCode' => '153825000',
                'citymunDesc' => 'GUINDULUNGAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153825',
            ),
            32 => 
            array (
                'id' => 1533,
                'psgcCode' => '153826000',
                'citymunDesc' => 'DATU SAUDI-AMPATUAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153826',
            ),
            33 => 
            array (
                'id' => 1534,
                'psgcCode' => '153827000',
                'citymunDesc' => 'DATU UNSAY',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153827',
            ),
            34 => 
            array (
                'id' => 1535,
                'psgcCode' => '153828000',
                'citymunDesc' => 'DATU ABDULLAH SANGKI',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153828',
            ),
            35 => 
            array (
                'id' => 1536,
                'psgcCode' => '153829000',
                'citymunDesc' => 'RAJAH BUAYAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153829',
            ),
            36 => 
            array (
                'id' => 1537,
                'psgcCode' => '153830000',
                'citymunDesc' => 'DATU BLAH T. SINSUAT',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153830',
            ),
            37 => 
            array (
                'id' => 1538,
                'psgcCode' => '153831000',
                'citymunDesc' => 'DATU ANGGAL MIDTIMBANG',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153831',
            ),
            38 => 
            array (
                'id' => 1539,
                'psgcCode' => '153832000',
                'citymunDesc' => 'MANGUDADATU',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153832',
            ),
            39 => 
            array (
                'id' => 1540,
                'psgcCode' => '153833000',
                'citymunDesc' => 'PANDAG',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153833',
            ),
            40 => 
            array (
                'id' => 1541,
                'psgcCode' => '153834000',
                'citymunDesc' => 'NORTHERN KABUNTALAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153834',
            ),
            41 => 
            array (
                'id' => 1542,
                'psgcCode' => '153835000',
                'citymunDesc' => 'DATU HOFFER AMPATUAN',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153835',
            ),
            42 => 
            array (
                'id' => 1543,
                'psgcCode' => '153836000',
                'citymunDesc' => 'DATU SALIBO',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153836',
            ),
            43 => 
            array (
                'id' => 1544,
                'psgcCode' => '153837000',
                'citymunDesc' => 'SHARIFF SAYDONA MUSTAPHA',
                'regDesc' => '15',
                'provCode' => '1538',
                'citymunCode' => '153837',
            ),
            44 => 
            array (
                'id' => 1545,
                'psgcCode' => '156601000',
                'citymunDesc' => 'INDANAN',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156601',
            ),
            45 => 
            array (
                'id' => 1546,
                'psgcCode' => '156602000',
            'citymunDesc' => 'JOLO (Capital)',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156602',
            ),
            46 => 
            array (
                'id' => 1547,
                'psgcCode' => '156603000',
                'citymunDesc' => 'KALINGALAN CALUANG',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156603',
            ),
            47 => 
            array (
                'id' => 1548,
                'psgcCode' => '156604000',
                'citymunDesc' => 'LUUK',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156604',
            ),
            48 => 
            array (
                'id' => 1549,
                'psgcCode' => '156605000',
                'citymunDesc' => 'MAIMBUNG',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156605',
            ),
            49 => 
            array (
                'id' => 1550,
                'psgcCode' => '156606000',
            'citymunDesc' => 'HADJI PANGLIMA TAHIL (MARUNGGAS)',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156606',
            ),
            50 => 
            array (
                'id' => 1551,
                'psgcCode' => '156607000',
                'citymunDesc' => 'OLD PANAMAO',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156607',
            ),
            51 => 
            array (
                'id' => 1552,
                'psgcCode' => '156608000',
                'citymunDesc' => 'PANGUTARAN',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156608',
            ),
            52 => 
            array (
                'id' => 1553,
                'psgcCode' => '156609000',
                'citymunDesc' => 'PARANG',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156609',
            ),
            53 => 
            array (
                'id' => 1554,
                'psgcCode' => '156610000',
                'citymunDesc' => 'PATA',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156610',
            ),
            54 => 
            array (
                'id' => 1555,
                'psgcCode' => '156611000',
                'citymunDesc' => 'PATIKUL',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156611',
            ),
            55 => 
            array (
                'id' => 1556,
                'psgcCode' => '156612000',
                'citymunDesc' => 'SIASI',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156612',
            ),
            56 => 
            array (
                'id' => 1557,
                'psgcCode' => '156613000',
                'citymunDesc' => 'TALIPAO',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156613',
            ),
            57 => 
            array (
                'id' => 1558,
                'psgcCode' => '156614000',
                'citymunDesc' => 'TAPUL',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156614',
            ),
            58 => 
            array (
                'id' => 1559,
                'psgcCode' => '156615000',
                'citymunDesc' => 'TONGKIL',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156615',
            ),
            59 => 
            array (
                'id' => 1560,
                'psgcCode' => '156616000',
            'citymunDesc' => 'PANGLIMA ESTINO (NEW PANAMAO)',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156616',
            ),
            60 => 
            array (
                'id' => 1561,
                'psgcCode' => '156617000',
                'citymunDesc' => 'LUGUS',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156617',
            ),
            61 => 
            array (
                'id' => 1562,
                'psgcCode' => '156618000',
                'citymunDesc' => 'PANDAMI',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156618',
            ),
            62 => 
            array (
                'id' => 1563,
                'psgcCode' => '156619000',
                'citymunDesc' => 'OMAR',
                'regDesc' => '15',
                'provCode' => '1566',
                'citymunCode' => '156619',
            ),
            63 => 
            array (
                'id' => 1564,
                'psgcCode' => '157001000',
            'citymunDesc' => 'PANGLIMA SUGALA (BALIMBING)',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157001',
            ),
            64 => 
            array (
                'id' => 1565,
                'psgcCode' => '157002000',
            'citymunDesc' => 'BONGAO (Capital)',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157002',
            ),
            65 => 
            array (
                'id' => 1566,
                'psgcCode' => '157003000',
            'citymunDesc' => 'MAPUN (CAGAYAN DE TAWI-TAWI)',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157003',
            ),
            66 => 
            array (
                'id' => 1567,
                'psgcCode' => '157004000',
                'citymunDesc' => 'SIMUNUL',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157004',
            ),
            67 => 
            array (
                'id' => 1568,
                'psgcCode' => '157005000',
                'citymunDesc' => 'SITANGKAI',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157005',
            ),
            68 => 
            array (
                'id' => 1569,
                'psgcCode' => '157006000',
                'citymunDesc' => 'SOUTH UBIAN',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157006',
            ),
            69 => 
            array (
                'id' => 1570,
                'psgcCode' => '157007000',
                'citymunDesc' => 'TANDUBAS',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157007',
            ),
            70 => 
            array (
                'id' => 1571,
                'psgcCode' => '157008000',
                'citymunDesc' => 'TURTLE ISLANDS',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157008',
            ),
            71 => 
            array (
                'id' => 1572,
                'psgcCode' => '157009000',
                'citymunDesc' => 'LANGUYAN',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157009',
            ),
            72 => 
            array (
                'id' => 1573,
                'psgcCode' => '157010000',
                'citymunDesc' => 'SAPA-SAPA',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157010',
            ),
            73 => 
            array (
                'id' => 1574,
                'psgcCode' => '157011000',
                'citymunDesc' => 'SIBUTU',
                'regDesc' => '15',
                'provCode' => '1570',
                'citymunCode' => '157011',
            ),
            74 => 
            array (
                'id' => 1575,
                'psgcCode' => '160201000',
                'citymunDesc' => 'BUENAVISTA',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160201',
            ),
            75 => 
            array (
                'id' => 1576,
                'psgcCode' => '160202000',
            'citymunDesc' => 'BUTUAN CITY (Capital)',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160202',
            ),
            76 => 
            array (
                'id' => 1577,
                'psgcCode' => '160203000',
                'citymunDesc' => 'CITY OF CABADBARAN',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160203',
            ),
            77 => 
            array (
                'id' => 1578,
                'psgcCode' => '160204000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160204',
            ),
            78 => 
            array (
                'id' => 1579,
                'psgcCode' => '160205000',
                'citymunDesc' => 'JABONGA',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160205',
            ),
            79 => 
            array (
                'id' => 1580,
                'psgcCode' => '160206000',
                'citymunDesc' => 'KITCHARAO',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160206',
            ),
            80 => 
            array (
                'id' => 1581,
                'psgcCode' => '160207000',
                'citymunDesc' => 'LAS NIEVES',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160207',
            ),
            81 => 
            array (
                'id' => 1582,
                'psgcCode' => '160208000',
                'citymunDesc' => 'MAGALLANES',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160208',
            ),
            82 => 
            array (
                'id' => 1583,
                'psgcCode' => '160209000',
                'citymunDesc' => 'NASIPIT',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160209',
            ),
            83 => 
            array (
                'id' => 1584,
                'psgcCode' => '160210000',
                'citymunDesc' => 'SANTIAGO',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160210',
            ),
            84 => 
            array (
                'id' => 1585,
                'psgcCode' => '160211000',
                'citymunDesc' => 'TUBAY',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160211',
            ),
            85 => 
            array (
                'id' => 1586,
                'psgcCode' => '160212000',
                'citymunDesc' => 'REMEDIOS T. ROMUALDEZ',
                'regDesc' => '16',
                'provCode' => '1602',
                'citymunCode' => '160212',
            ),
            86 => 
            array (
                'id' => 1587,
                'psgcCode' => '160301000',
                'citymunDesc' => 'CITY OF BAYUGAN',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160301',
            ),
            87 => 
            array (
                'id' => 1588,
                'psgcCode' => '160302000',
                'citymunDesc' => 'BUNAWAN',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160302',
            ),
            88 => 
            array (
                'id' => 1589,
                'psgcCode' => '160303000',
                'citymunDesc' => 'ESPERANZA',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160303',
            ),
            89 => 
            array (
                'id' => 1590,
                'psgcCode' => '160304000',
                'citymunDesc' => 'LA PAZ',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160304',
            ),
            90 => 
            array (
                'id' => 1591,
                'psgcCode' => '160305000',
                'citymunDesc' => 'LORETO',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160305',
            ),
            91 => 
            array (
                'id' => 1592,
                'psgcCode' => '160306000',
            'citymunDesc' => 'PROSPERIDAD (Capital)',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160306',
            ),
            92 => 
            array (
                'id' => 1593,
                'psgcCode' => '160307000',
                'citymunDesc' => 'ROSARIO',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160307',
            ),
            93 => 
            array (
                'id' => 1594,
                'psgcCode' => '160308000',
                'citymunDesc' => 'SAN FRANCISCO',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160308',
            ),
            94 => 
            array (
                'id' => 1595,
                'psgcCode' => '160309000',
                'citymunDesc' => 'SAN LUIS',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160309',
            ),
            95 => 
            array (
                'id' => 1596,
                'psgcCode' => '160310000',
                'citymunDesc' => 'SANTA JOSEFA',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160310',
            ),
            96 => 
            array (
                'id' => 1597,
                'psgcCode' => '160311000',
                'citymunDesc' => 'TALACOGON',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160311',
            ),
            97 => 
            array (
                'id' => 1598,
                'psgcCode' => '160312000',
                'citymunDesc' => 'TRENTO',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160312',
            ),
            98 => 
            array (
                'id' => 1599,
                'psgcCode' => '160313000',
                'citymunDesc' => 'VERUELA',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160313',
            ),
            99 => 
            array (
                'id' => 1600,
                'psgcCode' => '160314000',
                'citymunDesc' => 'SIBAGAT',
                'regDesc' => '16',
                'provCode' => '1603',
                'citymunCode' => '160314',
            ),
            100 => 
            array (
                'id' => 1601,
                'psgcCode' => '166701000',
                'citymunDesc' => 'ALEGRIA',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166701',
            ),
            101 => 
            array (
                'id' => 1602,
                'psgcCode' => '166702000',
                'citymunDesc' => 'BACUAG',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166702',
            ),
            102 => 
            array (
                'id' => 1603,
                'psgcCode' => '166704000',
                'citymunDesc' => 'BURGOS',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166704',
            ),
            103 => 
            array (
                'id' => 1604,
                'psgcCode' => '166706000',
                'citymunDesc' => 'CLAVER',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166706',
            ),
            104 => 
            array (
                'id' => 1605,
                'psgcCode' => '166707000',
                'citymunDesc' => 'DAPA',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166707',
            ),
            105 => 
            array (
                'id' => 1606,
                'psgcCode' => '166708000',
                'citymunDesc' => 'DEL CARMEN',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166708',
            ),
            106 => 
            array (
                'id' => 1607,
                'psgcCode' => '166710000',
                'citymunDesc' => 'GENERAL LUNA',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166710',
            ),
            107 => 
            array (
                'id' => 1608,
                'psgcCode' => '166711000',
                'citymunDesc' => 'GIGAQUIT',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166711',
            ),
            108 => 
            array (
                'id' => 1609,
                'psgcCode' => '166714000',
                'citymunDesc' => 'MAINIT',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166714',
            ),
            109 => 
            array (
                'id' => 1610,
                'psgcCode' => '166715000',
                'citymunDesc' => 'MALIMONO',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166715',
            ),
            110 => 
            array (
                'id' => 1611,
                'psgcCode' => '166716000',
                'citymunDesc' => 'PILAR',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166716',
            ),
            111 => 
            array (
                'id' => 1612,
                'psgcCode' => '166717000',
                'citymunDesc' => 'PLACER',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166717',
            ),
            112 => 
            array (
                'id' => 1613,
                'psgcCode' => '166718000',
                'citymunDesc' => 'SAN BENITO',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166718',
            ),
            113 => 
            array (
                'id' => 1614,
                'psgcCode' => '166719000',
            'citymunDesc' => 'SAN FRANCISCO (ANAO-AON)',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166719',
            ),
            114 => 
            array (
                'id' => 1615,
                'psgcCode' => '166720000',
                'citymunDesc' => 'SAN ISIDRO',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166720',
            ),
            115 => 
            array (
                'id' => 1616,
                'psgcCode' => '166721000',
            'citymunDesc' => 'SANTA MONICA (SAPAO)',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166721',
            ),
            116 => 
            array (
                'id' => 1617,
                'psgcCode' => '166722000',
                'citymunDesc' => 'SISON',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166722',
            ),
            117 => 
            array (
                'id' => 1618,
                'psgcCode' => '166723000',
                'citymunDesc' => 'SOCORRO',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166723',
            ),
            118 => 
            array (
                'id' => 1619,
                'psgcCode' => '166724000',
            'citymunDesc' => 'SURIGAO CITY (Capital)',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166724',
            ),
            119 => 
            array (
                'id' => 1620,
                'psgcCode' => '166725000',
                'citymunDesc' => 'TAGANA-AN',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166725',
            ),
            120 => 
            array (
                'id' => 1621,
                'psgcCode' => '166727000',
                'citymunDesc' => 'TUBOD',
                'regDesc' => '16',
                'provCode' => '1667',
                'citymunCode' => '166727',
            ),
            121 => 
            array (
                'id' => 1622,
                'psgcCode' => '166801000',
                'citymunDesc' => 'BAROBO',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166801',
            ),
            122 => 
            array (
                'id' => 1623,
                'psgcCode' => '166802000',
                'citymunDesc' => 'BAYABAS',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166802',
            ),
            123 => 
            array (
                'id' => 1624,
                'psgcCode' => '166803000',
                'citymunDesc' => 'CITY OF BISLIG',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166803',
            ),
            124 => 
            array (
                'id' => 1625,
                'psgcCode' => '166804000',
                'citymunDesc' => 'CAGWAIT',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166804',
            ),
            125 => 
            array (
                'id' => 1626,
                'psgcCode' => '166805000',
                'citymunDesc' => 'CANTILAN',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166805',
            ),
            126 => 
            array (
                'id' => 1627,
                'psgcCode' => '166806000',
                'citymunDesc' => 'CARMEN',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166806',
            ),
            127 => 
            array (
                'id' => 1628,
                'psgcCode' => '166807000',
                'citymunDesc' => 'CARRASCAL',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166807',
            ),
            128 => 
            array (
                'id' => 1629,
                'psgcCode' => '166808000',
                'citymunDesc' => 'CORTES',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166808',
            ),
            129 => 
            array (
                'id' => 1630,
                'psgcCode' => '166809000',
                'citymunDesc' => 'HINATUAN',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166809',
            ),
            130 => 
            array (
                'id' => 1631,
                'psgcCode' => '166810000',
                'citymunDesc' => 'LANUZA',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166810',
            ),
            131 => 
            array (
                'id' => 1632,
                'psgcCode' => '166811000',
                'citymunDesc' => 'LIANGA',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166811',
            ),
            132 => 
            array (
                'id' => 1633,
                'psgcCode' => '166812000',
                'citymunDesc' => 'LINGIG',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166812',
            ),
            133 => 
            array (
                'id' => 1634,
                'psgcCode' => '166813000',
                'citymunDesc' => 'MADRID',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166813',
            ),
            134 => 
            array (
                'id' => 1635,
                'psgcCode' => '166814000',
                'citymunDesc' => 'MARIHATAG',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166814',
            ),
            135 => 
            array (
                'id' => 1636,
                'psgcCode' => '166815000',
                'citymunDesc' => 'SAN AGUSTIN',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166815',
            ),
            136 => 
            array (
                'id' => 1637,
                'psgcCode' => '166816000',
                'citymunDesc' => 'SAN MIGUEL',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166816',
            ),
            137 => 
            array (
                'id' => 1638,
                'psgcCode' => '166817000',
                'citymunDesc' => 'TAGBINA',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166817',
            ),
            138 => 
            array (
                'id' => 1639,
                'psgcCode' => '166818000',
                'citymunDesc' => 'TAGO',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166818',
            ),
            139 => 
            array (
                'id' => 1640,
                'psgcCode' => '166819000',
            'citymunDesc' => 'CITY OF TANDAG (Capital)',
                'regDesc' => '16',
                'provCode' => '1668',
                'citymunCode' => '166819',
            ),
            140 => 
            array (
                'id' => 1641,
                'psgcCode' => '168501000',
            'citymunDesc' => 'BASILISA (RIZAL)',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168501',
            ),
            141 => 
            array (
                'id' => 1642,
                'psgcCode' => '168502000',
                'citymunDesc' => 'CAGDIANAO',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168502',
            ),
            142 => 
            array (
                'id' => 1643,
                'psgcCode' => '168503000',
                'citymunDesc' => 'DINAGAT',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168503',
            ),
            143 => 
            array (
                'id' => 1644,
                'psgcCode' => '168504000',
            'citymunDesc' => 'LIBJO (ALBOR)',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168504',
            ),
            144 => 
            array (
                'id' => 1645,
                'psgcCode' => '168505000',
                'citymunDesc' => 'LORETO',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168505',
            ),
            145 => 
            array (
                'id' => 1646,
                'psgcCode' => '168506000',
            'citymunDesc' => 'SAN JOSE (Capital)',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168506',
            ),
            146 => 
            array (
                'id' => 1647,
                'psgcCode' => '168507000',
                'citymunDesc' => 'TUBAJON',
                'regDesc' => '16',
                'provCode' => '1685',
                'citymunCode' => '168507',
            ),
        ));
        
        
    }
}