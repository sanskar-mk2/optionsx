<?php

use App\Http\Controllers\CreatorAuthController;
use App\Http\Controllers\DashboardController;
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

Route::get('/create-account', [CreatorAuthController::class, 'create_account'])->name('create-account');
Route::get('/login', [CreatorAuthController::class, 'login'])->name('get_login');
Route::post('/register', [CreatorAuthController::class, 'register'])->name('register');
Route::post('/login', [CreatorAuthController::class, 'post_login'])->name('login');

Route::get('/themes', function () {
    return Inertia::render('Themes');
})->name('themes.index');

Route::get('/freelancers', function () {
    if (request()->id == '1') {
        return Inertia::render('FreelancerHelp');
    } elseif (request()->id == '2') {
        return Inertia::render('FreelancerSetting');
    } elseif (request()->id == '3') {
        return Inertia::render('FreelancerEarning');
    } elseif (request()->id == '4') {
        return Inertia::render('FreelancerPerformance');
    } elseif (request()->id == '5') {
        return Inertia::render('FreelancerProject');
    } elseif (request()->id == '6') {
        return Inertia::render('FreelancerDashboard');
    } elseif (request()->id == '7') {
        return Inertia::render('FreelancerLandingPage');
    } else {
        return Inertia::render('Welcome');
    }
})->name('freelancers.index');

Route::get('/pricing', function () {
    return Inertia::render('Welcome');
})->name('pricing');

Route::get('/bundles', function () {
    return Inertia::render('SignUp');
})->name('bundles');

// Route::get('/login', function () {
//     return Inertia::render('Welcome');
// })->name('login');

Route::get('/cart', function () {
    return Inertia::render('Cart');
})->name('cart.index');

Route::get('/sell', function () {
    return Inertia::render('Sell');
})->name('sell');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/upload', [DashboardController::class, 'get_upload'])->name('upload');

// Category routes
Route::get('/items', function () {
    return Inertia::render('Welcome');
})->name('items.index');

Route::get('/wordpress', function () {
    return Inertia::render('Wordpress');
})->name('wordpress.index');

Route::get('/ecommerce', function () {
    return Inertia::render('Welcome');
})->name('ecommerce.index');

Route::get('/shopify', function () {
    return Inertia::render('Fashion');
})->name('shopify.index');

Route::get('/elementor', function () {
    return Inertia::render('Announcements');
})->name('elementor.index');

Route::get('/html', function () {
    return Inertia::render('Welcome');
})->name('html.index');

Route::get('/marketing', function () {
    return Inertia::render('Welcome');
})->name('marketing.index');

Route::get('/cms', function () {
    return Inertia::render('Creator');
})->name('cms.index');

Route::get('/templates', function () {
    return Inertia::render('Welcome');
})->name('templates.index');

Route::get('/themes/download', function () {
    return Inertia::render('Profile');
})->name('themes.download');

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// require __DIR__ . '/auth.php';
