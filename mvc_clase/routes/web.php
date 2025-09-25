<?php
use lib\Route;

Route::get("/", function () {
    echo "RUTA RAIZ";
});

Route::get("/inicio/:flag", function($flag){
    return  array('nombre'=>"javier");
});


Route::dispatch();