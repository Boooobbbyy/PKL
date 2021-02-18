<?php

namespace App\Models;

use CodeIgniter\Model;

class AhomeModel extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'foto', 'date_uploaded', 'uploader'];
}
