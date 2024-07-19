<?php

use App\Http\Controllers\articleController;
use App\Models\article;
use Illuminate\Support\Facades\Route;





Route::get('/',[articleController::class,'createArticle'])->name('createArticle');
Route::get('/articles/update-article',[articleController::class,'updateArticle']);



Route::get('/articles/show-products',[ articleController::class, 'showProducts'])->name('showProducts');
Route::post('/articles/{id}', [articleController::class,'edit'])->name('edit');
Route::put('/articles',[articleController::class,'update']);








Route::post('/',[articleController::class,'store']);
Route::delete('/articles/{id}', [articleController::class,'delete'])->name('delete');



