<?php

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\WeatherController;

use App\Http\Controllers\SoilController;
use App\Http\Controllers\FieldController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\WaterSourceController;
use App\Http\Controllers\WaterUsageController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CropController;
use App\Models\Expert;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[AdminController::class,'home'])->middleware('auth');

//expert
Route::get('/createExpert', [AdminController::class, 'createExpert']);
Route::post('/addExpert',[AdminController::class,'addExpert']);
Route::get('/viewExpert',[AdminController::class,'viewExpert']);
Route::get('/updateExpert/{id}',[AdminController::class,'updateExpert']);
Route::post('/editExpert/{id}',[AdminController::class,'editExpert']);
Route::get('/deleteExpert/{id}', [AdminController::class, 'deleteExpert']);
//book admin work
Route::get('/bookings',[AdminController::class,'bookings']);
Route::get('/deleteBookings/{id}',[AdminController::class,'deleteBookings']);
Route::get('/approvedBook/{id}',[AdminController::class,'approvedBook']);
Route::get('/rejectedBook/{id}',[AdminController::class,'rejectedBook']);

//blog for admin
Route::get('/postPage', [AdminController::class, 'postPage']);
Route::post('/addPost',[AdminController::class,'addPost']);
Route::get('/showPost',[AdminController::class,'showPost']);
Route::get('/editPost/{id}',[AdminController::class,'editPost']);
Route::post('/updatePost/{id}',[AdminController::class,'updatePost']);
Route::get('/deletePost/{id}', [AdminController::class, 'deletePost']);

//blog details for admin

Route::get('/postBlog',[AdminController::class,'postBlog']);
Route::get('/blogDetails',[AdminController::class,'blogDetails']);
Route::post('/addBlog',[AdminController::class,'addBlog']);
Route::get('/editBlog/{id}',[AdminController::class,'editBlog']);
Route::post('/updateBlog/{id}',[AdminController::class,'updateBlog']);
Route::get('/deleteBlog/{id}', [AdminController::class, 'deleteBlog']);




// Route::get('/soil_list',[AdminController::class,'home']);

//about
Route::get('/about', [AboutController::class, 'index'])->name('home.about');
//expert home as user
Route::get('/expert', [HomeController::class, 'index'])->name('home.expert');
Route::get('/expertDetails/{id}',[HomeController::class,'expertDetails']);
Route::post('/addBooking/{id}',[HomeController::class,'addBooking']);

//blog for user
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog_details/{id}', [HomeController::class, 'blog_details']);
Route::get('/createBlog', [HomeController::class, 'createBlog'])->middleware('auth');
Route::post('/userBlog', [HomeController::class, 'userBlog']);






//home
Route::get('/home',[AdminController::class,'index']);

//liveware routes
Route::get('/users',CreateChat::class)->name('users');
Route::get('/chat{key?}',Main::class)->name('chat');


// Route::get("/users",[AdminController::class,"user"]);
// Route::get("/deleteUser/{id}",[AdminController::class,"deleteUser"]);

//about us

// weather
// Route::get('/weather',[WeatherController::class, "index"])->('weather.form');
Route::match(["get","post"],"weather",[WeatherController::class, "index"])->name("weather.form");

// soil managemnet
Route::get('/soils', [SoilController::class, 'index'])->name('soil_list');
//add-edit-delete
Route::post('/add_soil_action', [SoilController::class, 'store'])->name('soil_add_action');
Route::get('/add_soil', [SoilController::class, 'add_soil'])->name('soil_add');
Route::get('/view_soil{id}', [SoilController::class, 'view_soil'])->name('view_soil');
Route::get('/edit_soil{id}', [SoilController::class, 'edit_soil'])->name('edit_soil');
Route::post('/update_soil', [SoilController::class, 'update'])->name('update_soil');
Route::get('/delete_soil/{id}', [SoilController::class, 'destroy'])->name('delete_soil');


