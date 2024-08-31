<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SideController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [SideController::class,'HeroPage'])->name('Hero');
Route::get('/Contact', [SideController::class,'ContactPage'])->name('Contact');
Route::get('/Showcase', [SideController::class,'ShowcasePage'])->name('Showcase');
Route::get('/Company', [SideController::class,'CompanyPage'])->name('Company');
Route::get('/Project', [SideController::class,'ProjectPage'])->name('Project');
Route::get('/Resume', [SideController::class,'ResumePage'])->name('Resume');
Route::get('/About', [SideController::class,'AboutPage'])->name('About');
Route::get("/Download",[DownloadController::class,"download"]);
