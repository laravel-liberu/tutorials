<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Tutorials\Http\Controllers\Create;
use LaravelLiberu\Tutorials\Http\Controllers\Destroy;
use LaravelLiberu\Tutorials\Http\Controllers\Edit;
use LaravelLiberu\Tutorials\Http\Controllers\ExportExcel;
use LaravelLiberu\Tutorials\Http\Controllers\InitTable;
use LaravelLiberu\Tutorials\Http\Controllers\Load;
use LaravelLiberu\Tutorials\Http\Controllers\Store;
use LaravelLiberu\Tutorials\Http\Controllers\TableData;
use LaravelLiberu\Tutorials\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/system/tutorials')
    ->as('system.tutorials.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{tutorial}/edit', Edit::class)->name('edit');
        Route::patch('{tutorial}', Update::class)->name('update');
        Route::delete('{tutorial}', Destroy::class)->name('destroy');

        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');
        Route::get('exportExcel', ExportExcel::class)->name('exportExcel');

        Route::get('load', Load::class)->name('load');
    });
