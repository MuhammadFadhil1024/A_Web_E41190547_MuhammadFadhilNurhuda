<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detail_profil')->insert([
            'address' => 'jember',
            'nomor_telp' => '085678901234',
            'ttl' => '2000-11-26',
            'foto' => 'pitcure.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
