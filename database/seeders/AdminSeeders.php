<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::Create([
            "user_id" => 'wineAdmin',
            "password" => Hash::make('#591100'),
            "news" => '',
        ]);
    }
}
