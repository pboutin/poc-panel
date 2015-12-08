<?php

use Illuminate\Database\Seeder;

class FlavorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flavors = [
            [
                'name' => 'micro',
                'ram' => 512,
                'cpu' => 1,
                'disk' => 20 * 1024,
                'hourly_rate' => 0.013
            ],
            [
                'name' => 'small',
                'ram' => 1024,
                'cpu' => 1,
                'disk' => 20 * 1024,
                'hourly_rate' => 0.026
            ],
            [
                'name' => 'medium',
                'ram' => 2 * 1024,
                'cpu' => 2,
                'disk' => 30 * 1024,
                'hourly_rate' => 0.052
            ],
            [
                'name' => 'large',
                'ram' => 4 * 1024,
                'cpu' => 4,
                'disk' => 50 * 1024,
                'hourly_rate' => 0.104
            ],
            [
                'name' => 'super',
                'ram' => 8 * 1024,
                'cpu' => 8,
                'disk' => 100 * 1024,
                'hourly_rate' => 0.252
            ]
        ];

        DB::table('flavors')->delete();
        foreach ($flavors as $flavor) {
            DB::table('flavors')->insert($flavor);
        }
    }
}
