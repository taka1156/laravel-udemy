<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // クエリビルダーでダミーデータを登録
        DB::table('users')->insert([
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'あああ',
                'email' => 'test1@test1.com',
                'password' => Hash::make('test0001'),
            ],
            [
                'name' => 'いいい',
                'email' => 'test2@test2.com',
                'password' => Hash::make('test0002'),
            ],
            [
                'name' => 'ううう',
                'email' => 'test3@test3.com',
                'password' => Hash::make('test0003'),
            ]
        ]);
    }
}
