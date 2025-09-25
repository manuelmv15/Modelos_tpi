<?php
use lib\Route;
use app\controllers\HomeController;

Route::get("/", function () {
    echo "RUTA RAIZ";
});

Route::get("/inicio/:flag", function($flag){
    return  array('nombre'=>"javier");
});

Route::get("/Home", [HomeController::class,"index"]);

Route::dispatch();