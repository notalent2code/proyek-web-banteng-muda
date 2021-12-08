<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\IuranModel;
use CodeIgniter\HTTP\Request;

class Iuran extends BaseController
{
    public function index()
    {
        $model = new IuranModel();
<<<<<<< HEAD
        $data['iuran'] = $model->getIuran();
        if (session()->get('level') === '2') {
            return view('iuran/iuran', $data);
        }
        else {
            return view('iuran/iuran2', $data);
        }
=======
        if (session()->get('level') === '2') {

            $data['iuran'] = $model->getIuran();
        } else {
            $model2 = new AnggotaModel();
            $email = session()->get('email');
            $anggota = $model2->getAnggotaEmail($email)->getRow();
            $noAnggota = $anggota->no_anggota;
            $data['iuran'] = $model->getIuranAnggota($noAnggota)->getResultArray();
            if ($data['iuran'] === null) {
                return redirect()->to('/dashboard');
            }
        }

        return view('iuran/iuran', $data);
>>>>>>> ae3354b4d4db3149eb474613d99a826362c6ad75
    }

    public function add_new()
    {
        if (session()->get('level') === '2') {
            return view('iuran/add');
        }
        return redirect()->to('/dashboard');
    }

    public function save()
    {
        if (session()->get('level') === '2') {

            $model = new IuranModel();
            $data = array(
                'no_iuran' => $this->request->getPost('no_iuran'),
                'no_anggota' => $this->request->getPost('no_anggota'),
                'iuran_pokok' => $this->request->getPost('iuran_pokok'),
                'iuran_wajib' => $this->request->getPost('iuran_wajib'),
                'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
            );
            $model->saveIuran($data);
            return redirect()->to('/iuran');
        }
        return redirect()->to('/dashboard');
    }

    public function edit($no_iuran)
    {
        if (session()->get('level') === '2') {

            $model = new IuranModel();
            $data['iuran'] = $model->getIuran($no_iuran)->getRow();
            return view('iuran/edit', $data);
        }
        return redirect()->to('iuran');
    }

    public function update()
    {
        if (session()->get('level') === '2') {
            $model = new IuranModel();
            $no_iuran = $this->request->getPost('no_iuran');
            $data = array(
                'no_iuran' => $this->request->getPost('no_iuran'),
                'no_anggota' => $this->request->getPost('no_anggota'),
                'iuran_pokok' => $this->request->getPost('iuran_pokok'),
                'iuran_wajib' => $this->request->getPost('iuran_wajib'),
                'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
                'status_iuran' => $this->request->getPost('status_iuran'),

            );
            $model->updateIuran($data, $no_iuran);
        } else {
            $model = new IuranModel();
            $no_iuran = $this->request->getPost('no_iuran');
            $data = array(
                'no_iuran' => $this->request->getPost('no_iuran'),
                'status_iuran' => $this->request->getPost('status_iuran'),
            );
            $model->updateIuran($data, $no_iuran);
        }
        return redirect()->to('/iuran');
    }

    public function delete($no_iuran)
    {
        if (session()->get('level') === '2') {
            $model = new IuranModel();
            $model->deleteIuran($no_iuran);
            return redirect()->to('/iuran');
        }
    }
}
