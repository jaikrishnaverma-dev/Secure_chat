<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//normal route
Route::get('/', function () {
    return view('welcome');
});
// direct view route
Route::view('/post', 'post');
//variable route
Route::get('/post/{id}', function (string $id) {
    return 'view' . $id;
});
Route::get('/getAll',[RegistrationController::class,'index']);
//optional variable route
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentID = null) {
//     if ($id) {
//         return 'id:' . $id . " comment id:" . $commentID;
//     } else {
//         return "<h1>No Id Found</h1>";
//     }
// });
//laravel dataType route constraint
// whereNumber(id)
// whereAlpha('name')
// whereAlphaNumeric('name')
// whereIn('category',['movie','name'])
// where('id','[@0-9]+') regex
// Route::get('/post/{id?}/comment/{commentid?}', function (string $id = null, string $commentID = null) {
//     return 'view' . $id;
// })->whereNumber('id')->whereAlpha('commentID');

//name route
//about-us work internally as about-us about like rename route with any name 'about-us/post' about
//in href we only have to give about
// Route::get('/about-us/post', function (string $id) {
//     return 'view' . $id;
// })->name('about');

//route redirect redirect(from route,to redirect,route codes like:300)
// Route::redirect('/about', '/test');

//route groups
// Route::prefix('page')->group(function () {
//     Route::get('/post/1', function () {
//     });
//     Route::get('/about', function () {
//     });
//     Route::get('/gallery', function () {
//     });
// });

// route fallback
// Route::fallback(function (){
//     return "<h1>Page Not Found</h1>";
// });