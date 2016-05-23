<?php

namespace Klsandbox\AddressModel\Database\Seeds;

use Illuminate\Database\Seeder;
use Klsandbox\AddressModel\Models\Country;
use Klsandbox\SiteModel\Site;

class CountryTableSeeder extends Seeder
{
    public function run()
    {
        if (Country::all()->count() > 0) {
            return;
        }

        foreach (Site::all() as $site) {
            Site::setSite($site);
            $this->runForSite($site->id);
        }
    }

    public function runForSite($siteId)
    {
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
