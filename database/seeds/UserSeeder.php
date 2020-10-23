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
                'lname' => 'Abella',
                'fname' =>  'Phagie',
                'address' => 'Centro, Tubigon, Bohol',
                'phone' => '09433599709',
                'email' => 'aphagie@gmail.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Buligan,
                'fname' => 'Jacky',
                'address' => 'Macaas, Tubigon, Bohol',
                'phone' => '0912.568.2222',
                'email' => 'Jack@email.com',
                'password' => bcrypt('password123')
            ],
            [
                'lname' => 'Bagolor',
                'fname' => 'Kenn Jay',
                'address' => 'Tubigon, Bohol',
                'phone' => '0922.555.6666',
                'email' => 'Kenn@email.com',
                'password' => bcrypt('password123')
            ],
        ];

        foreach($data as $usr) {
            \App\User::create($usr);
        }
    }
}
