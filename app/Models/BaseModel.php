<?php 
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model {

    public function getById($id){
        if (!is_null($id)){
            $this->find($id);
        }
    }

}






