<?php

// use App\User;
// use App\Address;
use App\Blog;
use App\Category;
// use App\vehicle;
// use App\car;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/insert', function(){
// 	$user = User::find(1);
// 	$address = new Address(['name'=> 'Dang']);
// 	$user->address()->save($address);
// });

// Route::get('/read', function(){
// 	$user = User::findOrFail(1);
// 	echo $user->address->name;
// });

// Route::get('/update', function(){
// 	$address= Address::whereUserId(1)->first();
// 	$address->name = "nepal";
// 	$address->save();
// });\

// Route::get('/delete', function(){
// 	$user = User::findOrFail(1);
// 	$user->address->delete();
// });

// code for homework 

Route::get('/insert', function(){
	$blog = Blog::find(2);
	$category = new Category(['name'=> 'fashionable']);
	$blog->category()->save($category);
});

Route::get('/read', function(){
	$blog = Blog::findOrFail(2);
	echo $blog->category->name;
});

Route::get('/update', function(){
	$category= Category::whereBlogId(2)->first();
	$category->name = "old style";
	$category->save();
});\

Route::get('/delete', function(){
	$blog = Blog::findOrFail(2);
	$blog->category->delete();
});


// Route::get('/insert', function(){
// 	$vehicle = vehicle::find(1);
// 	$car = new car(['name'=> 'I love you whom, do you know: ?...... watch it']);
// 	$vehicle->car()->save($car);
// });

// Route::get('/read', function(){
// 	$vehicle = vehicle::findOrFail(1);
// 	echo $vehicle->car->name;
// });

// Route::get('/update', function(){
// 	$car= Car::whereVehicleId(1)->first();
// 	$car->name = "Mr.. Hanxom Buddhi Ram ";
// 	$car->save();
// });\

// Route::get('/delete', function(){
// 	$vehicle = vehicle::findOrFail(1);
// 	$vehicle->car->delete();
// });