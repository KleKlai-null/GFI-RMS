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
        Route::get('merchandise/credit-memo', App\Http\Livewire\Form\Merchandise\CreditMemoIndex::class)->name('mi.index-credit-memo');
        Route::get('merchandise/show/{data}', App\Http\Livewire\Form\Merchandise\Show::class)->name('mi.show');
        Route::view('merchandise/import', 'forms.mi.import')->name('mi.import');
    });

    Route::middleware(['permission:create mro|view mro'])->group(function () {
        // -------------------------------------- MRO ----------------------------------------------------//
        Route::get('maintenance', App\Http\Livewire\Form\Maintenance\Index::class)->name('mro');
        Route::get('maintenance/create', App\Http\Livewire\Form\Maintenance\Create::class)->name('mro.create');
        Route::get('maintenance/create-credit-memo', App\Http\Livewire\Form\Maintenance\CreditMemo::class)->name('mro.create-credit-memo');
        Route::get('maintenance/credit-memo', App\Http\Livewire\Form\Maintenance\CreditMemoIndex::class)->name('mro.index-credit-memo');
        Route::get('maintenance/show/{data}', App\Http\Livewire\Form\Maintenance\Show::class)->name('mro.show');
    });

    Route::middleware(['permission:create dm|view dm'])->group(function () {
        // -------------------------------------- DM ----------------------------------------------------//
        Route::get('directmaterial', App\Http\Livewire\Form\DirectMaterial\Index::class)->name('dm');
        Route::get('directmaterial/create', App\Http\Livewire\Form\DirectMaterial\Create::class)->name('dm.create');
        Route::get('directmaterial/create-credit-memo', App\Http\Livewire\Form\DirectMaterial\CreditMemo::class)->name('dm.create-credit-memo');
        Route::get('directmaterial/credit-memo', App\Http\Livewire\Form\DirectMaterial\CreditMemoIndex::class)->name('dm.index-credit-memo');
        Route::get('directmaterial/show/{data}', App\Http\Livewire\Form\DirectMaterial\Show::class)->name('dm.show');
    });
    
    Route::middleware(['permission:create fg|view fg'])->group(function () {
        // -------------------------------------- FG ----------------------------------------------------//
        Route::get('finishedgoods', App\Http\Livewire\Form\FinishedGoods\Index::class)->name('fg');
        Route::get('finishedgoods/create', App\Http\Livewire\Form\FinishedGoods\Create::class)->name('fg.create');
        Route::get('finishedgoods/create-credit-memo', App\Http\Livewire\Form\FinishedGoods\CreditMemo::class)->name('fg.create-credit-memo');
        Route::get('finishedgoods/credit-memo', App\Http\Livewire\Form\FinishedGoods\CreditMemoIndex::class)->name('fg.index-credit-memo');
        Route::get('finishedgoods/show/{data}', App\Http\Livewire\Form\FinishedGoods\Show::class)->name('fg.show');
    });
    Route::middleware(['permission:create fa|view fa'])->group(function () {
        // -------------------------------------- FA ----------------------------------------------------//
        Route::get('fixedasset', App\Http\Livewire\Form\FixedAsset\Index::class)->name('fa');
        Route::get('fixedasset/create', App\Http\Livewire\Form\FixedAsset\Create::class)->name('fa.create');
        Route::get('fixedasset/create-credit-memo', App\Http\Livewire\Form\FixedAsset\CreditMemo::class)->name('fa.create-credit-memo');
        Route::get('fixedasset/credit-memo', App\Http\Livewire\Form\FixedAsset\CreditMemoIndex::class)->name('fa.index-credit-memo');
        Route::get('fixedasset/show/{data}', App\Http\Livewire\Form\FixedAsset\Show::class)->name('fa.show');
    });
    Route::middleware(['permission:create ma|view ma'])->group(function () {
        // -------------------------------------- MA ----------------------------------------------------//
        Route::get('minorasset', App\Http\Livewire\Form\MinorAsset\Index::class)->name('ma');
        Route::get('minorasset/create', App\Http\Livewire\Form\MinorAsset\Create::class)->name('ma.create');
        Route::get('minorasset/create-credit-memo', App\Http\Livewire\Form\MinorAsset\CreditMemo::class)->name('ma.create-credit-memo');
        Route::get('minorasset/credit-memo', App\Http\Livewire\Form\MinorAsset\CreditMemoIndex::class)->name('ma.index-credit-memo');
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

    // Route::group(function () {
        
        Route::get('item/create', App\Http\Livewire\Form\InformationSheet\Item\Create::class)->name('item.create');
        Route::get('item/show/{data}', App\Http\Livewire\Form\InformationSheet\Item\Show::class)->name('item.show');
        Route::get('item', App\Http\Livewire\Form\InformationSheet\Item\Index::class)->name('item');

        Route::get('business-partner/create', App\Http\Livewire\Form\InformationSheet\BusinessPartner\Create::class)->name('business-partner.create');
        Route::get('business-partner', App\Http\Livewire\Form\InformationSheet\BusinessPartner\Index::class)->name('business-partner');
        Route::get('business-partner/show/{data}', App\Http\Livewire\Form\InformationSheet\BusinessPartner\Show::class)->name('business-partner.show');

        Route::get('fix-asset/create', App\Http\Livewire\Form\InformationSheet\FixedAsset\Create::class)->name('fix-asset.create');
        Route::get('fix-asset', App\Http\Livewire\Form\InformationSheet\FixedAsset\Index::class)->name('fix-asset');
        Route::get('fix-asset/show/{data}', App\Http\Livewire\Form\InformationSheet\FixedAsset\Show::class)->name('fix-asset.show');
        // Route::get('fixedasset', function() {
        //     return abort(503);
        // })->name('informationsheet.item.index');
        
        // Route::get('businesspartnert', function() {
        //     return abort(503);
        // })->name('informationsheet.item.index');
    // });

});