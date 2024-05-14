<?php

use App\Http\Livewire\Chat\CreateChat;
use App\Http\Livewire\Chat\Main;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ExpertController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\WaterController;

use App\Http\Controllers\SoilController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\CropController;
use App\Models\Crop;
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


Route::get('/',[AdminController::class,'home']);

//user 
Route::get('/showUser',[AdminController::class,'showUser']);
Route::get('/editUser/{id}',[AdminController::class,'editUser']);
Route::post('/updateUser/{id}',[AdminController::class,'updateUser']);
Route::get('/deleteUser/{id}', [AdminController::class, 'deleteUser']);


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
Route::get('/acceptPost/{id}', [AdminController::class, 'acceptPost']);
Route::get('/rejectPost/{id}', [AdminController::class, 'rejectPost']);

//blog details for admin

Route::get('/postBlog',[AdminController::class,'postBlog']);
Route::get('/blogDetails',[AdminController::class,'blogDetails']);
Route::post('/addBlog',[AdminController::class,'addBlog']);
Route::get('/editBlog/{id}',[AdminController::class,'editBlog']);
Route::post('/updateBlog/{id}',[AdminController::class,'updateBlog']);
Route::get('/deleteBlog/{id}', [AdminController::class, 'deleteBlog']);

//message admin
Route::get('/all_messages',[AdminController::class,'all_messages']);
Route::get('/sendMail/{id}',[AdminController::class,'sendMail']);
Route::post('/mail/{id}',[AdminController::class,'mail']);





// Route::get('/soil_list',[AdminController::class,'home']);

//about
Route::get('/about', [AboutController::class, 'index'])->name('home.about');

//contact
Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/addContact', [HomeController::class, 'addContact']);

//expert home as user
Route::get('/expert', [HomeController::class, 'index'])->name('home.expert');
Route::get('/expertDetails/{id}',[HomeController::class,'expertDetails']);
Route::post('/addBooking/{id}',[HomeController::class,'addBooking']);

//blog for user
Route::get('/blog', [HomeController::class, 'blog']);
Route::get('/blog_details/{id}', [HomeController::class, 'blog_details'])->middleware('auth');
Route::get('/createBlog', [HomeController::class, 'createBlog'])->middleware('auth');
Route::post('/userBlog', [HomeController::class, 'userBlog'])->middleware('auth');
Route::get('/myBlog', [HomeController::class, 'myBlog']);
Route::get('/delete_myBlog/{id}', [HomeController::class, 'delete_myBlog']);
Route::get('/edit_myBlog/{id}',[HomeController::class,'edit_myBlog']);
Route::post('/update_myBlog/{id}',[HomeController::class,'update_myBlog']);






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
Route::match(["get","post"],"weather",[WeatherController::class, "index"])->name("weather.form")->middleware('auth');

// soil managemnet
Route::get('/soils', [SoilController::class, 'index'])->name('soil_list');
//add-edit-delete
Route::post('/add_soil_action', [SoilController::class, 'store'])->name('soil_add_action');
Route::get('/add_soil', [SoilController::class, 'add_soil'])->name('soil_add');
Route::get('/view_soil{id}', [SoilController::class, 'view_soil'])->name('view_soil');
Route::get('/edit_soil{id}', [SoilController::class, 'edit_soil'])->name('edit_soil');
Route::post('/update_soil', [SoilController::class, 'update'])->name('update_soil');
Route::get('/delete_soil/{id}', [SoilController::class, 'destroy'])->name('delete_soil');

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
Route::get('/water', [WaterController::class, 'index'])->name('water_list');
//add-edit-delete
Route::post('/add_water_action', [WaterController::class, 'store'])->name('water_add_action');
Route::get('/add_water', [WaterController::class, 'add_water'])->name('water_add');
Route::get('/view_water{id}', [WaterController::class, 'view_water'])->name('view_water');
Route::get('/edit_water{id}', [WaterController::class, 'edit_water'])->name('edit_water');
Route::post('/update_water', [WaterController::class, 'update'])->name('update_water');
Route::get('/delete_water/{id}', [WaterController::class, 'destroy'])->name('delete_water');

//location
Route::get('/locations', [LocationController::class, 'index'])->name('location_list');
Route::post('/add_location_action', [LocationController::class, 'store'])->name('location_add_action');
Route::get('/add_location', [LocationController::class, 'add_location'])->name('location_add');
Route::get('/view_location{id}', [LocationController::class, 'view_location'])->name('view_location');
Route::get('/edit_location{id}', [LocationController::class, 'edit_location'])->name('edit_location');
Route::post('/update_location', [LocationController::class, 'update'])->name('update_location');
Route::get('/delete_location/{id}', [LocationController::class, 'destroy'])->name('delete_location');

//crop
Route::get('/crop', [CropController::class, 'index'])->name('crop_list');
Route::post('/addCrop_action', [CropController::class, 'store'])->name('addCrop_action');
Route::get('/addCrop', [CropController::class, 'add'])->name('addCrop');
Route::get('/editCrop{id}', [CropController::class, 'editCrop'])->name('editCrop');
Route::post('/updateCrop', [CropController::class, 'update'])->name('updateCrop');
Route::get('/deleteCrop/{id}', [CropController::class, 'destroy'])->name('deleteCrop');


//recommendCrop
Route::get( '/recommendCrop', [CropController::class, 'recommend'])->name('recommendCrop');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
