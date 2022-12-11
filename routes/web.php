<?php
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ManageProduct;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\ProductManagementController;
use App\Http\Controllers\ReceiptController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ShoppingCart;
use App\Models\Category;
use App\Models\receipt;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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
    return redirect()->route('home');
});

Auth::routes();
// i do not know what is a better way to implement globalVar without touching the pre existed code, but my best way to implement it without deleting anything
Route::middleware('globalVar')->group(function(){
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::get('/password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::get('/password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    
    Route::prefix('/home')->group(function(){
        Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
        Route::get('/result',[SearchController::class,'Search'])->name('search');
    });
    Route::get('/category/{id}',[CategoryController::class,'ShowCategory'])->name('category');
    
    Route::get('/ProductDetail/{id}',[ProductDetailController::class,'ShowProductDetail'])->name('productDetail');
    Route::post('/addToCart',[ReceiptController::class,'addToCart'])->name('addToCart');
    
    
    Route::get('/checkout',[ShoppingCart::class,'showShoppingCart'])->name('checkout');
    Route::post('/checkout/remove',[ShoppingCart::class,'manageItem'])->name('manageItem');
    Route::post('/checkout/purchase',[ShoppingCart::class,'purchase'])->name('purchase');

    Route::get('/ProductManagement',[ProductManagementController::class,'ShowProductManageMenu'])->name('manageProduct');
    Route::get('/ProductManagement/result',[ProductManagementController::class,'SearchItem'])->name('searchItem_admin');
    Route::post('/ProductManagement/removeProduct',[ProductManagementController::class,'removeProduct'])->name('removeProduct');
    
    Route::get('/ProductManagement/editProduct/{id}',[ProductManagementController::class,'ShowEditPage'])->name('showEditPage');
    Route::post('/ProductManagement/proceedEdit',[ManageProduct::class,'editProduct'])->name('editProduct');
    
    Route::get('/ProductManagement/addProduct',[ProductManagementController::class,'ShowAddProductPage'])->name('addProductPage');
    Route::post('/ProductManagement/addProduct/proceed',[ManageProduct::class,'AddProduct'])->name('addProduct');

});



