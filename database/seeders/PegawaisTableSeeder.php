<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PegawaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pegawais')->delete();
        
        \DB::table('pegawais')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nik' => 100001,
                'nama_p' => 'Mirana',
                'departemen' => 'warehouse',
                'created_at' => '2021-12-17 12:03:11',
                'updated_at' => '2021-12-17 12:03:11',
            ),
            1 => 
            array (
                'id' => 4,
                'nik' => 100002,
                'nama_p' => 'Lanaya',
                'departemen' => 'accounting',
                'created_at' => '2021-12-18 04:03:03',
                'updated_at' => '2021-12-18 04:03:03',
            ),
            2 => 
            array (
                'id' => 5,
                'nik' => 100003,
                'nama_p' => 'Luna',
                'departemen' => 'production',
                'created_at' => '2021-12-18 04:03:23',
                'updated_at' => '2021-12-18 04:10:46',
            ),
            3 => 
            array (
                'id' => 7,
                'nik' => 100004,
                'nama_p' => 'Hoodwink',
                'departemen' => 'warehouse',
                'created_at' => '2021-12-18 08:34:32',
                'updated_at' => '2021-12-18 08:34:32',
            ),
            4 => 
            array (
                'id' => 8,
                'nik' => 100005,
                'nama_p' => 'Davion',
                'departemen' => 'IT',
                'created_at' => '2021-12-19 02:46:50',
                'updated_at' => '2021-12-19 02:46:50',
            ),
            5 => 
            array (
                'id' => 9,
                'nik' => 100006,
                'nama_p' => 'Marci',
                'departemen' => 'production',
                'created_at' => '2021-12-19 02:47:14',
                'updated_at' => '2021-12-19 02:47:14',
            ),
            6 => 
            array (
                'id' => 10,
                'nik' => 100007,
                'nama_p' => 'Invoker',
                'departemen' => 'warehouse',
                'created_at' => '2021-12-19 02:47:38',
                'updated_at' => '2021-12-19 02:47:38',
            ),
            7 => 
            array (
                'id' => 11,
                'nik' => 100008,
                'nama_p' => 'Bane',
                'departemen' => 'accounting',
                'created_at' => '2021-12-19 02:48:04',
                'updated_at' => '2021-12-19 02:48:04',
            ),
            8 => 
            array (
                'id' => 12,
                'nik' => 100009,
                'nama_p' => 'Magnus',
                'departemen' => 'warehouse',
                'created_at' => '2021-12-19 02:48:20',
                'updated_at' => '2021-12-19 02:48:20',
            ),
            9 => 
            array (
                'id' => 13,
                'nik' => 100010,
                'nama_p' => 'Zeus',
                'departemen' => 'IT',
                'created_at' => '2021-12-19 02:49:06',
                'updated_at' => '2021-12-19 02:49:06',
            ),
        ));
        
        
    }
}