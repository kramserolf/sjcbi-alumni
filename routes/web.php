<?php
// if (App::environment('production')) {
//     URL::forceScheme('https');
// }
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::post('/alumni/register', 'RegistrationController@register')->name('alumni.register');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/alumni/confirmed', function(){
	return view('vendor/multiauth/admin/confirmed');
})->name('admin.confirm');

// delete alumni
Route::get('/admin/alumni/{user}', function($id){
	$data = App\User::findOrFail($id);
	$data->delete();
		return response()->json([
	        'success' => 'Successfully deleted.'
	]);
		return view('vendor.multiauth.admin.home');
});

Route::get('/admin/home/{user}/edit', function($id){
	$data = App\User::findOrFail($id);
	return response()->json(['result' => $data]);
});

// Route::get('/home/alumni/{id}/edit', 'RegistrationController@edit')->name('alumni.edit');
Route::get('/admin/home/{id}/', 'RegistrationController@update')->name('alumni.update');

