<?php

require_once "BaseServices.php";

class LocationServices extends BaseServices {

    public function __construct() {
        parent::__construct(new LocationDao);
    }


}
?>