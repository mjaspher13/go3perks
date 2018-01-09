<?php

use Illuminate\Database\Seeder;

class MerchantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('merchants')->insert([
            'merchant_id' => sprintf("%08d", 2),
            'iso_id' => 1,
            'agent_id' => sprintf("%08d", 1),
            'merchant_code' => 'Oishi Company',
            'merchant_name' => 'Nagasaki',
            'merchant_logo' => 'img/merchants/00000002/logo.png',
            'business_type' => 1,
            'address' => 'Alapan IA',
            'city' => 'Imus City',
            'state' => 'Cavite',
            'zip' => 4103,
            'country' => 'Philippines',
            'support_email' => 'oishi@support.com',
            'support_contact_number' => '911',
            'telephone' => '4714058',
            'fax' => '4714059',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'status' => 'A',
            'latitude' => 14.4047237,
            'longitude' => 120.9632383,
            'sound' => 'default',
            'punchcard_notif' => 0,
            'promo_notif' => 0,
            'custom_app' => 0,
            'check_in_rate' => 0,
            'display_checkin' => 0,
        ]);

        DB::table('merchants')->insert([
            'merchant_id' => sprintf("%08d", 3),
            'iso_id' => 3,
            'agent_id' => sprintf("%08d", 1),
            'merchant_code' => 'Nail Polish Salon',
            'merchant_name' => 'Hiroshima',
            'merchant_logo' => 'img/merchants/00000003/logo.png',
            'business_type' => 2,
            'address' => 'Bagbaguin Public Market Bus Stop, General Luis',
            'city' => 'Caloocan City',
            'state' => 'Metro Manila',
            'zip' => 1420,
            'country' => 'Philippines',
            'support_email' => 'nailpolish@support.com',
            'support_contact_number' => '912',
            'telephone' => '4714060',
            'fax' => '4714061',
            'created_by' => 'Seeder',
            'updated_by' => 'Seeder',
            'status' => 'A',
            'latitude' => 14.7187683,
            'longitude' => 121.0049374,
            'sound' => 'default',
            'punchcard_notif' => 1,
            'promo_notif' => 1,
            'custom_app' => 1,
            'check_in_rate' => 1,
            'display_checkin' => 1,
        ]);
    }
}
