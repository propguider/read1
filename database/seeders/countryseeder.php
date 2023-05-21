<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class countryseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [

                'name'       => 'Afghanistan',
                'short_code' => 'AF'

            ],
            [

                'name'       => 'Albania',
                'short_code' => 'al'
            ],
            [

                'name'       => 'Algeria',
                'short_code' => 'dz'
            ],
            [

                'name'       => 'American Samoa',
                'short_code' => 'as'
            ],
            [

                'name'       => 'Andorra',
                'short_code' => 'ad'
            ],
            [

                'name'       => 'Angola',
                'short_code' => 'ao'
            ],
            [

                'name'       => 'Anguilla',
                'short_code' => 'ai'
            ],
            [

                'name'       => 'Antarctica',
                'short_code' => 'aq'
            ],
            [
                'name'       => 'Antigua and Barbuda',
                'short_code' => 'ag'
            ],
            [

                'name'       => 'Argentina',
                'short_code' => 'ar'
            ],
            [
                'name'       => 'Armenia',
                'short_code' => 'am'
            ],
            [

                'name'       => 'Aruba',
                'short_code' => 'aw'
            ],
            [

                'name'       => 'Australia',
                'short_code' => 'au'
            ],
            [

                'name'       => 'Austria',
                'short_code' => 'at'
            ],
            [

                'name'       => 'Azerbaijan',
                'short_code' => 'az'
            ],
            [

                'name'       => 'Bahamas',
                'short_code' => 'bs'
            ],
            [
                'name'       => 'Bahrain',
                'short_code' => 'bh'
            ],
            [

                'name'       => 'Bangladesh',
                'short_code' => 'bd'
            ],
            [

                'name'       => 'Barbados',
                'short_code' => 'bb'
            ],
            [
                'name'       => 'Belarus',
                'short_code' => 'by'
            ]

            ];
            DB::table('countries')->insert($countries);
        }
}
