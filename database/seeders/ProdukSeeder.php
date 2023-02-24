<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('categories')->insert([
        //     'nama' => 'parfum'
        // ]);
        DB::table('produks')->insert([
            'user_id' => '1',
            'nama' => 'parfum enak',
            'slug' => 'parfum-enak',
            'category_id' => '1',
            'harga' => '10000',
            'gambar' => 'parpum.jgp',
            'deskripsi' => 'ini parpum ajaib',
        ]);
    }
}
