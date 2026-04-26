<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::firstOrCreate([
            'name' => 'John Doe',
            'address' => '123 Main Street, Anytown, USA',
            'phone' => 1234567890,
        ]);
    }
}
