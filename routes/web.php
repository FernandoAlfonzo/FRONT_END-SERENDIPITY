<?php


use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\EducativeofferController;
use App\Http\Controllers\CarritocompraController;

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
// Route::get('/landingpage', function () {
//     return view('initialView.landingpage');
// });


Route::get('/quienesSomos', function () {
    return view('initialView.aboutUs');
});

Route::get('factura', 'App\Http\Controllers\CarBuyController@FacturaTest');

Route::get('test', 'App\Http\Controllers\pruebacontroller@index');

// Route::get('/terminos', function () {
//     return view('terminos');
// });
Route::post('/perfilStore', 'App\Http\Controllers\UserController@perfilStore');
Route::post('/addressStore','App\Http\Controllers\UserController@addressStore');
Route::post('/documentStore','App\Http\Controllers\UserController@documentStore');
Route::get('/profile', 'App\Http\Controllers\UserController@profile')->name('profile');



// Iconos
// Route::get('/icons', function () { 
//     return view('Files X/icons-boxicons');
// });
Route::get('landingpage', 'App\Http\Controllers\landingController@landing');
Route::get('headerLanding', 'App\Http\Controllers\landingController@headerLanding');
Route::get('listado', 'App\Http\Controllers\listadoController@lista');
Route::get('services/{id}', 'App\Http\Controllers\landingController@services');
// Route::get('diplomadonline', 'App\Http\Controllers\listadoController@diplomadonline');
Route::get('bandeja', 'App\Http\Controllers\MessageController@bandeja');
Route::get('enviados', 'App\Http\Controllers\MessageController@enviados');
Route::get('eliminados', 'App\Http\Controllers\MessageController@eliminados');
Route::get('aprendizaje', 'App\Http\Controllers\LearningController@learning');
Route::get('saldosypagos', 'App\Http\Controllers\PaymentsController@saldosypagos');
Route::get('pagoDetalles/{id_account}', 'App\Http\Controllers\PaymentsController@detallepago');
Route::get('detallecompra', 'App\Http\Controllers\PaymentsController@detallecompra');
Route::get('privacy', 'App\Http\Controllers\LandingPageController@test');
Route::get('edumodel', 'App\Http\Controllers\ModeloeduController@modelo');
Route::get('privacyfo', 'App\Http\Controllers\PrivacyFOController@privfo');
Route::get('resumen/{id_product}', 'App\Http\Controllers\SummaryController@resumen');

Route::get('/Alumnos', function () {
    return view('studentsAll');
});

Route::get('/Alumnos', 'App\Http\Controllers\StudentsController@ListStudents');

Route::get('resetpass', 'App\Http\Controllers\ResetPassController@contraper');
Route::post('resetpassSend', 'App\Http\Controllers\ResetPassController@resetpasssend');

//Rutas para Auth
Route::get('/settings', 'App\Http\Controllers\SettingsController@settings');
Route::get('login', 'App\Http\Controllers\Auth\AuthController@indexlogin');
Route::get('loginUser', 'App\Http\Controllers\Auth\AuthController@login');
Route::get('register', 'App\Http\Controllers\Auth\AuthController@index');
Route::post('register/store', 'App\Http\Controllers\Auth\AuthController@store');
Route::get('emailValidate/{token_validate}', 'App\Http\Controllers\ResetPassController@validateEmail');
Route::get('resetPassword/{token}', 'App\Http\Controllers\ResetPassController@resetpass');
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout');

//inicio de sesión con google
Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', 'App\Http\Controllers\Auth\AuthController@handleProviderCallback');
Route::get('getAllServices', 'App\Http\Controllers\EducativeofferController@getAllServices');

//rutass protejidas con token
Route::group(['middleware' => ['authFront']], function() {
    Route::get('/', function () {
        return view('index');
    });


// RUTAS PARA OFERTAS ACADEMICAS
Route::get('/EducativeOffer/{id}', 'App\Http\Controllers\EducativeofferController@EducativeOffer');
Route::post('/category/{id}', 'App\Http\Controllers\landingController@category');

Route::get('/diplomado', 'App\Http\Controllers\EducativeofferController@ofertadiplomado');
Route::get('/maestria', 'App\Http\Controllers\EducativeofferController@ofertamaestria');
Route::get('/seminario', 'App\Http\Controllers\EducativeofferController@ofertaseminario');
Route::get('/taller', 'App\Http\Controllers\EducativeofferController@ofertataller');
// RUTAS PARA CARRITO DE COMPRA
Route::get('/checkout', 'App\Http\Controllers\CarBuyController@checkout');
Route::post('/AddCarBuy', 'App\Http\Controllers\CarBuyController@AddCarbuy');
Route::get('/DeleteItemCarBuy/{id_Generation}', 'App\Http\Controllers\CarBuyController@destroyItemCarBuy');
Route::post('/SaleTypeOfer', 'App\Http\Controllers\CarBuyController@SaleTypeOfer');

Route::get('/codeList', function () {
    return view('ofertaacademi.listCode');
});

//Send img payment
Route::post('/sendimg', 'App\Http\Controllers\PaymentsController@SendImgPayment');
});