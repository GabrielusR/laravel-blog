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
        $user = App\User::create([
            'name' => 'Gabriel Ramos',
            'email' => 'gabrielramos1510@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);
        
        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/admin.jpg',
            'about' => 'Lorem ipsum',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
        
    }
}
