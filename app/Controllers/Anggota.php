<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\UserModel;
use CodeIgniter\HTTP\Request;

class Anggota extends BaseController
{
  public function index()
  {
    if(session()->get('level') === '2'){
      $model = new AnggotaModel();
      $data['anggota'] = $model->getAnggota();
      return view('anggota/anggota', $data);
    }
    return redirect()->to('profile');
  }

  public function add_new()
  {
    $model = new UserModel();
    $email = session()->get('email');
    $data['user'] = $model->getUser($email)->getRow();
    return view('anggota/add', $data);
  }

  public function save()
  {
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
    if (session()->get('level') === '2') {
      return redirect()->to('/anggota');
    }
    return redirect()->to('/dashboard');
  }

  public function edit($no_anggota)
  {
    $model = new AnggotaModel();
    $data['anggota'] = $model->getAnggota($no_anggota)->getRow();
    return view('anggota/edit', $data);
  }

  public function update()
  {
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

  public function delete($no_anggota)
  {
    if (session()->get('level') === '2'){
      $model = new AnggotaModel();
      $model->deleteAnggota($no_anggota);
      return redirect()->to('/anggota');
    }
    return redirect()->to('/dashboard');
  }
}
