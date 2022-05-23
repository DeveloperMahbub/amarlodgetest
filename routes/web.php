<?php

use App\Http\Controllers\FabricController;
use App\Http\Controllers\FactoryManageController;
use App\Http\Controllers\QcProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    //Fabric Route
    Route::get('/fabric', [FabricController::class, 'index'])->name('fabric');
    Route::post('/fabric-store', [FabricController::class, 'store'])->name('fabric-store');

    //Factory Route
    Route::get('/factory', [FactoryManageController::class, 'index'])->name('factory');
    Route::post('/factory-store', [FactoryManageController::class, 'store'])->name('factory-store');

    //Q.C Route
    Route::get('/qcProduct', [QcProductController::class, 'index'])->name('qcProduct');
    Route::post('/qcProduct-detail', [QcProductController::class, 'qcnewDetails'])->name('qcProduct-detail');
    Route::post('/qcNewProduct-store', [QcProductController::class, 'qcnewStore'])->name('qcNewProduct-store');
    Route::get('/qcNewProduct-list', [QcProductController::class, 'qcnewList'])->name('qcNewProduct-list');
    Route::get('/qcNewProduct-details/{id}', [QcProductController::class, 'qcnewProductDetails'])->name('qcNewProduct-details');

    Route::post('/qcaltProduct-detail', [QcProductController::class, 'altproduct'])->name('qcaltProduct-detail');
    Route::post('/qcaltProduct-store', [QcProductController::class, 'qcaltStore'])->name('qcaltProduct-store');
    Route::get('/qcaltProduct-list', [QcProductController::class, 'qcaltList'])->name('qcaltProduct-list');
    Route::get('/qcaltProduct-details/{id}', [QcProductController::class, 'qcaltProductDetails'])->name('qcaltProduct-details');

});
