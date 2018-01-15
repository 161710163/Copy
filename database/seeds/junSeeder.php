<?php

use Illuminate\Database\Seeder;

class junSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a=[
              ['nama'=>'junika','jurusan'=>'RPl','kelas'=>'XI RPL 1','wali kelas'=>'pa iik','nama sekolah'=>'smk assalaam'],
              ['nama'=>'luthfi','jurusan'=>'RPl','kelas'=>'XI RPL 1','wali kelas'=>'pa lukman','nama sekolah'=>'smk 1 bogor'],
              ['nama'=>'taufik','jurusan'=>'Ak','kelas'=>'XI AK 1','wali kelas'=>'pa asep','nama sekolah'=>'smk karya bakti'],
              ['nama'=>'agung','jurusan'=>'TKR','kelas'=>'XI TKR 3','wali kelas'=>'pa darlan','nama sekolah'=>'smk 2 palembang'],
              ['nama'=>'dheri','jurusan'=>'TSM','kelas'=>'XI TSM 2','wali kelas'=>'pa iik','nama sekolah'=>'smk alamanah']
              DB::table('contohs')->insert($a);
        ]
    }
}
