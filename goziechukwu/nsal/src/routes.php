<?php

use Illuminate\Support\Facades\Route;
Route::get('nsal', function(){
    echo 'Go to either "/nsalState" to get all state in Nigeria or "/nsalLgas" to get all LGAs.';
});
Route::get('nsalStates', 'goziechukwu\nsal\NsalController@getStates');
Route::get('nsalLgas', 'goziechukwu\nsal\NsalController@getLgas');