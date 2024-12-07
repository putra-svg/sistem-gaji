<?php

namespace App\Controllers;

use App\Models\PenggajianModel;
use App\Models\KaryawanModel;

class Penggajian extends BaseController
{
    protected $penggajianModel;
    protected $karyawanModel;

    public function __construct()
    {
        $this->penggajianModel = new PenggajianModel();
        $this->karyawanModel = new KaryawanModel();
    }

    public function index()
    {
        $data['penggajian'] = $this->penggajianModel
            ->select('penggajian.*, karyawan.nama_karyawan')
            ->join('karyawan', 'penggajian.karyawan_id = karyawan.id')
            ->findAll();
        return view('penggajian/index', $data);
    }

    public function create()
    {
        $data['karyawan'] = $this->karyawanModel->findAll();
        return view('penggajian/create', $data);
    }

    public function store()
    {
        $gajiPokok = preg_replace('/[^\d]/', '', $this->request->getPost('gaji_pokok'));
        $tunjangan = preg_replace('/[^\d]/', '', $this->request->getPost('tunjangan'));
        $totalGaji = $gajiPokok + $tunjangan;

        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'gaji_pokok' => $gajiPokok,
            'tunjangan' => $tunjangan,
            'total_gaji' => $totalGaji
        ];

        $this->penggajianModel->insert($data);
        return redirect()->to('/penggajian');
    }

    public function edit($id)
    {
        $data['penggajian'] = $this->penggajianModel->find($id);
        $data['karyawan'] = $this->karyawanModel->findAll();
        return view('penggajian/edit', $data);
    }

    public function update($id)
    {
        $gajiPokok = preg_replace('/[^\d]/', '', $this->request->getPost('gaji_pokok'));
        $tunjangan = preg_replace('/[^\d]/', '', $this->request->getPost('tunjangan'));
        $totalGaji = $gajiPokok + $tunjangan;

        $data = [
            'karyawan_id' => $this->request->getPost('karyawan_id'),
            'gaji_pokok' => $gajiPokok,
            'tunjangan' => $tunjangan,
            'total_gaji' => $totalGaji
        ];

        $this->penggajianModel->update($id, $data);
        return redirect()->to('/penggajian');
    }

    public function delete($id)
    {
        $this->penggajianModel->delete($id);
        return redirect()->to('/penggajian');
    }
}
