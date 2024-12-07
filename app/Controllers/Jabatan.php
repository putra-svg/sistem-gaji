<?php

namespace App\Controllers;

use App\Models\JabatanModel;

class Jabatan extends BaseController
{
    public function index()
    {
        $model = new JabatanModel();
        $data['jabatan'] = $model->findAll();
        return view('jabatan/index', $data);
    }

    public function create()
    {
        return view('jabatan/create');
    }

    public function store()
    {
        $model = new JabatanModel();
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        ];
        $model->insert($data);
        return redirect()->to('/jabatan');
    }

    public function edit($id)
    {
        $model = new JabatanModel();
        $data['jabatan'] = $model->find($id);
        return view('jabatan/edit', $data);
    }

    public function update($id)
    {
        $model = new JabatanModel();
        $data = [
            'nama_jabatan' => $this->request->getPost('nama_jabatan'),
        ];
        $model->update($id, $data);
        return redirect()->to('/jabatan');
    }

    public function delete($id)
    {
        $model = new JabatanModel();
        $model->delete($id);
        return redirect()->to('/jabatan');
    }
}
