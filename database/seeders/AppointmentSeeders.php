<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Appointment;

class AppointmentSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Appointment::Create([
            "name" => 'test',
            "phone" => '0987654321',
            "car_company" => 'Tata',
            "car_name" => 'Scarpio',
            "car_model" => '2026',
            "service_id" => 2,
            "service_name" => 'Transmission Services',
            "amount" => 50,
            "payment_id" => 1,
            "order_id" => 1,
            "status" => 1
        ]);
    }
}
