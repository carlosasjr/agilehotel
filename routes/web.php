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


Route::view('/404-tenant', 'erros.404-tenant')->name('404.tenant');

/*     * ************************************************ */
/*     * *************       LOGIN      ***************** */
/*     * ************************************************ */
    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout')->name('logout');


/*     * ************************************************ */
/*     * *************  PASSWORD RESET  ***************** */
/*     * ************************************************ */
    Route::post('password/email', 'Auth\ForgotPasswordController@sendresetlinkemail')->name('password.email');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showlinkrequestform')->name('password.request');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.reseting');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showresetform')->name('password.reset');


/*     * ************************************************ */
/*     * *************   REGISTRATION   ***************** */
/*     * ************************************************ */
Route::group(['middleware' => ['auth', 'not.domain.main']], function () {
    Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Auth\RegisterController@register')->name('');
});


//Choose a Plan
/*     * ************************************************ */
/*     * *************   CHOOSE A PLAN  ***************** */
/*     * ************************************************ */
    Route::get('plans/choosePlan',
    'Tenant\PlanController@choosePlan')->middleware('not.domain.main')->name('plans.choosePlan');

    Route::get('paypal/{companyUuid}/{id}',
    'Tenant\AgreementController@createAgreement')->name('paypal.agreement')->middleware('not.domain.main');

    Route::get('paypal/return', 'Tenant\AgreementController@execute')->name('paypal.return');


/*     * ************************************************ */
/*     * *************      PAYPAL      ***************** */
/*     * ************************************************ */
Route::group(['namespace' => 'Tenant', 'middleware' => 'auth'], function () {

    Route::get('paypal/create/{id}', 'SubscriptionController@createPlan')->name('paypal.create');
    Route::get('paypal/list', 'SubscriptionController@listPlan')->name('paypal.list');
    Route::get('paypal/{id}', 'SubscriptionController@showPlan');
    Route::get('paypal/{id}/activate', 'SubscriptionController@activatePlan');
    Route::get('paypal/{id}/detail', 'AgreementController@detailAgreement');
});


/*     * ************************************************ */
/*     * *************      REGISTER      ***************** */
/*     * ************************************************ */
    Route::post('register-company', 'IndexController@register')->name('register.company');


