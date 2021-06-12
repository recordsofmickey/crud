<?php

use App\Models\Contact;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;

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
    $contacts = Contact::where('public', '=', 'yes')->get();
    return view('welcome', [
        'contacts' => $contacts
    ]);
});

require __DIR__.'/auth.php';
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Contact controllers
Route::get('/contacts/create', [ContactController::class, 'create'])->name('createContact');
Route::post('/contacts/create', [ContactController::class, 'store'])->name('saveContact');
Route::get('/contacts/show/{contact:id}', [ContactController::class, 'show']);
Route::delete('/contacts/show/{contact:id}/delete', [ContactController::class, 'destroy'])->name('deleteContact');
Route::get('/contacts/edit/{contact:id}', [ContactController::class, 'edit']);
Route::put('/contacts/edit/{contact:id}', [ContactController::class, 'update']);


