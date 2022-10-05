<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Usermanagement\RoleController;
use App\Http\Controllers\VerifyDocument;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsmi;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Spatie\Activitylog\Models\Activity;

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
    return redirect('login');
});

Route::middleware(['auth'])->group(function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('users', App\Http\Livewire\Usermanagement\Index::class)->name('users');
    Route::get('user/show/{data}', App\Http\Livewire\Usermanagement\Show::class)->name('user.show');
    Route::get('user/create', App\Http\Livewire\Usermanagement\Create::class)->name('user.create');
    Route::get('user/disable-account/{data}', App\Http\Livewire\Usermanagement\DisableAccount::class)->name('user.disable-account');
    Route::get('user/role/{user}', [RoleController::class, 'edit'])->name('user.role');
    Route::put('user/role/{user}', [RoleController::class, 'update'])->name('user.role.update');
    Route::get('user/permission/{user}', [RoleController::class, 'edit_permissions'])->name('user.permission');
    Route::put('user/permission/{user}', [RoleController::class, 'update_permissions'])->name('user.permission.update');
    Route::get('user/activity/{data}', App\Http\Livewire\Usermanagement\Activity::class)->name('users.activty');
    
    Route::get('profile/setup', App\Http\Livewire\Profile\Setup::class)->name('profile.setup');
    Route::view('profile/account', 'profile.account')->name('profile.account');
    
    Route::view('activity/log', 'activity.activity-log')->name('activity.log');
    Route::get('activity/details/{activity}', App\Http\Livewire\Log\Activity\Show::class)->name('activity.details');
    
    Route::get('departments', App\Http\Livewire\Form\Component\Departments\Index::class)->name('departments');
    Route::get('employees', App\Http\Livewire\Form\Component\Employee\Index::class)->name('employees');

    Route::get('notifications', [NotificationController::class, 'index'])->name('notification.index');
    Route::get('help', function () {
        return abort(503);
    })->name('help');
});

Route::get('verify/key={data}', [VerifyDocument::class, 'verify_document'])->name('verify.document');

// Begin handover process
Route::get('verify-employee/{data}', App\Http\Livewire\Verify\Employee\Index::class)->name('verify.employee');
Route::get('approval-document/{employee}/{document}', App\Http\Livewire\Form\Approval\Create::class)->name('approval.document.create');

use Illuminate\Support\Facades\Http;

Route::get('testua', function (Request $request) {
    // dd($request->server('HTTP_USER_AGENT'));
    // dd(app()->isProduction());
    // dd(exec('getmac'));
    // dd(\Request::ip());
    // exec('ping -n 1 127.0.0.1', $output, $status);
    // dd($output);

    $res = Http::connectTimeout(60)->get('http://api.classify.com.ph/api/departments');
    dd($res->json());
});

require __DIR__.'/auth.php';
