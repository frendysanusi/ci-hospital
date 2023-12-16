<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Kunjungan;

class KunjunganController extends BaseController
{
    protected $kunjungan;

    function __construct() {
        $this->kunjungan = new Kunjungan();
    }

    public function index()
    {
        $data['visits'] = $this->getKunjungan(false);
        return view('d_visits', $data);
    }

    public function getKunjungan()
    {
        try {
            $data = $this->kunjungan->findAll();
            return $data;
        }
        catch (\Exception $e) {
            return null;
        }
    }

    public function getKunjunganById($id)
    {
        $data = $this->kunjungan->find($id);
        if (empty($data)) {
            return null;
        }
        else {
            return $data;
        }
    }

    public function getPreskripsi($id)
    {
        try {
            $data = $this->getKunjunganById($id);
            $preskripsi = json_decode($data['preskripsi'], true);
            $array_id_obat = array_column($preskripsi, 'id_obat');
            $array_id_obat = array_map('intval', $array_id_obat);

            $client = \Config\Services::curlrequest();
            
            $array_obat = [];
            foreach ($array_id_obat as $id_obat) {
                $url = 'http://localhost:8080/api/obat/' . $id_obat;
                $res = $client->request('GET', $url);
                $body = $res->getBody();
                $body = json_decode($body, true);
                $array_obat[$id_obat] = $body['data']['nama'];
            }
            
            return $array_obat;
        }
        catch (\Exception $e) {
            return null;
        }
    }
}
