<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. James Model Primary & Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Brights Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Living Stone International Christain Academy ",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cameroun Barracks Primary School",
            "school_type_id" => 3,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tent Primary School",
            "school_type_id" => 3,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lisachris Nursery & Primary School",
            "school_type_id" => 3,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "All Saint Model Nursery & Primary School",
            "school_type_id" => 3,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eziama High School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ngwa High School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lilac Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "All Saint Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Awesome International Model School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bezaleel Model Science Academy",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Boys Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Divine Grace International School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dority International Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "(igbo) National High School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Immaculate Heart",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Living Word Academy Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Maria Montessori International School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Modern Child College",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nelson Commercial College",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ninlan Demonstration Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ovom Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Premier International Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Royal Commercial College",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sacred Heart Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Secondary Technical School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Augustines Model Academy",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Josephs College",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Patrick's Model Secondary Schhool",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Wilcox Memorial Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sure Foundation Academy",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Happiness Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Umuagbaghi Secondary School",
            "school_type_id" => 4,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigeria Christian Seminary",
            "school_type_id" => 6,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rhema University",
            "school_type_id" => 6,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abia State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 1
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Reinhold International Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amaogudu Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Enuda Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Agborji Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ama-mba Ukpo Community Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogbu Community Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Stella Maris Nursery & Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Biama Primary School",
            "school_type_id" => 3,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abiriba Central School",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amaeke Community School",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Egwuena Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Enuda High School",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Reinhold International Secondary School",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Onarubi Technical College",
            "school_type_id" => 4,
            "city_id" => 2
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amaokayi Community Primary School",
            "school_type_id" => 3,
            "city_id" => 3
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ikwuano Secondary School",
            "school_type_id" => 4,
            "city_id" => 5
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Senior Secondary School",
            "school_type_id" => 4,
            "city_id" => 7
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Achara Secondary School",
            "school_type_id" => 4,
            "city_id" => 8
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amaassa Secondary Technical School",
            "school_type_id" => 4,
            "city_id" => 10
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekearo Community School",
            "school_type_id" => 4,
            "city_id" => 11
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okpuala-umugwor Community School",
            "school_type_id" => 4,
            "city_id" => 11
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Annes's Secondary School",
            "school_type_id" => 4,
            "city_id" => 11
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akanu Ohafia Secondary School",
            "school_type_id" => 4,
            "city_id" => 17
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ania Technical College",
            "school_type_id" => 4,
            "city_id" => 17
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ifemba International School",
            "school_type_id" => 4,
            "city_id" => 17
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ohafia Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 17
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ohafia High School",
            "school_type_id" => 4,
            "city_id" => 17
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Isuikwuato High School",
            "school_type_id" => 4,
            "city_id" => 18
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ugwueke Secondary School",
            "school_type_id" => 4,
            "city_id" => 20
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ugwueke Secondary School, Ugwueke",
            "school_type_id" => 4,
            "city_id" => 20
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "World Changers Academy",
            "school_type_id" => 4,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Afaraukwu Secondary Technical School",
            "school_type_id" => 4,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Ghost Secondary Technical School ",
            "school_type_id" => 4,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ibeku High School",
            "school_type_id" => 4,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Cecilia's Academy",
            "school_type_id" => 4,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Michael Okpara University Of Agriculture",
            "school_type_id" => 6,
            "city_id" => 21
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Spiritan University",
            "school_type_id" => 6,
            "city_id" => 22
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nvosi High School",
            "school_type_id" => 4,
            "city_id" => 23
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "International Secondary School",
            "school_type_id" => 4,
            "city_id" => 24
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Marist Comprehensive Academy",
            "school_type_id" => 4,
            "city_id" => 24
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Marist Brothers Juniorate",
            "school_type_id" => 3,
            "city_id" => 24
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gregory University Uturu",
            "school_type_id" => 6,
            "city_id" => 24
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abia State University",
            "school_type_id" => 6,
            "city_id" => 24
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Methodist College",
            "school_type_id" => 4,
            "city_id" => 25
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ecwa Academy",
            "school_type_id" => 4,
            "city_id" => 26
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mundra Model Schools",
            "school_type_id" => 4,
            "city_id" => 29
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adamawa State University",
            "school_type_id" => 6,
            "city_id" => 29
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Mubi",
            "school_type_id" => 6,
            "city_id" => 29
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bright Future High School",
            "school_type_id" => 4,
            "city_id" => 34
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abti Primary School",
            "school_type_id" => 3,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abti Academy",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ahmadu Ribadu College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aliyu Mustapha Academy",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aliyu Mustapha Memorial School",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Command Children School",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Capital School",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Colonel Isa Memorial School",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Concordia College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government GirlsÃ¢â‚¬â„¢ College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "General Murtala Muhammed College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Musa Bello Shelleng Memorial College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "School For Arabic And Islamic Studies",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Success International College",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Faan Academy",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Secondary School",
            "school_type_id" => 4,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "American University Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Modibbo Adama University Of Technology",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adamawa State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Yola",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abti-american University Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Technology Yola",
            "school_type_id" => 6,
            "city_id" => 46
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akwa Ibom State University",
            "school_type_id" => 6,
            "city_id" => 48
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akwa Ibom State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ritman University",
            "school_type_id" => 6,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ritman College",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Modern Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "State College",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "State Secondary Commercial School",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Monika Kindergarten And Elementary Schools",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Paul Academy",
            "school_type_id" => 4,
            "city_id" => 49
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Maritime Academy Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 50
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "City Union Academy",
            "school_type_id" => 4,
            "city_id" => 51
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Uyo",
            "school_type_id" => 6,
            "city_id" => 51
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Technology Akwa-ibom",
            "school_type_id" => 6,
            "city_id" => 51
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Etebi National High School",
            "school_type_id" => 4,
            "city_id" => 52
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Beulah International School",
            "school_type_id" => 4,
            "city_id" => 59
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Etinan Institute",
            "school_type_id" => 4,
            "city_id" => 59
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Central Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 61
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cornelia Connelley College",
            "school_type_id" => 4,
            "city_id" => 63
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Afaha-nsit",
            "school_type_id" => 6,
            "city_id" => 64
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Child Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 65
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Essien Itiaba Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 67
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Immaculate Conception Secondary School",
            "school_type_id" => 4,
            "city_id" => 80
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Obong University",
            "school_type_id" => 6,
            "city_id" => 87
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nnamdi Azikiwe University",
            "school_type_id" => 6,
            "city_id" => 88
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Paul University",
            "school_type_id" => 6,
            "city_id" => 88
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Paul's University College",
            "school_type_id" => 6,
            "city_id" => 88
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nwafor Orizu College Of Education",
            "school_type_id" => 6,
            "city_id" => 109
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Madonna University",
            "school_type_id" => 6,
            "city_id" => 110
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Legacy University",
            "school_type_id" => 6,
            "city_id" => 110
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Oko",
            "school_type_id" => 6,
            "city_id" => 111
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Anambra State University",
            "school_type_id" => 6,
            "city_id" => 112
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tansian University",
            "school_type_id" => 6,
            "city_id" => 113
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Azare",
            "school_type_id" => 6,
            "city_id" => 114
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abubakar Tafawa Balewa University",
            "school_type_id" => 6,
            "city_id" => 115
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Bauchi",
            "school_type_id" => 6,
            "city_id" => 115
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bauchi State University",
            "school_type_id" => 6,
            "city_id" => 116
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Niger Delta University",
            "school_type_id" => 6,
            "city_id" => 135
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Otuoke",
            "school_type_id" => 6,
            "city_id" => 145
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Africa",
            "school_type_id" => 6,
            "city_id" => 146
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Benue State University",
            "school_type_id" => 6,
            "city_id" => 147
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Agriculture",
            "school_type_id" => 6,
            "city_id" => 147
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government Girls College ",
            "school_type_id" => 4,
            "city_id" => 148
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education  Katsina Ala",
            "school_type_id" => 6,
            "city_id" => 155
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Mkar",
            "school_type_id" => 6,
            "city_id" => 166
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Borno State University",
            "school_type_id" => 6,
            "city_id" => 176
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Maiduguri",
            "school_type_id" => 6,
            "city_id" => 176
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ramat Polytechnic",
            "school_type_id" => 6,
            "city_id" => 176
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Himma Private School",
            "school_type_id" => 4,
            "city_id" => 176
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Airforce Primary School ",
            "school_type_id" => 3,
            "city_id" => 176
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Arthur Jarvis University",
            "school_type_id" => 6,
            "city_id" => 195
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cross River University Of Technology",
            "school_type_id" => 6,
            "city_id" => 195
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Calabar",
            "school_type_id" => 6,
            "city_id" => 195
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Special Science School",
            "school_type_id" => 4,
            "city_id" => 200
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Obudu",
            "school_type_id" => 6,
            "city_id" => 208
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ibru College",
            "school_type_id" => 4,
            "city_id" => 212
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oguname Grammar School",
            "school_type_id" => 4,
            "city_id" => 213
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity School",
            "school_type_id" => 4,
            "city_id" => 213
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Erho Secondary School ",
            "school_type_id" => 4,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Umiaghwa Secondary School",
            "school_type_id" => 4,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Otorho Secondary School",
            "school_type_id" => 4,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Delta State University Secondary School",
            "school_type_id" => 4,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Urhuoka Secondary School",
            "school_type_id" => 4,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Delta State University",
            "school_type_id" => 6,
            "city_id" => 214
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Infant Jesus Academy",
            "school_type_id" => 4,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Marble Hill School",
            "school_type_id" => 4,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Madonna International College",
            "school_type_id" => 4,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rosebud Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Patrick's College",
            "school_type_id" => 4,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unique Foundation Nursery\/primary School",
            "school_type_id" => 3,
            "city_id" => 215
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ika Grammar School",
            "school_type_id" => 4,
            "city_id" => 217
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mary Mount College",
            "school_type_id" => 4,
            "city_id" => 217
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Burutu Grammar School",
            "school_type_id" => 4,
            "city_id" => 218
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebedei Secondary School",
            "school_type_id" => 4,
            "city_id" => 219
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekakpamre Grammar School",
            "school_type_id" => 4,
            "city_id" => 220
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kokori Grammar School",
            "school_type_id" => 4,
            "city_id" => 222
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Notre Dame College",
            "school_type_id" => 4,
            "city_id" => 223
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Delta State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 223
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Girls' Model Secondary School",
            "school_type_id" => 4,
            "city_id" => 224
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ewulu Mixed Grammar School",
            "school_type_id" => 4,
            "city_id" => 225
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Idjerhe Grammar School",
            "school_type_id" => 4,
            "city_id" => 227
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Irhodo Primary School",
            "school_type_id" => 3,
            "city_id" => 228
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mixed Secondary School, Idumuje Unor",
            "school_type_id" => 4,
            "city_id" => 229
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Egbudu Mixed Secondary School Egbudu-akah",
            "school_type_id" => 4,
            "city_id" => 230
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ase Grammar School",
            "school_type_id" => 4,
            "city_id" => 231
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebrumede Secondary School",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogbe Secondary School",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Our Lady's High School",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Urhobo College",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Petroleum Resources",
            "school_type_id" => 6,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Redeemed Academy Group Of Schools, Nepa",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Star Primary & Secondary School",
            "school_type_id" => 4,
            "city_id" => 232
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Grammar School",
            "school_type_id" => 4,
            "city_id" => 233
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekiugbo Grammar School",
            "school_type_id" => 4,
            "city_id" => 234
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government College ",
            "school_type_id" => 4,
            "city_id" => 234
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Otowodo Grammar School",
            "school_type_id" => 4,
            "city_id" => 234
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St Theresa's Girls College",
            "school_type_id" => 4,
            "city_id" => 234
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Michael And Cecilia Ibru University",
            "school_type_id" => 6,
            "city_id" => 234
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Girl' College ",
            "school_type_id" => 4,
            "city_id" => 236
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Santa Maria College",
            "school_type_id" => 4,
            "city_id" => 236
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Admiralty University Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 236
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Illah Mixed Grammar School",
            "school_type_id" => 4,
            "city_id" => 237
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. George's Grammar School",
            "school_type_id" => 4,
            "city_id" => 239
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Our Lady Of Nigeria Catholic Girls' Secondary School",
            "school_type_id" => 4,
            "city_id" => 240
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Western Delta University",
            "school_type_id" => 6,
            "city_id" => 240
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogume Grammar School",
            "school_type_id" => 4,
            "city_id" => 241
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Novena University",
            "school_type_id" => 6,
            "city_id" => 241
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogoma Primary School",
            "school_type_id" => 3,
            "city_id" => 242
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oghior Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 244
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oginibo Secondary School",
            "school_type_id" => 4,
            "city_id" => 245
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian Maritime University",
            "school_type_id" => 6,
            "city_id" => 246
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Vincent College",
            "school_type_id" => 4,
            "city_id" => 248
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emore Grammar School",
            "school_type_id" => 4,
            "city_id" => 249
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Michael's College",
            "school_type_id" => 4,
            "city_id" => 249
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. John's Academy",
            "school_type_id" => 4,
            "city_id" => 249
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ophregbala Secondary School",
            "school_type_id" => 4,
            "city_id" => 250
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Orogun Grammar School",
            "school_type_id" => 4,
            "city_id" => 252
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Udu Secondary School",
            "school_type_id" => 4,
            "city_id" => 253
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mater Dei Grammar School",
            "school_type_id" => 4,
            "city_id" => 254
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Mary Magdalene Grammar School",
            "school_type_id" => 4,
            "city_id" => 254
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Phcn Staff School",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bright Future Nursery And Primary School ",
            "school_type_id" => 3,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bright Future Academy ",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Chude Girls Grammar School",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Excellence School Of Science And Creativity",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Merit Mixed Secondary School",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Ita's Girls Grammar School",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Malachy's College",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Michael's Primary And Secondary School",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Peter Claver's College Aghalokpe",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Victory School Of Science & Creativity (vssac) ",
            "school_type_id" => 4,
            "city_id" => 256
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emevor Mixed Secondary School",
            "school_type_id" => 4,
            "city_id" => 257
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "James Welch Grammar School",
            "school_type_id" => 4,
            "city_id" => 257
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emu-uno Secondary School",
            "school_type_id" => 4,
            "city_id" => 258
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Novena College",
            "school_type_id" => 4,
            "city_id" => 259
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Utagba Ogbe Grammar School",
            "school_type_id" => 4,
            "city_id" => 259
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Utagba Ogbe Technical College",
            "school_type_id" => 4,
            "city_id" => 259
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Exclusive Nursery, Primary And Secondary Schools",
            "school_type_id" => 4,
            "city_id" => 259
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Agbor",
            "school_type_id" => 6,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Baptist High School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekuku-agbor Grammar School ",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gbenoba Grammar School ",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Infant Nusary, Primary & Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ime-obi Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogbemudein Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Omumu Mixed Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ozanogogo Mixed Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Staff Model Primary & Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Notre Dame Special Secondary School",
            "school_type_id" => 4,
            "city_id" => 262
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community Secondary School ",
            "school_type_id" => 4,
            "city_id" => 263
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Orgba Secondary School",
            "school_type_id" => 4,
            "city_id" => 263
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Technical College",
            "school_type_id" => 4,
            "city_id" => 263
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 264
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edwin Clark University",
            "school_type_id" => 6,
            "city_id" => 265
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 266
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ofagbe Technical College ",
            "school_type_id" => 4,
            "city_id" => 267
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oketa Mixed Grammar School",
            "school_type_id" => 4,
            "city_id" => 267
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Jeremi College",
            "school_type_id" => 4,
            "city_id" => 269
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Owhrode Secondary School",
            "school_type_id" => 4,
            "city_id" => 270
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ovu Grammar School",
            "school_type_id" => 4,
            "city_id" => 271
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ovwian Secondary School",
            "school_type_id" => 4,
            "city_id" => 272
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Good Shepherd Catholic Boys' Secondary School",
            "school_type_id" => 4,
            "city_id" => 273
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Esanma Grammar School",
            "school_type_id" => 4,
            "city_id" => 274
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okiti Mixed Secondary School",
            "school_type_id" => 4,
            "city_id" => 275
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Santa Maria Nursery, Primary And Secondary Schools",
            "school_type_id" => 4,
            "city_id" => 276
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Anthony's College",
            "school_type_id" => 4,
            "city_id" => 276
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Divine Academy",
            "school_type_id" => 4,
            "city_id" => 277
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Family School",
            "school_type_id" => 4,
            "city_id" => 278
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kingsway International High School",
            "school_type_id" => 4,
            "city_id" => 279
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ogbavweni Grammar School",
            "school_type_id" => 4,
            "city_id" => 281
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uwhurun Grammar School",
            "school_type_id" => 4,
            "city_id" => 282
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Great Grace Montessori School ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hilltop School",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fieldcrest International School",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Step Forward Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Igbudu Primary School",
            "school_type_id" => 3,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nana Primary School",
            "school_type_id" => 3,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Classical International School ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Demonstration Secondary School ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Delta Careers College ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dom Domingos College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dore Numa College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Esi College ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hussey College ",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lakeland School, Ogunu",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nana College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "National Comprehensive College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Yoworen College",
            "school_type_id" => 4,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Warri",
            "school_type_id" => 6,
            "city_id" => 283
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Comprehensive School Of Management And Technology (cmst) ",
            "school_type_id" => 4,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Technical College",
            "school_type_id" => 4,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Ghost Secondary School",
            "school_type_id" => 4,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Little Saints\/saints High School, Opposite House Of Assembly",
            "school_type_id" => 4,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Alex Ekwueme Federal University Ndufu-alike",
            "school_type_id" => 6,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebonyi State University",
            "school_type_id" => 6,
            "city_id" => 284
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Reach Continental Secondary School",
            "school_type_id" => 4,
            "city_id" => 285
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Evangel University",
            "school_type_id" => 6,
            "city_id" => 286
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ezza High School",
            "school_type_id" => 4,
            "city_id" => 287
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ishiagu High School",
            "school_type_id" => 4,
            "city_id" => 288
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uro Grammar School",
            "school_type_id" => 4,
            "city_id" => 290
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Onicha Secondary Technical College",
            "school_type_id" => 4,
            "city_id" => 299
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Boys Model Secondary School",
            "school_type_id" => 4,
            "city_id" => 299
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Xcentenary Model Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 299
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abakaliki High School",
            "school_type_id" => 4,
            "city_id" => 300
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uguwlangwu Secondary School",
            "school_type_id" => 4,
            "city_id" => 301
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "International Model Secondary School",
            "school_type_id" => 4,
            "city_id" => 301
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 301
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akanu Ibiam Federal Polytechnic",
            "school_type_id" => 6,
            "city_id" => 302
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Momodu College",
            "school_type_id" => 4,
            "city_id" => 303
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ayuele Secondary School",
            "school_type_id" => 4,
            "city_id" => 303
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ambrose Alli University",
            "school_type_id" => 6,
            "city_id" => 304
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dova Primary School",
            "school_type_id" => 3,
            "city_id" => 304
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ambrose Alli University Secondary School",
            "school_type_id" => 4,
            "city_id" => 304
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eguare Secondary School",
            "school_type_id" => 4,
            "city_id" => 304
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Paul's Anglican Grammar School",
            "school_type_id" => 4,
            "city_id" => 305
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Peters Secondary School",
            "school_type_id" => 4,
            "city_id" => 307
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Opoji Grammar School",
            "school_type_id" => 4,
            "city_id" => 308
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Army Day Secondary School Nicohol Barracks",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Auchi College",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akpekpe Secondary School",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Brighter Tomorrow Secondary School",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Evangel Secondary School",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iyekhei Girl's Secondary School",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Our Lady Of Fatima",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Auchi Polytechnic",
            "school_type_id" => 6,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Auchi Polytechnic Staff Secondary School",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Our Lady Of Fatima College",
            "school_type_id" => 4,
            "city_id" => 311
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebudin Secondary School",
            "school_type_id" => 4,
            "city_id" => 313
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebudin Primary School",
            "school_type_id" => 3,
            "city_id" => 313
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bright Hope College Inyenle",
            "school_type_id" => 4,
            "city_id" => 315
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. John Bosco's College",
            "school_type_id" => 4,
            "city_id" => 315
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iguobazuwa Grammar School",
            "school_type_id" => 4,
            "city_id" => 318
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Blessed Saint Paul School",
            "school_type_id" => 4,
            "city_id" => 319
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Benson Idahosa University",
            "school_type_id" => 6,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Igbinedion University",
            "school_type_id" => 6,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Benin",
            "school_type_id" => 6,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Wellspring University",
            "school_type_id" => 6,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Shaka Polytechnic",
            "school_type_id" => 6,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Phelim High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Denosa Demonstration Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Russell International College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Scholars Imperial High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebenezer Nursery And Preparatory School",
            "school_type_id" => 3,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emotan Nursery And Preparatory School (emotan Primary School) ",
            "school_type_id" => 3,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Greater Tomorrow Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Salvation International Preparatory Schools (formerly Salvation Group Of Schools) ",
            "school_type_id" => 3,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Antie Maria Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Blessing Foundation Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Continental Group Of Schools Okunbor Street",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adesuwa Girl's Grammar School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adolo College, Uselu",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aduwa Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aduwawa Secondary School, Off Auchi Road",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akenzua Secondary School I. C. E Road",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Justice Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edo College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edokpolo Grammar School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eghosa Grammar School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emotan College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Staff Comprehensive College Uwelu",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Staff School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Staff Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Garrick Memorial Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Greater Tomorrow Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Henson Demonstration Secondary School Ikpoba Hill",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Igbinedion Education Center School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Independence Group Of School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Immaculate Conception College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "New Discovery Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Negbenebor International School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nosakhare Model Educational Center ",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oredo Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oregbeni Estate School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Presentation National High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Springfield Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Maria Goretti Girls Grammar School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Rita's Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Mary British International School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Standard High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Travis Christian College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Benin Demonstration Secondary School (udss) ",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uwagboe Demonstration Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Preparatory Secondary School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Western Boys High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Word Of Faith College",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Penach High School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Heritage International Group Of School",
            "school_type_id" => 4,
            "city_id" => 320
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Ekiadolor",
            "school_type_id" => 6,
            "city_id" => 321
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Apex College",
            "school_type_id" => 4,
            "city_id" => 322
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ibillo Boys Grammar School",
            "school_type_id" => 4,
            "city_id" => 322
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Apex Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 322
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Azane Model Primary School",
            "school_type_id" => 3,
            "city_id" => 322
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ojah Primary School",
            "school_type_id" => 3,
            "city_id" => 322
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ikpeshi Grammar School",
            "school_type_id" => 4,
            "city_id" => 323
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edo University",
            "school_type_id" => 6,
            "city_id" => 324
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Glorious Vision University",
            "school_type_id" => 6,
            "city_id" => 325
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Azama College Otuo",
            "school_type_id" => 4,
            "city_id" => 326
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edeki Grammar School Otuo",
            "school_type_id" => 4,
            "city_id" => 326
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Akoko-edo Grammar School (akograms) Uneme-nekhua",
            "school_type_id" => 4,
            "city_id" => 328
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekpedo Community High School ",
            "school_type_id" => 4,
            "city_id" => 329
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Trinity Grammar School, Evbiobe",
            "school_type_id" => 4,
            "city_id" => 330
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Buddy Group Of School",
            "school_type_id" => 4,
            "city_id" => 331
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ikasco Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 331
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lumen Christi International High School",
            "school_type_id" => 4,
            "city_id" => 331
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emmanuel Secondary School",
            "school_type_id" => 4,
            "city_id" => 333
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ososo Grammar School",
            "school_type_id" => 4,
            "city_id" => 333
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ososo Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 333
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Angela Girls ",
            "school_type_id" => 4,
            "city_id" => 334
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aaye-oja Community Grammar School",
            "school_type_id" => 4,
            "city_id" => 335
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ado Grammar School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Christ's School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "State Government College",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Child Catholic Secondary School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Igogo High School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ipoti High School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ola-oluwa Muslim Grammar School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Ado Ekiti",
            "school_type_id" => 6,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekiti State University",
            "school_type_id" => 6,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Ado-ekiti",
            "school_type_id" => 6,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ado Community High School",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Shepherd International College",
            "school_type_id" => 4,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Afe Babalola University",
            "school_type_id" => 6,
            "city_id" => 336
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ayebode High School",
            "school_type_id" => 4,
            "city_id" => 337
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Stephen's Anglican Primary School",
            "school_type_id" => 3,
            "city_id" => 337
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Erin Ayonigba High School",
            "school_type_id" => 4,
            "city_id" => 338
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aisegba Community Grammar School",
            "school_type_id" => 4,
            "city_id" => 339
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aisegba Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 339
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Edu High School",
            "school_type_id" => 4,
            "city_id" => 340
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Anglican Church Grammar School",
            "school_type_id" => 4,
            "city_id" => 341
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Babalola Memorial Grammar School",
            "school_type_id" => 4,
            "city_id" => 341
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Christ Apostolic Church Grammar School",
            "school_type_id" => 4,
            "city_id" => 341
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Efon Alaaye High School",
            "school_type_id" => 4,
            "city_id" => 341
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "African Church Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amoye Grammar School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Annunciation  Boy School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eleyo High School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Irepodun High School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Louis Grammar School",
            "school_type_id" => 4,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Ikere",
            "school_type_id" => 6,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Education Ikere-ekiti",
            "school_type_id" => 6,
            "city_id" => 342
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekiti Baptist High School",
            "school_type_id" => 4,
            "city_id" => 344
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okunsusi Jemiriye Secondary School",
            "school_type_id" => 4,
            "city_id" => 344
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ilejemeje Community High School",
            "school_type_id" => 4,
            "city_id" => 345
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Oye-ekiti",
            "school_type_id" => 6,
            "city_id" => 348
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebenezer Premier Secondary School",
            "school_type_id" => 4,
            "city_id" => 349
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Mary's Girls Grammar School",
            "school_type_id" => 4,
            "city_id" => 349
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekiti Parapo College",
            "school_type_id" => 4,
            "city_id" => 350
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Alamoye Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 351
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aramoko District Commercial Secondary School",
            "school_type_id" => 4,
            "city_id" => 351
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Moba Grammar School",
            "school_type_id" => 4,
            "city_id" => 352
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Peter's Primary School",
            "school_type_id" => 3,
            "city_id" => 352
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Doherty Memorial Grammar School",
            "school_type_id" => 4,
            "city_id" => 353
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ilawe Grammar School",
            "school_type_id" => 4,
            "city_id" => 355
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oniwe Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 355
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Solid Foundation High School",
            "school_type_id" => 4,
            "city_id" => 355
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "United High School",
            "school_type_id" => 4,
            "city_id" => 355
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Corpus Christi College",
            "school_type_id" => 4,
            "city_id" => 355
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Babatope Memorial High School",
            "school_type_id" => 4,
            "city_id" => 356
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eso Obe Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 356
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Victoria Memorial Group Of School",
            "school_type_id" => 4,
            "city_id" => 356
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Omoeleye Comprehensive High School",
            "school_type_id" => 4,
            "city_id" => 357
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Olarelu Grammar School",
            "school_type_id" => 4,
            "city_id" => 357
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Anglican School",
            "school_type_id" => 4,
            "city_id" => 358
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okemesi Grammar School",
            "school_type_id" => 4,
            "city_id" => 358
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Notre Dame Grammar School",
            "school_type_id" => 4,
            "city_id" => 359
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Christ High School",
            "school_type_id" => 4,
            "city_id" => 360
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Corpous Christei College",
            "school_type_id" => 4,
            "city_id" => 361
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Zion Nursery\/primary School",
            "school_type_id" => 3,
            "city_id" => 362
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Caritas University",
            "school_type_id" => 6,
            "city_id" => 363
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fatima High School",
            "school_type_id" => 4,
            "city_id" => 364
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iva Valley Secondary School",
            "school_type_id" => 4,
            "city_id" => 366
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Girl's Secondary School",
            "school_type_id" => 4,
            "city_id" => 367
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Renaissance University",
            "school_type_id" => 6,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Enugu State University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Institute Of Management Technology Enugu",
            "school_type_id" => 6,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Immaculate Conception",
            "school_type_id" => 4,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eastern Hills Academy",
            "school_type_id" => 4,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Rosary College",
            "school_type_id" => 4,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Idaw River Girls College",
            "school_type_id" => 4,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Maryland Secondary School",
            "school_type_id" => 4,
            "city_id" => 368
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 369
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Boys High School",
            "school_type_id" => 4,
            "city_id" => 377
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Victor Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 382
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Egede Girls College",
            "school_type_id" => 4,
            "city_id" => 384
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Boys High School. Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 385
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Colliery College",
            "school_type_id" => 4,
            "city_id" => 386
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amansiodo Boys Secondary School",
            "school_type_id" => 4,
            "city_id" => 387
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iwollo High School ",
            "school_type_id" => 4,
            "city_id" => 387
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Model Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 388
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okpanku High School",
            "school_type_id" => 4,
            "city_id" => 389
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Jacob Phebean  College",
            "school_type_id" => 4,
            "city_id" => 390
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Godfrey Okoye University",
            "school_type_id" => 6,
            "city_id" => 392
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aguobu Iwollo Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 393
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gombe State University",
            "school_type_id" => 6,
            "city_id" => 396
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Gombe",
            "school_type_id" => 6,
            "city_id" => 396
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gombe State University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 398
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Kashere",
            "school_type_id" => 6,
            "city_id" => 406
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Imo State University",
            "school_type_id" => 6,
            "city_id" => 411
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Technology Owerri",
            "school_type_id" => 6,
            "city_id" => 411
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Anthony's Secondary School",
            "school_type_id" => 4,
            "city_id" => 413
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Nekede",
            "school_type_id" => 6,
            "city_id" => 431
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eastern Palm University",
            "school_type_id" => 6,
            "city_id" => 432
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uburu Secondary School",
            "school_type_id" => 4,
            "city_id" => 433
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hezekiah University",
            "school_type_id" => 6,
            "city_id" => 434
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Dutse",
            "school_type_id" => 6,
            "city_id" => 436
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Thriving Treasures School",
            "school_type_id" => 3,
            "city_id" => 438
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government Boys College ",
            "school_type_id" => 4,
            "city_id" => 438
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Regina Pacis College",
            "school_type_id" => 4,
            "city_id" => 438
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sule Lamido University",
            "school_type_id" => 6,
            "city_id" => 443
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hussaini Adamu Federal Polytechnic",
            "school_type_id" => 6,
            "city_id" => 460
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Danbo International College",
            "school_type_id" => 4,
            "city_id" => 463
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gaskiya Skills International Schools",
            "school_type_id" => 4,
            "city_id" => 463
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Kachia",
            "school_type_id" => 4,
            "city_id" => 474
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nakowa College",
            "school_type_id" => 4,
            "city_id" => 476
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Goodnews Academy",
            "school_type_id" => 4,
            "city_id" => 478
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Imperial Secondary School",
            "school_type_id" => 4,
            "city_id" => 482
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Wisdom Immaculate Schools",
            "school_type_id" => 4,
            "city_id" => 482
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government College Kagoro",
            "school_type_id" => 4,
            "city_id" => 483
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Kagoro",
            "school_type_id" => 4,
            "city_id" => 483
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rimi College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tendercare Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Living Word Magnet School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Command Secondary School Kaduna",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Darul Huda Elementary\/tahfiz School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Famaks International School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government College Kaduna",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Grays International College Kaduna",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "J. M. A Premier Secondary School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kaduna Capital School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Model International School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian Turkish International College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Queen AminaÃ¢â‚¬â„¢s College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Salem Academy",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sardauna Memorial College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Uncle Bado Memorial College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Manchok",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Challawa Secondary School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Zamani College",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Land Force International Schools",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Brigadiers High School",
            "school_type_id" => 4,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kaduna Polytechnic",
            "school_type_id" => 6,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kaduna State University",
            "school_type_id" => 6,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "National Teachers Institute",
            "school_type_id" => 6,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian Defence Academy",
            "school_type_id" => 6,
            "city_id" => 485
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Regents Secondary School",
            "school_type_id" => 4,
            "city_id" => 486
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Madakiya",
            "school_type_id" => 4,
            "city_id" => 487
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College Kaduna",
            "school_type_id" => 4,
            "city_id" => 488
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Little Scholars Secondary Schools",
            "school_type_id" => 4,
            "city_id" => 488
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ilc Secondary Schools",
            "school_type_id" => 4,
            "city_id" => 490
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ilc Primary Schools",
            "school_type_id" => 3,
            "city_id" => 490
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Royal Palm International School",
            "school_type_id" => 4,
            "city_id" => 491
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Classical International School Kaduna",
            "school_type_id" => 4,
            "city_id" => 491
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Stephens Anglican High School",
            "school_type_id" => 4,
            "city_id" => 493
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Christ Ambassadors College",
            "school_type_id" => 4,
            "city_id" => 494
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Francis College",
            "school_type_id" => 4,
            "city_id" => 495
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls College Zonkwa",
            "school_type_id" => 4,
            "city_id" => 495
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government GirlsÃ¢â‚¬â„¢ Secondary School Zonkwa",
            "school_type_id" => 4,
            "city_id" => 495
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tafawa Balewa Memorial College",
            "school_type_id" => 4,
            "city_id" => 496
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ahmadu Bello University Staff School",
            "school_type_id" => 3,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Faith Children Center Chapel Of Salvation",
            "school_type_id" => 3,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Demonstration Secondary School Ahmadu Bello University",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government Girls College Kaduna",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Giftedhands Leadership Schools",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Zaria",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government GirlsÃ¢â‚¬â„¢ Day Secondary School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Military School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Perkins International Academy Of Excellence",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Soba Technical College",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Theresa Bowyer Secondary School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Victory Secondary School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Zaria Academy Shikka",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Zaria Art School",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gilead Academy",
            "school_type_id" => 4,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ahmadu Bello University",
            "school_type_id" => 6,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian College Of Aviation Technology",
            "school_type_id" => 6,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nuhu Bamalli Polytechnic",
            "school_type_id" => 6,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Zaria",
            "school_type_id" => 6,
            "city_id" => 497
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "TaÃ¢â‚¬â„¢adibul Aulad Girls Senior Islamic Secondary School Adakawa",
            "school_type_id" => 4,
            "city_id" => 498
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aishatu Lamido Nursry Primary School",
            "school_type_id" => 3,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dantata Memorial Primary School",
            "school_type_id" => 3,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fidelity Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ikima Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Imam Zubair Islamiyya School",
            "school_type_id" => 3,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Andal Science Academy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Al Ansar Girls College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Alhaji Akilu Comprehensive Islamic Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aminu Kano Community Commercial College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Arewa Best Academy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aridason Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Army Day Secondary School Bukavu Barracks",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Asamu Comprehensive College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Aunty Laila",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fazl-i-omar Ahmadiyya Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Buk Staff Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Captain Memorial College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of QurÃ¢â‚¬â„¢anic Studies Ayagi",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Crescent International Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Day Science",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Emphatic Neo-classic College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Essence College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Excel College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Faan Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fahad Memorial College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "First Grade Comprehensive School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gateway College Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary Commercial School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Technical College Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hassan Ibrahim Gwarzo Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Holy Child Academy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ijioma Memorial Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Intercontinental College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano Capital School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano Model Secondary",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano Montessori School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano School Of Business Studies",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kids High School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kings College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lebanon College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lufaloy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Maitama Sule Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Model Comprehensive School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mulco Science And Communication College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Musa Iliasu College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nana Aisha Girls Arabic Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nurul Huda Islamiyya Primary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian Turkish College Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Prime College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Prince Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Queens Science Academy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Royal College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rumfa College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rurum Central Primary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rurum Tahfiz Primary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Saint Loius Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Saint Thomas Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Samadi International School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Saudat Memorial School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Seat Of Wisdom Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sheikh Bashir El Rayyan Nursery Primary And Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sheikh Tijjani Usman Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Spring International Secondary School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Supreme College Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Light International School",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Caliphate Nursery, Primary And Secondary Schools",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Turkish International School Kano",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity Comprehensive College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unique College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Yandutse College",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mcmidas Institute Of Information Technology",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oceanic Academy",
            "school_type_id" => 4,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bayero University",
            "school_type_id" => 6,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Skyline University Nigeria",
            "school_type_id" => 6,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Yusuf Maitama Sule University",
            "school_type_id" => 6,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano State College Of Education",
            "school_type_id" => 6,
            "city_id" => 499
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Junior Secondary School Barkum",
            "school_type_id" => 4,
            "city_id" => 503
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Arabic Secondary School",
            "school_type_id" => 4,
            "city_id" => 504
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Dambatta",
            "school_type_id" => 4,
            "city_id" => 504
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sahatussibyan Littahfeezul QurÃ¢â‚¬â„¢an",
            "school_type_id" => 4,
            "city_id" => 506
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sahatu Ayagi",
            "school_type_id" => 4,
            "city_id" => 506
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "UmmahatulÃ¢â‚¬â„¢muÃ¢â‚¬â„¢uminat Ayagi",
            "school_type_id" => 4,
            "city_id" => 506
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mautsidau Secondary School",
            "school_type_id" => 4,
            "city_id" => 509
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary Commercial School Wudil",
            "school_type_id" => 4,
            "city_id" => 511
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kano University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 511
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Science College, Dawakin Tofa",
            "school_type_id" => 4,
            "city_id" => 512
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Karaye",
            "school_type_id" => 4,
            "city_id" => 513
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Dala",
            "school_type_id" => 4,
            "city_id" => 516
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Rurum-katanga",
            "school_type_id" => 4,
            "city_id" => 526
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Dandinshe",
            "school_type_id" => 4,
            "city_id" => 527
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Arabic Secondary School Dashere Rurum",
            "school_type_id" => 4,
            "city_id" => 528
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dashere Primary School",
            "school_type_id" => 3,
            "city_id" => 528
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Gwauron Dutse",
            "school_type_id" => 4,
            "city_id" => 531
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Bich",
            "school_type_id" => 6,
            "city_id" => 534
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls College Dala",
            "school_type_id" => 4,
            "city_id" => 535
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Science College Dawakin Kudu",
            "school_type_id" => 4,
            "city_id" => 537
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Gwammaja",
            "school_type_id" => 4,
            "city_id" => 543
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rainbow Schools",
            "school_type_id" => 4,
            "city_id" => 544
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mallamibro Ict Academy Tsamiyar Boka",
            "school_type_id" => 4,
            "city_id" => 545
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Arabic College Gorondutse",
            "school_type_id" => 4,
            "city_id" => 546
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "School For Arabic Studies",
            "school_type_id" => 4,
            "city_id" => 548
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Police Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 549
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Kurna Asabe",
            "school_type_id" => 4,
            "city_id" => 550
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Arabic Secondary School",
            "school_type_id" => 4,
            "city_id" => 551
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mustibra Model School",
            "school_type_id" => 4,
            "city_id" => 553
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Day Science College",
            "school_type_id" => 4,
            "city_id" => 554
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Classical Model School Kaduna",
            "school_type_id" => 4,
            "city_id" => 555
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Fadiya Tuduwada",
            "school_type_id" => 4,
            "city_id" => 555
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dutsinma Science And Technical College",
            "school_type_id" => 4,
            "city_id" => 556
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Dutsin-ma",
            "school_type_id" => 6,
            "city_id" => 556
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Ajiwa",
            "school_type_id" => 4,
            "city_id" => 557
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Shehu Primary School",
            "school_type_id" => 3,
            "city_id" => 558
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 558
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Funtua",
            "school_type_id" => 4,
            "city_id" => 558
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ideal International Schools",
            "school_type_id" => 4,
            "city_id" => 558
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Focus International School",
            "school_type_id" => 4,
            "city_id" => 558
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Farin Yaro Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rafindadi Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Danmarna Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Musa YarÃ¢â‚¬â„¢adua QurÃ¢â‚¬â„¢anic Model Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gobarau Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sararin Kuka Primary School",
            "school_type_id" => 3,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Gidado Primary School Katsina",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government College Katsina",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls College Katsina",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ulul-albab Science Secondary School",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Women Teaching College",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School Kofar Yandaka",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School Kofar Sauri",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sir Usman Nagogo, College Of Arabic And Islamic Studies",
            "school_type_id" => 4,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Al-qalam University",
            "school_type_id" => 6,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Umaru Musa Yar'adua University",
            "school_type_id" => 6,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Katsina State University",
            "school_type_id" => 6,
            "city_id" => 561
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School Jikamshi",
            "school_type_id" => 4,
            "city_id" => 564
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tsintsiya Computer Training School",
            "school_type_id" => 4,
            "city_id" => 564
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Jikamshi Primary School",
            "school_type_id" => 3,
            "city_id" => 564
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tsintsiya Nursery And Primary School",
            "school_type_id" => 3,
            "city_id" => 564
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nuril Islam Academy",
            "school_type_id" => 4,
            "city_id" => 565
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Sandamu",
            "school_type_id" => 4,
            "city_id" => 567
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government Girls College Bakori",
            "school_type_id" => 4,
            "city_id" => 568
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nadabo Primary School Bakori",
            "school_type_id" => 4,
            "city_id" => 568
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity College Malumfashi",
            "school_type_id" => 4,
            "city_id" => 570
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Police Boys Secondary School",
            "school_type_id" => 4,
            "city_id" => 574
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ibrahim Sakaba Day Secondary School",
            "school_type_id" => 4,
            "city_id" => 585
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Dominic Nursery Primary Secondary School",
            "school_type_id" => 4,
            "city_id" => 585
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Umama Musa Model Primary School",
            "school_type_id" => 3,
            "city_id" => 585
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity College Jibia",
            "school_type_id" => 4,
            "city_id" => 588
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Junior Secondary School Kaita",
            "school_type_id" => 4,
            "city_id" => 589
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Girka Primary School",
            "school_type_id" => 3,
            "city_id" => 589
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Makaurachi Primary School",
            "school_type_id" => 3,
            "city_id" => 589
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dabatsu Primary School",
            "school_type_id" => 3,
            "city_id" => 589
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School Mashi",
            "school_type_id" => 4,
            "city_id" => 590
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Science And Technical College",
            "school_type_id" => 4,
            "city_id" => 590
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College Daura",
            "school_type_id" => 4,
            "city_id" => 593
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Shargelle",
            "school_type_id" => 4,
            "city_id" => 595
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kanta College",
            "school_type_id" => 4,
            "city_id" => 596
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abdullahi Fodio Secondary School",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Army Day Secondary School Birnin Kebbi",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Day Secondary School Birnin Kebbi",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Joda College",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nagari College",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. JamesÃ¢â‚¬â„¢ Anglican College",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Birnin Kebbi",
            "school_type_id" => 6,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Birnin-kebbi",
            "school_type_id" => 6,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Harmony International College",
            "school_type_id" => 4,
            "city_id" => 597
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Dirin-daji",
            "school_type_id" => 4,
            "city_id" => 598
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sheikh Abubakar Mahmud Islamic Secondary School",
            "school_type_id" => 4,
            "city_id" => 599
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kebbi State University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 602
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government Girls College Gwandu",
            "school_type_id" => 4,
            "city_id" => 604
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Technical Science College Bunza",
            "school_type_id" => 4,
            "city_id" => 606
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Andrew Namah Nursery Primary And Secondary School",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Army Day Secondary School Zuru",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bahago Day Secondary School",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Science And Technical College Zuru",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Science College Zuru",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rikoto Model Primary School",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Kings International School",
            "school_type_id" => 4,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Andi Gomo Model Primary School",
            "school_type_id" => 3,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Danga Gomo Model Primary School",
            "school_type_id" => 3,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dantudu Model Primary School",
            "school_type_id" => 3,
            "city_id" => 614
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College Yauri",
            "school_type_id" => 4,
            "city_id" => 617
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Science College Yauri",
            "school_type_id" => 4,
            "city_id" => 617
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Idah",
            "school_type_id" => 6,
            "city_id" => 619
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Jemibewon International Academy",
            "school_type_id" => 4,
            "city_id" => 620
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "C.m.m.l Special School",
            "school_type_id" => 4,
            "city_id" => 621
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community Secondary School Iyale",
            "school_type_id" => 4,
            "city_id" => 621
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community High School Kakun-kabba",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. MonicaÃ¢â‚¬â„¢s College",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. AugustineÃ¢â‚¬â„¢s College",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Local Government Secondary School Otu-egunbe",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bishop Mccalla Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Local Government Comprehensive Secondary School Kabba",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sacred Heart Secondary School Kabba",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Okedayo-kabba",
            "school_type_id" => 4,
            "city_id" => 622
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Comprehensive College Egbe",
            "school_type_id" => 4,
            "city_id" => 624
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kogi State University",
            "school_type_id" => 6,
            "city_id" => 625
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amuro Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 626
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Local Government Secondary School Ayegunle Gbede",
            "school_type_id" => 4,
            "city_id" => 627
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ahmadiyya Secondary School",
            "school_type_id" => 4,
            "city_id" => 627
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Lokoja",
            "school_type_id" => 6,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Salem University",
            "school_type_id" => 6,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Al-azhar International College",
            "school_type_id" => 4,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Arigbede College",
            "school_type_id" => 4,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Army Day Secondary School Lokoja",
            "school_type_id" => 4,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Science Secondary School Lokoja",
            "school_type_id" => 4,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Harmony Secondary School Lokoja",
            "school_type_id" => 4,
            "city_id" => 628
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okehi Community Secondary School Ikuehi",
            "school_type_id" => 4,
            "city_id" => 630
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Dekina",
            "school_type_id" => 4,
            "city_id" => 634
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ife Community Secondary School Abejukolo",
            "school_type_id" => 4,
            "city_id" => 635
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community Secondary School Ejuku",
            "school_type_id" => 4,
            "city_id" => 636
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Niomp Staff Secondary",
            "school_type_id" => 3,
            "city_id" => 637
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Imane Community Grammar School",
            "school_type_id" => 4,
            "city_id" => 638
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Jama Atu Nasril Islam Comprehensive High School Ife-olukotun",
            "school_type_id" => 4,
            "city_id" => 640
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Government College Ugwolawo",
            "school_type_id" => 4,
            "city_id" => 641
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ecwa Secondary School Mopa",
            "school_type_id" => 4,
            "city_id" => 642
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Technical College Mopa",
            "school_type_id" => 4,
            "city_id" => 642
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cruise Memorial College",
            "school_type_id" => 4,
            "city_id" => 643
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ihima Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 644
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abdullazeez Attah Memorial College",
            "school_type_id" => 4,
            "city_id" => 645
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Arabic & Islamic Studies Okene",
            "school_type_id" => 4,
            "city_id" => 645
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Okene",
            "school_type_id" => 6,
            "city_id" => 645
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ebira Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 648
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Ogaminana",
            "school_type_id" => 4,
            "city_id" => 648
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "C.o.e Demonstration Secondary School Ankpa",
            "school_type_id" => 4,
            "city_id" => 652
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community Secondary School Ankpa",
            "school_type_id" => 4,
            "city_id" => 652
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iqra Primary And Secondary School Ankpa",
            "school_type_id" => 4,
            "city_id" => 652
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Okehi Community Secondary School Oboroke",
            "school_type_id" => 4,
            "city_id" => 653
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Ogodu",
            "school_type_id" => 4,
            "city_id" => 654
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Girls Secondary School Okaba",
            "school_type_id" => 4,
            "city_id" => 655
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School Ologba",
            "school_type_id" => 4,
            "city_id" => 656
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Governmental Secondary School Iyamoye",
            "school_type_id" => 4,
            "city_id" => 657
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oke-oyi Secondary School Ponyan",
            "school_type_id" => 4,
            "city_id" => 658
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kwara State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kwara State College Of Education",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Al-hikmah University",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kwara State University",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Ilorin",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Crown Hill University",
            "school_type_id" => 6,
            "city_id" => 659
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Summit University",
            "school_type_id" => 6,
            "city_id" => 662
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Offa",
            "school_type_id" => 6,
            "city_id" => 662
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dsc Technical High School Ovwian Aladja",
            "school_type_id" => 4,
            "city_id" => 670
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Orhunwhorun High School",
            "school_type_id" => 4,
            "city_id" => 670
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St Theresa's International Schools",
            "school_type_id" => 4,
            "city_id" => 670
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Oro",
            "school_type_id" => 6,
            "city_id" => 671
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Landmark University",
            "school_type_id" => 6,
            "city_id" => 675
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekameta Community High School",
            "school_type_id" => 4,
            "city_id" => 682
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ekamefa Commercial Grammar School",
            "school_type_id" => 4,
            "city_id" => 683
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Obalatan Grammar School",
            "school_type_id" => 4,
            "city_id" => 684
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Caleb University",
            "school_type_id" => 6,
            "city_id" => 685
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Command Secondary School Ipaja",
            "school_type_id" => 4,
            "city_id" => 686
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Anchor University",
            "school_type_id" => 6,
            "city_id" => 686
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Impact Academy",
            "school_type_id" => 4,
            "city_id" => 689
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Pan-atlantic University",
            "school_type_id" => 6,
            "city_id" => 693
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lagos City Polytechnic",
            "school_type_id" => 6,
            "city_id" => 693
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lagos City Computer College",
            "school_type_id" => 6,
            "city_id" => 693
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lagos State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 693
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Lagos",
            "school_type_id" => 6,
            "city_id" => 699
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lagos State University",
            "school_type_id" => 6,
            "city_id" => 699
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adeniran Ogunsanya College Of Education",
            "school_type_id" => 6,
            "city_id" => 699
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Eko University Of Medical And Health Sciences",
            "school_type_id" => 6,
            "city_id" => 700
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "National Open University",
            "school_type_id" => 6,
            "city_id" => 704
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Pan African University",
            "school_type_id" => 6,
            "city_id" => 705
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Akoka",
            "school_type_id" => 6,
            "city_id" => 707
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Yaba College Of Technology",
            "school_type_id" => 6,
            "city_id" => 707
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cetep City University",
            "school_type_id" => 6,
            "city_id" => 707
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abdullahi Islamiyya Nursery & Primary School",
            "school_type_id" => 3,
            "city_id" => 708
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nasarawa State University",
            "school_type_id" => 6,
            "city_id" => 709
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Lafia",
            "school_type_id" => 6,
            "city_id" => 710
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Nasarawa",
            "school_type_id" => 6,
            "city_id" => 711
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Prime Scholars School",
            "school_type_id" => 4,
            "city_id" => 715
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bingham University",
            "school_type_id" => 6,
            "city_id" => 715
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Augustine's College ",
            "school_type_id" => 4,
            "city_id" => 715
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Shalom Children Academy",
            "school_type_id" => 3,
            "city_id" => 715
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Noble Height College",
            "school_type_id" => 4,
            "city_id" => 715
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Akwanga",
            "school_type_id" => 6,
            "city_id" => 720
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Bida",
            "school_type_id" => 6,
            "city_id" => 727
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ibrahim Badamasi Babangida University",
            "school_type_id" => 6,
            "city_id" => 728
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Technology Minna",
            "school_type_id" => 6,
            "city_id" => 744
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "St. Georges Grammar School",
            "school_type_id" => 4,
            "city_id" => 748
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Niger State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 750
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Abeokuta Girls Grammar School",
            "school_type_id" => 4,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ajayi Crowther University",
            "school_type_id" => 6,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Crescent University",
            "school_type_id" => 6,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Agriculture",
            "school_type_id" => 6,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Moshood Abiola University Of Science And Technology, Abeokuta",
            "school_type_id" => 6,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Moshood Abiola Polytechnic",
            "school_type_id" => 6,
            "city_id" => 752
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Olabisi Onabanjo University",
            "school_type_id" => 6,
            "city_id" => 753
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Hallmark University",
            "school_type_id" => 6,
            "city_id" => 755
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Tai Solarin University Of Education",
            "school_type_id" => 6,
            "city_id" => 757
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Babcock University",
            "school_type_id" => 6,
            "city_id" => 758
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Augustine University",
            "school_type_id" => 6,
            "city_id" => 759
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Top-class Model School",
            "school_type_id" => 3,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Covenant University",
            "school_type_id" => 6,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Allover Central Polytechnic",
            "school_type_id" => 6,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Iganmode Grammar School",
            "school_type_id" => 4,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bells University Of Technology",
            "school_type_id" => 6,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Grait International College",
            "school_type_id" => 4,
            "city_id" => 760
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Crawford University",
            "school_type_id" => 6,
            "city_id" => 768
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Ilaro",
            "school_type_id" => 6,
            "city_id" => 770
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mountain Top University",
            "school_type_id" => 6,
            "city_id" => 773
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Southwestern University",
            "school_type_id" => 6,
            "city_id" => 777
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Mcpherson University",
            "school_type_id" => 6,
            "city_id" => 778
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adekunle Ajasin University",
            "school_type_id" => 6,
            "city_id" => 779
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Of Technology Akure",
            "school_type_id" => 6,
            "city_id" => 780
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Elizade University",
            "school_type_id" => 6,
            "city_id" => 786
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ondo State University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 791
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Amure High School",
            "school_type_id" => 4,
            "city_id" => 792
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Omuooke Grammar School",
            "school_type_id" => 4,
            "city_id" => 798
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Medical Sciences",
            "school_type_id" => 6,
            "city_id" => 799
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Wesley University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 799
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adeyemi College Of Education",
            "school_type_id" => 6,
            "city_id" => 799
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Achievers University",
            "school_type_id" => 6,
            "city_id" => 800
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rufus Giwa Polytechnic",
            "school_type_id" => 6,
            "city_id" => 800
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Adeleke University",
            "school_type_id" => 6,
            "city_id" => 804
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Redeemer's University",
            "school_type_id" => 6,
            "city_id" => 804
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Ede",
            "school_type_id" => 6,
            "city_id" => 804
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Osun State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 810
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Obafemi Awolowo University",
            "school_type_id" => 6,
            "city_id" => 811
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oduduwa University",
            "school_type_id" => 6,
            "city_id" => 811
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Joseph Ayo Babalola University",
            "school_type_id" => 6,
            "city_id" => 812
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Osun State College Of Education",
            "school_type_id" => 6,
            "city_id" => 812
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Awo Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 817
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Osun State College Of Technology",
            "school_type_id" => 6,
            "city_id" => 818
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Bowen University",
            "school_type_id" => 6,
            "city_id" => 829
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kings University",
            "school_type_id" => 6,
            "city_id" => 831
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Osun State University",
            "school_type_id" => 6,
            "city_id" => 833
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Fountain University",
            "school_type_id" => 6,
            "city_id" => 833
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kola Daisi University",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lead City University",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Precious Cornerstone University",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Technical University",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Ibadan",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dominican University",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Animal Health & Production Technology",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Polytechnic",
            "school_type_id" => 6,
            "city_id" => 834
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Community Secondary School Egbeda-ega",
            "school_type_id" => 4,
            "city_id" => 843
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ladoke Akintola University Of Technology",
            "school_type_id" => 6,
            "city_id" => 852
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Oyo",
            "school_type_id" => 6,
            "city_id" => 853
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Oyo State College Of Education",
            "school_type_id" => 6,
            "city_id" => 853
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Atiba University",
            "school_type_id" => 6,
            "city_id" => 853
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Jos",
            "school_type_id" => 6,
            "city_id" => 864
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Theological College Of Northern Nigeria",
            "school_type_id" => 6,
            "city_id" => 864
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Gindiri",
            "school_type_id" => 6,
            "city_id" => 869
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Plateau State University",
            "school_type_id" => 6,
            "city_id" => 874
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Pankshin",
            "school_type_id" => 6,
            "city_id" => 876
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Comprehensive Secondary School",
            "school_type_id" => 4,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ignatius Ajuru University Of Education",
            "school_type_id" => 6,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rivers State University",
            "school_type_id" => 6,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Port Harcourt",
            "school_type_id" => 6,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Pamo University Of Medical Sciences",
            "school_type_id" => 6,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rivers State College Of Education",
            "school_type_id" => 6,
            "city_id" => 882
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "River State Polytechnic",
            "school_type_id" => 6,
            "city_id" => 891
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal College Of Education Omoku",
            "school_type_id" => 6,
            "city_id" => 894
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Sokoto State University",
            "school_type_id" => 6,
            "city_id" => 901
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Usmanu Danfodio University",
            "school_type_id" => 6,
            "city_id" => 901
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Taraba State University",
            "school_type_id" => 6,
            "city_id" => 924
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Wukari",
            "school_type_id" => 6,
            "city_id" => 926
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kwararafa University Wukari",
            "school_type_id" => 6,
            "city_id" => 926
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Yobe State University",
            "school_type_id" => 6,
            "city_id" => 941
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal Polytechnic Damaturu",
            "school_type_id" => 6,
            "city_id" => 941
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Gashua",
            "school_type_id" => 6,
            "city_id" => 942
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Federal University Gusau",
            "school_type_id" => 6,
            "city_id" => 957
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Zamfara State University",
            "school_type_id" => 6,
            "city_id" => 970
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "African University Of Science And Technology",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Baze University",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nile University Of Nigeria",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "University Of Abuja",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Veritas University",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dorben Polytechnic",
            "school_type_id" => 6,
            "city_id" => 972
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Queen Esther International School",
            "school_type_id" => 4,
            "city_id" => 973
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Hampstead Academy ",
            "school_type_id" => 4,
            "city_id" => 973
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Word Of Faith Group Of Schools",
            "school_type_id" => 4,
            "city_id" => 974
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Dominion International School",
            "school_type_id" => 4,
            "city_id" => 975
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "White Plains British School",
            "school_type_id" => 4,
            "city_id" => 975
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Ave Maria Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 976
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cherryfield College",
            "school_type_id" => 4,
            "city_id" => 976
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Rahinna Model School",
            "school_type_id" => 4,
            "city_id" => 976
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigerian Law School",
            "school_type_id" => 6,
            "city_id" => 977
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Catherina International Academy",
            "school_type_id" => 4,
            "city_id" => 978
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Cornerstone Montessori School",
            "school_type_id" => 4,
            "city_id" => 979
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Enjema Community Secondary School",
            "school_type_id" => 4,
            "city_id" => 980
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "D.m.s.s Secondary School",
            "school_type_id" => 4,
            "city_id" => 981
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Louisville Girls Secondary School",
            "school_type_id" => 4,
            "city_id" => 983
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "School For The Gifted",
            "school_type_id" => 4,
            "city_id" => 983
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Christ The King College",
            "school_type_id" => 4,
            "city_id" => 983
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lead British International School",
            "school_type_id" => 4,
            "city_id" => 984
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Livingspring International College",
            "school_type_id" => 4,
            "city_id" => 984
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Great Heights Academy",
            "school_type_id" => 4,
            "city_id" => 985
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Secondary School",
            "school_type_id" => 4,
            "city_id" => 986
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Unity High School",
            "school_type_id" => 4,
            "city_id" => 986
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Nigeria Ghana International College",
            "school_type_id" => 4,
            "city_id" => 987
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Capital Science Academy",
            "school_type_id" => 4,
            "city_id" => 987
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Capital Science Academy",
            "school_type_id" => 4,
            "city_id" => 987
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Kuje Science Primary School",
            "school_type_id" => 3,
            "city_id" => 987
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Funtaj High School",
            "school_type_id" => 4,
            "city_id" => 988
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Solid Rock International School",
            "school_type_id" => 4,
            "city_id" => 990
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "First Choice International School",
            "school_type_id" => 4,
            "city_id" => 990
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Things To Come International Academy",
            "school_type_id" => 4,
            "city_id" => 990
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Premiere Academy",
            "school_type_id" => 4,
            "city_id" => 990
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Model Secondary School",
            "school_type_id" => 4,
            "city_id" => 991
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "The Centagon International School",
            "school_type_id" => 4,
            "city_id" => 991
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Grace Garden International School",
            "school_type_id" => 4,
            "city_id" => 991
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Government Science Secondary School",
            "school_type_id" => 4,
            "city_id" => 992
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Lifegate Academy",
            "school_type_id" => 4,
            "city_id" => 993
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Arwa Basic School",
            "school_type_id" => 4,
            "city_id" => 994
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Doveland International School",
            "school_type_id" => 4,
            "city_id" => 995
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Titsall Global School",
            "school_type_id" => 4,
            "city_id" => 995
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Pace Setters College",
            "school_type_id" => 4,
            "city_id" => 996
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "Royal Family Academy",
            "school_type_id" => 4,
            "city_id" => 996
        ]);
        DB::TABLE('SCHOOLS')->INSERT([
            "name" => "College Of Education Zuba",
            "school_type_id" => 6,
            "city_id" => 997
        ]);
    }
}
