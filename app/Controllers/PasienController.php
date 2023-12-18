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

    public function addForm()
    {
        //$data['patient'] = new Pasien();
        return view('editpasien');
    }

    public function editForm($id)
    {
        $data['patient'] = $this->getPasienById($id, false);
        return view('editpasien', $data);
    }

    public function deleteForm($id)
    {
        $data['patient'] = $this->deletePasien($id, false);
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

    public function createPasien() {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $alamat = $_POST['alamat'];

        $body = [$nama, $tanggal_lahir, $alamat];

        $validationData = [
            'nama'  => 'required',
            'tanggal_lahir'  => 'required',
            'alamat'  => 'required',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        // // check if obat exist
        // $res = $this->pasien->where('nama', $body['nama'])->first();

        // if ($res) {
        //     return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        // }

        try {
            $data = $this->pasien->insert([
                'nama' => $nama,
                'tanggal_lahir' => $tanggal_lahir,
                'alamat' => $alamat,
            ]);
    
            return redirect()->to('/admin/patients');
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
        
    }

    public function updatePasien($id, $returnJSON = true) {
        $body = (array) $this->request->getJSON();

        if (!$body) {
            $returnJSON = false;

            $body['nama'] = $_POST["nama"];
            $body['tanggal_lahir'] = $_POST["tanggal_lahir"];
            $body['jumlah_stok'] = $_POST["jumlah_stok"];
        }

        $validationData = [
            'nama'  => 'required',
            'tanggal_lahir'  => 'required|integer',
            'alamat'  => 'alamat',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        // check if pasien exist
        $res = $this->pasien->find($id);
        
        if (!$res) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        }

        try {
            $data = $this->pasien->update($id, [
                'nama' => $body['nama'],
                'tanggal_lahir' => $body['tanggal_lahir'],
                'alamat' => $body['alamat'],
            ]);
            
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $body
                ]);
            }
            else {
                return redirect()->to('/admin/patients');
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function deletePasien($id, $returnJSON = true) {
        try {
            $res = $this->pasien->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data = $this->pasien->delete($id);

            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $res
                ]);
            }
            else
            {
                return redirect()->to('/medicines');
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }
}
