<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rs_role = Role::create(['name' => 'rs clerk']);
        $rs_permission = [
            [
                'name'  => 'create rs'
            ],
            [
                'name'  => 'view rs'
            ],
            [
                'name'  => 'delete rs'
            ],
            [
                'name'  => 'archive rs'
            ],
        ]; 

        foreach ($rs_permission as $permission)
        {
            $permission = Permission::create($permission);
            $rs_role->givePermissionTo($permission);
        }
        
        $mi_role = Role::create(['name' => 'mi clerk']);
        $mi_permission = [
            [
                'name'  => 'create mi'
            ],
            [
                'name'  => 'view mi'
            ],
            [
                'name'  => 'delete mi'
            ],
            [
                'name'  => 'archive mi'
            ],
        ]; 

        foreach ($mi_permission as $permission)
        {
            $permission = Permission::create($permission);
            $mi_role->givePermissionTo($permission);
        }

        $mro_role = Role::create(['name' => 'mro clerk']);
        $mro_permission = [
            [
                'name'  => 'create mro'
            ],
            [
                'name'  => 'view mro'
            ],
            [
                'name'  => 'delete mro'
            ],
            [
                'name'  => 'archive mro'
            ],
        ]; 

        foreach ($mro_permission as $permission)
        {
            $permission = Permission::create($permission);
            $mro_role->givePermissionTo($permission);
        }

        $dm_role = Role::create(['name' => 'dm clerk']);
        $dm_permission = [
            [
                'name'  => 'create dm'
            ],
            [
                'name'  => 'view dm'
            ],
            [
                'name'  => 'delete dm'
            ],
            [
                'name'  => 'archive dm'
            ],
        ]; 

        foreach ($dm_permission as $permission)
        {
            $permission = Permission::create($permission);
            $dm_role->givePermissionTo($permission);
        }

        $fg_role = Role::create(['name' => 'fg clerk']);
        $fg_permission = [
            [
                'name'  => 'create fg'
            ],
            [
                'name'  => 'view fg'
            ],
            [
                'name'  => 'delete fg'
            ],
            [
                'name'  => 'archive fg'
            ],
        ]; 

        foreach ($fg_permission as $permission)
        {
            $permission = Permission::create($permission);
            $fg_role->givePermissionTo($permission);
        }

        $fa_role = Role::create(['name' => 'fa clerk']);
        $fa_permission = [
            [
                'name'  => 'create fa'
            ],
            [
                'name'  => 'view fa'
            ],
            [
                'name'  => 'delete fa'
            ],
            [
                'name'  => 'archive fa'
            ],
        ]; 

        foreach ($fa_permission as $permission)
        {
            $permission = Permission::create($permission);
            $fa_role->givePermissionTo($permission);
        }

        $ma_role = Role::create(['name' => 'ma clerk']);
        $ma_permission = [
            [
                'name'  => 'create ma'
            ],
            [
                'name'  => 'view ma'
            ],
            [
                'name'  => 'delete ma'
            ],
            [
                'name'  => 'archive ma'
            ],
        ]; 

        foreach ($ma_permission as $permission)
        {
            $permission = Permission::create($permission);
            $ma_role->givePermissionTo($permission);
        }

        $mr_role = Role::create(['name' => 'mr clerk']);
        $mr_permission = [
            [
                'name'  => 'create mr'
            ],
            [
                'name'  => 'view mr'
            ],
            [
                'name'  => 'delete mr'
            ],
            [
                'name'  => 'archive mr'
            ],
        ]; 

        foreach ($mr_permission as $permission)
        {
            $permission = Permission::create($permission);
            $mr_role->givePermissionTo($permission);
        }

        $sc_role = Role::create(['name' => 'sc clerk']);
        $sc_permission = [
            [
                'name'  => 'create sc'
            ],
            [
                'name'  => 'view sc'
            ],
            [
                'name'  => 'delete sc'
            ],
            [
                'name'  => 'archive sc'
            ],
        ]; 

        foreach ($sc_permission as $permission)
        {
            $permission = Permission::create($permission);
            $sc_role->givePermissionTo($permission);
        }

        $c_level = Role::create(['name' => 'administrator']);
        $user_management_permission = [
            [
                'name'  => 'create user'
            ],
            [
                'name'  => 'view user'
            ],
            [
                'name'  => 'delete user'
            ],
            [
                'name'  => 'suspend user'
            ],
            [
                'name'  => 'create department'
            ],
            [
                'name'  => 'delete department'
            ],
            [
                'name'  => 'create employee'
            ],
            [
                'name'  => 'delete employee'
            ],
            [
                'name'  => "view log"
            ],
            [
                'name'  => 'disable user',
            ],
            [
                'name'  => 'change role',
            ],
            [
                'name'  => 'change permission',
            ],
        ]; 

        foreach ($user_management_permission as $permission)
        {
            $permission = Permission::create($permission);
        }

        $c_level->givePermissionTo(Permission::all());

        $rs = Permission::where('name', 'create rs')->first();
        $rs->syncRoles(['mi clerk', 'mro clerk', 'dm clerk' , 'fg clerk', 'fa clerk', 'ma clerk', 'mr clerk', 'sc clerk', 'administrator']);
    }
}
