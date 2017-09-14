<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Draconic',
            'email' => 'draconic@gmail.com',
            'password' => Hash::make('dra123'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Stenger',
            'email' => 'stenger@gmail.com',
            'password' => Hash::make('ste456'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Ramberg',
            'email' => 'ramberg@gmail.com',
            'password' => Hash::make('ram789'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Fenskee',
            'email' => 'fenskee@gmail.com',
            'password' => Hash::make('fen147'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Solberg',
            'email' => 'solberg@gmail.com',
            'password' => Hash::make('sol258'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Snaffle',
            'email' => 'snaffle@gmail.com',
            'password' => Hash::make('sna369'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Xtruder',
            'email' => 'xtruder@gmail.com',
            'password' => Hash::make('xtr159'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Doozles',
            'email' => 'doozles@gmail.com',
            'password' => Hash::make('doo357'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Nonamer',
            'email' => 'nonamer@gmail.com',
            'password' => Hash::make('non124'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Frogger',
            'email' => 'frogger@gmail.com',
            'password' => Hash::make('fro235'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Saitama',
            'email' => 'saitama@gmail.com',
            'password' => Hash::make('sai125'),
            'role' => 'player',
        ]);

        DB::table('users')->insert([
            'name' => 'Flander',
            'email' => 'flander@gmail.com',
            'password' => Hash::make('fla458'),
            'role' => 'player',
        ]);

        

    }
}
