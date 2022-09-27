<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::truncate();

        $company = [
            [
                'name' => 'L&T',
                'country_id' => 1
            ],
            [
                'name' => 'TCS',
                'country_id' => 1
            ],
            [
                'name' => 'Google',
                'country_id' => 2
            ],
            [
                'name' => 'Microsoft',
                'country_id' => 3
            ],
            [
                'name' => 'JP-Morgan',
                'country_id' => 4
            ],
        ];

        Company::insert($company);
    }
}
