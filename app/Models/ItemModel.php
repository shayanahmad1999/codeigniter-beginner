<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model 
{
    protected $table = 'items';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'deleted'];

    public function getItems($id = null) {
        if ($id === null) {
            return $this->where('deleted', 0)->findAll();
        }
    
        return $this->where('deleted', 0)->find($id);
    }    

    public function addItem($data) {
        return $this->insert($data);
    }

    public function updateItem($id, $data) {
        return $this->update($id, $data);
    }

    public function softDeleteItem($id) {
        if ($this->find($id)) {
            return $this->update($id, ['deleted' => 1]);
        }
    }

    public function softDeleteGetItems($id = null) {
        if ($id === null) {
            return $this->where('deleted', 1)->findAll();
        }
    
        return $this->where('deleted', 1)->find($id);
    }   

    public function recoverDeleteItem($id) {
        if ($this->find($id)) {
            return $this->update($id, ['deleted' => 0]);
        }   
    }

    public function DeleteItem($id) {
        if ($this->find($id)) {
            return $this->delete($id);
        }
    }
    
}
