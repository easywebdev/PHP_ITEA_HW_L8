<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//

$api = app('Dingo\Api\Routing\Router');

// Users
$api->version('v1', function ($api) {
    $api->post('users', 'App\Modules\User\Controllers\HomeController@createUser');
});

$api->version('v1', function ($api) {
    $api->get('users', 'App\Modules\User\Controllers\HomeController@getUsers');
});

// Posts
$api->version('v1', function ($api) {
    $api->get('posts', 'App\Modules\Post\Controllers\PostController@getPosts');
});

$api->version('v1', function ($api) {
    $api->post('posts', 'App\Modules\Post\Controllers\PostController@createPost');
});

$api->version('v1', function ($api) {
    $api->put('posts/{id}', 'App\Modules\Post\Controllers\PostController@updatePost');
});

$api->version('v1', function ($api) {
    $api->delete('posts/{id}', 'App\Modules\Post\Controllers\PostController@deletePost');
});