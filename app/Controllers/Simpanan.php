<?php

namespace App\Controllers;

use App\Models\SimpananModel;
use CodeIgniter\HTTP\Request;

class Simpanan extends BaseController
{
    public function index(){
        $model = new SimpananModel();
        $data['simpanan'] = $model->getSimpanan();
        return view('simpanan/simpanan', $data);
    }

    public function add_new(){
        return view('simpanan/add');
    }

    public function save(){
      $model = new SimpananModel();
      $data = array(
        'no_simpanan' => $this->request->getPost('no_simpanan'),
        'no_anggota' => $this->request->getPost('no_anggota'),
        'besar_simpanan' => $this->request->getPost('besar_simpanan'),
        'profit' => $this->request->getPost('profit'),
        'jangka_waktu' => $this->request->getPost('jangka_waktu'),
      );
      $model->saveSimpanan($data);
      return redirect()->to('/simpanan');
    }

    public function edit($no_simpanan){
        $model = new SimpananModel();
        $data['simpanan'] = $model->getSimpanan($no_simpanan)->getRow();
        return view('simpanan/edit', $data);
    }

    public function update(){
        $model = new SimpananModel();
        $no_simpanan = $this->request->getPost('no_simpanan');
        $data = array(
            'no_simpanan' => $this->request->getPost('no_simpanan'),
            'no_anggota' => $this->request->getPost('no_anggota'),
            'besar_simpanan' => $this->request->getPost('besar_simpanan'),
            'profit' => $this->request->getPost('profit'),
            'jangka_waktu' => $this->request->getPost('jangka_waktu'),
          );
        $model->updateSimpanan($data, $no_simpanan);
        return redirect()->to('/simpanan');
    }

    public function delete($no_simpanan){
        $model = new SimpananModel();
        $model->deleteSimpanan($no_simpanan);
        return redirect()->to('/simpanan');
    }

}