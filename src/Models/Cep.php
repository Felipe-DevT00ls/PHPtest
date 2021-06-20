<?php
namespace Models;
use Core\Model;

class Cep extends Model{
    public function inDatabase($data){
        $sql = "SELECT * FROM `cep` WHERE `cep` LIKE '".$data."'";
        $sql = $this->db->query($sql);
    
        if($sql->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function insertData($data){
         $sql = "INSERT INTO cep SET cep = '$data->cep', logadouro = '$data->logradouro', complemento = '$data->complemento', bairro = '$data->bairro', localidade = '$data->localidade', uf = '$data->uf', ibge = '$data->ibge', gia = '$data->gia', ddd = '$data->ddd', siafi = '$data->siafi'";
         try {
            $sql = $this->db->query($sql);
         } catch (\Throwable $th) {
             echo "erro ao inserir dados";
             echo $th->getMessage();
         }
    }

    public function cepInDatabase($cep){
        $sql = "SELECT * FROM `cep` WHERE `cep` LIKE '".$cep."'";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            return $sql = $sql->fetch();
        }else{
            return array(
                "message" => "cep não localizado"
            );
        }
    }
}