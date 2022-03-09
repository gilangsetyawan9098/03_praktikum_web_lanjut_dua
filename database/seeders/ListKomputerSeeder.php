<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListKomputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data =[
                [
                    'namalaptop' => 'Asus Tuf Gaming A15',
                    'spesifikasi' => 'RYZEN 7-4800H 8GB 512SSD GTX1650Ti 6GB FHD',
                    'harga' => '15750000'
                ],
                [
                    'namalaptop' => 'Asus TUF Gaming FX505GT',
                    'spesifikasi' => 'i5 9300H 8GB 512SSD GTX1650 4GB 144Hz',
                    'harga' => '11899000'
                ],
                [
                    'namalaptop' => 'Lenovo Legion 5 17',
                    'spesifikasi' => 'RYZEN 5600 8GB 1TB+256SSD GTX1650 4GB',
                    'harga' => '129990000'
                ],
                [
                    'namalaptop' => 'Lenovo Yoga Slim 7 PRO',
                    'spesifikasi' => 'RYZEN 5600H 16GB 512SSD AMD RADEON 14"FHD',
                    'harga' => '13599000'
                ]
            ];
        DB::table('list_komputers')->insert($data);
    }
}
