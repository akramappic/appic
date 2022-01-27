<?php 


Route::group(['namespace'=>'Bcamq\Greetr\Http\Controllers'],function(){
    Route::get('contact','ContactController@index')->name('contact.index');
    Route::post('contact','ContactController@store')->name('contact.store');
});
