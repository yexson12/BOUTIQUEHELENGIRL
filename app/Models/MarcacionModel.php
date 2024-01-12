<?php
namespace App\Models;
use CodeIgniter\Model;

class MarcacionModel extends Model
{
    protected $table = 'Marcacion';
    protected $primaryKey = 'idMarcacion';
    protected $allowedFields = ['datosextraidos','estado']; 
  
    public function get($id=null) {

        if($id===null){
            return $this->findAll();
        }  
        return $this->asArray()
        ->where([ 'idMarcacion'=> $id])
        ->first();

     }
}