<?php


// Route::get('/tasks', 'TasksController@index');
// Route::get('/tasks/{task}', 'TasksController@show');

Route::get('/', 'PostsController@index')->name('home');

//Post

Route::get('/posts/create', 'PostsController@create');


Route::post('posts', 'PostsController@store');


Route::get('/posts/{post}', 'PostsController@show');


Route::post('/posts/{post}/comments', 'CommentsController@store');


//register

Route::get('/register', 'RegistrationController@create' );

Route::post('/register', 'RegistrationController@store' );

//Session

Route::get('/login', 'SessionsController@create');

Route::post('login', 'SessionsController@store' );

Route::get('/logout', 'SessionsController@destroy');


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
