<?php

use Illuminate\Database\Seeder;

class KendaraanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kendaraan')->insert([
            'plat_nomer' => 'D75648EF',
            'jam_masuk' => '08:26:19',
            'jam_keluar' => '13:54:59',
        ]);
        DB::table('kendaraan')->insert([
            'plat_nomer' => 'D54687VV',
            'jam_masuk' => '09:26:19',
            'jam_keluar' => '14:54:59',
        ]);
    }
}
