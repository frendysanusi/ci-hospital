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
}
