<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Unit;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DummySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => Hash::make('123456'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);

        Department::insert(collect([
            ['name' => 'Department A'],
            ['name' => 'Department B'],
            ['name' => 'Department C'],
        ])->map(function ($data) {
            return array_merge($data, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        })->toArray());

        Unit::insert(collect([
            ['name' => 'KG'],
            ['name' => 'Piece'],
        ])->map(function ($data) {
            return array_merge($data, [
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        })->toArray());
    }
}
