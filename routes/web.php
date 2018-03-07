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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


/*Ruta para variable de sesión*/
Route::get('location/{lang}', function($lang){
    session(['lang' => $lang]);
    return redirect()->back();
})->where([
    'lang' => 'es|nica'
]);
Route::get('/', 'HomeController@index');
/*
Route::get('/search', 'GestionProductosController@productsList')->name('products.list');
*/

Route::get('/productos', 'ProductosController@mostrarProductos');

Route::get('user-lists', 'SearchUserController@userList')->name('user-lists');

Route::get('/smartphones', 'ProductosController@showSmartphones');
Route::get('/detalles', 'ProductosController@detalleProducto');

/*mostrar un producto en específico */
Route::get('/productos/{url}', ['as'=>'productos.detalleProducto', 'uses' => 'ProductosController@detalleProducto'])->where('url', '[\w\d\-\_]+');
Route::resource('reservado', 'MakeReservaController');
Route::get('/reservar/{url}', ['as' => 'reservas.makeReserva', 'uses' => 'GestionReservasController@create'])->where('url', '[\w\d\-\_]+');
Route::get('/optimizar', 'ReservasController@optimizarProducto');
Route::get('/liquidaciones', 'FacebookFeedController@feed');
Route::get('/quienes-somos', 'HomeController@esencia');
Route::get('/empleos', 'EmpleosController@index');
Route::post('empleos/post', 'EmpleosController@store')->name('empleo.store');


Route::group(['middleware' => ['auth']], function (){
    Route::get('/inbox', 'GestionReservasController@index');
    Route::resource('reserva', 'GestionReservasController');

    Route::resource('producto', 'GestionProductosController');
    Route::post('producto/store', 'GestionProductosController@store')->name('producto.store');
    Route::get('/contactos', 'UsuariosController@contactos');

    Route::get('/usuarios-en-el-sistema', 'UsuariosController@usuariosSistema');
    Route::get('Usuarios/nuevo', 'UsuariosController@crearNuevoUsuario')->name('Usuarios.nuevo');
    Route::resource('Usuarios', 'UsuariosController');
    Route::get('Usuarios/Editar/{id}', 'UsuariosController@editar')->name('Usuarios.Editar');


    Route::get('/candidatos', 'EmpleosController@mostrarCandidatos');
    Route::get('candidatos/show/{id}', 'EmpleosController@show')->name('candidato.show');

    Route::get('CambiarContraseña','UsuariosController@cambiarPassword')->name('Password.cambiar');
    Route::post('CambiarPassword','UsuariosController@guardarPassword')->name('Password.guardar.nuevo');


    Route::get('pdf', 'PdfController@crearP');
    Route::get('vista-html-pdf', array(
        'as' => 'vistaHTMLPDF',
        'uses' => 'EmpleosController@vistaHTMLPDF'
    ));
});