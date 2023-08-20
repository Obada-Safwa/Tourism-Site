<?php

require_once "BaseServices.php";

class ReviewServices extends BaseServices {

    public function __construct() {
        parent::__construct(new ReviewDao);
    }


}
?>