<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\PinjamanModel;
use CodeIgniter\HTTP\Request;

class Pinjaman extends BaseController
{
    public function index()
    {
        $model = new PinjamanModel();
        if (session()->get('level') === '2') {
            $data['pinjaman'] = $model->getPinjaman();
        } else {
            $model2 = new AnggotaModel();
            $email = session()->get('email');
            $anggota = $model2->getAnggotaEmail($email)->getRow();
            $noAnggota = $anggota->no_anggota;
            $data['pinjaman'] = $model->getPinjamanAnggota($noAnggota)->getRow();
            if ($data['pinjaman'] === null) {
                return redirect()->to('/dashboard');
            }
        }
        return view('pinjaman/pinjaman', $data);
    }

    public function add_new()
    {
        $model2 = new AnggotaModel();
        $email = session()->get('email');
        $data['anggota'] = $model2->getAnggotaEmail($email)->getRow();

        return view('pinjaman/add', $data);
    }

    public function save()
    {
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

    public function edit($no_pinjaman)
    {
        if (session()->get('level') === '2') {
            $model = new PinjamanModel();
            $data['pinjaman'] = $model->getPinjaman($no_pinjaman)->getRow();
            return view('pinjaman/edit', $data);
        }
        return redirect()->to('pinjaman');
    }

    public function update()
    {
        if (session()->get('level') === '2') {
            $model = new PinjamanModel();
            $no_pinjaman = $this->request->getPost('no_pinjaman');
            $data = array(
                'no_pinjaman' => $this->request->getPost('no_pinjaman'),
                'no_anggota' => $this->request->getPost('no_anggota'),
                'tanggal_pencairan' => $this->request->getPost('tanggal_pencairan'),
                'lama_pinjaman' => $this->request->getPost('lama_pinjaman'),
                'besar_pinjaman' => $this->request->getPost('besar_pinjaman'),
                'status_pinjaman' => $this->request->getPost('status_pinjaman')
            );
            $model->updatePinjaman($data, $no_pinjaman);
        } else {
            $model = new PinjamanModel();
            $no_pinjaman = $this->request->getPost('no_pinjaman');
            $data = array(
                'no_pinjaman' => $this->request->getPost('no_pinjaman'),
                'status_pinjaman' => $this->request->getPost('status_pinjaman')
            );
            $model->updateSimpanan($data, $no_pinjaman);
        }
        return redirect()->to('/pinjaman');
    }

    public function delete($no_pinjaman)
    {
        if (session()->get('level') === '2') {
            $model = new PinjamanModel();
            $model->deletePinjaman($no_pinjaman);
        }
        return redirect()->to('/pinjaman');
    }
}
