<?php

use App\Http\Controllers\Calendar;
use Illuminate\Support\Facades\Route;



Route::group(['prefix' => 'calendar', 'middleware' => ['auth']], function () {
    
    Route::get(
        'calendar/',
        [Calendar\CalendarController::class, 'show']
    )->name('show.calendar');


});
    
Route::resource('consumables', Calendar\CalendarController::class, [
    'middleware' => ['auth'],
]);
