<?php

namespace Klsandbox\AddressModel\Database\Seeds;


use Illuminate\Database\Seeder;
use Klsandbox\AddressModel\Models\Country;
use Klsandbox\AddressModel\Models\State;
use Klsandbox\SiteModel\Site;

class StateTableSeeder extends Seeder {

    public function run() {
        if (State::all()->count() > 0) {
            return;
        }

        foreach (Site::all() as $site) {
            Site::setSite($site);
            $this->runForSite($site->id);
        }
    }
    
    public function runForSite($siteId) {
        State::create(array(
            'country_id' => Country::Malaysia()->id,
            'name' => 'Kuala Lumpur',
        ));

        State::create(array(
            'country_id' => Country::Malaysia()->id,
            'name' => 'Pulau Pinang',
        ));

        State::create(array(
            'country_id' => Country::Brunei()->id,
            'name' => 'Brunei',
        ));

        State::create(array(
            'country_id' => Country::Singapore()->id,
            'name' => 'Singapore',
        ));
    }

}
