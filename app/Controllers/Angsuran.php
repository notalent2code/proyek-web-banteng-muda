<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\AngsuranModel;
use App\Models\PinjamanModel;
use CodeIgniter\HTTP\Request;

class Angsuran extends BaseController
{
    public function index()
    {
        $model = new AngsuranModel();

        if (session()->get('level') === '2') {
            $data['angsuran'] = $model->getAngsuran();
        } else {
            $model2 = new PinjamanModel();
            $model3 = new AnggotaModel();
            $email = session()->get('email');
            $anggota = $model3->getAnggotaEmail($email)->getRow();
            $noAnggota = $anggota->no_anggota;
            $data['pinjaman'] = $model2->getPinjamanAnggota($noAnggota)->getRow();
            $noPinjaman = $data['pinjaman']->no_pinjaman;
            $data['angsuran'] = $model->getAngsuranPinjaman($noPinjaman)->getRow();
            if ($data['angsuran'] === null) {
                return redirect()->to('/dashboard');
            }
        }
        return view('angsuran/angsuran', $data);
    }

    public function add_new()
    {
        return view('angsuran/add');
    }

    public function save()
    {
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

    public function edit($no_angsuran)
    {
        if (session()->get('level') === '2') {
            $model = new AngsuranModel();
            $data['angsuran'] = $model->getAngsuran($no_angsuran)->getRow();
            return view('angsuran/edit', $data);
        }
        return redirect()->to('angsuran');

    }

    public function update()
    {
        if(session()->get('level') === '2'){
            $model = new AngsuranModel();
            $no_angsuran = $this->request->getPost('no_angsuran');
            $data = array(
                'no_angsuran' => $this->request->getPost('no_angsuran'),
                'no_pinjaman' => $this->request->getPost('no_pinjaman'),
                'cicilan' => $this->request->getPost('cicilan'),
                'angsuran_ke' => $this->request->getPost('angsuran_ke'),
                'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
                'status_angsuran' => $this->request->getPost('status_angsuran'),
            );
            $model->updateAngsuran($data, $no_angsuran);
        } else {
            $model = new AngsuranModel();
            $no_angsuran = $this->request->getPost('no_angsuran');
            $data = array(
                'no_angsuran' => $this->request->getPost('no_angsuran'),
                'status_angsuran' => $this->request->getPost('status_angsuran'),
            );
            $model->updateAngsuran($data, $no_angsuran);
        }
        return redirect()->to('/angsuran');
    }

    public function delete($no_angsuran)
    {
        $model = new AngsuranModel();
        $model->deleteAngsuran($no_angsuran);
        return redirect()->to('/angsuran');
    }
}
