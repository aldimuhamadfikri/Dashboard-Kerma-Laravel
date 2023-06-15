<?php

namespace Database\Seeders;
use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Barang::create([
            'idkerma' => '1001',
            'judul' => 'Gelar Ganda (Double Degree)',
            'progress' => '30%',
            'status' => 'Sudah'
        ]);
    }
}
