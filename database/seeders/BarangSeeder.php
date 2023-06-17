<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $barang = [
            'pensil',
            'bolpen',
            'penghapus',
            'stipo',
            'buku tulis'
        ];
        //
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 5; $i++){
            DB::table('barangs')->insert([
                'nama_barang' => ucfirst($barang[$i]),
                'harga_barang'=> $faker->randomDigitNot(0) * 1000,
                'deskripsi_barang' => $faker->sentence,
                'kode_satuan'=> 1
            ]);

        }
    }
}
