<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('setting')->insert([
            'id_setting' => 1,
            'nama_perusahaan' => 'Warung Tenda Biru',
            'alamat' => 'Jl. Gambut',
            'telepon' => '087789055766',
            'tipe_nota' => 1, // kecil
            'diskon' => 5,
            'path_logo' => '/img/Logo Kasir.png',
            'path_kartu_member' => '/img/member.png',
        ]);
    }
}
