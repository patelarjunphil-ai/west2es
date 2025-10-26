<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{
    public function login()
    {
        $deped_id_no = $this->request->getPost('deped_id_no');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if (!$deped_id_no || !$email || !$password) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'All fields are required.']);
        }

        if (!preg_match('/^\d{7}$/', $deped_id_no)) {
            return $this->response->setJSON(['status' => 'error', 'message' => 'DepEd ID No. must be exactly 7 digits.']);
        }

        $userModel = new UserModel();
        $user = $userModel->where('deped_id_no', $deped_id_no)->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session = session();
                $session->set([
                    'logged_in' => true,
                    'user_id' => $user['id_no'],
                    'user_role' => $user['role'],
                    'email' => $user['email'],
                    'first_name' => $user['first_name'],
                    'last_name' => $user['last_name'],
                ]);
                return $this->response->setJSON(['status' => 'success', 'message' => 'Welcome! Redirecting...']);
            } else {
                return $this->response->setJSON(['status' => 'error', 'message' => 'Invalid password.']);
            }
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'No account found.']);
        }
    }

    public function register()
    {
        $userModel = new UserModel();

        $data = [
            'deped_id_no' => $this->request->getPost('deped_id_no'),
            'last_name' => $this->request->getPost('last_name'),
            'first_name' => $this->request->getPost('first_name'),
            'middle_name' => $this->request->getPost('middle_name'),
            'email' => $this->request->getPost('email_prefix') . '@deped.gov.ph',
            'contact_no' => $this->request->getPost('contact_no'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'role' => 'faculty',
        ];

        if ($userModel->save($data)) {
            return $this->response->setJSON(['status' => 'success', 'message' => 'Registration successful!']);
        } else {
            return $this->response->setJSON(['status' => 'error', 'message' => 'Registration failed.']);
        }
    }

    public function profile()
    {
        // Your profile logic goes here
    }
}
