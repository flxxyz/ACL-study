<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Ultraware\Roles\Models\Permission;
use Ultraware\Roles\Models\Role;

class RoleController extends Controller
{
    public function step1()
    {
        Role::create([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        Role::create([
            'name' => 'Member',
            'slug' => 'member',
            'description' => '', // optional
            'level' => 2, // optional, set to 1 by default
        ]);
        Role::create([
            'name' => 'Vip',
            'slug' => 'vip',
            'description' => '', // optional
            'level' => 3, // optional, set to 1 by default
        ]);
        Role::create([
            'name' => 'Sponsor',
            'slug' => 'sponsor',
            'description' => '', // optional3
            'level' => 4, // optional, set to 1 by default
        ]);

        return 'done1';
    }
    
    public function step2()
    {
        $createUsersPermission = Permission::create([
            'name' => 'Create users',
            'slug' => 'create.users',
            'description' => '', // optional
        ]);

        $deleteUsersPermission = Permission::create([
            'name' => 'Delete users',
            'slug' => 'delete.users',
        ]);

        return 'done2';
    }
    
    public function step3()
    {
        $user = User::find(2);

        $user->attachRole(2);
        //dd($user);
        return 'done3';
    }

    public function step4()
    {
        $user = User::find(1);

        if(!$user->hasRole('admin')) {
            return '不可以浏览';
        }

        dd('done4');
    }
}
