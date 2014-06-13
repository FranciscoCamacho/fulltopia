<?php
Route::get('/', function(){
		return View:: make('LoginPage');
});

Route::get('signUp', function(){
	return View:: make('signUp');
});


Route::post('login','photocompDB@login');
Route::post('signUp','photocompDB@signUp');

Route::post('homepage_submit','photocompDB@homepage_submit');
Route::post('submitPost','Posts@submitPost');

Route::post('ratePosts','Posts@ratePost');


//Remeber to check to get to post
Route::get('user_posts','Posts@fetchPosts');



Route::post('outputJson','photocompDB@jsonOutput');

Route::post('seach_profile','photocompDB@search'); //Redirect to profile.php

Route::get('dashboard', function(){
	echo 'Loginned';
});



Route::get('LoginPage', function(){
	return View:: make('LoginPage');
});

Route::get('HomePage', function(){
	return View:: make('home');
});


Route::any('my_actions', function(){
	$userData= App::make('photocompDB')->getAllUserData();

	return View:: make('my_actions')->with('userDataArray', $userData);

	//return View:: make('my_actions');
});





Route::any('user_posts_submit', function(){
	$userData= App::make('photocompDB')->getAllUserData();

	return View:: make('user_posts_submit')->with('userDataArray', $userData);

	//return View:: make('my_actions');
});








Route::get('home', function(){
	return View:: make('home');
});

Route::get('index', function(){
	return View:: make('index');
});

Route::get('signUp', function(){
	return View:: make('signUp');
});


Route::get('my_page', function(){
	return View:: make('my_page');
});

Route::get('start', function(){
	return View:: make('start');
});

Route::get('new_page_1', function(){
	return View:: make('new_page_1');
});

Route::get('web_map', function(){
	return View:: make('web_map');
});

Route::get('start_c_1', function(){
	return View:: make('start_c_1');
});

Route::get('my_room',function(){

	return View:: make('my_room');
});


// Route::get('user_posts', function(){
// 	return View:: make('user_posts');
// });





Route::any('post_profile',function(){
	//Get data from cookies
	$userData= App::make('photocompDB')->getAllUserData();

	return View:: make('post_profile')->with('userDataArray', $userData);

});




Route::any('profile',function(){
	//Get data from cookies
	$userData= App::make('photocompDB')->getAllUserData();

	return View:: make('profile')->with('userDataArray', $userData);

});





