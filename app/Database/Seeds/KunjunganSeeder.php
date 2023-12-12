<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KunjunganSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'tanggal' => '2023-12-04',
                'id_pasien' => 1,
                'id_dokter' => 1,
                'diagnosa' => 'Diagnosa 1',
                'kesimpulan' => 'kesimpulan 1',
                'preskripsi' => 'Preskripsi 1'
            ],
            [
                'tanggal' => '2023-12-06',
                'id_pasien' => 2,
                'id_dokter' => 2,
                'diagnosa' => 'Diagnosa 2',
                'kesimpulan' => 'kesimpulan 2',
                'preskripsi' => 'Preskripsi 2'
            ],
            [
                'tanggal' => '2023-12-12',
                'id_pasien' => 3,
                'id_dokter' => 1,
                'diagnosa' => 'Diagnosa 3',
                'kesimpulan' => 'kesimpulan 3',
                'preskripsi' => 'Preskripsi 3'
            ],
        ];

        $this->db->table('kunjungan')->insertBatch($data);
    }
}
