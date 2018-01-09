<?php

use Illuminate\Database\Seeder;

class UserTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('user_types')->insert([
        //     'id' => 0,
        //     'description' => 'Admin',
        //     'status' => 'A',
        //     'rank' => 0,
        // ]);

        DB::table('user_types')->insert([
            'id' => 1,
            'description' => 'Merchant',
            'status' => 'A',
            'rank' => 1,
        ]);
        
        DB::table('user_types')->insert([
            'id' => 2,
            'description' => 'Customer',
            'status' => 'A',
            'rank' => 2,
        ]);

        DB::table('user_types')->insert([
            'id' => 3,
            'description' => 'Agent',
            'status' => 'A',
            'rank' => 3,
        ]);
     
    }
}
