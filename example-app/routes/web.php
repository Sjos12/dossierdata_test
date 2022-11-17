<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
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


/** 
 * Laat alle requests naar authenticated routes eerst "filtreren' door de Authenticate middleware class. 
 * In deze class zou dan gechecked worden naar de aanwezigheid van de session cookie die meegestuurd word met het requests. 
 */

Route::middleware('auth')->group(function () {
    // Authenticated routes....
});


Route::get('/', DashboardController::class)->name('dashboard');

Route::get('/contacts/create', [ContactController::class, 'create_index'])->name('contacts.create');
Route::post('/contacts/create', [ContactController::class, 'create'])->name('contacts.create.index');

Route::get('/contacts/{contact:uuid}/read', [ContactController::class, 'read'])->name('contacts.read');

Route::put('/contacts/{contact:uuid}/update', [ContactController::class, 'update'])->name('contacts.update');

Route::delete('/contacts/{contact:uuid}/delete', [ContactController::class, 'delete'])->name('contacts.delete');
