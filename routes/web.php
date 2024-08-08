<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\WebController;
use \App\Http\Middleware\LanguageMiddleware;


Route::get('/', [\App\Http\Controllers\WebController::class, 'home']);

Route::get('/languaje/{lang}', [\App\Http\Controllers\WebController::class, 'languaje']);

Route::get('/{languaje}/{section}',
    [WebController::class, 'index'])
    ->name('web');



//Route::get('/geolocation', [WebController::class, 'show']);

/*Route::get('/about-me', function () {
    return view('custom/pages/about_me');
})->name('about-me');

Route::get('/education', function () {
    \Illuminate\Support\Facades\App::setLocale('pt');
    $educations = config('web_content')['education'];
    return view('custom/pages/education', compact('educations'));
})->name('education');

Route::get('/projects', function () {
    \Illuminate\Support\Facades\App::setLocale('pt');
    $projects = config('web_content')['projects'];
    return view('custom/pages/projects', compact('projects'));
})->name('projects');

Route::get('/experience', function () {
    \Illuminate\Support\Facades\App::setLocale('pt');
    $experiences = config('web_content')['experience'];
    return view('custom/pages/experience', compact('experiences'));
})->name('experience');

Route::get('/clients', function () {
    \Illuminate\Support\Facades\App::setLocale('pt');
    return view('custom/pages/clients');
})->name('clients');

Route::get('/clicap', function () {
    Illuminate\Support\Facades\App::setLocale('pt');
    return view('custom/pages/sites/clicap');
})->name('clicap');

Route::get('/', function () {
    \Illuminate\Support\Facades\App::setLocale('pt');
    return view('custom/pages/about_me');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
