<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'public.home')->name('home');
Route::view('/fonctionnalites', 'public.features')->name('features');
Route::view('/tarifs', 'public.pricing')->name('pricing');
Route::view('/contact', 'public.contact')->name('contact');

Route::middleware(['auth', 'verified', 'tenant'])->group(function (): void {
    Route::view('/dashboard', 'dashboard.index')->name('dashboard');
    Route::view('/produits', 'products.index')->name('products.index');
    Route::view('/clients', 'customers.index')->name('customers.index');
    Route::view('/factures', 'invoices.index')->name('invoices.index');
    Route::view('/devis', 'quotes.index')->name('quotes.index');
    Route::view('/fournisseurs', 'suppliers.index')->name('suppliers.index');
    Route::view('/parametres', 'settings.index')->name('settings.index');
});
