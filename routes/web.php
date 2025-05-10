<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RidgeController;




Route::get('/', function () {
    return view('frontend.ridge');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/services', function () {
    return view('frontend.services');
})->name('services');

Route::get('/blog', function () {
    return view('frontend.blog');
})->name('blog');

Route::get('/blog-detail', function () {
    return view('frontend.blog-details');
})->name('blog-detail');

Route::get('/casestudy', function () {
    return view('frontend.casestudy');
})->name('casestudy');

Route::get('/casestudy-detail', function () {
    return view('frontend.casestudy-details');
})->name('casestudy-detail');

Route::get('/ridgeben', function () {
    return view('frontend.pricing');
})->name('pricing');

Route::get('/page1', function () {
    return view('frontend.page1');
})->name('page1');
Route::get('/page2', function () {
    return view('frontend.page2');
})->name('page2');
Route::get('/page3', function () {
    return view('frontend.page3');
})->name('page3');
Route::get('/page4', function () {
    return view('frontend.page4');
})->name('page4');
Route::get('/page5', function () {
    return view('frontend.page5');
})->name('page5');



Route::get('/ams', function () {
    return view('frontend.ams');
})->name('ams');
Route::get('/cloud-solution', function () {
    return view('frontend.cloudsol');
})->name('cloudsol');
Route::get('/crm', function () {
    return view('frontend.crm');
})->name('crm');
Route::get('/cyber-security', function () {
    return view('frontend.cs');
})->name('cs');
Route::get('/digital-marketing', function () {
    return view('frontend.dm');
})->name('dm');
Route::get('/e-commerce', function () {
    return view('frontend.ecom');
})->name('ecom');
Route::get('/e-learning', function () {
    return view('frontend.eler');
})->name('eler');
Route::get('/email-services', function () {
    return view('frontend.email');
})->name('email');
Route::get('/erp', function () {
    return view('frontend.erp');
})->name('erp');
Route::get('/manage-services', function () {
    return view('frontend.manageservice');
})->name('manageservices');
Route::get('/productivity-app', function () {
    return view('frontend.pa');
})->name('pa');
Route::get('/software-development', function () {
    return view('frontend.softwaredev');
})->name('softwaredev');
Route::get('/web-development', function () {
    return view('frontend.websitedev');
})->name('websitedev');
Route::get('/web-hosting', function () {
    return view('frontend.webhost');
})->name('webhost');










Route::get('/invoice', function () {
    return view('backend.invoices-detail');
});

Route::get('/invoice/list', function () {
    return view('backend.invoices-list');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('/index', function () {
        return view('index');
    })->name('index');

});

Route::get('/user', [AdminController::class, 'index']);
Route::get('/admin', [AdminController::class, 'admin'])->name('backend.index')->middleware(['auth','admin']);


Route::get('/add-services', function () {
    return view('back.add-services');
})->name('back.services');
Route::post('/page-services',[RidgeController::class, 'store'])->name('back.store');
Route::get('/show-services',[RidgeController::class, 'show'])->name('back.show');
Route::get('/services/{slug}/edit', [RidgeController::class,'edit'])->name('services.edit');
Route::put('/services/{slug}/update', [RidgeController::class,'update'])->name('services.update');
Route::delete('/services/{services}/delete', [RidgeController::class,'delete'])->name('services.delete');
Route::get('/check-slug/{slug}', [RidgeController::class, 'checkSlug']);
