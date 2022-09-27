<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::truncate();


        $country = [
            [
                'name' => 'India',
            ],
            [
                'name' => 'Australia',
            ],
            [
                'name' => 'Bahamas',
            ],
            [
                'name' => 'Brazil',
            ],
            [
                'name' => 'Colombia',
            ],
        ];

        Country::insert($country);
    }
}
