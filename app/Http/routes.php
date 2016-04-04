<?php

$api = app('Dingo\Api\Routing\Router');

$api->version('v1', ['prefix' => 'api'], function ($api) {


	/*================================
    =            Comercio            =
    ================================*/
    //listado de comercios
    $api->get('commerce', 'App\Http\Controllers\CommerceController@index');
    // ver datos de comercio
    $api->get('commerce/{id}', 'App\Http\Controllers\CommerceController@show');

    /*===============================
    =            Pedidos            =
    ===============================*/
    // crear una pedido
    $api->post('order', 'App\Http\Controllers\OrderController@store');

    /*================================
    =            Contacto            =
    ================================*/
    // enviar formulario de contacto
    $api->post('contact/send', 'App\Http\Controllers\ContactController@send');

    /*=================================
    =            Mailchimp            =
    =================================*/
    $api->post('mailchimp', 'App\Http\Controllers\MailchimpController@store');

    /*================================
    =            Reservas            =
    ================================*/
    // crear una reserva
    $api->post('reservation', 'App\Http\Controllers\ReservationController@store');

    /*===================================
	=            Ubicaciones            =
	===================================*/
	// listado de paises
    $api->get('location/countries', 'App\Http\Controllers\LocationController@countries');
	// listado de provincias
    $api->get('location/{id}/provinces', 'App\Http\Controllers\LocationController@provinces');
	// listado de localidades por provincia
    $api->get('location/{id}/locations', 'App\Http\Controllers\LocationController@locations');
	// listado de zonas
    $api->get('location/{id}/zones', 'App\Http\Controllers\LocationController@zones');
    // listado de localidades TODAS
    $api->get('location', 'App\Http\Controllers\LocationController@show');

    /*========================================
    =            Listados simples            =
    ========================================*/
    // listado de grupos/ideales
    $api->get('group', 'App\Http\Controllers\GroupController@index');
    //listado de tipos de cocina
    $api->get('cuisine_type', 'App\Http\Controllers\CuisineTypeController@index');
    // listado de tipos de comercio
    $api->get('commerce_type', 'App\Http\Controllers\CommerceTypeController@index');

});