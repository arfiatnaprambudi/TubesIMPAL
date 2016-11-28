<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class DataMateri extends CI_Model{
    function __construct() {
        $this->tableName = 'materi';
        $this->primaryKey = 'id';
    }
    
    public function insert($data = array()){
        $insert = $this->db->insert($this->tableName,$data);
        if($insert){
            return $this->db->insert_id();
        }else{
            return false;    
        }
    }
}