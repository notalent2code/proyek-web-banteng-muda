<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\SimpananModel;
use CodeIgniter\HTTP\Request;

class Simpanan extends BaseController
{
    public function index(){
        $model = new SimpananModel();
        $model2 = new AnggotaModel();
        $email = session()->get('email');
        if(session()->get('level') === '2'){
            $data['simpanan'] = $model->getSimpanan();
        }
        else{
            $anggota = $model2->getAnggotaEmail($email)->getRow();
            $noAnggota = $anggota->no_anggota;
            $data['simpanan'] = $model->getSimpananAnggota($noAnggota)->getRow();
            if($data['simpanan'] === null){
                return redirect()->to('/dashboard');
            }
        }
        return view('simpanan/simpanan', $data);
    }

    public function add_new(){
        $model2 = new AnggotaModel();
        $email = session()->get('email');
        $data['anggota'] = $model2->getAnggotaEmail($email)->getRow();

        return view('simpanan/add', $data);
    }

    public function save(){
      $model = new SimpananModel();
      $data = array(
        'no_simpanan' => $this->request->getPost('no_simpanan'),
        'no_anggota' => $this->request->getPost('no_anggota'),
        'besar_simpanan' => $this->request->getPost('besar_simpanan'),
        'profit' => $this->request->getPost('profit'),
        'tanggal_setor' => $this->request->getPost('tanggal_setor'),
        'jangka_waktu' => $this->request->getPost('jangka_waktu'),
      );
      $model->saveSimpanan($data);
      return redirect()->to('/simpanan');
    }

    public function edit($no_simpanan){
        if(session()->get('level') === '2'){
            $model = new SimpananModel();
            $data['simpanan'] = $model->getSimpanan($no_simpanan)->getRow();
            return view('simpanan/edit', $data);
        }
    }

    public function update(){
        if(session()->get('level') === '2'){
            $model = new SimpananModel();
            $no_simpanan = $this->request->getPost('no_simpanan');
            $data = array(
                'no_simpanan' => $this->request->getPost('no_simpanan'),
                'no_anggota' => $this->request->getPost('no_anggota'),
                'besar_simpanan' => $this->request->getPost('besar_simpanan'),
                'profit' => $this->request->getPost('profit'),
                'jangka_waktu' => $this->request->getPost('jangka_waktu'),
                'status_simpanan' => $this->request->getPost('status_simpanan'),
              );
            $model->updateSimpanan($data, $no_simpanan);
        }
        else{
            $model = new SimpananModel();
            $no_simpanan = $this->request->getPost('no_simpanan');
            $data = array(
                'no_simpanan' => $this->request->getPost('no_simpanan'),
                'status_simpanan' => $this->request->getPost('status_simpanan')
            );
            $model->updateSimpanan($data, $no_simpanan);
        }
        return redirect()->to('/simpanan');
    }

    public function delete($no_simpanan){
        $model = new SimpananModel();
        if(session()->get('level') === '2'){
            $model->deleteSimpanan($no_simpanan);
        }
        return redirect()->to('/simpanan');
    }

}