<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    private $roles = [
      'admin', 'user'
    ];
    public function run()
    {
        foreach ($this->roles as $role){
            DB::table('roles')->insert(['role_name'=>$role]);
        }
        //Lozinka3993!
    }
}
