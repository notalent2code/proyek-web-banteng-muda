<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class User extends BaseController
{
    public function index(){
        $model = new UserModel();
        $data['user'] = $model->getUser();
        return view('user/user', $data);
    }

    public function add_new(){
        return view('user/add');
    }

    public function save(){
      $model = new UserModel();
      $data = array(
        'email' => $this->request->getPost('email'),
        'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
        'level' => $this->request->getPost('level'),
      );
      $model->saveUser($data);
      return redirect()->to('/user');
    }

    public function edit($email){
        $model = new UserModel();
        $data['user'] = $model->getUser($email)->getRow();
        return view('user/edit', $data);
    }

    public function update(){
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $data = array(
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'level' => $this->request->getPost('level'),
          );
        $model->updateUser($data, $email);
        return redirect()->to('/user');
    }

    public function delete($email){
        $model = new UserModel();
        $model->deleteUser($email);
        return redirect()->to('/user');
    }

}