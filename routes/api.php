<?php

use App\Http\Controllers\Api\ActivityLogController;
use App\Http\Controllers\Api\ApprovalDepartments;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DashboardController;
use App\Http\Controllers\Api\DocumentStatus;
use App\Http\Controllers\Api\Form\MemorandumController;
use App\Http\Controllers\Api\Public\DocumentVerificationController;
use App\Http\Controllers\Api\Form\ReturnSlip\ReturnSlipController;
use App\Http\Controllers\Api\Form\ServiceCallController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsdmController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsfaController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsfgController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsmaController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsmiController;
use App\Http\Controllers\Api\Form\WithdrawalSlip\WsmroController;
use App\Http\Controllers\Api\FormHandOverController;
use App\Http\Controllers\Api\Service\DepartmentController;
use App\Http\Controllers\Api\TotalRecordController;
use App\Http\Controllers\Api\UserManagementController;
use App\Models\User;
use App\Models\Form\WithdrawalSlip\Wsma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Authenticatio Routes
Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout'])->middleware('auth:api');
});

// Create Forms
Route::prefix('create')->middleware('auth:api')->group(function () {
    Route::post('wsmi', [WsmiController::class, 'store']);
    Route::post('wsmro', [WsmroController::class, 'store']);
    Route::post('wsdm', [WsdmController::class, 'store']);
    Route::post('wsfg', [WsfgController::class, 'store']);
    Route::post('wsfa', [WsfaController::class, 'store']);
    Route::post('wsma', [WsmaController::class, 'store']);
    Route::post('servicecall', [ServiceCallController::class, 'store']);
    Route::post('memorandum', [MemorandumController::class, 'store']);
    Route::post('returnslip', [ReturnSlipController::class, 'store']);
});

Route::prefix('get')->middleware('auth:api')->group(function () {
    Route::get('formcount', [DashboardController::class, 'dashboard_form_count']);
    Route::get('wsmi', [WsmiController::class, 'index']);
    Route::get('wsmro',[WsmroController::class, 'index']);
    Route::get('wsdm', [WsdmController::class, 'index']);
    Route::get('wsfg', [WsfgController::class, 'index']);
    Route::get('wsfa', [WsfaController::class, 'index']);
    Route::get('wsma', [WsmaController::class, 'index']);
    Route::get('servicecall', [ServiceCallController::class, 'index']);
    Route::get('memorandum', [MemorandumController::class, 'index']);
    Route::get('returnslip', [ReturnSlipController::class, 'index']);
    Route::get('systemlog', [ActivityLogController::class, 'index']);

    Route::get('forms', [DashboardController::class, 'all_form_with_status']);

});

// Public Routes
Route::prefix('service')->group(function () {
    Route::get('verify', [DocumentVerificationController::class, 'verifyMI']);
});

Route::prefix('manage')->middleware('auth:api')->group(function () {

    Route::get('users', [UserManagementController::class, 'index']);
    Route::post('user/passwordReset', [UserManagementController::class, 'reset_user_password']); 
    Route::post('profile/update', [UserManagementController::class, 'update_profile_password']);

    Route::get('departments', [DepartmentController::class, 'index']);
    Route::post('department/create', [DepartmentController::class, 'store']);
    Route::get('department/delete', [DepartmentController::class, 'destroy']);
});

Route::post('user/role/update', [UserManagementController::class, 'change_user_role']);// Need to verify why not working on auth:api

Route::prefix('approval/departments')->group(function () {
    Route::get('wsmi/index', [ApprovalDepartments::class, 'wsmiIndex']);
    Route::post('create', [ApprovalDepartments::class, 'form_router']);
});

Route::post('handover', [FormHandOverController::class, 'handover_form']);
Route::post('receiveForm', [FormHandOverController::class, 'receive_form']);
Route::get('formDepartments', [FormHandOverController::class, 'form_departments']);
Route::get('formDepartmentAvailable', [FormHandOverController::class, 'form_department_available']);