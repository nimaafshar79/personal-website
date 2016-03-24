<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //Site Controller Route
    Route::get("index", "SiteController@index");
    Route::get("/", "SiteController@index");
    Route::get("index.php", "SiteController@index");

    Route::get("information", "SiteController@information");
    Route::get("contact", "SiteController@contact");
    //Auth Routes
    Route::group(["middleware" => ["guest"]], function () {
        Route::post("login", "Auth\\AuthController@login");
        Route::get("login", "Auth\\AuthController@showLoginForm");
        Route::get("register", "Auth\\AuthController@showRegistrationForm");
        Route::post("register", "Auth\\AuthController@register");
    });
    Route::any("logout", "Auth\\AuthController@logout");

    //admin Routes
    Route::get("users", [
        "uses" => "UserController@userList",
        "as" => "userList",
        "middleware" => ["auth", "admin"]
    ]);

    //Blog Routes
    Route::get("posts", "BlogController@all");
    Route::get("articles", "BlogController@all");
    Route::get("blog", "BlogController@all");

    Route::group(["middleware" => ["auth"]], function () {
        Route::get("article/create", "BlogController@showAddForm");
        Route::get("post/create", "BlogController@showAddForm");
        Route::post("article" , "BlogController@store");
        Route::post("post" , "BlogController@store");
    });
});
