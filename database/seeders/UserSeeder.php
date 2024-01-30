<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ini buat role name ke table role
       $roleadmin = Role::create(['name'=>'admin']);
       $roleuser = Role::create(['name'=>'user']);
       $rolekaprodi = Role::create(['name'=>'kaprodi']); 
       //ini buat insert data user dg role yang sudah dibuat menggunakan syncroles
       $admin = User::create([
        'name'=>'admin',
        'email'=>'admin@gmail.com',
        'password'=>bcrypt('admin123'),
    ]);
    //ini memberikan role yang sudah dibuat
    $admin->syncRoles($roleadmin);

 //ini buat insert data user dg role yang sudah dibuat menggunakan syncroles
    $user = user::create([
        'name'=>'user',
        'email'=>'user@gmail.com',
        'password'=>bcrypt('user123'),

    ]);
//ini memberikan role yang sudah dibuat
    $user->syncRoles($roleuser);

    $kaprodi = user::create([
        'name'=>'kaprodi',
        'email'=>'kaprodi@gmail.com',
        'password'=>bcrypt('kaprodi123'),
    ]);

    $kaprodi->syncRoles($rolekaprodi);
    }
    
    
}
