<?php 
namespace App\Models;

use CodeIgniter\Model;

class BaseModel extends Model {


    protected function vinculaIdUsuario($dados)
    {
        $dados['dados']['usuario_id'] = session()->usuario_id;

        return $dados;
    }

    protected function geraChave($dados)
    {
        $dados['dados']['chave'] = md5(uniqid(rand(),true));

        return $dados;
    }

    public function getAll(): array
    {
        return $this->findAll();
    }

    public function addOrder( array $order = null): object
    {
        if (!is_null($order)){
            if(key_exists('order', $order)){

                foreach ($order['order'] as $ordem){
                    $this->orderBy($ordem['campo'], $ordem['sentido']);
                }
            } else{
                $this->orderBy($order['campo'], $order['sentido']);
            }
        }
        return $this;
    }

    public function getById($id){
        if (!is_null($id)){
            return $this->find($id);
        }


    }

}






