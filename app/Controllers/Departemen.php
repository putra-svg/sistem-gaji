<?php

namespace App\Controllers;

use App\Models\DepartemenModel;

class Departemen extends BaseController
{
    public function index()
    {
        $model = new DepartemenModel();
        $data['departemen'] = $model->findAll();
        return view('departemen/index', $data);
    }

    public function create()
    {
        return view('departemen/create');
    }

    public function store()
    {
        $model = new DepartemenModel();
        $data = [
            'nama_departemen' => $this->request->getPost('nama_departemen')
        ];
        $model->insert($data);
        return redirect()->to('/departemen');
    }

    public function edit($id)
    {
        $model = new DepartemenModel();
        $data['departemen'] = $model->find($id);
        return view('departemen/edit', $data);
    }

    public function update($id)
    {
        $model = new DepartemenModel();
        $data = [
            'nama_departemen' => $this->request->getPost('nama_departemen')
        ];
        $model->update($id, $data);
        return redirect()->to('/departemen');
    }

    public function delete($id)
    {
        $model = new DepartemenModel();
        $model->delete($id);
        return redirect()->to('/departemen');
    }
}
