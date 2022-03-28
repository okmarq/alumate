<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            'name' => 'Accounting',
        //     'school_id' => 1,
        //     'department_id' => 1
        ]);
    }
}
Agriculture
Arts
Biological Sciences
Administration
Dentistry
Education
Engineering
Environmental Sciences
Health Sciences & Technology
Law
Medical Sciences
Pharmaceutical Sciences
Physical Sciences
Social Sciences
Veterinary Medicine