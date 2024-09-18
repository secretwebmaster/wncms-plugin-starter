<?php

use Illuminate\Support\Facades\Route;

Route::prefix('panel/plugins/starter')->middleware(['auth'])->group(function () {
    // your plugin routes here
});