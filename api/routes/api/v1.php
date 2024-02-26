<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyEmployeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
| Sanctum disabled
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    //return $request->user();
});

Route::prefix('/companies')
    ->controller(CompanyController::class)
    ->group(function() {
        Route::post('/', 'store');
        Route::prefix('/{companyId}')
            ->middleware('company.exists')
            ->group(function() {
                Route::get('/', 'show');
                Route::patch('/', 'update');
                Route::delete('/', 'remove');
            });
    });

Route::prefix('/companies/{companyId}/employees')
    ->controller(CompanyEmployeeController::class)
    ->middleware('company.exists')
    ->group(function() {
        Route::post('/', 'store');
        Route::prefix('/{employeeId}')
            ->middleware('company.employee.exists')
            ->group(function() {
                Route::get('/', 'show');
                Route::patch('/', 'update');
                Route::delete('/', 'remove');
            });
    });

