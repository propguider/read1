<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class cityseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            [
                'id' => 1,
                'state_id' => 2,
                'name' => 'Adak'
            ],
            [
                'id' => 2,
                'state_id' => 2,
                'name' => 'Akiachak'
            ],
            [
                'id' => 3,
                'state_id' => 2,
                'name' => 'Akiak'
            ],
            [
                'id' => 4,
                'state_id' => 2,
                'name' => 'Akutan'
            ],
            [
                'id' => 5,
                'state_id' => 2,
                'name' => 'Alakanuk'
            ],
            [
                'id' => 6,
                'state_id' => 2,
                'name' => 'Aleknagik'
            ],
            [
                'id' => 7,
                'state_id' => 2,
                'name' => 'Allakaket'
            ],
            [
                'id' => 8,
                'state_id' => 2,
                'name' => 'Ambler'
            ],
            [
                'id' => 9,
                'state_id' => 2,
                'name' => 'Anaktuvuk Pass'
            ],
            [
                'id' => 10,
                'state_id' => 2,
                'name' => 'Anchor Point'
            ],
            [
                'id' => 11,
                'state_id' => 2,
                'name' => 'Anchorage'
            ],
            [
                'id' => 12,
                'state_id' => 2,
                'name' => 'Anderson'
            ],
            [
                'id' => 13,
                'state_id' => 2,
                'name' => 'Angoon'
            ],
            [
                'id' => 14,
                'state_id' => 2,
                'name' => 'Aniak'
            ],
            [
                'id' => 15,
                'state_id' => 2,
                'name' => 'Anvik'
            ],
            [
                'id' => 16,
                'state_id' => 2,
                'name' => 'Arctic Village'
            ],
            [
                'id' => 17,
                'state_id' => 2,
                'name' => 'Atka'
            ],
            [
                'id' => 18,
                'state_id' => 2,
                'name' => 'Atqasuk'
            ],
            [
                'id' => 19,
                'state_id' => 2,
                'name' => 'Auke Bay'
            ],
            [
                'id' => 20,
                'state_id' => 2,
                'name' => 'Barrow'
            ],
            [
                'id' => 21,
                'state_id' => 2,
                'name' => 'Beaver'
            ],
            [
                'id' => 22,
                'state_id' => 2,
                'name' => 'Bethel'
            ],
            [
                'id' => 23,
                'state_id' => 2,
                'name' => 'Bettles Field'
            ],
            [
                'id' => 24,
                'state_id' => 2,
                'name' => 'Big Lake'
            ],
            [
                'id' => 25,
                'state_id' => 2,
                'name' => 'Brevig Mission'
            ],
            [
                'id' => 26,
                'state_id' => 2,
                'name' => 'Buckland'
            ],
            [
                'id' => 27,
                'state_id' => 2,
                'name' => 'Cantwell'
            ],
            [
                'id' => 28,
                'state_id' => 2,
                'name' => 'Central'
            ],
            [
                'id' => 29,
                'state_id' => 2,
                'name' => 'Chalkyitsik'
            ],
            [
                'id' => 30,
                'state_id' => 2,
                'name' => 'Chefornak'
            ],
            [
                'id' => 31,
                'state_id' => 2,
                'name' => 'Chevak'
            ],
            [
                'id' => 32,
                'state_id' => 2,
                'name' => 'Chicken',

            ],
            [
                'id' => 33,
                'state_id' => 2,
                'name' => 'Chignik',

            ],
            [
                'id' => 34,
                'state_id' => 2,
                'name' => 'Chignik Lagoon',

            ],
            [
                'id' => 35,
                'state_id' => 2,
                'name' => 'Chignik Lake',

            ],
            [
                'id' => 36,
                'state_id' => 2,
                'name' => 'Chitina'
            ],
            [
                'id' => 37,
                'state_id' => 2,
                'name' => 'Chugiak'
            ],
            [
                'id' => 38,
                'state_id' => 2,
                'name' => 'Circle'
            ],
            [
                'id' => 39,
                'state_id' => 2,
                'name' => 'Clam Gulch'
            ],
            [
                'id' => 40,
                'state_id' => 2,
                'name' => 'Clarks Point'
            ],
            [
                'id' => 41,
                'state_id' => 2,
                'name' => 'Clear'
            ],
            [
                'id' => 42,
                'state_id' => 2,
                'name' => 'Coffman Cove'
            ],
            [
                'id' => 43,
                'state_id' => 2,
                'name' => 'Cold Bay'
            ],
            [
                'id' => 44,
                'state_id' => 2,
                'name' => 'Cooper Landing'
            ],
            [
                'id' => 45,
                'state_id' => 2,
                'name' => 'Copper Center'
            ],
            [
                'id' => 46,
                'state_id' => 2,
                'name' => 'Cordova'
            ],
            [
                'id' => 47,
                'state_id' => 2,
                'name' => 'Craig'
            ],
            [
                'id' => 48,
                'state_id' => 2,
                'name' => 'Crooked Creek'
            ],
            [
                'id' => 49,
                'state_id' => 2,
                'name' => 'Deering'

            ],
            [
                'id' => 50,
                'state_id' => 2,
                'name' => 'Delta Junction'
            ],
            [
                'id' => 51,
                'state_id' => 2,
                'name' => 'Denali National Park'
            ],
            [
                'id' => 52,
                'state_id' => 2,
                'name' => 'Dillingham'
            ],
            [
                'id' => 53,
                'state_id' => 2,
                'name' => 'Douglas',
            ],
            [
                'id' => 54,
                'state_id' => 2,
                'name' => 'Dutch Harbor'
            ],
            [
                'id' => 55,
                'state_id' => 2,
                'name' =>'anatanic'

            ]
            ];
            DB::table('cities')->insert($cities);
    }
}
