<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Asep Gunawan',
            'email' => 'asepg@fic16.com',
            'password' => Hash::make('12345678'),
        ]);

        \App\Models\Company::create([
            'name' => 'CV. INTI SOLUSI DEVELOPER',
            'email' => 'intisolusidevelopercv@gmail.com',
            'address' => 'Kp. Angsana RT.003/001 Ds. Cibugel Kec. Cisoka Kab. Tangerang  Banten',
            'latitude' => '-6.245175999706348',
            'longitude' => '106.42587545263291',
            'radius_km' => '0.5',
            'time_in' => '08.00',
            'time_out' => '16.30',
        ]);

        $this->call([
            AttendanceSeeder::class,
            PermissionSeeder::class,
        ]);
    }
}
