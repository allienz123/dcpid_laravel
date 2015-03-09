<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();


        $users = array(
            array(
                'username'      => 'superadmin',
                'email'      => 'superadmin@example.org',
                'password'   => Hash::make('superadmin'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'first_name' => 'prasetyawidi',
                'last_name' => 'indrawan',
                'phone' => '085710655582',
            ),
            array(
                'username'      => 'admin',
                'email'      => 'admin@example.org',
                'password'   => Hash::make('admin'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'first_name' => 'admin',
                'last_name' => 'admin',
                'phone' => '085710655582',
            ),
              array(
                'username'      => 'user',
                'email'      => 'user@example.org',
                'password'   => Hash::make('user'),
                'confirmed'   => 1,
                'confirmation_code' => md5(microtime().Config::get('app.key')),
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
                'first_name' => 'user',
                'last_name' => 'user',
                'phone' => '085710655582',
            )
        );

        DB::table('users')->insert( $users );
    }

}
