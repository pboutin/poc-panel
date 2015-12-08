<?php

use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'name' => 'CentOS',
                'version' => '6.4',
                'type' => 'linux',
                'min_ram' => 512,
                'min_cpu' => 1,
                'min_disk' => 5 * 1024
            ],
            [
                'name' => 'CentOS',
                'version' => '7',
                'type' => 'linux',
                'min_ram' => 512,
                'min_cpu' => 1,
                'min_disk' => 5 * 1024
            ],
            [
                'name' => 'Ubuntu',
                'version' => '12.04 LTS',
                'type' => 'linux',
                'min_ram' => 512,
                'min_cpu' => 1,
                'min_disk' => 5 * 1024
            ],
            [
                'name' => 'Ubuntu',
                'version' => '14.04 LTS',
                'type' => 'linux',
                'min_ram' => 512,
                'min_cpu' => 1,
                'min_disk' => 5 * 1024
            ],
            [
                'name' => 'Server',
                'version' => '2012',
                'type' => 'windows',
                'min_ram' => 2 * 1024,
                'min_cpu' => 2,
                'min_disk' => 30 * 1024
            ]
        ];

        DB::table('images')->delete();
        foreach ($images as $image) {
            DB::table('images')->insert($image);
        }
    }
}
