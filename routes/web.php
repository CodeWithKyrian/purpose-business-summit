<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\RegisterTicket;
use App\Http\Livewire\UsersList;
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

Route::get('/', [HomeController::class, 'Index'])->name('home');
Route::get('search/', [HomeController::class, 'Search'])->name('search');
Route::post('/ticket/pay', [HomeController::class, 'paystackRedirect'])->name('ticket.pay');
Route::get('/payment/callback', [HomeController::class, 'paystackCallback'])->name('payment.callback');

Route::middleware(['auth', 'approved'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'Dashboard'])->name('dashboard');
    Route::get('search/', [AdminController::class, 'Search'])->name('search');
    // Route::get('register-ticket', RegisterTicket::class)->name('ticket.register');
    Route::get('register-ticket', [AdminController::class, 'RegisterTicketForm'])->name('ticket.register');
    Route::post('register-ticket', [AdminController::class, 'RegisterTicket'])->name('ticket.register');
    Route::get('all-users', UsersList::class)->name('users.list');
    Route::get('all-volunteers', [AdminController::class, 'GetVolunteers'])->name('volunteers.list');
    Route::get('my-referrals', [AdminController::class, 'UserReferrals'])->name('users.referrals');

    Route::get('approve-volunteer/{user}', [AdminController::class, 'ApproveVolunteer'])->name('volunteer.approve');
    Route::get('disprove-volunteer/{user}', [AdminController::class, 'DisproveVolunteer'])->name('volunteer.disprove');
    Route::get('delete-volunteer/{user}', [AdminController::class, 'DeleteVolunteer'])->name('volunteer.delete');
});


require __DIR__ . '/auth.php';
