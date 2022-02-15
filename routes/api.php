<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Bill\BillController;
use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\CategoryInventory\CategoryInventoryController;
use App\Http\Controllers\Inventory\InventoryController;
use App\Http\Controllers\Order\OrderController;
use App\Http\Controllers\Seller\SellerController;
use App\Http\Controllers\Ubication\UbicationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\UserController;
use App\Models\CategoryInventory;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::resource('/users',UserController::class)->except(['edit','create']);

Route::resource('buyers',BuyerController::class)->except(['edit','create']);

Route::resource('sellers',SellerController::class)->except(['edit','create']);

Route::resource('admins',AdminController::class)->except(['edit','create']);

Route::resource('ubications',UbicationController::class)->only(['show','store']);

Route::resource('orders',OrderController::class)->except(['edit','create']);

Route::resource('bills',BillController::class)->except(['edit','create']);

Route::resource('categorys',CategoryInventory::class)->except(['edit','create']);

Route::resource('inventorys',InventoryController::class)-> except(['edit','create']);

Route::resource('categoryinventorys',CategoryInventoryController::class)->only(['show','store']);