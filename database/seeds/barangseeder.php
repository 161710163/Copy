<?php

use Illuminate\Database\Seeder;

class barangseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
     $a =[
         ['kode_barang'=>'1','nama_barang'=>'jaket','harga'=>'80000'],
         ['kode_barang'=>'2','nama_barang'=>'baju','harga'=>'800000']
     ];
     DB::table('barangs')->insert($a);
    }
}
