<?php

require_once "BaseServices.php";

class BookingServices extends BaseServices {

    public function __construct() {
        parent::__construct(new BookingDao);
    }


}
?>