<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ReqBarangsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('req_barangs')->delete();
        
        \DB::table('req_barangs')->insert(array (
            0 => 
            array (
                'id' => 17,
                'pegawai_id' => 1,
                'barang_id' => 1,
                'kuantiti' => 5,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:51:13',
                'updated_at' => '2021-12-19 02:51:13',
            ),
            1 => 
            array (
                'id' => 19,
                'pegawai_id' => 4,
                'barang_id' => 3,
                'kuantiti' => 10,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:53:00',
                'updated_at' => '2021-12-19 02:53:00',
            ),
            2 => 
            array (
                'id' => 20,
                'pegawai_id' => 5,
                'barang_id' => 7,
                'kuantiti' => 12,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:53:17',
                'updated_at' => '2021-12-19 02:53:17',
            ),
            3 => 
            array (
                'id' => 21,
                'pegawai_id' => 7,
                'barang_id' => 8,
                'kuantiti' => 15,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:53:53',
                'updated_at' => '2021-12-19 02:53:53',
            ),
            4 => 
            array (
                'id' => 22,
                'pegawai_id' => 8,
                'barang_id' => 9,
                'kuantiti' => 16,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:54:11',
                'updated_at' => '2021-12-19 02:54:11',
            ),
            5 => 
            array (
                'id' => 23,
                'pegawai_id' => 9,
                'barang_id' => 10,
                'kuantiti' => 17,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:54:34',
                'updated_at' => '2021-12-19 02:54:34',
            ),
            6 => 
            array (
                'id' => 24,
                'pegawai_id' => 10,
                'barang_id' => 11,
                'kuantiti' => 15,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:54:47',
                'updated_at' => '2021-12-19 02:54:47',
            ),
            7 => 
            array (
                'id' => 25,
                'pegawai_id' => 11,
                'barang_id' => 12,
                'kuantiti' => 13,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:55:00',
                'updated_at' => '2021-12-19 02:55:00',
            ),
            8 => 
            array (
                'id' => 26,
                'pegawai_id' => 12,
                'barang_id' => 13,
                'kuantiti' => 14,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:55:30',
                'updated_at' => '2021-12-19 02:55:30',
            ),
            9 => 
            array (
                'id' => 27,
                'pegawai_id' => 13,
                'barang_id' => 14,
                'kuantiti' => 15,
                'tgl_req' => '2021-12-19 02:51:13',
                'keterangan' => '-',
                'created_at' => '2021-12-19 02:55:38',
                'updated_at' => '2021-12-19 02:55:38',
            ),
        ));
        
        
    }
}