<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name' => 'Abia',
            'capital' => 'Umuahia',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Adamawa',
            'capital' => 'Yola',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Akwa Ibom',
            'capital' => 'Uyo',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Anambra',
            'capital' => 'Awka',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Bauchi',
            'capital' => 'Bauchi',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Bayelsa',
            'capital' => 'Yenagoa',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Benue',
            'capital' => 'Makurdi',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Borno',
            'capital' => 'Maiduguri',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Cross River',
            'capital' => 'Calabar',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Delta',
            'capital' => 'Asaba',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Ebonyi',
            'capital' => 'Abakaliki',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Edo',
            'capital' => 'Benin City',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Ekiti',
            'capital' => 'Ado Ekiti',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Enugu',
            'capital' => 'Enugu',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Gombe',
            'capital' => 'Gombe',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Imo',
            'capital' => 'Owerri',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Jigawa',
            'capital' => 'Dutse',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Kaduna',
            'capital' => 'Kaduna',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Kano',
            'capital' => 'Kano',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Katsina',
            'capital' => 'Katsina',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Kebbi',
            'capital' => 'Birnin Kebbi',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Kogi',
            'capital' => 'Lokoja',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Kwara',
            'capital' => 'Ilorin',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Lagos',
            'capital' => 'Ikeja',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Nasarawa',
            'capital' => 'Lafia',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Niger',
            'capital' => 'Minna',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Ogun',
            'capital' => 'Abeokuta',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Ondo',
            'capital' => 'Akure',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Osun',
            'capital' => 'Oshogbo',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Oyo',
            'capital' => 'Ibadan',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Plateau',
            'capital' => 'Jos',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Rivers',
            'capital' => 'Port Harcourt',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Sokoto',
            'capital' => 'Sokoto',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Taraba',
            'capital' => 'Jalingo',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Yobe',
            'capital' => 'Damaturu',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Zamfara',
            'capital' => 'Gusau',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Federal Capital Territory',
            'capital' => 'Abuja',
            'country_id' => 129,
        ]);
        DB::table('states')->insert([
            'name' => 'Ashanti',
            'capital' => '0',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Volta',
            'capital' => '1',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Western',
            'capital' => '2',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Northern',
            'capital' => '3',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Central',
            'capital' => '4',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Brong-Ahafo',
            'capital' => '5',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Upper East',
            'capital' => '6',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Eastern',
            'capital' => '7',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Upper West',
            'capital' => '8',
            'country_id' => 65,
        ]);
        DB::table('states')->insert([
            'name' => 'Eastern Cape',
            'capital' => '9',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'The Free State',
            'capital' => '10',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'Gauteng',
            'capital' => '11',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'KwaZulu-Natal',
            'capital' => '12',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'Limpopo',
            'capital' => '13',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'Mpumalanga',
            'capital' => '14',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'The Northern Cape',
            'capital' => '15',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'North West',
            'capital' => '16',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'The Western  Cape',
            'capital' => '17',
            'country_id' => 164,
        ]);
        DB::table('states')->insert([
            'name' => 'Nairobi',
            'capital' => '18',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Mombasa',
            'capital' => '19',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kisumu',
            'capital' => '20',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nakuru',
            'capital' => '21',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'MalindiBaringo',
            'capital' => '22',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Bomet',
            'capital' => '23',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Bungoma',
            'capital' => '24',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Busia',
            'capital' => '25',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Elgeyo Marakwet',
            'capital' => '26',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Embu',
            'capital' => '27',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Garissa',
            'capital' => '28',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Homa Bay',
            'capital' => '29',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Isiolo',
            'capital' => '30',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kajiado',
            'capital' => '31',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kakamega',
            'capital' => '32',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kericho',
            'capital' => '33',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kiambu',
            'capital' => '34',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kilifi',
            'capital' => '35',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kirinyaga',
            'capital' => '36',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kisii',
            'capital' => '37',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kisumu County',
            'capital' => '38',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kitui County',
            'capital' => '39',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Kwale County',
            'capital' => '40',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Laikipia County',
            'capital' => '41',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Lamu County',
            'capital' => '42',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Machakos County',
            'capital' => '43',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Makueni County',
            'capital' => '44',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Mandera County',
            'capital' => '45',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Meru County',
            'capital' => '46',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Migori County',
            'capital' => '47',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Marsabit County',
            'capital' => '48',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Mombasa County',
            'capital' => '49',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Muranga County',
            'capital' => '50',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nairobi County',
            'capital' => '51',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nakuru County',
            'capital' => '52',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nandi County',
            'capital' => '53',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Narok County',
            'capital' => '54',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nyamira County',
            'capital' => '55',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nyandarua County',
            'capital' => '56',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Nyeri County',
            'capital' => '57',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Samburu County',
            'capital' => '58',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Siaya County',
            'capital' => '59',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Taita Taveta County',
            'capital' => '60',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Tana River County',
            'capital' => '61',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Tharaka Nithi County',
            'capital' => '62',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Trans Nzoia County',
            'capital' => '63',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Turkana County',
            'capital' => '64',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Uasin Gishu County',
            'capital' => '65',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Vihiga County',
            'capital' => '66',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'Wajir County',
            'capital' => '67',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'West Pokot County',
            'capital' => '68',
            'country_id' => 88,
        ]);
        DB::table('states')->insert([
            'name' => 'England',
            'capital' => '69',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'England-North East',
            'capital' => '70',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'England-North West',
            'capital' => '71',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Yorkshire and The Humber',
            'capital' => '72',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'England-East Midlands',
            'capital' => '73',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'West Midlands',
            'capital' => '74',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'East of England',
            'capital' => '75',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'London',
            'capital' => '76',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'South West',
            'capital' => '77',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'South East',
            'capital' => '78',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Central Belt',
            'capital' => '79',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Scottish Midlands',
            'capital' => '80',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Scottish Highlands',
            'capital' => '81',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Scottish Lowlands',
            'capital' => '82',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Scottish Borders',
            'capital' => '83',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Galloway',
            'capital' => '84',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Northern Isles',
            'capital' => '85',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'South West Wales',
            'capital' => '86',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'South Wales',
            'capital' => '87',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Mid Wales',
            'capital' => '88',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'North Wales',
            'capital' => '89',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'West Wales',
            'capital' => '90',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Antrim',
            'capital' => '91',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Amagh',
            'capital' => '92',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Down',
            'capital' => '93',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Fermanagh',
            'capital' => '94',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Londonderry',
            'capital' => '95',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Tyrone',
            'capital' => '96',
            'country_id' => 187,
        ]);
        DB::table('states')->insert([
            'name' => 'Alabama',
            'capital' => 'Montgomery',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Arizona',
            'capital' => '98',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Alaska',
            'capital' => '99',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Arkansas',
            'capital' => '100',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'California',
            'capital' => '101',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Colorado',
            'capital' => '102',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Connecticut',
            'capital' => '103',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Delaware',
            'capital' => '104',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Florida',
            'capital' => '105',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Georgia',
            'capital' => '106',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Hawaii',
            'capital' => '107',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Idaho',
            'capital' => '108',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Illinois',
            'capital' => '109',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Indiana',
            'capital' => '110',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Iowa',
            'capital' => '111',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Kansas',
            'capital' => '112',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Kentucky',
            'capital' => '113',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Louisanna',
            'capital' => '114',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Maine',
            'capital' => '115',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Maryland',
            'capital' => '116',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Massachusetts',
            'capital' => '117',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Mississippi',
            'capital' => '118',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Michigan',
            'capital' => '119',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Missouri',
            'capital' => '120',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Montana',
            'capital' => '121',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Nebraska',
            'capital' => '122',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Nevada',
            'capital' => '123',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'New Hampshire',
            'capital' => '124',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'New Jersey',
            'capital' => '125',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'New Mexico',
            'capital' => '126',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Newyork',
            'capital' => '127',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'North Carolina',
            'capital' => '128',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'North Dakota',
            'capital' => '129',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Ohio',
            'capital' => '130',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Oklahoma',
            'capital' => '131',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Oregon',
            'capital' => '132',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Pennsylvania',
            'capital' => '133',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Rhode Island',
            'capital' => '134',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'South Carolina',
            'capital' => '135',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'South Dakota',
            'capital' => '136',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Tennessee',
            'capital' => '137',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Texas',
            'capital' => '138',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Utah',
            'capital' => '139',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Vermont',
            'capital' => '140',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Virginia',
            'capital' => '141',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Washington D.C',
            'capital' => '142',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'West Virginia',
            'capital' => '143',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Wisconsin',
            'capital' => '144',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Wyoming',
            'capital' => '145',
            'country_id' => 188,
        ]);
        DB::table('states')->insert([
            'name' => 'Emirates of UAE',
            'capital' => '146',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Abu Dhabi',
            'capital' => '147',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Dubai',
            'capital' => '148',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Sharjah',
            'capital' => '149',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Umm al-Qaiwain',
            'capital' => '150',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Fujairah',
            'capital' => '151',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Ajman',
            'capital' => '152',
            'country_id' => 186,
        ]);
        DB::table('states')->insert([
            'name' => 'Ra’s al-Khaimah',
            'capital' => '153',
            'country_id' => 186,
        ]);
    }
}
