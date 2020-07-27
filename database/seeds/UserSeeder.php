<?php

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_superadmin = User::create([
            'name' => 'Owner',
            'username' => 'root',
            'password' => Hash::make('r00t...!!!')
        ]);

        $role_superadmin = Role::create(['name' => 'superadmin']);
        $role_admin = Role::create(['name' => 'admin']);
        $role_user = Role::create(['name' => 'user']);

        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'read users']);
        Permission::create(['name' => 'update users']);
        Permission::create(['name' => 'delete users']);

        $permission_users = array(
            'create users', 'read users', 'update users', 'delete users'
        );

        Permission::create(['name' => 'create roles']);
        Permission::create(['name' => 'read roles']);
        Permission::create(['name' => 'update roles']);
        Permission::create(['name' => 'delete roles']);

        $permission_roles = array(
            'create roles', 'read roles', 'update roles', 'delete roles'
        );

        Permission::create(['name' => 'create permissions']);
        Permission::create(['name' => 'read permissions']);
        Permission::create(['name' => 'update permissions']);
        Permission::create(['name' => 'delete permissions']);

        $permission_permissions = array(
            'create permissions', 'read permissions', 'update permissions', 'delete permissions'
        );

        Permission::create(['name' => 'access settings']);

        $role_superadmin->syncPermissions(array_merge(
            $permission_users, $permission_roles, $permission_permissions,
            $permission_permissions, ['access settings']
        ));

        $role_admin->syncPermissions(array_merge(
            $permission_users
        ));

        $user_superadmin->syncRoles($role_superadmin);
    }
}
