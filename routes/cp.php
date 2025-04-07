<?php
/*
 * *
 *  *  * Copyright (C) OptimoApps - All Rights Reserved
 *  *  * Unauthorized copying of this file, via any medium is strictly prohibited
 *  *  * Proprietary and confidential
 *  *  * Written by Sathish Kumar(satz) <info@optimoapps.com>
 *  *
 *
 */

use OptimoApps\RichSnippet\Http\Controllers\RichSnippetController;

Route::middleware('statamic.cp.authenticated')->group(function () {
    Route::get('/optimoapps/richsnippet/', [RichSnippetController::class, 'index'])->name('optimoapps.rich-snippet.index');
    Route::post('/optimoapps/richsnippet/', [RichSnippetController::class, 'update'])->name('optimoapps.rich-snippet.update');
});
