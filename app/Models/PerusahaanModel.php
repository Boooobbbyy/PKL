<?php

namespace App\Models;

use CodeIgniter\Model;

class PerusahaanModel extends Model
{
    protected $table = 'perusahaan';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_pt', 'profile_pt', 'logo_pt', 'no_telp', 'email', 'tempat'];
}
