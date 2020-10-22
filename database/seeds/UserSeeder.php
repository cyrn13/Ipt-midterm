<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
            'lname'=> 'Tan',
            'fname'=> 'Christian',
            'address'=> 'Pondol, Loon, Bohol',
            'phone'=> '0949.694.1593',
            'email'=> 'chrisTan@gmail.com',
            'password'=>bcrypt('password123')
        ],

        [
            'lname' => 'Yap',
            'fname' => 'Angel',
            'address' => 'Lajog, Jagna, Bohol',
            'phone' => '0909.087.2350',
            'email' => 'angelYap@yahoo.com',
            'password' => bcrypt('password123')
        ],
        [
            'lname' => 'Cyreen',
            'fname' => 'Campejos',
            'address' => 'Cogon, Cortes, Bohol',
            'phone' => '0909.980.2350',
            'email' => 'cycamp@yahoo.com',
            'password' => bcrypt('password123')
             ],
        ];

        foreach($data as $user) {
            \App\User::create($user);
        }
    }
}
