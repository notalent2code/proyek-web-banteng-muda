<?php

namespace App\Controllers;

use App\Models\UserModel;

class Login extends BaseController
{
    public function index()
    {
        $data = [];
        helper(['form']);

        if ($this->request->getMethod() == 'post') {
            if (!empty($_POST["remember"])) {
                setcookie("email", $_POST["email"], time() + (86400 * 30), '/');
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }

            $rules = [
                'email' => 'required|min_length[5]|max_length[50]|valid_email',
                'password' => 'required|min_length[5]|max_length[50]|validateUser[email,password]',
            ];
            $errors = [
                'password' => [
                    'validateUser' => 'Email or Password don\'t match'
                ]
            ];

            if (!$this->validate($rules, $errors)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $user = $model->where('email', $this->request->getVar('email'))->first();
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }
        }
        return view('pages/login', $data);
    }

    private function setUserSession($user)
    {
        $data = [
            'email' => $user['email'],
            'level' => $user['level'],
            'isLoggedIn' => true,
        ];
        session()->set($data);
        return true;
    }

    public function signup()
    {
        $data = [];
        helper(['form']);
        if ($this->request->getMethod() == 'post') {

            $rules = [
                'email' => 'required|min_length[5]|max_length[100]|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[5]|max_length[255]',
                'password_confirm' => 'matches[password]'
            ];

            if (!$this->validate($rules)) {
                $data['validation'] = $this->validator;
            } else {
                $model = new UserModel();
                $newData = [
                    'email' => $this->request->getVar('email'),
                    'password' => $this->request->getVar('password'),
                    'level' => $this->request->getVar('level')
                ];

                $model->ignore(true)->insert($newData);
                $session = session();
                $session->setFlashdata('success', 'Successful Registration');
                return redirect()->to('/login');
            }
        }
        return view('pages/signup', $data);
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/')->deleteCookie('email');
    }
}
