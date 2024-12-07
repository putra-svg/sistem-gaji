<?php

namespace App\Controllers;

use App\Models\AbsensiModel;
use App\Models\KaryawanModel;

class Absensi extends BaseController
{
    public function index()
    {
        $model = new AbsensiModel();
        $data['absensi'] = $model->getAbsensiWithKaryawan();  // Ambil data absensi beserta nama karyawan
        return view('absensi/index', $data);
    }

    public function create()
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->findAll();  // Ambil semua karyawan untuk dropdown
        return view('absensi/create', $data);
    }

    public function store()
    {
        $model = new AbsensiModel();
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'status' => $this->request->getPost('status')
        ];
        $model->insert($data);  // Simpan data absensi
        return redirect()->to('/absensi');
    }

    public function edit($id)
    {
        $model = new AbsensiModel();
        $karyawanModel = new KaryawanModel();

        $data['absensi'] = $model->find($id);  // Ambil data absensi berdasarkan ID
        $data['karyawan'] = $karyawanModel->findAll();  // Ambil semua karyawan untuk dropdown
        return view('absensi/edit', $data);
    }

    public function update($id)
    {
        $model = new AbsensiModel();
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'tanggal' => $this->request->getPost('tanggal'),
            'status' => $this->request->getPost('status')
        ];
        $model->update($id, $data);  // Update data absensi
        return redirect()->to('/absensi');
    }

    public function delete($id)
    {
        $model = new AbsensiModel();
        $model->delete($id);  // Hapus data absensi berdasarkan ID
        return redirect()->to('/absensi');
    }
}
