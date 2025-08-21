<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Middleware\RedirectToRoleDashboard;
use App\Http\Controllers\ProductController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', RedirectToRoleDashboard::class])->group(function () {
    // Unified dashboard route for all roles
    Route::get('/dashboard', function () {
        $user = auth()->user();
        $role = $user->getRoleNames()->first();
        $products = \App\Models\Product::all();
        return view('dashboard.unified', [
            'role' => $role,
            'products' => $products,
        ]);
    })->name('dashboard');

    // Livewire feature routes
    Route::get('/wallet-center', \App\Livewire\WalletCenter::class)->name('wallet.center');
    Route::get('/notification-center', \App\Livewire\NotificationCenter::class)->name('notification.center');
    Route::get('/esignature-center', \App\Livewire\EsignatureCenter::class)->name('esignature.center');
    Route::get('/pos-checkout', \App\Livewire\PosCheckout::class)->name('pos.checkout');

    // POST routes for feature tests
    Route::post('/esignature/submit', [\App\Http\Controllers\EsignatureController::class, 'submit']);
    Route::post('/pos/checkout', [\App\Http\Controllers\PosCheckoutController::class, 'checkout']);

    // Resource routes (role-based access)
    Route::resource('products', ProductController::class)->middleware('role:admin');
    Route::resource('inventories', App\Http\Controllers\InventoryController::class)->middleware('role:admin|manager|sales|technician');
    Route::resource('orders', App\Http\Controllers\OrderController::class)->middleware('role:admin|manager|sales|technician');
    Route::resource('warranties', App\Http\Controllers\WarrantyController::class)->middleware('role:admin|manager|sales|technician');
    Route::get('reports', [App\Http\Controllers\ReportController::class, 'index'])->middleware('role:admin')->name('reports.index');
});
