<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some stuff
	    Role::upsert(array(
            [
                'id'    => 1,
                'name'  => 'Patient',
                'guard_name' => 'web',
            ],
            [
                'id'    => 2,
                'name'  => 'Doctor',
                'guard_name' => 'web',
            ],
        ),['name'],['id','name','guard_name']);
    }
}
