<?php

namespace App\Controllers;

class DoctorController extends BaseController
{
    public function index(): string
    {
        return view('d_home');
    }
    public function visits(): string
    {
        return view('d_visits');
    }
    public function visitsid(): string
    {
        return view('d_visits_id');
    }
    public function profile(): string
    {
        return view('d_profile');
    }
}
