<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DataTransaksi;

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

    public function getDataTransaksi()
    {
        try {
            $data = $this->dataTransaksi->findAll();
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $data
            ]);
            // return view('dataTransaksi.index', $data);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function getDataTransaksiById($id)
    {
        $data = $this->dataTransaksi->find($id);
        if (empty($data)) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
        else {
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $data
            ]);
        }
    }

    public function createDataTransaksi() {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'tanggal'       => 'required',
            'detail'        => 'required',
            'total_biaya'   => 'required',
            'status'        => 'required',
            'id_kunjungan'  => 'required'
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 'error',
                'message' => 'An error occured'
            ]);
        }

        try {
            $data = $this->dataTransaksi->insert([
                'tanggal'      => $body['tanggal'],
                'detail'       => $body['detail'],
                'total_biaya'  => $body['total_biaya'],
                'status'       => $body['status'],
                'id_kunjungan' => $body['id_kunjungan']
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

    public function updateDataTransaksi($id) {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'tanggal'       => 'required',
            'detail'        => 'required',
            'total_biaya'   => 'required',
            'status'        => 'required',
            'id_kunjungan'  => 'required'
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON([
                'status'  => 'error',
                'message' => 'An error occured'
            ]);
        }

        try {
            $data = $this->dataTransaksi->update($id, [
                'tanggal'      => $body['tanggal'],
                'detail'       => $body['detail'],
                'total_biaya'  => $body['total_biaya'],
                'status'       => $body['status'],
                'id_kunjungan' => $body['id_kunjungan']
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

    public function deleteDataTransaksi($id) {
        try {
            $res = $this->dataTransaksi->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON([
                    'status'  => 'error',
                    'message' => 'An error occured'
                ]);
            }

            $data = $this->dataTransaksi->delete($id);
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $res
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
