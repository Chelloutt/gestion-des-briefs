<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BriefsController;
use App\Http\Controllers\PromotionsController;
use App\Http\Controllers\ApprenantsController;
use App\Http\Controllers\TasksController;
use App\Models\breifs;
use App\Models\task;

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




// promotions routes

Route::get('/index', [PromotionsController::class,'select']);
Route::get('/add', [PromotionsController::class , 'add']);
Route::get('/insert', [PromotionsController::class,'insert']);
Route::get('/update/{id}', [PromotionsController ::class,'update' ]);
Route::get('/edit/{id}', [ PromotionsController::class,'edit']);
Route::get('search/{name}',[PromotionsController::class,'search']);
Route::get('search',[PromotionsController::class,'search']);
Route::get('/delete', [ PromotionsController::class,'delete' ]);


// apprenants routes

Route::get('/addapp/{id}', [ApprenantsController::class ,'addapp']);
Route::get('/insertapp', [ApprenantsController::class , 'insertapp']);
Route::get('/edit-app/{id}', [ ApprenantsController::class,'editapp' ]);
Route::get('/delete-appp', [ ApprenantsController::class,'delete' ]);
Route::get('/deleteapprenants', [ ApprenantsController::class,'deleteapprenants' ]);



//breifs routes

Route::get('/briefs', [BriefsController::class , 'index']);
Route::get('/addbrief', [BriefsController::class , 'add']);
Route::get('/insertbrief', [BriefsController::class , 'store']);
Route::get('/updatebrief/{id}', [BriefsController::class , 'updatebrief']);
Route::get('/editbrief/{id}', [BriefsController::class , 'editbrief']);
Route::get('/delete_brief', [BriefsController::class , 'deletebrief']);


//tasks routes

Route::get('/addtask/{id}', [TasksController::class , 'add']);
Route::get('/newtask', [TasksController::class , 'store']);
Route::get('/updatetask/{id}', [TasksController::class , 'update']);
Route::get('/edittask/{id}', [TasksController::class , 'edittask']);
Route::get('/deletetask/{id}', [TasksController::class , 'delete']);

