<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataTransaksi;
use DateTime;

class DataTransaksiController extends BaseController
{
    protected $dataTransaksi;

    function __construct() {
        $this->dataTransaksi = new DataTransaksi();
    }

    public function index()
    {
        // return view('dataTransaksi.index');
    }

    public function getDataTransaksi($returnJSON = true)
    {
        try {
            $data = $this->dataTransaksi->findAll();
            
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $data
                ]);
            }
            else {
                return $data;
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function getDataTransaksiById($id, $returnJSON = true)
    {
        $data = $this->dataTransaksi->find($id);
        if (empty($data)) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
        else {
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $data
                ]);
            }
            else
            {
                return $data;
            }
        }
    }

    public function createDataTransaksi() {
        $body = (array) $this->request->getJSON();
        
        try {
            $data = $this->dataTransaksi->insert([
                'tanggal'       => $body['tanggal'],
                'biaya_rs'      => $body['biaya_rs'],
                'biaya_apotek'  => $body['biaya_apotek'],
                'status_rs'     => $body['status_rs'],
                'status_apotek' => $body['status_apotek'],
                'id_kunjungan'  => $body['id_kunjungan']
            ]);
    
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $body
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'    => 'error',
                'message'   => 'An error occured'
            ]);
        }
    }

    public function updateDataTransaksi($id, $returnJSON = true) {
        $body = (array) $this->request->getJSON();

        try {
            $data = $this->dataTransaksi->update($id, [
                'tanggal'       => $body['tanggal'],
                'biaya_rs'      => $body['biaya_rs'],
                'biaya_apotek'  => $body['biaya_apotek'],
                'status_rs'     => $body['status_rs'],
                'status_apotek' => $body['status_apotek'],
                'id_kunjungan'  => $body['id_kunjungan']
            ]);
    
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $body
                ]);
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'    => 'error',
                'message'   => 'An error occured'
            ]);
        }
    }

    public function deleteDataTransaksi($id, $returnJSON = true) {
        try {
            $res = $this->dataTransaksi->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON([
                    'status'  => 'error',
                    'message' => 'An error occured'
                ]);
            }

            $data = $this->dataTransaksi->delete($id);

            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $res
                ]);
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'  => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function recapTransaksi() {
        try {
            $res = $this->dataTransaksi->findAll();

            if (!empty($res)) {
                foreach ($res as $transaksi) {
                    $dateObject = new DateTime($transaksi['tanggal']);
                    $month = $dateObject->format('m');
                }
            }
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $month
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status'  => 'error',
                'message' => 'An error occured'
            ]);
        }
    }
}
