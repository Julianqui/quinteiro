<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        [
        'email'=>'gabrielhocsman@gmail.com',
        'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',

        ],
        [

        'email'=>'fbunge@bungesa.com.ar',
        'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        // 'admin'=>1,
        ],
        [

        'email'=>'luguergus.lv@gmail.com',
        'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        // 'admin'=>1,
        ],
        [
        'email'=>'santiagobouso@hotmail.com',
        'password'=>'$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm',
        // 'admin'=>1,
        ]
    ]);
    factory(App\User::class)->times(46)->create();
    }
}
