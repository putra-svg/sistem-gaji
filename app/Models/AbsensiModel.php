<?php

namespace App\Models;

use CodeIgniter\Model;

class AbsensiModel extends Model
{
    protected $table      = 'absensi';      // Nama tabel
    protected $primaryKey = 'id';           // Primary key
    protected $allowedFields = ['karyawan_id', 'tanggal', 'status']; // Kolom yang diizinkan untuk CRUD

    // Relasi dengan tabel Karyawan
    public function getAbsensiWithKaryawan()
    {
        return $this->select('absensi.*, karyawan.nama_karyawan')
                    ->join('karyawan', 'karyawan.id = absensi.karyawan_id')
                    ->findAll();
    }
}
