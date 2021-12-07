<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\UserModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $model = new UserModel();
        $model2 = new AnggotaModel();
        $email = session()->get('email');
        if (session()->get('level') === '2') {
            return view('pages/dashboard');
        } else if (session()->get('level') === '1') {
            $data['user'] = $model->getUser($email)->getRow();
            $data['anggota'] = $model2->getAnggotaEmail($email)->getRow();

            if ($data['anggota'] === null) {
                return redirect()->to('/anggota/add_new');
            }
        }
        return view('pages/dashboard', $data);
    }

    public function profile()
    {
        if (session()->get('level') === '1') {
            $email = session()->get('email');
            $model = new UserModel();
            $model2 = new AnggotaModel();
            $data['user'] = $model->getUser($email)->getRow();
            $data['anggota'] = $model2->getAnggotaEmail($email)->getRow();
            return view('pages/profile', $data);
        }
        return redirect()->to('/dashboard');
    }

    public function fotoProfil()
    {
        $session = session();
        $namaFile = $_FILES["foto_profil"]["name"];
        $sizeFile = $_FILES["foto_profil"]["size"];
        $error = $_FILES["foto_profil"]["error"];
        $tmpName = $_FILES["foto_profil"]["tmp_name"];
        $errorCheck = false;

        $allowedFileExt = ["jpg", "jpeg", "png"];
        $fileExt = explode('.', $namaFile);
        $fileExt = strtolower(end($fileExt));

        if ($error === 4) {
            $session->setFlashdata('error', 'Tidak ada foto yang diupload !');
            $errorCheck = true;
        } else if (!in_array($fileExt, $allowedFileExt)) {
            $session->setFlashdata('error', 'Extensi File Salah !');
            $errorCheck = true;
        } else if ($sizeFile > 5000000) {
            $session->setFlashdata('error', 'File yang diupload lebih dari 5 MB !');
            $errorCheck = true;
        }

        if ($errorCheck) {
            return redirect()->to('/profile');
        }

        $newFileName = uniqid();
        $newFileName .= '.' . $fileExt;
        echo $newFileName;

        $session = session()->get('email');

        $dir = "foto_profil/$session";
        if (!is_dir($dir)) {
            mkdir("foto_profil/" . session()->get('email'), 0777, true);
        }
        move_uploaded_file($tmpName, 'foto_profil/' . session()->get('email') . '/' . $newFileName);

        $model = new UserModel();
        $email = session()->get('email');
        $data = $newFileName;
        $model->saveImage($data, $email);
        return redirect()->to('/profile');
    }
}
