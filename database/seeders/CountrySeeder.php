<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            'name' => 'Afghanistan',
			'short_name' => 'Afg',
            'capital' => "Kabul"
        ]);
        DB::table('countries')->insert([
            'name' => 'Albania',
			'short_name' => 'Alb',
            'capital' => "Tirana"
        ]);
        DB::table('countries')->insert([
            'name' => 'Algeria',
			'short_name' => 'Alg',
            'capital' => "Algiers"
        ]);
        DB::table('countries')->insert([
            'name' => 'Andorra	Andorra la',
			'short_name' => 'And',
            'capital' => "Vella"
        ]);
        DB::table('countries')->insert([
            'name' => 'Angola',
			'short_name' => 'Ang',
            'capital' => "Luanda"
        ]);
        DB::table('countries')->insert([
            'name' => 'Antigua and Barbuda',
			'short_name' => 'Ant',
            'capital' => "St. John's"
        ]);
        DB::table('countries')->insert([
            'name' => 'Argentina',
			'short_name' => 'Arg',
            'capital' => "Buenos Aires"
        ]);
        DB::table('countries')->insert([
            'name' => 'Armenia',
			'short_name' => 'Arm',
            'capital' => "Yerevan"
        ]);
        DB::table('countries')->insert([
            'name' => 'Australia',
			'short_name' => 'Aus',
            'capital' => "Canberra"
        ]);
        DB::table('countries')->insert([
            'name' => 'Austria',
			'short_name' => 'Aust',
            'capital' => "Vienna"
        ]);
        DB::table('countries')->insert([
            'name' => 'Azerbaijan',
			'short_name' => 'Aze',
            'capital' => "Baku"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bahamas',
			'short_name' => 'Bah',
            'capital' => "Nassau"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bahrain',
			'short_name' => 'Bahr',
            'capital' => "Manama"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bangladesh',
			'short_name' => 'Ban',
            'capital' => "Dhaka"
        ]);
        DB::table('countries')->insert([
            'name' => 'Barbados',
			'short_name' => 'Bar',
            'capital' => "Bridgetown"
        ]);
        DB::table('countries')->insert([
            'name' => 'Belarus',
			'short_name' => 'Bel',
            'capital' => "Minsk"
        ]);
        DB::table('countries')->insert([
            'name' => 'Belgium',
			'short_name' => 'Belg',
            'capital' => "Brussels"
        ]);
        DB::table('countries')->insert([
            'name' => 'Belize',
			'short_name' => 'Belz',
            'capital' => "Belmopan"
        ]);
        DB::table('countries')->insert([
            'name' => 'Benin',
			'short_name' => 'Ben',
            'capital' => "Porto Novo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bhutan',
			'short_name' => 'Bhu',
            'capital' => "Thimphu"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bolivia',
			'short_name' => 'Bol',
            'capital' => "Sucre"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bosnia and Herzegovina',
			'short_name' => 'Bos',
            'capital' => "Sarajevo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Botswana',
			'short_name' => 'Bot',
            'capital' => "Gaborone"
        ]);
        DB::table('countries')->insert([
            'name' => 'Brazil',
			'short_name' => 'Bra',
            'capital' => "Brasilia"
        ]);
        DB::table('countries')->insert([
            'name' => 'Brunei',
			'short_name' => 'Bru',
            'capital' => "Bandar Seri Begawan"
        ]);
        DB::table('countries')->insert([
            'name' => 'Bulgaria',
			'short_name' => 'Bul',
            'capital' => "Sofia"
        ]);
        DB::table('countries')->insert([
            'name' => 'Burkina Faso',
			'short_name' => 'Burk',
            'capital' => "Ouagadougou"
        ]);
        DB::table('countries')->insert([
            'name' => 'Burundi',
			'short_name' => 'Bur',
            'capital' => "Bujumbura"
        ]);
        DB::table('countries')->insert([
            'name' => 'Cambodia',
			'short_name' => 'Cmd',
            'capital' => "Phnom Penh"
        ]);
        DB::table('countries')->insert([
            'name' => 'Cameroon',
			'short_name' => 'Cam',
            'capital' => "Yaoundé"
        ]);
        DB::table('countries')->insert([
            'name' => 'Canada',
			'short_name' => 'Can',
            'capital' => "Ottawa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Cape Verde',
			'short_name' => 'Cap',
            'capital' => "Praia"
        ]);
        DB::table('countries')->insert([
            'name' => 'Central African Republic',
			'short_name' => 'Cen',
            'capital' => "Bangui"
        ]);
        DB::table('countries')->insert([
            'name' => 'Chad',
			'short_name' => 'Cha',
            'capital' => "N'Djamena"
        ]);
        DB::table('countries')->insert([
            'name' => 'Chile',
			'short_name' => 'Chi',
            'capital' => "Santiago"
        ]);
        DB::table('countries')->insert([
            'name' => 'China',
			'short_name' => 'Chn',
            'capital' => "Beijing"
        ]);
        DB::table('countries')->insert([
            'name' => 'Colombia',
			'short_name' => 'Col',
            'capital' => "Bogota"
        ]);
        DB::table('countries')->insert([
            'name' => 'Comoros',
			'short_name' => 'Com',
            'capital' => "Moroni"
        ]);
        DB::table('countries')->insert([
            'name' => 'Costa Rica',
			'short_name' => 'Cos',
            'capital' => "San José"
        ]);
        DB::table('countries')->insert([
            'name' => 'Croatia',
			'short_name' => 'Cro',
            'capital' => "Zagreb"
        ]);
        DB::table('countries')->insert([
            'name' => 'Cuba',
			'short_name' => 'Cub',
            'capital' => "Havana"
        ]);
        DB::table('countries')->insert([
            'name' => 'Cyprus',
			'short_name' => 'Cyp',
            'capital' => "Nicosia"
        ]);
        DB::table('countries')->insert([
            'name' => 'Czech Republic',
			'short_name' => 'Cze',
            'capital' => "Prague"
        ]);
        DB::table('countries')->insert([
            'name' => 'Democratic Republic of Congo',
			'short_name' => 'drc',
            'capital' => "Kinshasa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Denmark',
			'short_name' => 'Den',
            'capital' => "Copenagen"
        ]);
        DB::table('countries')->insert([
            'name' => 'Djibouti',
			'short_name' => 'Dji',
            'capital' => "Djibouti"
        ]);
        DB::table('countries')->insert([
            'name' => 'Dominica',
			'short_name' => 'Dom',
            'capital' => "Roseau"
        ]);
        DB::table('countries')->insert([
            'name' => 'Dominican Republic',
			'short_name' => 'Dmr',
            'capital' => "Santo Domingo"
        ]);
        DB::table('countries')->insert([
            'name' => 'East Timor',
			'short_name' => 'Eas',
            'capital' => "Dili"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ecuador',
			'short_name' => 'Ecu',
            'capital' => "Quito"
        ]);
        DB::table('countries')->insert([
            'name' => 'Egypt',
			'short_name' => 'Egy',
            'capital' => "Cairo"
        ]);
        DB::table('countries')->insert([
            'name' => 'El Salvador	San',
			'short_name' => 'Els',
            'capital' => "Salvador"
        ]);
        DB::table('countries')->insert([
            'name' => 'Equatorial Guinea',
			'short_name' => 'Equ',
            'capital' => "Malabo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Eritrea',
			'short_name' => 'Eri',
            'capital' => "Asmara"
        ]);
        DB::table('countries')->insert([
            'name' => 'Estonia',
			'short_name' => 'Est',
            'capital' => "Tallinn"
        ]);
        DB::table('countries')->insert([
            'name' => 'Eswatini',
			'short_name' => 'Esw',
            'capital' => "Mbabane"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ethiopia',
			'short_name' => 'Eth',
            'capital' => "Addis Ababa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Fiji',
			'short_name' => 'Fij',
            'capital' => "Suva"
        ]);
        DB::table('countries')->insert([
            'name' => 'Finland',
			'short_name' => 'Fin',
            'capital' => "Helsinki"
        ]);
        DB::table('countries')->insert([
            'name' => 'France',
			'short_name' => 'Fra',
            'capital' => "Paris"
        ]);
        DB::table('countries')->insert([
            'name' => 'Gabon',
			'short_name' => 'Gab',
            'capital' => "Libreville"
        ]);
        DB::table('countries')->insert([
            'name' => 'Gambia',
			'short_name' => 'Gam',
            'capital' => "Banjul"
        ]);
        DB::table('countries')->insert([
            'name' => 'Georgia',
			'short_name' => 'Geo',
            'capital' => "Tbilisi"
        ]);
        DB::table('countries')->insert([
            'name' => 'Germany',
			'short_name' => 'Ger',
            'capital' => "Berlin"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ghana',
			'short_name' => 'Gha',
            'capital' => "Accra"
        ]);
        DB::table('countries')->insert([
            'name' => 'Greece',
			'short_name' => 'Gre',
            'capital' => "Athens"
        ]);
        DB::table('countries')->insert([
            'name' => 'Grenada',
			'short_name' => 'Gre',
            'capital' => "St. George's"
        ]);
        DB::table('countries')->insert([
            'name' => 'Guatemala',
			'short_name' => 'Gua',
            'capital' => "Guatemala City"
        ]);
        DB::table('countries')->insert([
            'name' => 'Guinea',
			'short_name' => 'Gui',
            'capital' => "Conakry"
        ]);
        DB::table('countries')->insert([
            'name' => 'Guinea-Bissau',
			'short_name' => 'Guib',
            'capital' => "Bissau"
        ]);
        DB::table('countries')->insert([
            'name' => 'Guyana',
			'short_name' => 'Guy',
            'capital' => "Georgetown"
        ]);
        DB::table('countries')->insert([
            'name' => 'Haiti',
			'short_name' => 'Hai',
            'capital' => "Port-au-Prince"
        ]);
        DB::table('countries')->insert([
            'name' => 'Honduras',
			'short_name' => 'Hon',
            'capital' => "Tegucigalpa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Hungary',
			'short_name' => 'Hun',
            'capital' => "Budapest"
        ]);
        DB::table('countries')->insert([
            'name' => 'Iceland',
			'short_name' => 'Ice',
            'capital' => "Reykjavík"
        ]);
        DB::table('countries')->insert([
            'name' => 'India',
			'short_name' => 'Ind',
            'capital' => "New Delhi"
        ]);
        DB::table('countries')->insert([
            'name' => 'Indonesia',
			'short_name' => 'Idn',
            'capital' => "Jakarta"
        ]);
        DB::table('countries')->insert([
            'name' => 'Iran',
			'short_name' => 'Irn',
            'capital' => "Tehran"
        ]);
        DB::table('countries')->insert([
            'name' => 'Iraq',
			'short_name' => 'Irq',
            'capital' => "Baghdad"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ireland',
			'short_name' => 'Ire',
            'capital' => "Dublin"
        ]);
        DB::table('countries')->insert([
            'name' => 'Israel',
			'short_name' => 'Isr',
            'capital' => "Jerusalem"
        ]);
        DB::table('countries')->insert([
            'name' => 'Italy',
			'short_name' => 'Ita',
            'capital' => "Rome"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ivory Coast',
			'short_name' => 'Ivo',
            'capital' => "Yamoussoukro"
        ]);
        DB::table('countries')->insert([
            'name' => 'Jamaica',
			'short_name' => 'Jam',
            'capital' => "Kingston"
        ]);
        DB::table('countries')->insert([
            'name' => 'Japan',
			'short_name' => 'Jap',
            'capital' => "Tokyo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Jordan',
			'short_name' => 'Jor',
            'capital' => "Amman"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kazakhstan',
			'short_name' => 'Kaz',
            'capital' => "Astana"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kenya',
			'short_name' => 'Ken',
            'capital' => "Nairobi"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kiribati',
			'short_name' => 'Kir',
            'capital' => "Tarawa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Korea, North',
			'short_name' => 'nk',
            'capital' => "Pyongyang"
        ]);
        DB::table('countries')->insert([
            'name' => 'Korea, South',
			'short_name' => 'sk',
            'capital' => "Seoul"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kosovo',
			'short_name' => 'Kos',
            'capital' => "Pristina"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kuwait',
			'short_name' => 'Kuw',
            'capital' => "Kuwait City"
        ]);
        DB::table('countries')->insert([
            'name' => 'Kyrgyzstan',
			'short_name' => 'Kyr',
            'capital' => "Bishkek"
        ]);
        DB::table('countries')->insert([
            'name' => 'Laos',
			'short_name' => 'Lao',
            'capital' => "Vientiane"
        ]);
        DB::table('countries')->insert([
            'name' => 'Latvia',
			'short_name' => 'Lat',
            'capital' => "Riga"
        ]);
        DB::table('countries')->insert([
            'name' => 'Lebanon',
			'short_name' => 'Leb',
            'capital' => "Beirut"
        ]);
        DB::table('countries')->insert([
            'name' => 'Lesotho',
			'short_name' => 'Les',
            'capital' => "Maseru"
        ]);
        DB::table('countries')->insert([
            'name' => 'Liberia',
			'short_name' => 'Lib',
            'capital' => "Monrovia"
        ]);
        DB::table('countries')->insert([
            'name' => 'Libya',
			'short_name' => 'Lby',
            'capital' => "Tripoli"
        ]);
        DB::table('countries')->insert([
            'name' => 'Liechtenstein',
			'short_name' => 'Lie',
            'capital' => "Vaduz"
        ]);
        DB::table('countries')->insert([
            'name' => 'Lithuania',
			'short_name' => 'Lit',
            'capital' => "Vilnius"
        ]);
        DB::table('countries')->insert([
            'name' => 'Luxembourg',
			'short_name' => 'Lux',
            'capital' => "Luxembourg"
        ]);
        DB::table('countries')->insert([
            'name' => 'Madagascar',
			'short_name' => 'Mad',
            'capital' => "Antananarivo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Malawi',
			'short_name' => 'Mal',
            'capital' => "Lilongwe"
        ]);
        DB::table('countries')->insert([
            'name' => 'Malaysia',
			'short_name' => 'Mly',
            'capital' => "Kuala Lumpur"
        ]);
        DB::table('countries')->insert([
            'name' => 'Maldives',
			'short_name' => 'Mld',
            'capital' => "Malé"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mali',
			'short_name' => 'Mal',
            'capital' => "Bamako"
        ]);
        DB::table('countries')->insert([
            'name' => 'Malta',
			'short_name' => 'Mlt',
            'capital' => "Valletta"
        ]);
        DB::table('countries')->insert([
            'name' => 'Marshall Islands',
			'short_name' => 'Mar',
            'capital' => "Majuro"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mauritania',
			'short_name' => 'Mau',
            'capital' => "Nouakchott"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mauritius',
			'short_name' => 'Mrt',
            'capital' => "Port Louis"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mexico',
			'short_name' => 'Mex',
            'capital' => "Mexico City"
        ]);
        DB::table('countries')->insert([
            'name' => 'Micronesia',
			'short_name' => 'Mic',
            'capital' => "Palikir"
        ]);
        DB::table('countries')->insert([
            'name' => 'Moldova',
			'short_name' => 'Mol',
            'capital' => "Chisinau"
        ]);
        DB::table('countries')->insert([
            'name' => 'Monaco',
			'short_name' => 'Mon',
            'capital' => "Monaco"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mongolia',
			'short_name' => 'Mng',
            'capital' => "Ulaanbaatar"
        ]);
        DB::table('countries')->insert([
            'name' => 'Montenegro',
			'short_name' => 'Mtg',
            'capital' => "Podgorica"
        ]);
        DB::table('countries')->insert([
            'name' => 'Morocco',
			'short_name' => 'Mor',
            'capital' => "Rabat"
        ]);
        DB::table('countries')->insert([
            'name' => 'Mozambique',
			'short_name' => 'Moz',
            'capital' => "Maputo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Myanmar',
			'short_name' => 'Mya',
            'capital' => "Naypyidaw"
        ]);
        DB::table('countries')->insert([
            'name' => 'Namibia',
			'short_name' => 'Nam',
            'capital' => "Windhoek"
        ]);
        DB::table('countries')->insert([
            'name' => 'Nauru',
			'short_name' => 'Nau',
            'capital' => "Yaren"
        ]);
        DB::table('countries')->insert([
            'name' => 'Nepal',
			'short_name' => 'Nep',
            'capital' => "Kathmandu"
        ]);
        DB::table('countries')->insert([
            'name' => 'Netherlands',
			'short_name' => 'Net',
            'capital' => "Amsterdam"
        ]);
        DB::table('countries')->insert([
            'name' => 'New Zealand',
			'short_name' => 'nzd',
            'capital' => "Wellington"
        ]);
        DB::table('countries')->insert([
            'name' => 'Nicaragua',
			'short_name' => 'Nic',
            'capital' => "Managua"
        ]);
        DB::table('countries')->insert([
            'name' => 'Niger',
			'short_name' => 'Nig',
            'capital' => "Niamey"
        ]);
        DB::table('countries')->insert([
            'name' => 'Nigeria',
			'short_name' => 'ng',
            'capital' => "Abuja"
        ]);
        DB::table('countries')->insert([
            'name' => 'North Macedonia',
			'short_name' => 'nmc',
            'capital' => "Skopje"
        ]);
        DB::table('countries')->insert([
            'name' => 'Norway',
			'short_name' => 'Nor',
            'capital' => "Oslo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Oman',
			'short_name' => 'Oma',
            'capital' => "Muscat"
        ]);
        DB::table('countries')->insert([
            'name' => 'Pakistan',
			'short_name' => 'Pak',
            'capital' => "Islamabad"
        ]);
        DB::table('countries')->insert([
            'name' => 'Palau',
			'short_name' => 'Pal',
            'capital' => "Melekeok"
        ]);
        DB::table('countries')->insert([
            'name' => 'Palestine',
			'short_name' => 'Plt',
            'capital' => "East Jerusalem"
        ]);
        DB::table('countries')->insert([
            'name' => 'Panama',
			'short_name' => 'Pan',
            'capital' => "Panama City"
        ]);
        DB::table('countries')->insert([
            'name' => 'Papua New Guinea',
			'short_name' => 'Pap',
            'capital' => "Port Moresby"
        ]);
        DB::table('countries')->insert([
            'name' => 'Paraguay',
			'short_name' => 'Par',
            'capital' => "Asunción"
        ]);
        DB::table('countries')->insert([
            'name' => 'Peru',
			'short_name' => 'Per',
            'capital' => "Lima"
        ]);
        DB::table('countries')->insert([
            'name' => 'Philippines',
			'short_name' => 'Phi',
            'capital' => "Manila"
        ]);
        DB::table('countries')->insert([
            'name' => 'Poland',
			'short_name' => 'Pol',
            'capital' => "Warsaw"
        ]);
        DB::table('countries')->insert([
            'name' => 'Portugal',
			'short_name' => 'Por',
            'capital' => "Lisbon"
        ]);
        DB::table('countries')->insert([
            'name' => 'Qatar',
			'short_name' => 'Qat',
            'capital' => "Doha"
        ]);
        DB::table('countries')->insert([
            'name' => 'Republic of the Congo',
			'short_name' => 'Rep',
            'capital' => "Brazzaville"
        ]);
        DB::table('countries')->insert([
            'name' => 'Romania',
			'short_name' => 'Rom',
            'capital' => "Bucharest"
        ]);
        DB::table('countries')->insert([
            'name' => 'Russia',
			'short_name' => 'Rus',
            'capital' => "Moscow"
        ]);
        DB::table('countries')->insert([
            'name' => 'Rwanda',
			'short_name' => 'Rwa',
            'capital' => "Kigali"
        ]);
        DB::table('countries')->insert([
            'name' => 'Saint Kitts and Nevis',
			'short_name' => 'Skn',
            'capital' => "Basseterre"
        ]);
        DB::table('countries')->insert([
            'name' => 'Saint Lucia',
			'short_name' => 'Sai',
            'capital' => "Castries"
        ]);
        DB::table('countries')->insert([
            'name' => 'Saint Vincent and the Grenadines',
			'short_name' => 'Svg',
            'capital' => "Kingstown"
        ]);
        DB::table('countries')->insert([
            'name' => 'Samoa',
			'short_name' => 'Sam',
            'capital' => "Apia"
        ]);
        DB::table('countries')->insert([
            'name' => 'San Marino San',
			'short_name' => 'San',
            'capital' => "Marino"
        ]);
        DB::table('countries')->insert([
            'name' => 'São Tomé and Príncipe',
			'short_name' => 'Stp',
            'capital' => "São Tomé"
        ]);
        DB::table('countries')->insert([
            'name' => 'Saudi Arabia',
			'short_name' => 'Sau',
            'capital' => "Riyadh"
        ]);
        DB::table('countries')->insert([
            'name' => 'Senegal',
			'short_name' => 'Sen',
            'capital' => "Dakar"
        ]);
        DB::table('countries')->insert([
            'name' => 'Serbia',
			'short_name' => 'Ser',
            'capital' => "Belgrade"
        ]);
        DB::table('countries')->insert([
            'name' => 'Seychelles',
			'short_name' => 'Sey',
            'capital' => "Victoria"
        ]);
        DB::table('countries')->insert([
            'name' => 'Sierra Leone',
			'short_name' => 'Sie',
            'capital' => "Freetown"
        ]);
        DB::table('countries')->insert([
            'name' => 'Singapore',
			'short_name' => 'Sin',
            'capital' => "Singapore"
        ]);
        DB::table('countries')->insert([
            'name' => 'Slovakia',
			'short_name' => 'Slk',
            'capital' => "Bratislava"
        ]);
        DB::table('countries')->insert([
            'name' => 'Slovenia',
			'short_name' => 'Sln',
            'capital' => "Ljubljana"
        ]);
        DB::table('countries')->insert([
            'name' => 'Solomon Islands',
			'short_name' => 'Sol',
            'capital' => "Honiara"
        ]);
        DB::table('countries')->insert([
            'name' => 'Somalia',
			'short_name' => 'Som',
            'capital' => "Mogadishu"
        ]);
        DB::table('countries')->insert([
            'name' => 'South Africa',
			'short_name' => 'Sa',
            'capital' => "Pretoria"
        ]);
        DB::table('countries')->insert([
            'name' => 'South Sudan',
			'short_name' => 'Ss',
            'capital' => "Juba"
        ]);
        DB::table('countries')->insert([
            'name' => 'Spain',
			'short_name' => 'Spa',
            'capital' => "Madrid"
        ]);
        DB::table('countries')->insert([
            'name' => 'Sri Lanka',
			'short_name' => 'Sri',
            'capital' => "Sri Jayawardenapura Kotte"
        ]);
        DB::table('countries')->insert([
            'name' => 'Sudan',
			'short_name' => 'Sud',
            'capital' => "Khartoum"
        ]);
        DB::table('countries')->insert([
            'name' => 'Suriname',
			'short_name' => 'Sur',
            'capital' => "Paramaribo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Sweden',
			'short_name' => 'Swe',
            'capital' => "Stockholm"
        ]);
        DB::table('countries')->insert([
            'name' => 'Switzerland',
			'short_name' => 'Swi',
            'capital' => "Bern"
        ]);
        DB::table('countries')->insert([
            'name' => 'Syria',
			'short_name' => 'Syr',
            'capital' => "Damascus"
        ]);
        DB::table('countries')->insert([
            'name' => 'Taiwan',
			'short_name' => 'Tai',
            'capital' => "Taipei"
        ]);
        DB::table('countries')->insert([
            'name' => 'Tajikistan',
			'short_name' => 'Taj',
            'capital' => "Dushanbe"
        ]);
        DB::table('countries')->insert([
            'name' => 'Tanzania',
			'short_name' => 'Tan',
            'capital' => "Dodoma"
        ]);
        DB::table('countries')->insert([
            'name' => 'Thailand',
			'short_name' => 'Tha',
            'capital' => "Bangkok"
        ]);
        DB::table('countries')->insert([
            'name' => 'Togo',
			'short_name' => 'Tog',
            'capital' => "Lomé"
        ]);
        DB::table('countries')->insert([
            'name' => 'Tonga',
			'short_name' => 'Ton',
            'capital' => "Nukualofa"
        ]);
        DB::table('countries')->insert([
            'name' => 'Trinidad and Tobago',
			'short_name' => 'Tri',
            'capital' => "Port of Spain"
        ]);
        DB::table('countries')->insert([
            'name' => 'Tunisia',
			'short_name' => 'Tun',
            'capital' => "Tunis"
        ]);
        DB::table('countries')->insert([
            'name' => 'Turkey',
			'short_name' => 'Trk',
            'capital' => "Ankara"
        ]);
        DB::table('countries')->insert([
            'name' => 'Turkmenistan',
			'short_name' => 'Tur',
            'capital' => "Ashgabat"
        ]);
        DB::table('countries')->insert([
            'name' => 'Tuvalu',
			'short_name' => 'Tuv',
            'capital' => "Funafuti"
        ]);
        DB::table('countries')->insert([
            'name' => 'Uganda',
			'short_name' => 'Uga',
            'capital' => "Kampala"
        ]);
        DB::table('countries')->insert([
            'name' => 'Ukraine',
			'short_name' => 'Ukr',
            'capital' => "Kiev"
        ]);
        DB::table('countries')->insert([
            'name' => 'United Arab Emirates',
			'short_name' => 'uae',
            'capital' => "Abu Dhabi"
        ]);
        DB::table('countries')->insert([
            'name' => 'United Kingdom',
			'short_name' => 'uk',
            'capital' => "London"
        ]);
        DB::table('countries')->insert([
            'name' => 'United States',
			'short_name' => 'us',
            'capital' => "Washington D.C"
        ]);
        DB::table('countries')->insert([
            'name' => 'Uruguay',
			'short_name' => 'Uru',
            'capital' => "Montevideo"
        ]);
        DB::table('countries')->insert([
            'name' => 'Uzbekistan',
			'short_name' => 'Uzb',
            'capital' => "Tashkent"
        ]);
        DB::table('countries')->insert([
            'name' => 'Vanuatu	Port',
			'short_name' => 'Van',
            'capital' => "Vila"
        ]);
        DB::table('countries')->insert([
            'name' => 'Vatican City',
			'short_name' => 'Vat',
            'capital' => "Vatican City"
        ]);
        DB::table('countries')->insert([
            'name' => 'Venezuela',
			'short_name' => 'Ven',
            'capital' => "Caracas"
        ]);
        DB::table('countries')->insert([
            'name' => 'Vietnam',
			'short_name' => 'Vie',
            'capital' => "Hanoi"
        ]);
        DB::table('countries')->insert([
            'name' => 'Yemen',
			'short_name' => 'Yem',
            'capital' => "Sana'a"
        ]);
        DB::table('countries')->insert([
            'name' => 'Zambia',
			'short_name' => 'Zam',
            'capital' => "Lusaka"
        ]);
        DB::table('countries')->insert([
            'name' => 'Zimbabwe',
			'short_name' => 'Zim',
            'capital' => "Harare"
        ]);
    }
}
