<?php

namespace App\Controllers;

use App\Models\LemburModel;
use App\Models\KaryawanModel;

class Lembur extends BaseController
{
    public function index()
    {
        $model = new LemburModel();
        $data['lembur'] = $model->getLemburWithKaryawan();  // Ambil data lembur beserta nama karyawan
        return view('lembur/index', $data);
    }

    public function create()
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->findAll();  // Ambil semua karyawan untuk dropdown
        return view('lembur/create', $data);
    }

    public function store()
    {
        $model = new LemburModel();
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_lembur' => $this->request->getPost('jam_lembur'),
        ];
        $model->insert($data);  // Simpan data lembur
        return redirect()->to('/lembur');
    }

    public function edit($id)
    {
        $model = new LemburModel();
        $karyawanModel = new KaryawanModel();

        $data['lembur'] = $model->find($id);  // Ambil data lembur berdasarkan ID
        $data['karyawan'] = $karyawanModel->findAll();  // Ambil semua karyawan untuk dropdown
        return view('lembur/edit', $data);
    }

    public function update($id)
    {
        $model = new LemburModel();
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'jam_lembur' => $this->request->getPost('jam_lembur'),
        ];
        $model->update($id, $data);  // Update data lembur
        return redirect()->to('/lembur');
    }

    public function delete($id)
    {
        $model = new LemburModel();
        $model->delete($id);  // Hapus data lembur
        return redirect()->to('/lembur');
    }
}
