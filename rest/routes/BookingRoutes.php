<?php


Flight::route("GET /bookings" , function() {
    Flight::json(Flight::booking_service()->get_all());
});

Flight::route("GET /booking/@id", function($id) {
    Flight::json(Flight::booking_service()->get_by_id($id, "booking_id"));
});

Flight::route("POST /booking" , function() {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::booking_service()->add($request));
});

Flight::route("DELETE /booking/@id" , function($id) {
    Flight::json(Flight::booking_service()->delete($id, "booking_id"));
});

Flight::route("PUT /booking/@id" , function($id) {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::booking_service()->update($request,$id,"booking_id"));
});
?>  