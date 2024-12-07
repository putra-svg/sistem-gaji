<?php

namespace App\Models;

use CodeIgniter\Model;

class BonusModel extends Model
{
    protected $table = 'bonus';
    protected $primaryKey = 'id';
    protected $allowedFields = ['karyawan_id', 'jumlah_bonus'];
}
