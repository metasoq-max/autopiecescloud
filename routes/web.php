<?php

declare(strict_types=1);

use App\Http\Controllers\CompanySettingsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/tarifs', 'pricing')->name('pricing');
Route::view('/fonctionnalites', 'features')->name('features');
Route::view('/contact', 'contact')->name('contact');

Route::view('/login', 'auth.login')->name('login');
Route::view('/register', 'auth.register')->name('register');
Route::post('/logout', fn () => redirect()->route('home'))->name('logout');

Route::get('/dashboard', DashboardController::class)->name('dashboard');
Route::resource('products', ProductController::class)->except(['show', 'destroy']);
Route::resource('customers', CustomerController::class)->except(['show', 'destroy']);
Route::resource('quotes', QuoteController::class);
Route::resource('invoices', InvoiceController::class);
Route::get('/settings/company', [CompanySettingsController::class, 'edit'])->name('settings.company');
Route::put('/settings/company', [CompanySettingsController::class, 'update'])->name('settings.company.update');
