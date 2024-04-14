<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\acpcontrller;
use App\Http\Controllers\dysplist;
use App\Http\Controllers\pilist;
use App\Http\Controllers\psilist;
use App\Http\Controllers\asilist;
use App\Http\Controllers\hconstablelist;
use App\Http\Controllers\constabelist;
use App\Http\Controllers\firinformation;
use App\Http\Controllers\personalfir;
use App\Http\Controllers\login;
use App\Http\Controllers\dysp;
use App\Http\Controllers\pi;
use App\Http\Controllers\psi;
use App\Http\Controllers\asi;
use App\Http\Controllers\complaint;
use App\Http\Controllers\beat;
// use App\Http\Controllers\asi;






Route::resource('/', login::class);

Route::get('/logout', [login::class,'logout'])->name('logout');

Route::resource('/acpdashboard', acpcontrller::class);


// Route::get('/add', function () {
//     return view('add');
// });
// Route::get('/adminhistory', function () {
//     return view('adminhistory');
// });
// Route::get('/allotedtask', function () {
//     return view('allotedtask');
// });
// Route::get('/eservice', function () {
//     return view('eservice');
// });


Route::resource('/dysplist', dysplist::class)->middleware([\App\Http\Middleware\relogin::class]);
;
Route::resource('/pilist', pilist::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/information', firinformation::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/psilist', psilist::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/asilist', asilist::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/hconstablelist', hconstablelist::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/constabelist', constabelist::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/personalfirlist', personalfir::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/complaint', complaint::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/beat', beat::class)->middleware([\App\Http\Middleware\relogin::class]);


Route::resource('/dyspdash', dysp::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/pidash', pi::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/psidash', psi::class)->middleware([\App\Http\Middleware\relogin::class]);
Route::resource('/asidash', asi::class)->middleware([\App\Http\Middleware\relogin::class]);

Route::resource('/personalFIRlist', personalfir::class)->middleware([\App\Http\Middleware\relogin::class]);


Route::get('/genderfemale', [dysplist::class,'genderfemale'])->name('genderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/gendermale', [dysplist::class,'gendermale'])->name('gendermale')->middleware([\App\Http\Middleware\relogin::class]);

Route::get('/pigenderfemale', [pilist::class,'genderfemale'])->name('pigenderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/pigendermale', [pilist::class,'gendermale'])->name('pigendermale')->middleware([\App\Http\Middleware\relogin::class]);

Route::get('/psigenderfemale', [psilist::class,'genderfemale'])->name('psigenderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/psigendermale', [psilist::class,'gendermale'])->name('psigendermale')->middleware([\App\Http\Middleware\relogin::class]);

Route::get('/asigenderfemale', [asilist::class,'genderfemale'])->name('asigenderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/asigendermale', [asilist::class,'gendermale'])->name('asigendermale')->middleware([\App\Http\Middleware\relogin::class]);

Route::get('/hconsgenderfemale', [hconstablelist::class,'genderfemale'])->name('hconsgenderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/hconsgendermale', [hconstablelist::class,'gendermale'])->name('hconsgendermale')->middleware([\App\Http\Middleware\relogin::class]);

Route::get('/congenderfemale', [constabelist::class,'genderfemale'])->name('congenderfemale')->middleware([\App\Http\Middleware\relogin::class]);
Route::get('/congendermale', [constabelist::class,'gendermale'])->name('congendermale')->middleware([\App\Http\Middleware\relogin::class]);
