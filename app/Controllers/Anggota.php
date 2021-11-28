<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use CodeIgniter\HTTP\Request;

class Anggota extends BaseController
{
    public function index(){
        $model = new AnggotaModel();
        $data['anggota'] = $model->getAnggota();
        return view('anggota/anggota', $data);
    }

    public function add_new(){
        return view('anggota/add');
    }

    public function save(){
      $model = new AnggotaModel();
      $data = array(
        'no_anggota' => $this->request->getPost('no_anggota'),
        'nama' => $this->request->getPost('nama'),
        'no_ktp' => $this->request->getPost('no_ktp'),
        'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
        'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
        'alamat' => $this->request->getPost('alamat'),
        'no_hp' => $this->request->getPost('no_hp'),
        'email' => $this->request->getPost('email'),
      );
      $model->saveAnggota($data);
      return redirect()->to('/anggota');
    }

    public function edit($no_anggota){
        $model = new AnggotaModel();
        $data['anggota'] = $model->getAnggota($no_anggota)->getRow();
        return view('anggota/edit', $data);
    }

    public function update(){
        $model = new AnggotaModel();
        $no_anggota = $this->request->getPost('no_anggota');
        $data = array(
            'no_anggota' => $this->request->getPost('no_anggota'),
            'nama' => $this->request->getPost('nama'),
            'no_ktp' => $this->request->getPost('no_ktp'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'alamat' => $this->request->getPost('alamat'),
            'no_hp' => $this->request->getPost('no_hp'),
            'email' => $this->request->getPost('email'),
          );
        $model->updateAnggota($data, $no_anggota);
        return redirect()->to('/anggota');
    }

    public function delete($no_anggota){
        $model = new AnggotaModel();
        $model->deleteAnggota($no_anggota);
        return redirect()->to('/anggota');
    }

}