// field
Route::get('/fields', [FieldController::class, 'index'])->name('field_list');
//add-edit-delete
Route::post('/add_field_action', [FieldController::class, 'store'])->name('field_add_action');
Route::get('/add_field', [FieldController::class, 'add_field'])->name('field_add');
Route::get('/view_field{id}', [FieldController::class, 'view_field'])->name('view_field');
Route::get('/edit_field{id}', [FieldController::class, 'edit_field'])->name('edit_field');
Route::post('/update_field', [FieldController::class, 'update'])->name('update_field');
Route::get('/delete_field/{id}', [FieldController::class, 'destroy'])->name('delete_field');

// season managemnet
Route::get('/seasons', [SeasonController::class, 'index'])->name('season_list');
//add-edit-delete
Route::post('/add_season_action', [SeasonController::class, 'store'])->name('season_add_action');
Route::get('/add_season', [SeasonController::class, 'add_season'])->name('season_add');
Route::get('/view_season{id}', [SeasonController::class, 'view_season'])->name('view_season');
Route::get('/edit_season{id}', [SeasonController::class, 'edit_season'])->name('edit_season');
Route::post('/update_season', [SeasonController::class, 'update'])->name('update_season');
Route::get('/delete_season/{id}', [SeasonController::class, 'destroy'])->name('delete_season');

// waterSource 
Route::get('/waterSources', [WaterSourceController::class, 'index'])->name('waterSource_list');
//add-edit-delete
Route::post('/add_waterSource_action', [WaterSourceController::class, 'store'])->name('waterSource_add_action');
Route::get('/add_waterSource', [WaterSourceController::class, 'add_waterSource'])->name('waterSource_add');
Route::get('/view_waterSource{id}', [WaterSourceController::class, 'view_waterSource'])->name('view_waterSource');
Route::get('/edit_waterSource{id}', [WaterSourceController::class, 'edit_waterSource'])->name('edit_waterSource');
Route::post('/update_waterSource', [WaterSourceController::class, 'update'])->name('update_waterSource');
Route::get('/delete_waterSource/{id}', [WaterSourceController::class, 'destroy'])->name('delete_waterSource');

// waterUsage 
Route::get('/waterUsages', [WaterUsageController::class, 'index'])->name('waterUsage_list');
//add-edit-delete
Route::post('/add_waterUsage_action', [WaterUsageController::class, 'store'])->name('waterUsage_add_action');
Route::get('/add_waterUsage', [WaterUsageController::class, 'add_waterUsage'])->name('waterUsage_add');
Route::get('/view_waterUsage{id}', [WaterUsageController::class, 'view_waterUsage'])->name('view_waterUsage');
Route::get('/edit_waterUsage{id}', [WaterUsageController::class, 'edit_waterUsage'])->name('edit_waterUsage');
Route::post('/update_waterUsage', [WaterUsageController::class, 'update'])->name('update_waterUsage');
Route::get('/delete_waterUsage/{id}', [WaterUsageController::class, 'destroy'])->name('delete_waterUsage');

//location
Route::get('/locations', [LocationController::class, 'index'])->name('location_list');
Route::post('/add_location_action', [LocationController::class, 'store'])->name('location_add_action');
Route::get('/add_location', [LocationController::class, 'add_location'])->name('location_add');
Route::get('/view_location{id}', [LocationController::class, 'view_location'])->name('view_location');
Route::get('/edit_location{id}', [LocationController::class, 'edit_location'])->name('edit_location');
Route::post('/update_location', [LocationController::class, 'update'])->name('update_location');
Route::get('/delete_location/{id}', [LocationController::class, 'destroy'])->name('delete_location');

//crop
Route::get('/crops', [CropController::class, 'index'])->name('crop_list');
Route::post('/add_crop_action', [CropController::class, 'store'])->name('crop_add_action');
Route::get('/add_crop', [CropController::class, 'add_crop'])->name('crop_add');
Route::get('/view_crop{id}', [CropController::class, 'view_crop'])->name('view_crop');
Route::get('/edit_crop{id}', [CropController::class, 'edit_crop'])->name('edit_crop');
Route::post('/update_crop', [CropController::class, 'update'])->name('update_crop');
Route::get('/delete_crop/{id}', [CropController::class, 'destroy'])->name('delete_crop');







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
