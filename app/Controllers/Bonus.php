<?php

namespace App\Controllers;

use App\Models\BonusModel;
use App\Models\KaryawanModel;

class Bonus extends BaseController
{
    protected $bonusModel;

    public function __construct()
    {
        $this->bonusModel = new BonusModel();
    }

    // Menampilkan data bonus
    public function index()
    {
        $model = new BonusModel();
        $data['bonus'] = $model->join('karyawan', 'karyawan.id = bonus.karyawan_id')
                               ->select('bonus.*, karyawan.nama_karyawan')
                               ->findAll();
        return view('bonus/index', $data);
    }

    // Menampilkan form tambah bonus
    public function create()
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->findAll();
        return view('bonus/create', $data);
    }

    // Menyimpan data bonus
    public function store()
    {
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'jumlah_bonus' => $this->request->getPost('jumlah_bonus')
        ];
        $this->bonusModel->insert($data);
        return redirect()->to('/bonus');
    }

    // Menampilkan form edit bonus
    public function edit($id)
    {
        $karyawanModel = new KaryawanModel();
        $data['karyawan'] = $karyawanModel->findAll();
        $data['bonus'] = $this->bonusModel->find($id);
        return view('bonus/edit', $data);
    }

    // Menyimpan perubahan data bonus
    public function update($id)
    {
        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'jumlah_bonus' => $this->request->getPost('jumlah_bonus')
        ];
        $this->bonusModel->update($id, $data);
        return redirect()->to('/bonus');
    }

    // Menghapus data bonus
    public function delete($id)
    {
        $this->bonusModel->delete($id);
        return redirect()->to('/bonus');
    }
}
