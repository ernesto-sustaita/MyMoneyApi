<?php

use App\Http\Controllers\API\AccountController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\BudgetController;
use App\Http\Controllers\API\ExpenseController;
use App\Http\Controllers\API\TransactionController;

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

Route::apiResource('budgets', BudgetController::class);
Route::apiResource('accounts', AccountController::class);
Route::apiResource('expenses', ExpenseController::class);
Route::apiResource('transactions', TransactionController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
