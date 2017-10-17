<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_client  = Role::where('name', 'client')->first();


        $admin = new User();
        
        $admin->firstname = 'PC';
        $admin->lastname = 'Mod';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('secret');
        $admin->avatar = 'public/defaults/avatars/male.png';
        $admin->slug = str_slug('personal-computer-mod');
        $admin->gender = "male";
        $admin->save();
        $admin->roles()->attach($role_admin);
        
        $client_mark = new User();

        $client_mark->firstname = 'Mark';
        $client_mark->lastname = 'Zuckerberg';
        $client_mark->email = 'mark@gmail.com';
        $client_mark->password = bcrypt('secret');
        $client_mark->avatar = 'public/defaults/avatars/male.png';
        $client_mark->slug = str_slug('mark-zuckerberg');
        $client_mark->gender = "male";
        $client_mark->save();
        $client_mark->roles()->attach($role_client);


        $client_gal = new User();

        $client_gal->firstname = 'Gal';
        $client_gal->lastname = 'Gadot';
        $client_gal->email = 'gal@gmail.com';
        $client_gal->password = bcrypt('secret');
        $client_gal->avatar = 'public/defaults/avatars/female.png';
        $client_gal->slug = str_slug('gal-gadot');
        $client_gal->gender = "female";
        $client_gal->save();
        $client_gal->roles()->attach($role_client);

    }
}
