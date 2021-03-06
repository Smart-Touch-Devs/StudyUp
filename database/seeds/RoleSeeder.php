<?php

use App\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['admin','client'];
        foreach ($roles as $role){
            Role::create([
                'name' => $role,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
