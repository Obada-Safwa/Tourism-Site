<?php

require_once "BaseServices.php";

class UserServices extends BaseServices {

    public function __construct() {
        parent::__construct(new UserDao);
    }


}
?>