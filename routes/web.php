<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('my-name', function () {
    return ('Кушнир Дмитрий Андреевич');
});

Route::get('my-friend', function () {
    return ('Базанов Сергей Юрьевич');
});

Route::get('get-friend/name', function ($nameFriend = 'Старовойтов Артем Павлович') {
    return $nameFriend;
});

Route::get('my-city/{city}', function ($city) {
    return $city;
});

Route::get('level/{lvl}', function ($lvl) {
    if(($lvl>=0)&&($lvl<=25)){
        return 'новичок';}
    if(($lvl>=26)&&($lvl<=50)){
        return 'специалист';}
    if(($lvl>=51)&&($lvl<=75)){
        return 'босс';}
    if(($lvl>=76)&&($lvl<=98)){
        return 'старик';}
    if($lvl==99){
        return 'король';}
    else return 'ашибка';
});

Route::get('working/{name}/{date?}', function ($name, $date) {
    return ('Название проекта: '.$name.' Дата выполнения проекта:'.$date) ;
});

Route::get('working/{name}/{date?}', function ($name, $date) {
    return ('Название проекта: '.$name.' Дата выполнения проекта:'.$date) ;
});

Route::get('/power/power', function () {
    return '<a href="/test">узнать данный путь</a>';
})->name('power');
Route::get('/test', function(){
    return route('power');
});

Route::prefix('admin')->group(function (){
    Route::get('/login', function (){
        return 'админ логин';
    });
    Route::get('/logout', function (){
        return 'админ логаут';
    });
    Route::get('/info', function (){
        return 'админ инфо';
    });
    Route::get('/color', function (){
        return 'админ цвет';
    });
});

Route::redirect('/admin/web', '/admin/color');

Route::get('/color/{hex}', function ($hex){
    return $hex;
}) -> where('hex', '[0-9a-fA-F]{6}+');
