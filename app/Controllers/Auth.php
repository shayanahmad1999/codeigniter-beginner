<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        return view('Views/auth/login');
    }

    public function login() {
        // Handle login form submission
        $validation = \Config\Services::validation();

        $validation->setRules([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            // Display login form with validation errors
            return view('auth/login', ['validation' => $validation]);
        } else {
            // Validate user credentials
            $username = $this->request->getPost('username');
            $password = $this->request->getPost('password');

            $userModel = new \App\Models\UserModel();
            $user = $userModel->login($username, $password);

            if ($user) {
                // Set user session and redirect
                $session = session();
                $session->set('user_id', $user['id']);
                $session->set('user_name', $user['name']);
                return redirect()->to('items');
            } else {
                // Display login form with error message
                $data['error'] = 'Invalid username or password';
                return view('auth/login', $data);
            }
        }
    }
    
    public function logout() {
        // Destroy user session and redirect to login page
        $session = session();
        $session->remove('user_id');
        return redirect()->to('login');
    }
}
