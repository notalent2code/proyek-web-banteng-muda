<?php

namespace App\Controllers;

use App\Models\PinjamanModel;
use CodeIgniter\HTTP\Request;

class Pinjaman extends BaseController
{
    public function index(){
        $model = new PinjamanModel();
        $data['pinjaman'] = $model->getPinjaman();
        return view('pinjaman/pinjaman', $data);
    }

    public function add_new(){
        return view('pinjaman/add');
    }

    public function save(){
      $model = new PinjamanModel();
      $data = array(
        'no_pinjaman' => $this->request->getPost('no_pinjaman'),
        'no_anggota' => $this->request->getPost('no_anggota'),
        'tanggal_pencairan' => $this->request->getPost('tanggal_pencairan'),
        'lama_pinjaman' => $this->request->getPost('lama_pinjaman'),
        'besar_pinjaman' => $this->request->getPost('besar_pinjaman'),
      );
      $model->savePinjaman($data);
      return redirect()->to('/pinjaman');
    }

    public function edit($no_pinjaman){
        $model = new PinjamanModel();
        $data['pinjaman'] = $model->getPinjaman($no_pinjaman)->getRow();
        return view('pinjaman/edit', $data);
    }

    public function update(){
        $model = new PinjamanModel();
        $no_pinjaman = $this->request->getPost('no_pinjaman');
        $data = array(
            'no_pinjaman' => $this->request->getPost('no_pinjaman'),
            'no_anggota' => $this->request->getPost('no_anggota'),
            'tanggal_pencairan' => $this->request->getPost('tanggal_pencairan'),
            'lama_pinjaman' => $this->request->getPost('lama_pinjaman'),
            'besar_pinjaman' => $this->request->getPost('besar_pinjaman'),
          );
        $model->updatePinjaman($data, $no_pinjaman);
        return redirect()->to('/pinjaman');
    }

    public function delete($no_pinjaman){
        $model = new PinjamanModel();
        $model->deletePinjaman($no_pinjaman);
        return redirect()->to('/pinjaman');
    }

}