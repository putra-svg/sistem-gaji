<?php

namespace App\Models;

use CodeIgniter\Model;

class LemburModel extends Model
{
    protected $table      = 'lembur';       // Nama tabel
    protected $primaryKey = 'id';           // Primary key
    protected $allowedFields = ['karyawan_id', 'tanggal', 'jam_lembur']; // Kolom untuk CRUD

    // Relasi dengan tabel Karyawan
    public function getLemburWithKaryawan()
    {
        return $this->select('lembur.*, karyawan.nama_karyawan')
                    ->join('karyawan', 'karyawan.id = lembur.karyawan_id')
                    ->findAll();
    }
}
