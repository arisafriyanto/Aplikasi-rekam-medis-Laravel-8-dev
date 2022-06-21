<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::create([
            'name' => 'Aris Afriyanto',
            'username' => 'afriyan',
            'email' => 'arisafriyanto1933@gmail.com',
            'password' => bcrypt('afriyan1933'),
        ]);
    }
}
