<?php

class RolesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();


        $adminRole = new Role;
        $adminRole->name = 'admin';
        $adminRole->save();

        $commentRole = new Role;
        $commentRole->name = 'comment';
        $commentRole->save();

        $superadminRole = new Role;
        $superadminRole->name = 'superadmin';
        $superadminRole->save();

        $user = User::where('username','=','admin')->first();
        $user->attachRole( $adminRole );

        $user = User::where('username','=','user')->first();
        $user->attachRole( $commentRole );

        $user = User::where('username','=','superadmin')->first();
        $user->attachRole( $superadminRole );

    }

}
