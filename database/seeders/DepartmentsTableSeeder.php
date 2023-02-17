<?php

namespace Database\Seeders;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (Department::count() === 0) {
            $now = Carbon::now();
            Department::insert([
                ['name' => 'Soporte','all_agents' => '0','public' => '1','created_at' => $now, 'updated_at' => $now],
                ['name' => 'SoporteNivel_1','all_agents' => '0','public' => '0','created_at' => $now, 'updated_at' => $now],
                ['name' => 'SoporteNivel_2','all_agents' => '0','public' => '0','created_at' => $now, 'updated_at' => $now]
            ]);

        }
    }
}
