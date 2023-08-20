<?php


Flight::route("GET /locations" , function() {
    Flight::json(Flight::location_service()->get_all());
});

Flight::route("GET /location/@id", function($id) {
    Flight::json(Flight::location_service()->get_by_id($id, "location_id"));
});

Flight::route("POST /location" , function() {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::location_service()->add($request));
});

Flight::route("DELETE /location/@id" , function($id) {
    Flight::json(Flight::location_service()->delete($id, "location_id"));
});

Flight::route("PUT /location/@id" , function($id) {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::location_service()->update($request,$id,"location_id"));
});
?>  