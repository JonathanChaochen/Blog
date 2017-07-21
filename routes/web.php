<?php


// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');

Route::get('/posts/create', 'PostsController@create');

//when form post
Route::post('posts', 'PostsController@store');


Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');


//User

Route::get('/register', 'RegistrationController@create' );

Route::post('/register', 'RegistrationController@store' );



Route::get('login', 'SessionsController@create');
Route::get('logout', 'SessionsController@destroy');


// Route::post('/posts', 'PostsController@store')

// Route::get('/', 'BlogsController@index');
// Route::get('/posts/{post}', 'BlogsController@show');

//eloquent model  => Post    -mc
//controller   => PostsController
// migration  => create_posts_tables

// GET /posts

// GET /posts/create

// POST /posts

// GET /posts/{id}

// GET /posts/{id}/edit

// PATCH /posts/{id}

// DELETE/posts/{id}
