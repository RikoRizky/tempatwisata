<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WisataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $wisata = ([
            ([
                "id" => "123",
                "name" => "pantai pandawa bali",
                "location" => "bali",
                "details" => "pantai",
                "day-open" => "Monday",
                "time-open" => "07.00 - 22.00",
                "pricing" => "free",
            ]),
            ]);
    }
}
