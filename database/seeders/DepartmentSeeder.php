<?php

namespace Database\Seeders;

use App\Http\Controllers\DepartmentController;
use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create(['name' => 'sistem informasi']);
        Department::create(['name' => 'tekni informatika']);
        Department::create(['name' => 'bisnis digital']);
        Department::create(['name' => 'pendidikan informasi']);
        Department::create(['name' => 'teknologi informasi']);
        Department::create(['name' => 'magister komputer']);
    }
}
