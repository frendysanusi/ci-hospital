<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DataTransaksiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal'       => '2023-12-09 13:47:09',
                'detail'        => 'Detail Transaksi 1',
                'total_biaya'   => 50000,
                'status'        => true,
                'id_kunjungan'  => 1
            ],
            [
                'tanggal'       => '2023-12-09 16:20:10',
                'detail'        => 'Detail Transaksi 2',
                'total_biaya'   => 40500,
                'status'        => true,
                'id_kunjungan'  => 2
            ],
            [
                'tanggal'       => '2023-12-09 23:28:29',
                'detail'        => 'Detail Transaksi 3',
                'total_biaya'   => 20000,
                'status'        => false,
                'id_kunjungan'  => 3
            ],
        ];

        $this->db->table('data_transaksi')->insertBatch($data);
    }
}
