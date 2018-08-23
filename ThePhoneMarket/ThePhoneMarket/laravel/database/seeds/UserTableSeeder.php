<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 9)->create();

        $superAdmin = factory(User::class)->create([
            'email' => 'test@example.com',
            'password' => bcrypt('secret'),
            'firstname' => 'Test',
            'lastname' => 'User'
        ]);

        $superAdmin->roles()->attach(1);
    }
}
