<?php

require "../vendor/autoload.php";


require_once "services/UserServices.php";
require_once "services/BookingServices.php";
require_once "services/LocationServices.php";
require_once "services/AccommodationServices.php";
require_once "services/ReviewServices.php";


require_once 'routes/UserRoutes.php';
require_once 'routes/BookingRoutes.php';
require_once 'routes/LocationRoutes.php';
require_once 'routes/AccommodationRoutes.php';
require_once 'routes/ReviewRoutes.php';


require_once "dao/UserDao.class.php";
require_once "dao/ReviewDao.class.php";
require_once "dao/LocationDao.class.php";
require_once "dao/BookingDao.class.php";
require_once "dao/AccommodationDao.class.php";



Flight::register("user_service", "UserServices");
Flight::register("booking_service", "BookingServices");
Flight::register("location_service", "LocationServices");
Flight::register("review_service", "ReviewServices");
Flight::register("accommdation_service", "AccommodationServices");


Flight::start();

?>