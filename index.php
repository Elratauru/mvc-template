<?php

//Require Composer Files
require 'vendor/autoload.php';
$router = new AltoRouter();

// Map users details page using controller#action string
$router->map( 'GET', '/', function(){
    $front = new Front;
    $front->view();
});

$router->map( 'GET', '/api', function() {
    echo 'This is the Site JSON API<br>';
    echo 'You can do /api/users to get all Users';
});

$router->map( 'GET', '/api/users', function() {
    $users = new User;
    $users->view();
});

//Delete method can only be used from AJAX, HTML Forms do not support other methods aside from GET/POST.
$router->map( 'DELETE', '/api/users/[i:id]', function($id) {
    $users = new User;
    $users->delete($id);
});

$match = $router->match();

// Call closure or throw 404 status
if( $match && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] ); 
} else {
    // No route was matched
    echo '404 not found!';
    die;
	header( $_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}