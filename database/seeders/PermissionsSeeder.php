<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit_booking']);
        Permission::create(['name' => 'delete_booking']);
        Permission::create(['name' => 'create_booking']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'booking_manager']);
        $role1->givePermissionTo('edit_booking');
        $role1->givePermissionTo('create_booking');

        $role2 = Role::create(['name' => 'admin']);
        $role1->givePermissionTo('edit_booking');
        $role1->givePermissionTo('create_booking');
        $role2->givePermissionTo('delete_booking');

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'password' => bcrypt('secret'),
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('secret'),
        ]);
        $user->assignRole($role2);
    }
}