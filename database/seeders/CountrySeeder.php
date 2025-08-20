<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    public function run()
    {
        $countries = ['Pakistan', 'India'];

        foreach ($countries as $country) {
            Country::create([
                'name' => $country,
                'slug' => Str::slug($country)
            ]);
        }
    }
}
