<?php

require_once "BaseServices.php";

class AccommodationServices extends BaseServices {

    public function __construct() {
        parent::__construct(new AccommodationDao);
    }


}
?>