<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//----------------------ADMIN-----------------------------------------------


//=========================GET================================================
Route::get ('musteriekle'                     ,'AdminController@musteriekle'        );
Route::get ('musterilistele'                  ,'AdminController@musterilistele'     );
Route::get ('sonhastalar'                     ,'AdminController@sonhastalar'        );
Route::get ('asilisteleri'                    ,'AdminController@asilisteleri'       );
Route::get ('veterinerbilgileri'              ,'AdminController@veterinerbilgileri' );
Route::get ('musteriprofil/{id?}'             ,'AdminController@musteriprofil'      );
Route::get ('hayvanekle/{id?}'                ,'AdminController@hayvanekle'         );
Route::get ('musteriprofil/{id?}/{hid?}'      ,'AdminController@musteriprofil'      );


//=========================POST================================================
Route::post('musteriekle'            ,'AdminController@postmusteriekle'    );
Route::post('asiekle'                ,'AdminController@postasiekle'        );
Route::post('hayvanekle'             ,'AdminController@posthayvanekle'     );


//----------------------------------------------------------------------------


//**********************JSON***********************************************
Route::get ('j_musterilistele/{id?}'               ,'JsonController@j_musterilistele'      );
Route::get ('j_mushayvan/{id?}'                    ,'JsonController@j_mushayvan'           );
Route::get ('j_veterinerbilgileri/{id?}'           ,'JsonController@j_veterinerbilgileri'  );
Route::get ('j_veteriner_imzasi/{id?}'             ,'JsonController@j_veteriner_imzasi'    );
Route::get ('j_hayvanasi/{id?}'                    ,'JsonController@j_hayvanasi'           );
Route::get ('j_mesaj/{pid?}'                       ,'JsonController@j_mesaj'           );


//***************************************************************************

Route::get('/', function () {
    return view('layouts.app');
});


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});

Route::get('/c', function () {
    return view('layouts.app');
});

Route::get('/deneme', function () {
    return view('deneme');
});

Route::get('/ca', function () {
    return view('sayfa');
});