/*     * ************************************************ */
/*     * *************      SYSTEM      ***************** */
/*     * ************************************************ */
Route::group(['middleware' => 'auth'], function () {


    /*     * ************************************************ */
    /*     * *************     COUNTRIES    ***************** */
    /*     * ************************************************ */
    Route::get('countries/{id}/states', 'CountryController@getStates');
    Route::resource('countries', 'CountryController');


    /*     * ************************************************ */
    /*     * *************       STATES     ***************** */
    /*     * ************************************************ */
    Route::get('states/{id}/cities', 'StateController@getCities');

    Route::resource('states', 'StateController');


    /*     * ************************************************ */
    /*     * *************       CITIES     ***************** */
    /*     * ************************************************ */
    Route::resource('cities', 'CityController');


    /*     * ************************************************ */
    /*     * *************    TYPE ADDRESS  ***************** */
    /*     * ************************************************ */
    Route::resource('type-address', 'TypeAddressController');


    /*     * ************************************************ */
    /*     * *************  SEARCH ADDRESS  ***************** */
    /*     * ************************************************ */
     Route::get('search/{cep}/address', 'SearchAddressController@search')->name('search.address');

    /*     * ************************************************ */
    /*     * *************       ADDRESS    ***************** */
    /*     * ************************************************ */
    Route::post('address/delete', 'ExtraAction\AddressDestroy')->name('delete_address');

    /*     * ************************************************ */
    /*     * *************       CONTACT    ***************** */
    /*     * ************************************************ */
    Route::post('contact/delete', 'ExtraAction\ContactDestroy')->name('delete_contact');


    /*     * ************************************************ */
    /*     * *************      USERS      ***************** */
    /*     * ************************************************ */
    Route::get('users/{id}/profile', 'UserController@profiles')->name('users.profiles');
    Route::get('users/{id}/profile/{profileId}/delete', 'UserController@userDeleteProfile')->name('users.profile.delete');

    Route::get('users/{id}/profile/register', 'UserController@listProfileAdd')->name('users.profiles.list');
    Route::post('users/{id}/profile/register', 'UserController@userAddProfile')->name('users.profiles.add');


    Route::resource('users', 'UserController');

    Route::get('profile', 'UserController@showProfile')->name('profile');
    Route::put('profile/{id}', 'UserController@updateProfile')->name('profile.update');


    /*     * ************************************************ */
    /*     * *************      PROFILES    ***************** */
    /*     * ************************************************ */
    Route::get('profiles/{id}/user', 'ProfileController@users')->name('profiles.users');
    Route::get('profiles/{id}/user/register', 'ProfileController@listUsersAdd')->name('profiles.users.list');
    Route::post('profiles/{id}/user/register', 'ProfileController@userAddProfile')->name('profiles.users.add');
    Route::get('profiles/{id}/user/{userId}/delete', 'ProfileController@userDeleteProfile')->name('profiles.users.delete');

    Route::get('profiles/{id}/permission', 'ProfileController@permissions')->name('profiles.permissions');
    Route::get('profiles/{id}/permission/register', 'ProfileController@listPermissionAdd')->name('profiles.permissions.list');
    Route::post('profiles/{id}/permission/register', 'ProfileController@permissionAddProfile')->name('profiles.permissions.add');
    Route::get('profiles/{id}/permission/{permissionId}/delete', 'ProfileController@permissionDeleteProfile')->name('profiles.permissions.delete');

    Route::resource('profiles', 'ProfileController');


    /*     * ************************************************ */
    /*     * *************    PERMISSION    ***************** */
    /*     * ************************************************ */
    Route::get('permissions/{id}/profile', 'PermissionController@profiles')->name('permissions.profiles');
    Route::get('permissions/{id}/profile/{profileId}/delete', 'PermissionController@permissionDeleteProfile')->name('permissions.profile.delete');

    Route::get('permissions/{id}/profile/register', 'PermissionController@listProfileAdd')->name('permissions.profiles.list');

    Route::post('permissions/{id}/profile/register', 'PermissionController@permissionAddProfile')->name('permissions.profile.add');
    Route::resource('permissions', 'PermissionController');


    Route::get('/home', 'HomeController@index')->name('home');


    /*     * ************************************************ */
    /*     * *************      ORIGIN      ***************** */
    /*     * ************************************************ */
    Route::resource('origins', 'OriginController');


    /*     * ************************************************ */
    /*     * *************       PERSON     ***************** */
    /*     * ************************************************ */
    Route::post('people/search', 'ExtraAction\People');
    Route::resource('people', 'PersonController');



    /*     * ************************************************ */
    /*     * *************       ROOMS     ***************** */
    /*     * ************************************************ */
    Route::any('rooms/available', 'RoomController@availableRooms');
    Route::any('rooms/room/{id}', 'RoomController@getRoom');
    Route::resource('rooms', 'RoomController');


    /*     * ************************************************ */
    /*     * *************      FLOORS      ***************** */
    /*     * ************************************************ */
    Route::resource('floors', 'FloorController');

    /*     * ************************************************ */
    /*     * *************      FLOORS      ***************** */
    /*     * ************************************************ */
    Route::resource('categories', 'CategoryController');



    /*     * ************************************************ */
    /*     * *************    RESERVATION   ***************** */
    /*     * ************************************************ */
    Route::get('/reservations/{id}/show/{action}', 'ReservationController@showReservation')->name('reservations.showAction');


    Route::post('/reservations/{id}/checkin', 'ReservationController@checkin')->name('reservations.checkin');
    Route::post('/reservations/{id}/checkout', 'ReservationController@checkout')->name('reservations.checkout');
    Route::post('/reservations/{id}/cancel', 'ReservationController@cancel')->name('reservations.cancel');

    Route::get('/reservations/{id}/confirmation', 'ReservationController@confirmation')->name('reservations.confirmation');

    Route::get('/reservations/room/{id}', 'ReservationController@addRoom')->name('reservations.room');


    Route::resource('reservations', 'ReservationController');
});



Route::get('/', 'IndexController@index')->name('index');
