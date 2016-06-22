<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::group(['prefix' => 'api'], function () {
    Route::get('user', 'UserController@index');
    Route::get('user/most-active/{limit}', 'UserController@mostActive');
    Route::get('user/{id}', 'UserController@show')->where('id', '[0-9]+');
    Route::get('user/{id}/comments', 'UserController@withComments')->where('id', '[0-9]+');
    Route::post('user', 'UserController@store');
    Route::match(['put'], 'user/{id}', 'UserController@update');
    Route::match(['delete'], 'user/{id}', 'UserController@delete');

    Route::get('ingredient', 'IngredientController@index');
    Route::get('ingredient/{id}', 'IngredientController@show')->where('id', '[0-9]+');
    Route::get('ingredient/{id}/recipes', 'IngredientController@withRecipes')->where('id', '[0-9]+');
    Route::post('ingredient', 'IngredientController@store');
    Route::match(['put'], 'ingredient/{id}', 'IngredientController@update');
    Route::match(['delete'], 'ingredient/{id}', 'IngredientController@delete');

    Route::get('recipe', 'RecipeController@index');
    Route::get('recipe/menu', 'RecipeController@randomDailyMenu');
    Route::get('recipe/query/{limit}', 'RecipeController@query');
    Route::get('recipe/top-rated/{limit}', 'RecipeController@topRated');
    Route::get('recipe/most-commented/{limit}', 'RecipeController@mostCommented');
    Route::get('recipe/{id}', 'RecipeController@show')->where('id', '[0-9]+');
    Route::post('recipe', 'RecipeController@store');
    Route::match(['put'], 'recipe/{id}', 'RecipeController@update');
    Route::match(['delete'], 'recipe/{id}', 'RecipeController@delete');

    Route::get('comment', 'CommentController@index');
    Route::get('comment/recent/{limit}', 'CommentController@recent');
    Route::get('comment/{id}', 'CommentController@show')->where('id', '[0-9]+');
    Route::post('comment', 'CommentController@store');
    Route::match(['put'], 'comment/{id}', 'CommentController@update');
    Route::match(['delete'], 'comment/{id}', 'CommentController@delete');


//    Route::resource('user', 'UserController', ['only' => ['index', 'show']]);
//    Route::resource('comment', 'CommentController');
//    Route::resource('ingredient', 'IngredientController');
//    Route::resource('recipe', 'RecipeController');

});

Route::get('home', 'HomeController@index');


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);


Route::get('docs', function () {
    return View::make('docs.api.index');
});


