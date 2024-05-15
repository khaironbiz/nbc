<?php

use App\Http\Controllers\Web\AdminVaccine\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;

Route::get('/admin-vaccine/product', [ProductController::class, 'index']);

?>
