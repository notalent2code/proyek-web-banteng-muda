<?php

namespace App\Controllers;

use App\Models\AngsuranModel;
use CodeIgniter\HTTP\Request;

class Angsuran extends BaseController
{
    public function index(){
        $model = new AngsuranModel();
        $data['angsuran'] = $model->getAngsuran();
        return view('angsuran/angsuran', $data);
    }

    public function add_new(){
        return view('angsuran/add');
    }

    public function save(){
      $model = new AngsuranModel();
      $data = array(
        'no_angsuran' => $this->request->getPost('no_angsuran'),
        'no_pinjaman' => $this->request->getPost('no_pinjaman'),
        'cicilan' => $this->request->getPost('cicilan'),
        'angsuran_ke' => $this->request->getPost('angsuran_ke'),
        'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
      );
      $model->saveAngsuran($data);
      return redirect()->to('/angsuran');
    }

    public function edit($no_angsuran){
        $model = new AngsuranModel();
        $data['angsuran'] = $model->getAngsuran($no_angsuran)->getRow();
        return view('angsuran/edit', $data);
    }

    public function update(){
        $model = new AngsuranModel();
        $no_angsuran = $this->request->getPost('no_angsuran');
        $data = array(
            'no_angsuran' => $this->request->getPost('no_angsuran'),
            'no_pinjaman' => $this->request->getPost('no_pinjaman'),
            'cicilan' => $this->request->getPost('cicilan'),
            'angsuran_ke' => $this->request->getPost('angsuran_ke'),
            'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
          );
        $model->updateAngsuran($data, $no_angsuran);
        return redirect()->to('/angsuran');
    }

    public function delete($no_angsuran){
        $model = new AngsuranModel();
        $model->deleteAngsuran($no_angsuran);
        return redirect()->to('/angsuran');
    }

}