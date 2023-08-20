<?php

require_once "BaseDao.class.php";

class AccommodationDao extends BaseDao {

    public function __construct() {
        parent::__construct("Accommodation");
    }
}

?>