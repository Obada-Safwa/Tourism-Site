<?php

class BaseServices {

    private $dao;

    public function __construct($dao) {
        $this->dao = $dao;
    }

    public function get_all() {
        return $this->dao->get_all();
    }

    public function get_by_id($id, $id_column_name) {
        return $this->dao->get_by_id($id, $id_column_name);
    }

    public function add($entity){
        return $this->dao->add($entity);
    }

    public function update($entity, $id,$id_column_name){
        return $this->dao->update($entity, $id,$id_column_name);
    }
    
    public function delete($id,$id_column_name){
        return $this->dao->delete($id,$id_column_name);
    }

}

?>