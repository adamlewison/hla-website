<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

function admin_page($url) {
    $adminurl = 'admin';
    return $adminurl . $url;
}

function main_site($url) {
    $mainsiteurl = '';
    return $mainsiteurl . $url;
}


Route::get(admin_page('/'), function () {
    return view('admin.welcome');
});

Route::get(main_site('/home'), [HomeController::class, 'index'])->name('home');

Route::get(admin_page('/home'), 'HomeController@index');
Route::view(admin_page('/projects'), 'admin.projects');
Route::view(admin_page('/categories'), 'admin.categories.index');

Route::get(admin_page('/projects/create'), [AdminController::class, 'newProject']);
Route::get(admin_page('/projects/{project}'), [AdminController::class, 'show']);
Route::get(admin_page('/projects/{project}/addImage'), [AdminController::class, 'newImage']);


// Actions to be done to a project
Route::get('/projects/{project}/delete', [ProjectController::class, 'delete']);
Route::post('/projects/{project}/update', [ProjectController::class, 'update']);
Route::post('/projects/new', [ProjectController::class, 'new']);
Route::post('/projects/{project}/addImage', [ProjectController::class, 'addImages']);

// Actions to be done to a project_image
Route::get('/project_images/{image}/setthumb', [ProjectImageController::class, 'setAsThumb']);
Route::get('/project_images/{image}/delete', [ProjectImageController::class, 'delete']);

// Actions to be done to a category
Route::post('/categories/create', [CategoryController::class, 'create']);
Route::get('/categories/{category}/delete', [CategoryController::class, 'delete']);
Route::post('/categories/{category}/edit', [CategoryController::class, 'edit']);

// Random Image API
Route::get('/random', function () {
     $img = App\project_image::getRandomImage();
    return $img;
});

Route::get('/random/{project}', function ($project) {
    $img = App\project_image::getRandomImage($project);
    return $img;
});

// Consumer Website routes
Route::get('/', [HomeController::class, 'homePage']);
Route::get('/projects', [HomeController::class, 'projectsPage']);
Route::get('/projects/{project}', [HomeController::class, 'projectPage']);
Route::get('/about', [HomeController::class, 'aboutPage']);
Route::get('/contact', [HomeController::class, 'contactPage']);





