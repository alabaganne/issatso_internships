<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\User;
use App\Models\City;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory(15)->create()
            ->map(function($company) {
                $company->user()->save(
                    User::factory()->create()
                );
            });
    }
}
