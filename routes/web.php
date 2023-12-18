<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuctionController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/auctions', [AuctionController::class, 'index']);
Route::get('/auctions/create', [AuctionController::class, 'create']);
Route::post('/auctions', [AuctionController::class, 'store']);
Route::get('/auctions/{code}', [AuctionController::class, 'show']);
Route::get('/auctions/{code}/edit', [AuctionController::class, 'edit']);
Route::put('/auctions/{code}', [AuctionController::class, 'update']);
Route::delete('/auctions/{code}', [AuctionController::class, 'destroy']);
