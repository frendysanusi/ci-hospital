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

    public function editForm($id)
    {
        $data['patient'] = $this->getPasienById($id, false);
        return view('editpasien', $data);
    }

    public function deleteForm($id)
    {
        $data['patient'] = $this->delete($id, false);
        return view('deletepasien', $data);
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

    public function getPasienById($id, $returnJSON = true)
    {
        $data = $this->pasien->find($id);
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

    public function create() {
        $body = (array) $this->request->getJSON();

        
        $nama = $body['nama'];
        $tanggal_lahir = $body['tanggal_lahir'];
        $alamat = $body['alamat'];

        try {
            $data = $this->pasien->insert([
                'nama' => $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
            ]);
    
            return $this->response->setJSON([
                'status'    => 'success',
                'data'      => $body
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
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
