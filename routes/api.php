<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SclassController;
use App\Http\Controllers\Api\SubjectController;
use App\Http\Controllers\Api\StudentController;

Route::ApiResource('/class',SclassController::class);
Route::ApiResource('/subject',SubjectController::class);
Route::ApiResource('/student', StudentController::class);

?>
