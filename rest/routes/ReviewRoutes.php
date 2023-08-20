<?php


Flight::route("GET /reviews" , function() {
    Flight::json(Flight::review_service()->get_all());
});

Flight::route("GET /review/@id", function($id) {
    Flight::json(Flight::review_service()->get_by_id($id, "review_id"));
});

Flight::route("POST /review" , function() {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::review_service()->add($request));
});

Flight::route("DELETE /review/@id" , function($id) {
    Flight::json(Flight::review_service()->delete($id, "review_id"));
});

Flight::route("PUT /review/@id" , function($id) {
    $request = Flight::request()->data->getData();
    Flight::json(Flight::review_service()->update($request,$id,"review_id"));
});
?>  