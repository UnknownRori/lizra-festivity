<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\News;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'UnknownRori',
            'email' => 'UnknownRori@mail.com',
            'password' => 'UnknownRori',
        ]);

        News::factory(4)->for($user)->create();
    }
}
