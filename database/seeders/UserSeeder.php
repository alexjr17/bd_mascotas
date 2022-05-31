<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'name' => 'Alex Rodriguez',
            'email' => 'alex@gmail.com',
            'password' => bcrypt('12345678')
        ])->syncRoles(['admin']);
        User::create([
            'name' => 'Alex Rodriguez',
            'email' => 'alexcliente@gmail.com',
            'password' => bcrypt('12345678')
        ])->assignRole(['cliente']);
        User::factory(10)->create();
    }
}
