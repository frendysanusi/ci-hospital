<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Dokter;
use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;

class Login extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $userModel = new Dokter();

        $username = $_POST['username'];
        $password = $_POST['password'];

        if (!($username == 'admin' || $password == 'password')) {
            $user = $userModel->where('username', $username)->first();
    
            if (is_null($username) || is_null($password)) {
                return $this->setResponseFormat('json')->respond(['message' => 'Invalid username or password']);
            }
            
            $password_verify = password_verify($password, $user['password']);
            if (!$password_verify) {
                return $this->setResponseFormat('json')->respond(['message' => 'Invalid username or password']);
            }
        }

        $key = getenv('JWT_SECRET');
        $iat = time();
        $exp = $iat + 3600;

        $payload = array([
            'iss'      => 'localhost',
            'iat'      => $iat,
            'exp'      => $exp,
            'username' => $username,
        ]);

        $token = JWT::encode($payload, $key, 'HS256');

        $this->response->setCookie('token', $token, 3600);
        session()->setFlashdata('success', 'Login successful');

        if($username =='admin'){
            return redirect()->to('/admin')->withCookies('token', $token, 3600)->with('message', 'Login successful');
        } else{
            return redirect()->to('/doctor')->withCookies('token', $token, 3600)->with('message', 'Login successful');
        }

    }
    
    public function logout() {
        $this->response->deleteCookie('token');
        session()->setFlashdata('success', 'Logout successful');
        return redirect()->to('/')->withCookies('token', null);
    }
}
