<?php

use App\Http\Controllers\SettingController;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
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

Route::middleware(['auth.shopify'])->group(function () {
    Route::get('/', function () {
        $shop = Auth::user();
        $settings = Setting::where('shop_id', $shop->name)->first();
        return view('dashboard', compact('settings'));
    })->name('home');

    Route::view('/customers', 'customers');
    Route::view('/products', 'products');
    Route::view('/settings', 'settings');

    Route::post('configure-theme', [SettingController::class, 'configureTheme']);

    Route::get('/test', function () {

    });

});
