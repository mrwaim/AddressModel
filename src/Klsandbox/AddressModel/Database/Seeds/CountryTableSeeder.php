<?php

namespace Klsandbox\AddressModel\Database\Seeds;

use Illuminate\Database\Seeder;
use Klsandbox\AddressModel\Models\Country;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        if (Country::all()->count() > 0) {
            return;
        }

        Country::create(array(
            'name' => 'Malaysia',
        ));

        Country::create(array(
            'name' => 'Singapore',
        ));

        Country::create(array(
            'name' => 'Brunei',
        ));
    }
}
