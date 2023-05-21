<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class stateseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            [
                'id' => 1,
                'countries_id' => 1,
                'code' => 'AL',
                'name' => 'Alabama'
            ],
            [
                'id' => 2,
                'countries_id' => 1,
                'code' => 'AK',
                'name' => 'Alaska'
            ],
            [
                'id' => 3,
                'countries_id' => 1,
                'code' => 'AZ',
                'name' => 'Arizona'
            ],
            [
                'id' => 4,
                'countries_id' => 2,
                'code' => 'AR',
                'name' => 'Arkansas'
            ],
            [
                'id' => 5,
                'countries_id' => 2,
                'code' => 'CA',
                'name' => 'California'
            ],
            [
                'id' => 6,
                'countries_id' => 2,
                'code' => 'CO',
                'name' => 'Colorado'
            ],
            [
                'id' => 7,
                'countries_id' => 3,
                'code' => 'CT',
                'name' => 'Connecticut'
            ],
            [
                'id' => 8,
                'countries_id' => 3,
                'code' => 'DE',
                'name' => 'Delaware'
            ],
            [
                'id' => 9,
                'countries_id' => 3,
                'code' => 'DC',
                'name' => 'District of Columbia'
            ],
            [
                'id' => 10,
                'countries_id' => 4,
                'code' => 'FL',
                'name' => 'Florida'
            ],
            [
                'id' => 11,
                'countries_id' => 4,
                'code' => 'GA',
                'name' => 'Georgia'
            ],
            [
                'id' => 12,
                'countries_id' => 4,
                'code' => 'HI',
                'name' => 'Hawaii'
            ],
            [
                'id' => 13,
                'countries_id' => 5,
                'code' => 'ID',
                'name' => 'Idaho'
            ],
            [
                'id' => 14,
                'countries_id' => 5,
                'code' => 'IL',
                'name' => 'Illinois'
            ],
            [
                'id' => 15,
                'countries_id' => 6,
                'code' => 'IN',
                'name' => 'Indiana'
            ],
            [
                'id' => 16,
                'countries_id' => 6,
                'code' => 'IA',
                'name' => 'Iowa'
            ],
            [
                'id' => 17,
                 'countries_id' => 6,
                'code' => 'KS',
                'name' => 'Kansas'
            ],
            [
                'id' => 18,
                 'countries_id' => 7,
                'code' => 'KY',
                'name' => 'Kentucky'
            ],
            [
                'id' => 19,
                 'countries_id' => 7,
                'code' => 'LA',
                'name' => 'Louisiana'
            ],
            [
                'id' => 20,
                'countries_id' => 7,
                'code' => 'ME',
                'name' => 'Maine'
            ],
            [
                'id' => 21,
                'countries_id' => 8,
                'code' => 'MD',
                'name' => 'Maryland'
            ],
            [
                'id' => 22,
                'countries_id' => 8,
                'code' => 'MA',
                'name' => 'Massachusetts'
            ],
            [
                'id' => 23,
                'countries_id' => 8,
                'code' => 'MI',
                'name' => 'Michigan'
            ],
            [
                'id' => 24,
                'countries_id' => 9,
                'code' => 'MN',
                'name' => 'Minnesota'
            ],
            [
                'id' => 25,
                'countries_id' => 9,
                'code' => 'MS',
                'name' => 'Mississippi'
            ],
            [
                'id' => 26,
                'countries_id' => 9,
                'code' => 'MO',
                'name' => 'Missouri'
            ],
            [
                'id' => 27,
                'countries_id' => 10,
                'code' => 'MT',
                'name' => 'Montana'
            ],
            [
                'id' => 28,
                'countries_id' => 10,
                'code' => 'NE',
                'name' => 'Nebraska'
            ],
            [
                'id' => 29,
                'countries_id' => 10,
                'code' => 'NV',
                'name' => 'Nevada'
            ],
            [
                'id' => 30,
                'countries_id' => 11,
                'code' => 'NH',
                'name' => 'New Hampshire'
            ],
            [
                'id' => 31,
                'countries_id' => 11,
                'code' => 'NJ',
                'name' => 'New Jersey'
            ],
            [
                'id' => 32,
                'countries_id' => 11,
                'code' => 'NM',
                'name' => 'New Mexico'
            ],
            [
                'id' => 33,
                'countries_id' => 12,
                'code' => 'NY',
                'name' => 'New York'
            ],
            [
                'id' => 34,
                'countries_id' => 12,
                'code' => 'NC',
                'name' => 'North Carolina'
            ],
            [
                'id' => 35,
                'countries_id' => 12,
                'code' => 'ND',
                'name' => 'North Dakota'
            ],
            [
                'id' => 36,
                'countries_id' => 13,
                'code' => 'OH',
                'name' => 'Ohio'
            ],
            [
                'id' => 37,
                'countries_id' => 13,
                'code' => 'OK',
                'name' => 'Oklahoma'
            ],
            [
                'id' => 38,
                'countries_id' => 13,
                'code' => 'OR',
                'name' => 'Oregon'
            ],
            [
                'id' => 39,
                'countries_id' => 14,
                'code' => 'PA',
                'name' => 'Pennsylvania'
            ],
            [
                'id' => 40,
                'countries_id' => 14,
                'code' => 'PR',
                'name' => 'Puerto Rico'
            ]
        ];
        DB::table('states')->insert($states);
    }
}
