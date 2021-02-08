<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'videos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'deskripsi', 'link', 'date_uploaded'];

    public function getVideo($username)
    {
        return $this->table('videos')->where('username', $username)->get()->getRow();
    }

    public function getVideos()
    {
        return $this->db->table('videos')->get()->getResultArray();
    }
    public function edit_user($user_id)
    {
        $query = $this->db->query("select * from user where user_id = $user_id");
        $row = $query->getRowarray();
        return $row;
    }
    public function update_user($data, $user_id)
    {
        $builder = $this->db->table('user');
        $builder->where('user_id', $user_id);
        $builder->update($data);
        return $builder;
    }
    public function delete_user($user_id)
    {
        $builder = $this->db->table('user');
        $builder->where('user_id', $user_id);
        $builder->delete();
        return $builder;
    }
}
