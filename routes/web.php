<?php

use App\Http\Controllers\Auth\AuthenticationController;
use App\Http\Controllers\frontend\SiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Auth\PasswordController;
use Illuminate\Support\Facades\Auth;


Route::middleware('auth')->group(function () {
    Route::get('/password/change', [PasswordController::class, 'showChangePasswordForm'])->name('password.change');
    Route::post('/password/change', [PasswordController::class, 'changePassword'])->name('password.update');

    // Logout Route
    Route::post('/logout', function () {
        $email = Auth::user()->email;
        Auth::logout();
        return redirect()->route('login')->with('email', $email);
    })->name('logout');
});


Route::get('/login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/cache-clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('clear-compiled');
    Artisan::call('optimize:clear');
    Artisan::call('storage:link');
    // Artisan::call('optimize');
    session()->flash('message', 'System Updated Successfully.');
    dd('Doel');
    return redirect()->back();
});


Route::get('/', [SiteController::class, 'index'])->name('home');

Route::get('/objective', [SiteController::class, 'objective'])->name('objective');
Route::get('/notice',[SiteController::class,'notice'])->name('notice');
Route::get('/support',[SiteController::class,'help'])->name('support');
Route::get('/audience',[SiteController::class,'audience'])->name('audience');
Route::get('/advisor',[SiteController::class,'advisor'])->name('advisor');
Route::get('/gallery',[SiteController::class,'gallery'])->name('gallery');
Route::get('/video',[SiteController::class,'video'])->name('video');
Route::get('/background',[SiteController::class,'background'])->name('background');
Route::get('/project',[SiteController::class,'project'])->name('project');
Route::get('/organization',[SiteController::class,'organization'])->name('organization');
Route::get('/projectArea',[SiteController::class,'projectArea'])->name('projectArea');


Route::get('lang/{lang}', [SiteController::class, 'languageSet'])->name('languageSet');
// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
