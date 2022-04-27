<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\TestController;

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

Route::get('my-route', [TestController::class, 'lessonOne']);
Route::get('data', [TestController::class, 'lessonTow']);
Route::get('Task1',[TestController::class, 'Task1']);
Route::get('Task2',[TestController::class, 'Task2']);
Route::get('Task3',[TestController::class, 'Task3']);
Route::get('Task4',[TestController::class, 'Task4']);
Route::get('Task5',[TestController::class, 'Task5']);
Route::get('Task6',[TestController::class, 'Task6']);
Route::get('template/{detach}', [TestController::class, 'lessonTemplateOne']);

Route::get('ConfidentialityOne', [TestController::class, 'ConfidentialityTemplateOne']);
Route::get('ConfidentialityTwo', [TestController::class, 'ConfidentialityTemplateTwo']);
Route::get('favouriteString', [TestController::class, 'favouriteStringTemplate']);
Route::get('arrayList1', [TestController::class, 'ArrayListTemplate1']);
Route::get('arrayList2', [TestController::class, 'ArrayListTemplate2']);
Route::get('arrayNumbers', [TestController::class, 'arrayNumbersTemplate']);
