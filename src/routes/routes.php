<?php

use Illuminate\Support\Facades\Route;

Route::prefix('wx-oa')->group(function(){
    Route::any('serve',function(){
        WxOa::serve();
    });
});
