<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;

// Route home
Route::get('/', 'HomeController@index')
    ->name('home');

// Route Goal Gue
Route::get('/goalgue', 'HomeController@goalgue');

// Route Quiz
Route::get('/question1', 'QuizController@question1');
Route::get('/question2', 'QuizController@question2');
Route::get('/question3', 'QuizController@question3');
Route::get('/question4', 'QuizController@question4');
Route::get('/question5', 'QuizController@question5');
Route::get('/question6', 'QuizController@question6');
Route::get('/question7', 'QuizController@question7');
Route::get('/question8', 'QuizController@question8');
Route::get('/question9', 'QuizController@question9');
Route::get('/question10', 'QuizController@question10');
Route::get('/result1', 'QuizController@result1');
Route::get('/result2', 'QuizController@result2');
Route::get('/result3', 'QuizController@result3');
