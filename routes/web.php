<?php

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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'PembeliController@index');
Route::get('/admin.html', 'AdminController@index');
Route::get('/daftarproduk.html', 'AdminController@semuabarang');
Route::get('/buatproduk.html', 'AdminController@buatbarang');
Route::post('/storebarang','AdminController@storebarang');
Route::post('/storecp','AdminController@storecp');

Route::get('/deletebarang/{id}', 'AdminController@destroy');
Route::get('/deletecp/{id}', 'AdminController@destroycp');
Route::get('/deletetesti/{id}', 'AdminController@destroytesti');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/editbarang/{id}','AdminController@editbarang');
Route::post('/editbarang/{id}','AdminController@updatebarang');


Route::get('/bestseller.html', 'AdminController@bestseller');
Route::get('/buatbestseller.html', 'AdminController@buatbestseller');
Route::post('/storebestseller','AdminController@storebestseller');
Route::get('/deletebestseller/{id}', 'AdminController@destroybestseller');
Route::get('/editbestseller/{id}','AdminController@editbestseller');
Route::post('/editbestseller/{id}','AdminController@updatebestseller');





Route::get('/prodak.html','PembeliController@prodak');
Route::get('/detail/{id}','PembeliController@detail');



//admin Testi
Route::post('/storetesti','AdminController@storetesti');
Route::get('/edittesti/{id}','AdminController@edittesti');
Route::post('/edittesti/{id}','AdminController@updatetesti');
Route::get('/testimoni','AdminController@testimoni');


//admin blog (Artikel)
Route::get('daftarartikel','BlogAdminController@daftarartikel');
Route::get('buatartikel','BlogAdminController@buatartikel');
Route::post('/storeartikel','BlogAdminController@storeartikel');
Route::get('/editartikel/{id}','BlogAdminController@editartikel');
Route::post('/editartikel/{id}','BlogAdminController@updateartikel');
Route::get('/hapusartikel/{id}', 'BlogAdminController@hapusartikel');


//User blog
Route::get('/artikelperikanan.html','BlogController@daftarperikanan');
Route::get('/artikel/perikanan/{id}','BlogController@tampilanperikanan');

Route::get('/artikelpertanian.html','BlogController@daftarpertanian');
Route::get('/artikel/pertanian/{id}','BlogController@tampilanpertanian');

Route::get('/artikelpeternakan.html','BlogController@daftarpeternakan');
Route::get('/artikel/peternakan/{id}','BlogController@tampilanpeternakan');

Route::get('/artikeldekomposer.html','BlogController@daftardekomposer');
Route::get('/artikel/dekomposer/{id}','BlogController@tampilandekomposer');

Route::get('/artikelracunlalat.html','BlogController@daftarracunlalat');
Route::get('/artikel/racunlalat/{id}','BlogController@tampilanracunlalat');

Route::get('/artikelburung.html','BlogController@daftarburung');
Route::get('/artikel/burung/{id}','BlogController@tampilanburung');




//testimoni


//Produk
Route::get('/produk.html','ProdukController@index');
Route::get('/produkdetail/{id}','ProdukController@produkdetail');

// Daftar Produk
Route::get('/produk/pertanian','ProdukController@produkpertanian');
Route::get('/produk/peternakan','ProdukController@produkpeternakan');
Route::get('/produk/perikanan','ProdukController@produkperikanan');
Route::get('/produk/dekomposer','ProdukController@produkdekomposer');
Route::get('/produk/racunlalat','ProdukController@produkracunlalat');
Route::get('/produk/burung','ProdukController@produkburung');



//register admin
Route::get('/registeradmin','AdminController@registeradmin');
Route::post('/storeadmin','AdminController@storeadmin');