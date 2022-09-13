<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\DashboardController;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsmi;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
    Route::view('user/role', 'user-management.role')->name('user.role');
    Route::get('user/activity/{data}', App\Http\Livewire\Usermanagement\Activity::class)->name('users.activty');
    
    Route::get('profile/setup', App\Http\Livewire\Profile\Setup::class)->name('profile.setup');
    Route::view('profile/account', 'profile.account')->name('profile.account');
    
    Route::view('activity/log', 'activity.activity-log')->name('activity.log');
    Route::get('activity/details/{activity}', App\Http\Livewire\Log\Activity\Show::class)->name('activity.details');
    
    Route::get('departments', App\Http\Livewire\Form\Component\Departments\Index::class)->name('departments');
    Route::get('employees', App\Http\Livewire\Form\Component\Employee\Index::class)->name('employees');

    Route::get('help', function () {
        return abort(503);
    })->name('help');

});

Route::get('test', function () {
    // dd(auth()->user()->getPermissionsViaRoles());
});

Route::get('testua', function (Request $request) {
    // dd($request->server('HTTP_USER_AGENT'));
    // dd(app()->isProduction());
    // dd(exec('getmac'));
    // dd(\Request::ip());
    exec('ping -n 1 127.0.0.1', $output, $status);
    dd($output);
});

require __DIR__.'/auth.php';
