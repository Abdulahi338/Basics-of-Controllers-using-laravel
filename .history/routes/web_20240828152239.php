<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // Capitalize controller class name
use Illuminate\Http\Request; // Import the Request class

Rout::resource('/posts',PostController::class);
?