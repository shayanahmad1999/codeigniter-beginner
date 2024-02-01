<?php

namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $table            = 'companies';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'id',
        'brand_name',
        'year_of_company_foundation',
        'year_of_offering_franchises',
        'pay_box_of_franchises',
        'average_turnover',
        'contact_phone_name',
        'designation',
        'whatsApp_INT',
        'email',
        'office_INT',
        'postal_address',
        'description',
        'category',
        'country',
        'city',
        'province',
        'brand_logo',
        'setup_image_1',
        'setup_image_2',
        'setup_image_3',
        'brand_type',
        'brand_slogan',
        'slider',
        'image',
    ];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    public function get_company($id = null, $searchTerm = null) {
        $db = \Config\Database::connect();
        $query = $db->table($this->table);
        if ($searchTerm) {
            $query->like('brand_name', $searchTerm);
        }
        if($id === null) {
            return $query->get()->getResult();
        }
        return $query->where('id', $id)->get()->getRow();
    }

    public function add_company($data) {
        return $this->insert($data);
    }

    public function update_company($id, $data) {
        if($this->find($id)) {
            return $this->update($id, $data);
        }
    }

    public function delete_company($id) {
        if($this->find($id)) {
            return $this->delete($id);
        }
    }

    public function one_company($id) {
        if($this->find($id)) {
            return $this->find($id);
        }
    }
}
