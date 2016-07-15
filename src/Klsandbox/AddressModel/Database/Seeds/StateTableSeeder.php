<?php

namespace Klsandbox\AddressModel\Database\Seeds;

use Illuminate\Database\Seeder;
use Klsandbox\AddressModel\Models\Country;
use Klsandbox\AddressModel\Models\State;
use Klsandbox\SiteModel\Site;

class StateTableSeeder extends Seeder
{


    public function run()
    {
        if (State::all()->count() > 0) {
            return;
        }

        foreach (Site::all() as $site) {
            Site::setSite($site);
            $this->runForSite($site->id);
        }
    }

    public function runForSite($siteId)
    {
        foreach ($this->getMalaysiaStates() as $state) {
            State::create(array(
                'country_id' => Country::Malaysia()->id,
                'name' => $state,
            ));
        }

        State::create(array(
            'country_id' => Country::Brunei()->id,
            'name' => 'Brunei',
        ));

        State::create(array(
            'country_id' => Country::Singapore()->id,
            'name' => 'Singapore',
        ));
    }

    private function getMalaysiaStates()
    {
         return  [
            'Selangor', 'Kuala Lumpur', 'Sarawak', 'Johor', 'Penang', 'Sabah', 'Perak', 'Pahang', 'Negeri Sembilan',
            'Kedah', 'Malacca', 'Terengganu', 'Kelantan', 'Perlis', 'Labuan'
         ];
    }
}
