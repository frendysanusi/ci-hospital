<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dokter;

class DokterController extends BaseController
{
    protected $dokter;

    function __construct() {
        $this->dokter = new Dokter();
    }

    public function getDokter()
    {
        try {
            $data = $this->dokter->findAll();
            return $data;
        }
        catch (\Exception $e) {
            return null;
        }
    }

    public function getDokterById($id)
    {
        $data = $this->dokter->find($id);
        if (empty($data)) {
            return null;
        }
        else {
            return $data;
        }
    }
}
