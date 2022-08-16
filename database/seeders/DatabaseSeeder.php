<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $data = [
            [
                'std'=>'00000000001',
                'name'=>'Admin',
                'lastname'=>'Admin',
                'email'=>'admin@mail.com',
                 'type'=>'1',
                'password'=> bcrypt('12345678'),
            ],
            [
                'std'=>'00000000002',
                'name'=>'User',
                'lastname'=>'User',
                'email'=>'user@mail.com',
                 'type'=>'2',
                'password'=> bcrypt('12345678'),
            ],
            [
                'std'=>'00000000003',
                'name'=>'professor',
                'lastname'=>'professor',
                'email'=>'professor@mail.com',
                 'type'=>'3',
                'password'=> bcrypt('12345678'),
            ]
        ];

        foreach ($data as $key => $value) {
            \App\Models\User::create($value);
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
