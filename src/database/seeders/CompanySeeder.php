<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::firstOrCreate([
            'logo' => '',
            'name' => 'Najwa',
            'phone' => '081912804190',
            'address' => 'Jalan Indah Bunga',
            'state' => 'Jakarta',
            'country' => 'Indonesia',
            'postcode' => '12345',
        ]);
    }
}
