<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggajianModel extends Model
{
    protected $table = 'penggajian';
    protected $primaryKey = 'id';
    protected $allowedFields = ['karyawan_id', 'gaji_pokok', 'tunjangan', 'total_gaji'];
}
