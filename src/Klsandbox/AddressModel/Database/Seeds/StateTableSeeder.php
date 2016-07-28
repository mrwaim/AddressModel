<?php

namespace Klsandbox\AddressModel\Database\Seeds;

use Illuminate\Database\Seeder;
use Klsandbox\AddressModel\Models\Country;
use Klsandbox\AddressModel\Models\State;

class StateTableSeeder extends Seeder
{
    public function run()
    {
        foreach ($this->getMalaysiaStates() as $state) {
            $stateIsExist = State::where('name', $state)
                ->count();

            if (! $stateIsExist) {
                State::create(array(
                    'country_id' => Country::Malaysia()->id,
                    'name' => $state,
                ));
            }
        }

        $isBruneiExist = State::where('name', 'Brunei')
            ->count();


        if (! $isBruneiExist) {
            State::create(array(
                'country_id' => Country::Brunei()->id,
                'name' => 'Brunei',
            ));
        }

        $isSingaporeExist = State::where('name', 'Singapore')
            ->count();

        if (! $isSingaporeExist) {
            State::create(array(
                'country_id' => Country::Singapore()->id,
                'name' => 'Singapore',
            ));
        }
    }

    private function getMalaysiaStates()
    {
         return  [
            'Selangor', 'Kuala Lumpur', 'Sarawak', 'Johor', 'Penang', 'Sabah', 'Perak', 'Pahang', 'Negeri Sembilan',
            'Kedah', 'Malacca', 'Terengganu', 'Kelantan', 'Perlis', 'Labuan'
         ];
    }
}
