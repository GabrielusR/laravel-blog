<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Setting::create([
           'site_name' => 'BLOG',
            'address' => 'Brasil, Rio de Janeiro',
            'contact_number' => '(21) 9999 - 9999',
            'contact_email' => 'admin@blog.com'
        ]);
    }
}
