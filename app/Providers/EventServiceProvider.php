<?php

namespace App\Providers;

use App\Events\PDF\DM;
use App\Events\PDF\DMCreditMemo;
use App\Events\PDF\FA;
use App\Events\PDF\FACreditMemo;
use App\Events\PDF\FG;
use App\Events\PDF\FGCreditMemo;
use App\Events\PDF\MA;
use App\Events\PDF\MACreditMemo;
use App\Events\PDF\MI;
use App\Events\PDF\MICreditMemo;
use App\Events\PDF\MRO;
use App\Events\PDF\SC;
use App\Events\PDF\MR;
use App\Events\PDF\bpinformationsheet;
use App\Events\PDF\fixedassetinformationsheet;
use App\Events\PDF\iteminformormationsheet;
use App\Listeners\FormCreditMemoListener;
use App\Listeners\FormPDFListener;
use App\Listeners\InformationSheet;
use App\Models\Department;
use App\Models\Form\Memorandum;
use App\Models\Form\ReturnSlip\ReturnSlip;
use App\Models\Form\ServiceCall;
use App\Models\Form\WithdrawalSlip\Wsdm;
use App\Models\Form\WithdrawalSlip\Wsfa;
use App\Models\Form\WithdrawalSlip\Wsfg;
use App\Models\Form\WithdrawalSlip\Wsma;
use App\Models\Form\WithdrawalSlip\Wsmi;
use App\Models\Form\WithdrawalSlip\Wsmro;
use App\Models\User;
use App\Observers\Form\DepartmentObserver;
use App\Observers\Form\MemorandumObserver;
use App\Observers\Form\ReturnSlip\ReturnSlipObserver;
use App\Observers\Form\ServiceCallObserver;
use App\Observers\Form\WithdrawalSlip\WsdmObserver;
use App\Observers\Form\WithdrawalSlip\WsfaObserver;
use App\Observers\Form\WithdrawalSlip\WsfgObserver;
use App\Observers\Form\WithdrawalSlip\WsmaObserver;
use App\Observers\Form\WithdrawalSlip\WsmiObserver;
use App\Observers\Form\WithdrawalSlip\WsmroObserver;
use App\Observers\UserObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \Illuminate\Auth\Events\Login::class => [

            \App\Listeners\LogActivityListener::class.'@login',
        ],
        \Illuminate\Auth\Events\Logout::class => [
            \App\Listeners\LogActivityListener::class.'@logout',
        ],
        Registered::class => [
            SendEmailVerificationNotification::class,
            \App\Listeners\LogActivityListener::class.'@registered',
        ],
        \Illuminate\Auth\Events\Failed::class => [
            \App\Listeners\LogActivityListener::class.'@failed',
        ],
        \Illuminate\Auth\Events\PasswordReset::class => [
            \App\Listeners\LogActivityListener::class.'@passwordReset',
        ],
        MI::class => [
            FormPDFListener::class.'@mi',
        ],
        MRO::class => [
            FormPDFListener::class.'@mro',
        ],
        DM::class => [
            FormPDFListener::class.'@dm',
        ],
        FG::class => [
            FormPDFListener::class.'@fg',
        ],
        FA::class => [
            FormPDFListener::class.'@fa',
        ],
        MA::class => [
            FormPDFListener::class.'@ma',
        ],
        MR::class => [
            FormPDFListener::class.'@mr',
        ],
        SC::class => [
            FormPDFListener::class.'@sc',
        ],
        MICreditMemo::class => [
            FormCreditMemoListener::class.'@mi',
        ],
        MROCreditMemo::class => [
            FormCreditMemoListener::class.'@mro',
        ],
        DMCreditMemo::class => [
            FormCreditMemoListener::class.'@dm',
        ],
        FGCreditMemo::class => [
            FormCreditMemoListener::class.'@fg',
        ],
        FACreditMemo::class => [
            FormCreditMemoListener::class.'@fa',
        ],
        MACreditMemo::class => [
            FormCreditMemoListener::class.'@ma',
        ],
        bpinformationsheet::class => [
            InformationSheet::class.'@bp',
        ],
        fixedassetinformationsheet::class => [
            InformationSheet::class.'@fixedAsset',
        ],
        iteminformormationsheet::class => [
            InformationSheet::class.'@item',
        ],

    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Wsmi::observe(WsmiObserver::class);
        Wsmro::observe(WsmroObserver::class);
        Wsdm::observe(WsdmObserver::class);
        Wsfa::observe(WsfaObserver::class);
        Wsfg::observe(WsfgObserver::class);
        Wsma::observe(WsmaObserver::class);
        ReturnSlip::observe(ReturnSlipObserver::class);
        Memorandum::observe(MemorandumObserver::class);
        ServiceCall::observe(ServiceCallObserver::class);
        Department::observe(DepartmentObserver::class);
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return true;
    }
}
