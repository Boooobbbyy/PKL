<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'link', 'date_uploaded'];

    public function getVideo($id)
    {
        return $this->table('videos')->where('id', $id)->get()->getRowArray();
    }

    public function getVideos()
    {
        return $this->db->table('videos')->get()->getResultArray();
    }
}
