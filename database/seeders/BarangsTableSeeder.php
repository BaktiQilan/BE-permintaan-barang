<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BarangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('barangs')->delete();
        
        \DB::table('barangs')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama_b' => 'ATK001 - ABCD',
                'lokasi' => 'Lantai 1',
                'stok' => 15,
                'satuan' => 'Pak',
                'keterangan' => '-',
                'created_at' => '2021-12-17 07:58:04',
                'updated_at' => '2021-12-19 02:51:13',
            ),
            1 => 
            array (
                'id' => 3,
                'nama_b' => 'ATK002 - OPQR',
                'lokasi' => 'Lantai 2',
                'stok' => 50,
                'satuan' => 'Lusin',
                'keterangan' => '-',
                'created_at' => '2021-12-17 07:59:13',
                'updated_at' => '2021-12-19 02:53:00',
            ),
            2 => 
            array (
                'id' => 7,
                'nama_b' => 'ATK003 - HIJK',
                'lokasi' => 'Lantai 2',
                'stok' => 88,
                'satuan' => 'Pak',
                'keterangan' => '-',
                'created_at' => '2021-12-18 02:25:24',
                'updated_at' => '2021-12-19 02:53:17',
            ),
            3 => 
            array (
                'id' => 8,
                'nama_b' => 'ATK004 - EFGH',
                'lokasi' => 'Lantai 4',
                'stok' => 485,
                'satuan' => 'Lusin',
                'keterangan' => '-',
                'created_at' => '2021-12-18 02:25:57',
                'updated_at' => '2021-12-19 02:53:53',
            ),
            4 => 
            array (
                'id' => 9,
                'nama_b' => 'ATK005 - OPQR',
                'lokasi' => 'Lantai 3',
                'stok' => 44,
                'satuan' => 'Lusin',
                'keterangan' => '-',
                'created_at' => '2021-12-18 02:31:11',
                'updated_at' => '2021-12-19 02:54:11',
            ),
            5 => 
            array (
                'id' => 10,
                'nama_b' => 'ATK006 - KLMN',
                'lokasi' => 'Lantai 1',
                'stok' => 33,
                'satuan' => 'Lusin',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:42:48',
                'updated_at' => '2021-12-19 02:54:34',
            ),
            6 => 
            array (
                'id' => 11,
                'nama_b' => 'ATK007 - RSTU',
                'lokasi' => 'Lantai 4',
                'stok' => 65,
                'satuan' => 'Pak',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:43:22',
                'updated_at' => '2021-12-19 02:54:47',
            ),
            7 => 
            array (
                'id' => 12,
                'nama_b' => 'ATK008 - LMNO',
                'lokasi' => 'Lantai 5',
                'stok' => 187,
                'satuan' => 'Pcs',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:44:07',
                'updated_at' => '2021-12-19 02:55:00',
            ),
            8 => 
            array (
                'id' => 13,
                'nama_b' => 'ATK009 - QRST',
                'lokasi' => 'Lantai 2',
                'stok' => 86,
                'satuan' => 'Pak',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:44:42',
                'updated_at' => '2021-12-19 02:55:30',
            ),
            9 => 
            array (
                'id' => 14,
                'nama_b' => 'ATK010 - WXYZ',
                'lokasi' => 'Lantai 1',
                'stok' => 285,
                'satuan' => 'Dzn',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:46:26',
                'updated_at' => '2021-12-19 02:55:38',
            ),
        ));
        
        
    }
}