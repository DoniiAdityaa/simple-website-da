<?php

namespace Database\Seeders;

use App\Models\User;
use Attribute;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use League\CommonMark\Extension\Attributes\Node\Attributes;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'donex@gmail.com',
            'password' => bcrypt(value:'lebahganteng'),

        ]);
    }
}
