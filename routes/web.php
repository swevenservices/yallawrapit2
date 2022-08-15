<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [Frontend::class ,'index'])->name('/');
//Projects
Route::get('projects', [Frontend::class, 'projects'])->name('projects');

//Gallery
Route::get('gallery', [Frontend::class, 'gallery'])->name('gallery');

//About
Route::get('about', [Frontend::class, 'about'])->name('about');
//Contact
Route::get('contact', [Frontend::class, 'contact'])->name('contact');
//services
Route::get('services', [Frontend::class, 'services'])->name('services');
Route::get('services/{slug?}', [Frontend::class, 'serviceShow'])->name('service.slug');
//Blogs
Route::get('blogs', [Frontend::class, 'blogs'])->name('blogs');
Route::get('blogs/{slug?}', [Frontend::class, 'blogShow'])->name('blog.slug');

Auth::routes(['register' => false]);
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    // Permissions
    Route::resource('permissions', PermissionController::class, ['except' => ['store', 'update', 'destroy']]);

    // Roles
    Route::resource('roles', RoleController::class, ['except' => ['store', 'update', 'destroy']]);

    // Sample Gallery
    Route::resource('gallery', RoleController::class);

    // Users
    Route::resource('users', UserController::class, ['except' => ['store', 'update', 'destroy']]);

    // Post
    Route::post('posts/media', [PostController::class, 'storeMedia'])->name('posts.storeMedia');
    Route::resource('posts', PostController::class, ['except' => ['store', 'update', 'destroy']]);

    // Category
    Route::resource('categories', CategoryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Tags
    Route::resource('tags', TagController::class, ['except' => ['store', 'update', 'destroy']]);

    // Service
    Route::post('services/media', [ServiceController::class, 'storeMedia'])->name('services.storeMedia');
    Route::resource('services', ServiceController::class, ['except' => ['store', 'update', 'destroy']]);

    //sample gallery by saeed
    Route::post('samplegallery/media', [\App\Http\Controllers\Admin\SampleGalleryController::class, 'storeMedia'])->name('samplegallery.storeMedia');
    Route::resource('samplegallery', \App\Http\Controllers\Admin\SampleGalleryController::class, ['except' => ['store', 'update', 'destroy']]);

    // Contact
    Route::resource('contacts', ContactController::class, ['except' => ['store', 'update', 'destroy', 'edit']]);

    // Project
    Route::post('projects/media', [ProjectController::class, 'storeMedia'])->name('projects.storeMedia');
    Route::resource('projects', ProjectController::class, ['except' => ['store', 'update', 'destroy']]);
});
