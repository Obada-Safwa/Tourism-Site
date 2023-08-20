<?php


Flight::route("GET /users" , function() {
    Flight::json(Flight::user_service()->get_all());
});

Flight::route("GET /user/@id", function($id) {
    Flight::json(Flight::user_service()->get_by_id($id, "user_id"));
});

Flight::route("POST /user" , function() {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::user_service()->add($request));
});

Flight::route("DELETE /user/@id" , function($id) {
    Flight::json(Flight::user_service()->delete($id, "user_id"));
});

Flight::route("PUT /user/@id" , function($id) {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::user_service()->update($request,$id,"user_id"));
});
?>  