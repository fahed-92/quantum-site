<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        User::create([
            'name' => 'superadmin',
            'full_name'=> 'Super Admin',
            'email'=> 'super@ae.com',
            'password'=> Hash::make('123456'),
            'image'=> $faker->imageUrl('200', '200'),
            'created_at'=> now(),
            'updated_at'=> now(),
        ]);
    }
}
