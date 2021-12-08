<?php

namespace App\Controllers;

use App\Models\IuranModel;
use CodeIgniter\HTTP\Request;

class Iuran extends BaseController
{
    public function index()
    {
        $model = new IuranModel();
        $data['iuran'] = $model->getIuran();
        if (session()->get('level') === '2') {
            return view('iuran/iuran', $data);
        }
        else {
            return view('iuran/iuran2', $data);
        }
    }

    public function add_new()
    {
        return view('iuran/add');
    }

    public function save()
    {
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

    public function edit($no_iuran)
    {
        $model = new IuranModel();
        $data['iuran'] = $model->getIuran($no_iuran)->getRow();
        return view('iuran/edit', $data);
    }

    public function update()
    {
        $model = new IuranModel();
        $no_iuran = $this->request->getPost('no_iuran');
        $data = array(
            'no_iuran' => $this->request->getPost('no_iuran'),
            'no_anggota' => $this->request->getPost('no_anggota'),
            'iuran_pokok' => $this->request->getPost('iuran_pokok'),
            'iuran_wajib' => $this->request->getPost('iuran_wajib'),
            'tanggal_bayar' => $this->request->getPost('tanggal_bayar'),
        );
        $model->updateIuran($data, $no_iuran);
        return redirect()->to('/iuran');
    }

    public function delete($no_iuran)
    {
        $model = new IuranModel();
        $model->deleteIuran($no_iuran);
        return redirect()->to('/iuran');
    }
}
