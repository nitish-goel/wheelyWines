<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Services = collect([
            ['name' => 'Performance Upgrade'],
            ['name' => 'Transmission Services'],
            ['name' => 'Break Repair & Service'],
            ['name' => 'Engine Service & Repair'],
            ['name' => 'Tyre & Wheels'],
            ['name' => 'Denting & Painting']
        ]);

        $Services->each(function($service){
            Service::create($service);
        });
    }
}
