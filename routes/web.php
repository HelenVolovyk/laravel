<?php

use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Auth\AuthSocialController;
use App\Http\Controllers\OrderController;
use App\Services\Localization\LocalizationService;
use Carbon\Traits\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

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



//Route::redirect('/', '/ru');



Route::group([
	//'prefix' => '{languaue}',
	//'where' => ['locale' => '[a-zA-Z]{2}'],
	//'prefix' => LocalizationService::locale(),
	'prefix' => Config::get('routeLang'),
	'middleware' => 'set_locale'
], function () {



	//Route::get('locale/{locale}', 'HomeController@changeLocale')->name('locale');

	Route::get('/', 'HomeController@index')->name('index');
	Route::get('/about', 'PageController@about')->name('about');

	//*contact
	Route::prefix('contact')->name('contact.')->group(function () {
		Route::get('/', 'ContactController@index')->name('index');
		Route::post('/send', 'ContactController@send')->name('send');
	});

	Auth::routes();

	//*login socialite
	Route::prefix('login')->group(function () {
		Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirect');
		Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
	});

	Route::prefix('ajax')->name('ajax.')->namespace('Ajax')->group(function () {
		Route::delete('images/{image}/remove', 'ImagesController@remove')->name('image.remove');
	});

	Route::prefix('category')->name('category.')->group(function () {
		Route::get('/{category}', 'CategoryController@show')->name('show');
		Route::get('/', 'CategoryController@index')->name('index');
	});

	Route::resource('product', 'ProductController');

	Route::get('/shop', 'ShopController@index')->name('shop');
	Route::get('/search', 'ShopController@search')->name('search');


	Route::middleware('auth')->group(function () {
		//*Shopping cart
		Route::prefix('cart')->name('cart.')->group(function () {
			Route::get('/', 'CartController@index')->name('index');
			Route::post('/{product}/add', 'CartController@add')->name('add');
			Route::post('/{product}/count/update', 'CartController@update')->name('count.update');
			Route::delete('/{product}/delete', 'CartController@delete')->name('delete');
		});

		//*checkout
		Route::get('/checkout', 'CheckoutController')->name('checkout');
		Route::post('/order/create', 'OrderController@create')->name('order.create');
		Route::get('/thankyou/{order}', 'PageController@thankyou')->name('thankyou');
		Route::get('/order', 'OrderController@getOrderByUser')->name('user.order');

		//* wishlist
		Route::prefix('wishlist')->name('wishlist.')->group(function () {
			Route::get('/{product}/add', 'WishlistController@add')->name('add');
			Route::delete('/{product}/delete', 'WishlistController@delete')->name('delete');
		});


		//* Rating
		Route::post('rating/{product}/add', 'RatingController@add')->name('rating.add');

		//*comment
		Route::prefix('comment')->name('comments.')->group(function () {
			Route::post('/{product}/add', 'CommentController@add')->name('add');
			Route::get('/{product}/all_comments', 'CommentController@show')->name('show');
		});
	});


	//*auth()->user
	Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
		Route::prefix('profile')->name('profile.')->group(function () {
			Route::get('/', 'ProfileController@index')->name('index');
			Route::get('/edit', 'ProfileController@edit')->name('edit');
			Route::post('/update', 'ProfileController@update')->name('update');
		});
		Route::get('/wishlist', 'WishlistController@userList')->name('wishlist');
	});


	//*admin
	Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		Route::get('/users', 'UsersController@index')->name('users');
		Route::get('/orders', 'UsersController@getOrders')->name('users.orders');

		Route::prefix('sliders')->name('sladers.')->group(function () {
			Route::get('/index', 'SlidersController@index')->name('index');
			Route::get('/create', 'SlidersController@create')->name('create');
			Route::post('/store', 'SlidersController@store')->name('store');
			Route::get('/index', 'SlidersController@index')->name('index');
		});



		Route::resource('products', 'ProductsController')->except(['show']);
		Route::resource('categories', 'CategoriesController')->except(['show']);
		// Route::resource('sliders', 'SlidersController');
	});

	//* Mail
	Route::get('/send', 'MailController@send');
});