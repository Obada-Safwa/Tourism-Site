<?php


Flight::route("GET /accommodations" , function() {
    Flight::json(Flight::accommodation_service()->get_all());
});

Flight::route("GET /accommodation/@id", function($id) {
    Flight::json(Flight::accommodation_service()->get_by_id($id, "accommodation_id"));
});

Flight::route("POST /accommodation" , function() {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::accommodation_service()->add($request));
});

Flight::route("DELETE /accommodation/@id" , function($id) {
    Flight::json(Flight::accommodation_service()->delete($id, "accommodation_id"));
});

Flight::route("PUT /accommodation/@id" , function($id) {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::accommodation_service()->update($request,$id,"accommodation_id"));
});
?>  