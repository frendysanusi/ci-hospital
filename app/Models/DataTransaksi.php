<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTransaksi extends Model
{
    protected $table            = 'data_transaksi';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['tanggal', 'detail', 'total_biaya', 'status', 'id_kunjungan'];
}
