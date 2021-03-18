<?php

namespace App\Models;

use CodeIgniter\Model;

class SrtmModel extends Model
{
    protected $table = 'srtm';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama', 'nomor', 'tanggal', 'dari', 'surat'];
}
