<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class StaffBranch extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        $staffbranch = [
            ['staffNo' => 'S1.21', 'sName' =>'John White', 'position' => 'Manager', 'salary' => '30000', 'branchNo' => 'B005', 'bAddress' => '22 Deer Rd, London'],
            ['staffNo' => 'SG37', 'sName' =>'Ann Beech', 'position' => 'Assistent', 'salary' => '12000', 'branchNo' => 'B003','bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SG14', 'sName' =>'David Food', 'position' => 'Supervisior', 'salary' => '18000','branchNo' => 'B003','bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SA9', 'sName' =>'Marry Howe', 'position' => 'Asisstent', 'salary' => '9000', 'branchNo' => 'B007','bAddress' => '16 Argyll St, Glasgow'],
            ['staffNo' => 'SG5', 'sName' =>'Susan Brand', 'position' => 'Manager', 'salary' => '24000', 'branchNo' => 'B003','bAddress' => '163 Main St, Glasgow'],
            ['staffNo' => 'SL41', 'sName' =>'Julie Lee', 'position' => 'Assistent', 'salary' => '9000', 'branchNo' => 'B005','bAddress' => '22 Deer Rd, London'],

        ];
        DB::table('staff_branches')->insert($staffbranch);
    }
    
    }

