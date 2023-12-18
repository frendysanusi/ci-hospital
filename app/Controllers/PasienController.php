<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pasien;

class PasienController extends BaseController
{
    protected $pasien;

    function __construct() {
        $this->pasien = new Pasien();
    }

    public function index()
    {
        $data['patients'] = $this->getPasien(false);
        return view('a_patients', $data);
    }

    public function getPasien()
    {
        try {
            $data = $this->pasien->findAll();
            return $data;
        }
        catch (\Exception $e) {
            return null;
        }
    }

    public function getPasienById($id)
    {
        $data = $this->pasien->find($id);
        if (empty($data)) {
            return null;
        }
        else {
            return $data;
        }
    }

    public function update($id) {
        $body = (array) $this->request->getJSON();

        try {
            $data = $this->pasien->update($id, [
                'nama'     => $body['nama'],
                'tanggal_lahir' => $body['tanggal_lahir'],
                'alamat'    => $body['alamat']
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

    public function delete($id) {
        try {
            $res = $this->pasien->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON([
                    'status'  => 'error',
                    'message' => 'An error occured'
                ]);
            }

            $data = $this->pasien->delete($id);

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
