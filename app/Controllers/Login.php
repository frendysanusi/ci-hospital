<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use CodeIgniter\API\ResponseTrait;
use Firebase\JWT\JWT;

class Login extends BaseController
{
    use ResponseTrait;

    public function index()
    {
        $userModel = new User();
        
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $user = $userModel->where('username', $username)->first();

        if (is_null($username) || is_null($password)) {
            return $this->setResponseFormat('json')->respond(['message' => 'Invalid username or password']);
        }

        $password_verify = password_verify($password, $user['password']);
        if (!$password_verify) {
            return $this->setResponseFormat('json')->respond(['message' => 'Invalid username or password']);
        }

        $key = getenv('JWT_SECRET');
        $iat = time();
        $exp = $iat + 3600;

        $payload = array([
            'iss'      => 'localhost',
            'iat'      => $iat,
            'exp'      => $exp,
            'username' => $user['username'],
        ]);

        $token = JWT::encode($payload, $key, 'HS256');

        return $this->setResponseFormat('json')->respond([
            'message'   => 'Login successful',
            'token'     => $token
        ]);
    }
}
