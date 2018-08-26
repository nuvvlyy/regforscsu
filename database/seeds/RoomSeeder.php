<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name' => 'Internet of thing'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Applications and games'
        ]);
        DB::table('rooms')->insert([
            'name' => 'Robot'
        ]);
    }
}
