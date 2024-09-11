<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    for($i =1; $i <= 10 ; $i++){
        echo "$i * 2 = ". $i*2 ."<br>";
    }
 });
