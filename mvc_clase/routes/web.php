<?php
use lib\Route;

Route::get("/", function () {
    echo "RUTA RAIZ";
});

Route::get("/inicio", function () {
    require_once("../app/views/inicio.php");
});

Route::dispatch();