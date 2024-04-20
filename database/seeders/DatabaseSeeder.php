<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();
        //  \App\Models\Role::create(['name'=>'admin']);
        //  \App\Models\Role::create(['name'=>'expert']);
        //  \App\Models\Role::create(['name'=>'farmer']);
        //  \App\Models\Role::create(['name'=>'user']);
        $admin_role = Role::create(['name' => 'admin']);
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'pssword'=> bcrypt('password')
        
        ]);

        $admin->assignRole($admin_role);

        $user_role = Role::create(['name' => 'admin']);
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'pssword'=> bcrypt('password')
        
        ]);

        $admin->assignRole($user_role);


        // $permission = Permission::create(['name' => 'edit articles']);

    }
}
