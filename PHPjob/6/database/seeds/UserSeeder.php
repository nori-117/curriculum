<?php

use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'あああ',
            'email' => 'aaa@mailaddress.com',
            'password' => bcrypt('aaaaaaaa'),
        ]);

        DB::table('users')->insert([
            'name' => 'いいい',
            'email' => 'iii@mailaddress.com',
            'password' => bcrypt('iiiiiiii'),
        ]);

        DB::table('users')->insert([
            'name' => 'ううう',
            'email' => 'uuu@mailaddress.com',
            'password' => bcrypt('uuuuuuuu'),
        ]);
    }
}
