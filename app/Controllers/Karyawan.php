<?php

namespace App\Controllers;

use App\Models\KaryawanModel;
use App\Models\DepartemenModel;
use App\Models\JabatanModel;

class Karyawan extends BaseController
{
    public function index()
    {
        $model = new KaryawanModel();
        $data['karyawan'] = $model->getKaryawanWithDetail();  // Ambil data karyawan beserta departemen dan jabatan
        return view('karyawan/index', $data);
    }

    public function create()
    {
        $departemenModel = new DepartemenModel();
        $jabatanModel = new JabatanModel();
        
        $data['departemen'] = $departemenModel->findAll();  // Ambil semua departemen untuk dropdown
        $data['jabatan'] = $jabatanModel->findAll();        // Ambil semua jabatan untuk dropdown
        
        return view('karyawan/create', $data);
    }

    public function store()
    {
        $model = new KaryawanModel();
        $data = [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'departemen_id' => $this->request->getPost('departemen_id'),  // ID departemen
            'jabatan_id' => $this->request->getPost('jabatan_id')  // ID jabatan
        ];
        $model->insert($data);  // Simpan data karyawan
        return redirect()->to('/karyawan');
    }

    public function edit($id)
    {
        $model = new KaryawanModel();
        $departemenModel = new DepartemenModel();
        $jabatanModel = new JabatanModel();

        $data['karyawan'] = $model->find($id);  // Ambil data karyawan berdasarkan ID
        $data['departemen'] = $departemenModel->findAll();  // Ambil semua departemen untuk dropdown
        $data['jabatan'] = $jabatanModel->findAll();        // Ambil semua jabatan untuk dropdown
        
        return view('karyawan/edit', $data);
    }

    public function update($id)
    {
        $model = new KaryawanModel();
        $data = [
            'nama_karyawan' => $this->request->getPost('nama_karyawan'),
            'departemen_id' => $this->request->getPost('departemen_id'),
            'jabatan_id' => $this->request->getPost('jabatan_id')
        ];
        $model->update($id, $data);  // Update data karyawan
        return redirect()->to('/karyawan');
    }

    public function delete($id)
    {
        $model = new KaryawanModel();
        $model->delete($id);  // Hapus data karyawan berdasarkan ID
        return redirect()->to('/karyawan');
    }
}
