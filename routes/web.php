<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');


//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/dashboard', 'DashboardController@main');


Route::get('/', function () {
    //if(Auth::check())
      //  return view('dashboard');
    //else
        return view('auth/login');
    //return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Accueil
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard'); // Page d'accueil de l'admin

// Étudients
Route::get('/students/create', 'StudentsController@create'); // Page de création d'un élève
Route::get('/students/restore', 'StudentsController@restore');  // affiche les softdelete
Route::get('/students/index', 'StudentsController@index'); // Page qui liste les élèves
Route::get('/students/{student}', 'StudentsController@show'); // Page d'un élève
Route::get('/students/edit/{student}', 'StudentsController@edit'); // Page de modification d'un élève
Route::post('/students/delete/{student}', 'StudentsController@delete'); // Supprime un élève de la db
Route::post('/students/store', 'StudentsController@store'); // Push la création d'un élève dans la db
Route::post('/students/update', 'StudentsController@update'); // Push la modification d'un élève dans la db

// Projets
Route::get('/projects/create', 'ProjectsController@create'); // Page de création d'un projet
Route::get('/projects/restore', 'ProjectsController@restore');  // affiche les softdelete
Route::get('/projects/index', 'ProjectsController@index'); // Page qui liste les projets
Route::get('/projects/{project}', 'ProjectsController@show'); // Page d'un projet
Route::get('/projects/edit/{project}', 'ProjectsController@edit'); // Page de modification d'un projet
Route::post('/projects/delete/{project}', 'ProjectsController@delete'); // Supprime un projet de la db
Route::post('/projects/store', 'ProjectsController@store'); // Push la création d'un projet dans la db
Route::post('/projects/update', 'ProjectsController@update'); // Push la modification d'un projet dans la db

// Utilisateurs
Route::get('/users/create', 'UsersController@create'); // Page de création d'un projet
Route::get('/users/restore', 'UsersController@restore');  // affiche les softdelete
Route::get('/users/index', 'UsersController@index'); // Page qui liste les projets
Route::get('/users/{user}', 'UsersController@show'); // Page d'un projet
Route::get('/users/edit/{user}', 'UsersController@edit'); // Page de modification d'un projet
Route::post('/users/delete/{user}', 'UsersController@delete'); // Supprime un projet de la db
Route::post('/users/store', 'UsersController@store'); // Push la création d'un projet dans la db
Route::post('/users/update', 'UsersController@update'); // Push la modification d'un projet dans la db

// Évènements
Route::get('/events/create', 'EventsController@create'); // Page de création d'un évènement
Route::get('/events/restore', 'EventsController@restore');  // affiche les softdelete
Route::get('/events/index', 'EventsController@index'); // Page qui liste les évènements
Route::get('/events/{event}', 'EventsController@show')->name('/events'); // Page d'un évènement
Route::get('/events/edit/{event}', 'EventsController@edit'); // Page de modification d'un évènement
Route::post('/events/delete/{event}', 'EventsController@delete'); // Supprime un évènement de la db
Route::post('/events/store', 'EventsController@store'); // Push la création d'un évènement dans la db
Route::post('/events/update', 'EventsController@update'); // Push la modification d'un évènement dans la db

// Manage
Route::get('/students/manage/{event}', 'StudentsController@manage')->name('/students/manage');
Route::get('/users/manage/{event}', 'UsersController@manage')->name('/users/manage');
Route::get('/projects/manage/{event}', 'ProjectsController@manage')->name('/projects/manage');

//performance
Route::post('/performances/evaluate/{performance}', 'PerformancesController@postEvaluate')->name('/performances/evaluate');

// Meetings
Route::post('/meetings/evaluate/{meeting}', 'MeetingsController@postEvaluate')->name('/meetings/evaluate');

// Implementations
Route::get('/students/{student}/implementations/event/{event}', 'StudentsController@showImplementations')->name('/students/implementations/event');
Route::get('/implementations/evaluate/{implementation}/meeting/{meeting}', 'ImplementationsController@getEvaluate')->name('/implementations/evaluate/meeting');
Route::post('/implementations/evaluate/{implementation}/meeting/{meeting}', 'ImplementationsController@postEvaluate')->name('/implementations/evaluate/meeting');
Route::post('/implementations/url/{implementation}', 'ImplementationsController@postUrl')->name('/implementations/url');     // Gestion des projets des étudiants (jury)

//link meetings
Route::get('/meetings/link/{event}', 'MeetingsController@getLink')->name('/meetings/link');     // Gestion des projets des étudiants (jury)
Route::post('/meetings/link/{event}', 'MeetingsController@postLink')->name('/meetings/link');     // Gestion des projets des étudiants (jury)
Route::post('/meetings/link/{event}/delete', 'MeetingsController@delete')->name('/meetings/link/delete');   // softdelete user post
Route::post('/meetings/link/{event}/restore', 'MeetingsController@restore')->name('/meetings/link/restore');   // softdelete user post

//link implementations
Route::get('/implementations/link/{event}', 'ImplementationsController@getLink')->name('/implementations/link');     // Gestion des projets des étudiants (jury)
Route::post('/implementations/link/{event}', 'ImplementationsController@postLink')->name('/implementations/link');     // Gestion des projets des étudiants (jury)
Route::post('/implementations/link/{event}/delete', 'ImplementationsController@delete')->name('/implementations/link/delete');   // softdelete user post
Route::post('/implementations/link/{event}/restore', 'ImplementationsController@restore')->name('/implementations/link/restore');   // softdelete user post