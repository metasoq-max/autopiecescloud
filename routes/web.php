<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController,ProductController,CustomerController,QuoteController,InvoiceController,CompanySettingsController};
Route::view('/', 'welcome'); Route::view('/tarifs','pricing'); Route::view('/fonctionnalites','features'); Route::view('/contact','contact');
Route::middleware(['auth','tenant'])->group(function(){Route::get('/dashboard',DashboardController::class)->name('dashboard');Route::resource('products',ProductController::class);Route::resource('customers',CustomerController::class);Route::resource('quotes',QuoteController::class);Route::resource('invoices',InvoiceController::class);Route::get('/settings/company',[CompanySettingsController::class,'edit'])->name('settings.company');Route::put('/settings/company',[CompanySettingsController::class,'update']);});
