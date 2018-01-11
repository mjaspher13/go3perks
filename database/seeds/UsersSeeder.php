<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'account_id' => sprintf("%08d", 1),
            'username' => 'agent007',
            'password' => bcrypt('agent007'),
            'last_name' => '007',
            'first_name' => 'Agent',
            'email' => 'agent@agent.com',
            'mobile' => '1234567891',
            'user_type' => 3,
            'status' => 'A',
            'role' => 3
        ]);

        DB::table('users')->insert([
            'account_id' => sprintf("%08d", 0),
            'username' => 'mjaspher13',
            'password' => bcrypt('mjaspher13'),
            'last_name' => 'Ayala',
            'first_name' => 'Mark',
            'email' => 'mark@ayala.com',
            'mobile' => '1234567890',
            'user_type' => 0,
            'status' => 'A',
            'role' => 4
        ]);
        
        DB::table('users')->insert([
            'account_id' => sprintf("%08d", 2),
            'username' => 'oishi1',
            'password' => bcrypt('oishi1'),
            'last_name' => 'Oishi',
            'first_name' => 'Oishi',
            'email' => 'oishi@oishi.com',
            'mobile' => '1234567892',
            'user_type' => 1,
            'status' => 'A',
            'role' => 1
        ]);

        DB::table('users')->insert([
            'account_id' => sprintf("%08d", 3),
            'username' => 'nailpolish',
            'password' => bcrypt('nailpolish'),
            'last_name' => 'Polish',
            'first_name' => 'Nail',
            'email' => 'nail@polish.com',
            'mobile' => '1234567893',
            'user_type' => 1,
            'status' => 'A',
            'role' => 1
        ]);

        DB::table('users')->insert([
            'account_id' =>sprintf("%08d", 4),
            'username' => 'customer',
            'password' => bcrypt('customer'),
            'last_name' => 'Customer',
            'first_name' => 'Customer',
            'email' => 'customer@customer.com',
            'mobile' => '1234567894',
            'user_type' => 2,
            'status' => 'A',
            'role' => 2
        ]);
    }
}
