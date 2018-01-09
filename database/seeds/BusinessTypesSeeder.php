<?php

use Illuminate\Database\Seeder;

class BusinessTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('business_types')->insert([
            'name' => 'Restaurant',
            'description' => 'Restaurant',
            'status' => 'A',
            'default_color' => '#BE1A21'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Nail & Spa',
            'description' => 'Nail & Spa',
            'status' => 'A',
            'default_color' => '#ff569b'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Grocery & Supermarket',
            'description' => 'Grocery & Supermarket',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Travel & Entertainment',
            'description' => 'Travel & Entertainment',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Retail',
            'description' => 'Retail',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Gas Station',
            'description' => 'Gas Station',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Health & Fitness',
            'description' => 'Health & Fitness',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Pets',
            'description' => 'Pets',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Automotives',
            'description' => 'Automotives',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Pets',
            'description' => 'Pets',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Cafe',
            'description' => 'Cafe',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);

        DB::table('business_types')->insert([
            'name' => 'Hotel',
            'description' => 'Hotel',
            'status' => 'A',
            'default_color' => '#8ec63f'
        ]);
    }
}
