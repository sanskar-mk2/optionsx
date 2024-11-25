<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::get('/', function () {
    return Inertia::render('Welcome');
})->name('home');

Route::get('/themes', function () {
    return Inertia::render('Themes');
})->name('themes.index');

Route::get('/freelancers', function () {
    return Inertia::render('Welcome');
})->name('freelancers.index');

Route::get('/pricing', function () {
    return Inertia::render('Welcome');
})->name('pricing');

Route::get('/bundles', function () {
    return Inertia::render('Welcome');
})->name('bundles');

Route::get('/login', function () {
    return Inertia::render('Welcome');
})->name('login');

Route::get('/cart', function () {
    return Inertia::render('Cart');
})->name('cart.index');

Route::get('/sell', function () {
    return Inertia::render('Welcome');
})->name('sell');

// Category routes
Route::get('/items', function () {
    return Inertia::render('Welcome');
})->name('items.index');

Route::get('/wordpress', function () {
    return Inertia::render('Welcome');
})->name('wordpress.index');

Route::get('/ecommerce', function () {
    return Inertia::render('Welcome');
})->name('ecommerce.index');

Route::get('/shopify', function () {
    return Inertia::render('Welcome');
})->name('shopify.index');

Route::get('/elementor', function () {
    return Inertia::render('Welcome');
})->name('elementor.index');

Route::get('/html', function () {
    return Inertia::render('Welcome');
})->name('html.index');

Route::get('/marketing', function () {
    return Inertia::render('Welcome');
})->name('marketing.index');

Route::get('/cms', function () {
    return Inertia::render('Welcome');
})->name('cms.index');

Route::get('/templates', function () {
    return Inertia::render('Welcome');
})->name('templates.index');

Route::get('/themes/download', function () {
    return Inertia::render('Welcome');
})->name('themes.download');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
