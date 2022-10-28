<?php

use Illuminate\Support\Facades\Route;

/**
 * Be careful on changing show route on every form it might break the Notification 
 * 
 * If any case you need to change the show route please check the observer first
 */

Route::middleware(['auth'])->group(function () {

    Route::middleware(['permission:create mi|view mi'])->group(function () {
        // -------------------------------------- MI ----------------------------------------------------//
        Route::get('merchandise', App\Http\Livewire\Form\Merchandise\Index::class)->name('mi');
        Route::get('merchandise/create', App\Http\Livewire\Form\Merchandise\Create::class)->name('mi.create');
        Route::get('merchandise/create-credit-memo', App\Http\Livewire\Form\Merchandise\CreditMemo::class)->name('mi.create-credit-memo');
        Route::get('merchandise/show/{data}', App\Http\Livewire\Form\Merchandise\Show::class)->name('mi.show');
        Route::view('merchandise/import', 'forms.mi.import')->name('mi.import');
    });

    Route::middleware(['permission:create mro|view mro'])->group(function () {
        // -------------------------------------- MRO ----------------------------------------------------//
        Route::get('maintenance', App\Http\Livewire\Form\Maintenance\Index::class)->name('mro');
        Route::get('maintenance/create', App\Http\Livewire\Form\Maintenance\Create::class)->name('mro.create');
        Route::get('maintenance/show/{data}', App\Http\Livewire\Form\Maintenance\Show::class)->name('mro.show');
    });

    Route::middleware(['permission:create dm|view dm'])->group(function () {
        // -------------------------------------- DM ----------------------------------------------------//
        Route::get('directmaterial', App\Http\Livewire\Form\DirectMaterial\Index::class)->name('dm');
        Route::get('directmaterial/create', App\Http\Livewire\Form\DirectMaterial\Create::class)->name('dm.create');
        Route::get('directmaterial/show/{data}', App\Http\Livewire\Form\DirectMaterial\Show::class)->name('dm.show');
    });
    Route::middleware(['permission:create fg|view fg'])->group(function () {
        // -------------------------------------- FG ----------------------------------------------------//
        Route::get('finishedgoods', App\Http\Livewire\Form\FinishedGoods\Index::class)->name('fg');
        Route::get('finishedgoods/create', App\Http\Livewire\Form\FinishedGoods\Create::class)->name('fg.create');
        Route::get('finishedgoods/show/{data}', App\Http\Livewire\Form\FinishedGoods\Show::class)->name('fg.show');
    });
    Route::middleware(['permission:create fa|view fa'])->group(function () {
        // -------------------------------------- FA ----------------------------------------------------//
        Route::get('fixedasset', App\Http\Livewire\Form\FixedAsset\Index::class)->name('fa');
        Route::get('fixedasset/create', App\Http\Livewire\Form\FixedAsset\Create::class)->name('fa.create');
        Route::get('fixedasset/show/{data}', App\Http\Livewire\Form\FixedAsset\Show::class)->name('fa.show');
    });
    Route::middleware(['permission:create ma|view ma'])->group(function () {
        // -------------------------------------- MA ----------------------------------------------------//
        Route::get('minorasset', App\Http\Livewire\Form\MinorAsset\Index::class)->name('ma');
        Route::get('minorasset/create', App\Http\Livewire\Form\MinorAsset\Create::class)->name('ma.create');
        Route::get('minorasset/show/{data}', App\Http\Livewire\Form\MinorAsset\Show::class)->name('ma.show');
    });
    Route::middleware(['permission:create mr|view mr'])->group(function () {
        // -------------------------------------- MR ----------------------------------------------------//
        Route::get('memorandum', App\Http\Livewire\Form\Memorandum\Index::class)->name('mr');
        Route::get('memorandum/create', App\Http\Livewire\Form\Memorandum\Create::class)->name('mr.create');
        Route::get('memorandum/show/{data}', App\Http\Livewire\Form\Memorandum\Show::class)->name('mr.show');
    });
    Route::middleware(['permission:create sc|view sc'])->group(function () {
        // -------------------------------------- SC ----------------------------------------------------//
        Route::get('servicecall', App\Http\Livewire\Form\ServiceCall\Index::class)->name('sc');
        Route::get('servicecall/create', App\Http\Livewire\Form\ServiceCall\Create::class)->name('sc.create');
        Route::get('servicecall/show/{data}', App\Http\Livewire\Form\ServiceCall\Show::class)->name('sc.show');
    });
    Route::middleware(['permission:create rs|view rs'])->group(function () {
        // -------------------------------------- RS ----------------------------------------------------//
        Route::get('returnitem', App\Http\Livewire\Form\Return\Index::class)->name('rs');
        Route::get('returnitem/create/{withdrawal_slip_no?}', App\Http\Livewire\Form\Return\Create::class)->name('rs.create');
        Route::get('returnitem/show/{data}', App\Http\Livewire\Form\Return\Show::class)->name('rs.show');
    });

});