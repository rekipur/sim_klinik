<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // membuat Role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "Admin";
        $adminRole->save();

         // membuat Role member
        $memberRole = new Role();
        $memberRole->name = "member";
        $memberRole->display_name = "Member";
        $memberRole->save();

        //membuat Sample Admin
        $admin = new User();
        $admin->name = ' IT Development';
        $admin->email = 'it@gmail.com';
        $admin->password = bcrypt('armagedon');
        $admin->save();
        $admin->attachRole($adminRole);

        //membuat Sample member
        $member = new User();
        $member->name = ' Member Tata Usaha';
        $member->email = 'member@gmail.com';
        $member->password = bcrypt('rahasia');
        $member->save();
        $member->attachRole($memberRole);
    }
}
