<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//Уроки 7, 8
Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as'=>'article',function ($id) {
    echo $id;
}]);

Route::get('/page/{cat}/{id}', function ($cat, $id) {
	echo $cat.'|'.$id;
	return view('page');
})/* ->where(['id'=>'[0-9]+', 'cat'=>'[A-Za-z]+']) */;

Route::get('/form', function () {
	return view('form');
});

Route::post('/comments',function () {
	
	print_r($_POST);
	
});

/* Route::match(['get', 'post'], '/comments',function () {
	
	print_r($_POST);
	
}); */

/* Route::any('/comments',function () {
	
	print_r($_POST);
	
}); */


//Уроки 7, 8
Route::group(['prefix'=>'admin'], function() {
	
	Route::get('page/create/{id}', function($id) {
		
		$route = Route::current();
		
		// echo $route->getName();
		// echo $route->getParameter('id', 25);
		print_r($route->parameters());
		
		//return redirect()->route('article', ['id'=>25]);
	})->name('createpage');
	
	Route::get('page/edit', function() {
		echo 'page/edit';
	});
});

//Урок 9
Route::get('/about/{id}', 'FirstController@show');

Route::get('/articles', ['uses'=>'Admin\Core@getArticles', 'as'=>'articles']);
Route::get('/articles/{id}', ['uses'=>'Admin\Core@getArticle', 'as'=>'article']);

//list pages
// Route::get('/pages/add', 'Admin\CoreResource@add');
// Route::resource('/pages', 'Admin\CoreResource', ['except'=>['index', 'create']]);

Route::controller('/pages', 'PagesController', ['getIndex'=>'page.index']);