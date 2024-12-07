<?php

namespace App\Models;

use CodeIgniter\Model;

class KaryawanModel extends Model
{
    protected $table      = 'karyawan';  // Nama tabel di database
    protected $primaryKey = 'id';       // Kolom primary key
    protected $allowedFields = ['nama_karyawan', 'departemen_id', 'jabatan_id'];  // Kolom yang boleh diisi

    // Relasi dengan Departemen dan Jabatan
    public function getKaryawanWithDetail()
    {
        return $this->select('karyawan.*, departemen.nama_departemen, jabatan.nama_jabatan')
                    ->join('departemen', 'departemen.id = karyawan.departemen_id')
                    ->join('jabatan', 'jabatan.id = karyawan.jabatan_id')
                    ->findAll();
    }
}
