<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = [
            [
                'name' => 'Hardik',
                'company_id' => 1
            ],
            [
                'name' => 'Ram',
                'company_id' => 2
            ],
            [
                'name' => 'Jon',
                'company_id' => 3
            ],
            [
                'name' => 'Smeet',
                'company_id' => 4
            ],
            [
                'name' => 'Poorv',
                'company_id' => 5
            ],
        ];

        User::insert($user);
    }
}
