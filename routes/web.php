<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/add-employee', [App\Http\Controllers\EmployeeController::class,'addEmployee']);

Route::get('/export-excel', [App\Http\Controllers\EmployeeController::class,'exportIntoExcel']);

Route::get('/export-csv', [App\Http\Controllers\EmployeeController::class,'exportIntoCSV']);

Route::view('/add',[App\Http\Controllers\MembersController::class,'addmember']);

Route::post('/add',[App\Http\Controllers\MembersController::class,'addData']);

//Auth::routes();

Route::get('/posts', [App\Http\Controllers\PostController::class,'index'])->name('posts');

Route::get('/post/create', [App\Http\Controllers\PostController::class,'create'])->name('post.create');

Route::post('/post/store', [App\Http\Controllers\PostController::class,'store'])->name('post.store');

Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class,'show'])->name('post.show');

Route::post('/comment/store', [App\Http\Controllers\CommentController::class,'store'])->name('comment.add');

Route::post('/reply/store', [App\Http\Controllers\CommentController::class,'replyStore'])->name('reply.add');


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index'); 

Route::get('/service', [App\Http\Controllers\HomeController::class, 'page'])->name('service.page'); 

Route::get('/security', [App\Http\Controllers\HomeController::class, 'pageOn'])->name('page.on');

Route::get('/cost', [App\Http\Controllers\HomeController::class, 'bill'])->name('bill.pay');

Route::get('/form', [App\Http\Controllers\CustomAuthController::class, 'form']); 

Route::get('/form', [App\Http\Controllers\FormController::class, 'index']); 

Route::get('/form/create', [App\Http\Controllers\FormController::class, 'create'])->name('form.create'); 

Route::post('/form/create', [App\Http\Controllers\FormController::class, 'store']); 

Route::get('/login', [App\Http\Controllers\CustomAuthController::class, 'index'])->name('login');

Route::post('/custom-login', [App\Http\Controllers\CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('/registration', [App\Http\Controllers\CustomAuthController::class, 'registration'])->name('register-user');

Route::post('/custom-registration', [App\Http\Controllers\CustomAuthController::class, 'customRegistration'])->name('register.custom'); 

Route::get('/signout', [App\Http\Controllers\CustomAuthController::class, 'signOut'])->name('signout');

Route::get('/restaurant', [App\Http\Controllers\HomeController::class, 'showFood'])->name('show.food');

Route::get('/buy-now', [App\Http\Controllers\FoodController::class, 'index']);

Route::get('/buy-now/create', [App\Http\Controllers\FoodController::class,'create'])->name('buy.now');

Route::post('/buy-now/create', [App\Http\Controllers\FoodController::class, 'store']);

Route::get('/price-list', [App\Http\Controllers\HomeController::class, 'priceList'])->name('price.list');

Route::get('/help-line', [App\Http\Controllers\FooterController::class, 'helpLine'])->name('help.line');

Route::get('/hot-line', [App\Http\Controllers\FooterController::class, 'hotLine'])->name('hot.line');

Route::get('/office-rule', [App\Http\Controllers\FooterController::class, 'officeRule'])->name('office.rule');

Route::get('/complaints-point', [App\Http\Controllers\FooterController::class, 'index']);

Route::get('/complaints-point/create', [App\Http\Controllers\FooterController::class, 'create'])->name('complaints-point.user');

Route::post('/complaints-point/create', [App\Http\Controllers\FooterController::class, 'store']);

