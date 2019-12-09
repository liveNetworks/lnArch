<?php
use Illuminate\Http\Request;

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

// Route::domain('{subdomain}.localhost', ['where' => ['subdomain' => '[a-zA-Z0-9\-]+']])
// ->group(function() {

// 	Route::get('/', 'SubdomainController@index');

// });



// Language subdomain should be rewritten by .htaccess or nginx
Route::domain('{' . env('LANG_PARAM') . '}.localhost', ['where' => ['lang' => '[a-zA-Z]{2}']])
->middleware(['language'])
->group(function() {

	Route::get('/test', 'PagesController@index')->name('test');

	Route::get('/', function() {
		return redirect(route('test', ['lang' => app()->getLocale()]));
	})->name('lang');
});


Route::get('/', 'PagesController@language');