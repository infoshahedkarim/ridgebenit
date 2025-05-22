<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RidgeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ProjectController;




Route::get('/', function () {
    return view('frontend.ridge');
})->name('home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/servicess', function () {
    return view('frontend.services');
})->name('services');


Route::get('/casestudy', function () {
    return view('frontend.casestudy');
})->name('casestudy');

Route::get('/casestudy-detail', function () {
    return view('frontend.casestudy-details');
})->name('casestudy-detail');

Route::get('/ridgeben', function () {
    return view('frontend.pricing');
})->name('pricing');


Route::get('/page2', function () {
    return view('frontend.page2');
})->name('page2');
Route::get('/page3', function () {
    return view('frontend.page3');
})->name('page3');
Route::get('/page4', function () {
    return view('frontend.page4');
})->name('page4');




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
Route::get('/admin', [AdminController::class, 'admin'])->name('back.index')->middleware(['auth','admin']);


Route::get('/add-services', function () {
    return view('back.add-services');
})->name('back.services');
Route::post('/page-services',[RidgeController::class, 'store'])->name('back.store');
Route::get('/show-services',[RidgeController::class, 'show'])->name('back.show');
Route::get('/services/{slug}/edit', [RidgeController::class,'edit'])->name('services.edit');
Route::put('/services/{slug}/update', [RidgeController::class,'update'])->name('services.update');
Route::delete('/services/{services}/delete', [RidgeController::class,'delete'])->name('services.delete');


Route::get('/services/{slug}', [RidgeController::class, 'services'])->name('page1');
Route::get('/products/{slug}', [RidgeController::class, 'products'])->name('page5');


Route::get('/check-slug/{slug}', [RidgeController::class, 'checkSlug']);
Route::get('/slug-check/{slug}', [RidgeController::class, 'slugCheck']);
Route::get('/blog-slug-check/{slug}', [BlogController::class, 'BlogSlug']);
Route::get('/project-slug-check/{slug}', [ProjectController::class, 'ProjectSlug']);



Route::get('/add-products', function () {
    return view('back.add-products');
})->name('back.products');
Route::post('/page-products',[RidgeController::class, 'pstore'])->name('back.pstore');
Route::get('/show-products',[RidgeController::class, 'pshow'])->name('back.pshow');
Route::get('/products/{slug}/edit', [RidgeController::class,'pedit'])->name('products.edit');
Route::put('/products/{slug}/update', [RidgeController::class,'pupdate'])->name('products.update');
Route::delete('/products/{products}/delete', [RidgeController::class,'pdelete'])->name('products.delete');


Route::get('/add-feature',[RidgeController::class, 'fcreate'])->name('back.fcreate');
Route::post('/page-feature',[RidgeController::class, 'fstore'])->name('back.fstore');
Route::get('/show-feature',[RidgeController::class, 'fshow'])->name('back.fshow');
Route::get('/feature/{slug}/edit', [RidgeController::class,'fedit'])->name('feature.edit');
Route::put('/feature/{slug}/update', [RidgeController::class,'fupdate'])->name('feature.update');
Route::delete('/feature/{feature}/delete', [RidgeController::class,'fdelete'])->name('feature.delete');



Route::get('/add-expertise',[RidgeController::class, 'ecreate'])->name('back.ecreate');
Route::post('/page-expertise',[RidgeController::class, 'estore'])->name('back.estore');
Route::get('/show-expertise',[RidgeController::class, 'eshow'])->name('back.eshow');
Route::get('/expertise/{slug}/edit', [RidgeController::class,'eedit'])->name('expertise.edit');
Route::put('/expertise/{slug}/update', [RidgeController::class,'eupdate'])->name('expertise.update');
Route::delete('/expertise/{expertise}/delete', [RidgeController::class,'edelete'])->name('expertise.delete');


Route::get('/add-solution',[RidgeController::class, 'screate'])->name('back.screate');
Route::post('/page-solution',[RidgeController::class, 'sstore'])->name('back.sstore');
Route::get('/show-solution',[RidgeController::class, 'sshow'])->name('back.sshow');
Route::get('/solution/{slug}/edit', [RidgeController::class,'sedit'])->name('solution.edit');
Route::put('/solution/{slug}/update', [RidgeController::class,'supdate'])->name('solution.update');
Route::delete('/solution/{solution}/delete', [RidgeController::class,'sdelete'])->name('solution.delete');




Route::get('/back-blog',[BlogController::class, 'create'])->name('create.blog');
Route::get('/add-blog',[BlogController::class, 'index'])->name('add.blog');
Route::post('/added-blog',[BlogController::class, 'store'])->name('store.blog');
Route::get('/show-blog',[BlogController::class, 'show'])->name('show.blog');
Route::get('/blog',[BlogController::class, 'show_home'])->name('show-home.blog');
Route::get('/blog/{slug}/edit', [BlogController::class,'edit'])->name('edit.blog');
Route::get('/blog/{slug}', [BlogController::class,'details'])->name('show-detail.blog');
Route::put('/blog/{slug}/update', [BlogController::class,'update'])->name('update.blog');
Route::delete('/blog/{blog}/delete', [BlogController::class,'delete'])->name('delete.blog');

Route::get('/blog-detail', function () {
    return view('frontend.blog-details');
})->name('blog-detail');


Route::get('/back-meta',[MetaController::class, 'create'])->name('create.meta');
Route::get('/add-meta',[MetaController::class, 'index'])->name('add.meta');
Route::post('/added-meta',[MetaController::class, 'store'])->name('store.meta');
Route::get('/show-meta',[MetaController::class, 'show'])->name('show.meta');
Route::get('/meta/{id}/edit', [MetaController::class,'edit'])->name('edit.meta');
Route::get('/meta/{id}', [MetaController::class,'details'])->name('show-detail.meta');
Route::put('/meta/{id}/update', [MetaController::class,'update'])->name('update.meta');
Route::delete('/meta/{meta}/delete', [MetaController::class,'delete'])->name('delete.meta');


Route::get('/back-project',[ProjectController::class, 'create'])->name('create.project');
Route::get('/add-project',[ProjectController::class, 'index'])->name('add.project');
Route::post('/added-project',[ProjectController::class, 'store'])->name('store.project');
Route::get('/show-project',[ProjectController::class, 'show'])->name('show.project');
Route::get('/project/{slug}/edit', [ProjectController::class,'edit'])->name('edit.project');
Route::get('/project/{slug}', [ProjectController::class,'details'])->name('show-detail.project');
Route::put('/project/{slug}/update', [ProjectController::class,'update'])->name('update.project');
Route::delete('/project/{project}/delete', [ProjectController::class,'delete'])->name('delete.project');



Route::post('/send-mail',[RidgeController::class, 'getmsg'])->name('email.store');