<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StudentController;
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

Route::get("/welcome", function () {
    return view("welcome");
});

Route::get("/", function () {
    return view("auth/login");
});

// Route::get("/dashboard", function () {
//     return view("dashboard");
// })
//     ->middleware(["auth", "verified"])
//     ->name("dashboard");

Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name(
        "profile.edit"
    );
    Route::patch("/profile", [ProfileController::class, "update"])->name(
        "profile.update"
    );
    Route::delete("/profile", [ProfileController::class, "destroy"])->name(
        "profile.destroy"
    );
});

//Eigen routes

Route::get("/dashboard", [DashboardController::class, "show"])
->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/index", [StudentController::class, "showAllStudents"])
->middleware(['auth', 'verified'])->name('index');


Route::get("/resources", function () {
    return view("resources");
})
    ->middleware(["auth", "verified"])
    ->name("resources");

Route::get("/grades", function () {
    return view("gradesandcerts");
})
    ->middleware(["auth", "verified"])
    ->name("grades");

Route::get("/assignments", function () {
    return view("assignments");
})
    ->middleware(["auth", "verified"])
    ->name("assignments");

Route::post("/student/create", [StudentController::class, "store"]);


require __DIR__ . "/auth.php";
