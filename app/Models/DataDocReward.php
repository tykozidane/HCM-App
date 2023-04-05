<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class DataDocReward extends Model
{
    protected $table = 'doc_reward';
    protected $allowedFields = ['id','nik', 'claim_id','reward_id', 'nama'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    public function getAllData()
    {
        return $this->findAll();
    }
    public function getById($id)
    {
        return$this->where('id', $id)->find();
    }
    public function getByIdfirst($id)
    {
        return$this->where('id', $id)->first();
    }
    public function getByClaimId($claim_id)
    {
        return$this->where('claim_id', $claim_id)->findAll();
    }
    public function insertData($datasimpan)
    {
       return $this->insert($datasimpan);
        // return true;
    }
    public function dataUpdate($id, $data)
    {
        $this->update($id, $data);
        return true;
    }
    public function dataDelete($id)
    {
        $this->where('id', $id)->delete();
        return true;
    }
}