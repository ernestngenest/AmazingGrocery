<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Gender;
use App\Models\Items;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Role::create([
            'id' => '1',
            'name' => 'user'
        ]);
        Role::create([
            'id' => '2',
            'name'  => 'admin'
        ]);
        
        Gender::create([
                'id'=>'1',
                'gender_desc' => 'male'
            ]);
        Gender::create([
            'id'=>'2',
            'gender_desc' => 'female'
        ]);
            Items::factory(20)->create();
        }
    }
    