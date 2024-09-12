<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FactController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SettingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('facts', 'App\Http\Controllers\FactController');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('hero', 'App\Http\Controllers\HeroController');
Route::middleware('auth')->group(function () {

    // Route::get('/hero', [HeroController::class, 'index'])->name('hero.index');
    // Route::get('/hero/{id}/edit', [HeroController::class, 'edit'])->name('hero.edit');
    // Route::delete('/hero/{id}', [HeroController::class, 'destroy'])->name('hero.destroy');
});




Route::get('users/create', [UserController::class, 'create'])->name('users.create');
Route::post('users', [UserController::class, 'store'])->name('users.store');
Route::get('users', [UserController::class, 'index'])->name('users.index'); // Assuming you have an index method to list users.


// Route::resource('files', FileController::class);
// Route::middleware('auth')->group(function () {

//     Route::get('/file', [FileController::class, 'index'])->name('file.index');
//     Route::get('/file/{id}/edit', [FileController::class, 'edit'])->name('file.edit');
//     Route::delete('/file/{id}', [FileController::class, 'destroy'])->name('file.destroy');
// });



Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('setting', SettingController::class);
    Route::resource('file', FileController::class);




    // Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
    // Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    // Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');
});


// Route::middleware('auth')->group(function () {
// Route::get('/sliders', [SliderController::class, 'index'])->name('sliders.index');
// Route::get('/sliders/create', [SliderController::class, 'create'])->name('sliders.create');
// Route::post('/sliders', [SliderController::class, 'store'])->name('sliders.store');
// Route::get('/sliders/{id}/edit', [SliderController::class, 'edit'])->name('sliders.edit');
// Route::put('/sliders/{id}', [SliderController::class, 'update'])->name('sliders.update');
// Route::delete('/sliders/{id}', [SliderController::class, 'destroy'])->name('sliders.destroy');
// });
// Route::middleware('auth')->group(function () {


// Route::get('/setting', [SettingController::class, 'edit'])->name('setting.edit');
// Route::patch('/setting', [SettingController::class, 'update'])->name('setting.update');
// Route::delete('/setting', [SettingController::class, 'destroy'])->name('setting.destroy');
// });


require __DIR__ . '/auth.php';
