FORMAT: 1A

# YoQuieroComer API

# Group Commerce
Gestion de comercios

## Listado de comercios [GET /commerce{?action,location,zone,offer,commerce_type,ideal_for,q,category,include}]
Lista de comercio, paginados, con filtros

+ Parameters
    + action (string, required) - book|order
    + location (integer, required) - ID de la localidad
    + zone (integer, optional) - ID de la zona
    + offer (string, optional) - today | YYYY-mm-dd Para listar solo comercios descuentos del dia seleccionado
    + commerce_type (integer, optional) - ID del tipo de comercio
    + cuisine_type (string, optional) - Tipo de cocina
    + ideal_for (integer, optional) - ID del grupo/ideal
    + q (string, optional) - Parametro para busqueda por palabra
    + category (integer, optional) - Para seleccionar los comercios que venden alguna categoria de menu. Antes del = va un []
    + include (string, optional) - images, commerce_type, commerce_reservation_time_discount
    + device (string, optional) - mobile|pc

+ Response 200 (application/json)
    + Body

            {
                "id": 10,
                "username": "foo"
            }

+ Response 400 (application/json)
    + Body

            {
                "error": {
                    "message": "Faltan parametros"
                }
            }

## Muestra datos de un comercio [GET /commerce/{id}]
Muestra todo, incluida las imagenes

+ Parameters
    + id (integer, required) - id del comercio
    + include (string, optional) - incluir para obtener las imagenes del comercio
        + Default: images,reservation_setting,delivery_setting, comments

+ Response 201 (application/json)
    + Body

            {
                "id": "foo",
                "name": "foo",
                "slug": "foo",
                "description": "foo",
                "email": "foo",
                "address": "foo",
                "phone": "foo",
                "web_site_url": "foo",
                "facebook_url": "foo",
                "location_id": "foo",
                "zone_id": "foo",
                "commerce_type_id": "foo",
                "cuisine_types": "foo",
                "coordinates": "foo",
                "active": "foo",
                "logo": "foo",
                "tags": "foo",
                "keywords": "foo",
                "price_range_id": "foo",
                "score": "foo",
                "images": {
                    "data": [
                        {
                            "id": "foo",
                            "sub": "Los Maderos",
                            "src": "htt:://url"
                        }
                    ]
                },
                "reservation_setting": {
                    "data": [
                        {
                            "id": "foo",
                            "agreement_price": "foo",
                            "active": "foo",
                            "limit_diners": "foo",
                            "limit_anticipation_time": "foo"
                        }
                    ]
                },
                "delivery_setting": {
                    "data": [
                        {
                            "id": "foo",
                            "delivery_zone": "foo",
                            "open_hours": "foo",
                            "delivery_time": "foo",
                            "min_order_ammount": "foo",
                            "shipping_amount": "foo",
                            "agreement_percentage": "foo",
                            "active": "foo"
                        }
                    ]
                }
            }

+ Response 404 (application/json)
    + Body

            {
                "error": {
                    "message": "No existe el comercio"
                }
            }

# Group Order
Modulo de pedidos

## Crea un pedido [POST /order]
Recibe algunos datos del pedido y del menu para crearlo
Esta vez en RAW (json)

+ Request (application/json)
    + Body

            {
                "commerce_id": "opt",
                "user_id": "opt",
                "commerce_name": "req",
                "location_name": "req",
                "agreement_percentage": "req",
                "shipping_amount": "opt",
                "name": "req",
                "last_name": "req",
                "address": "req",
                "phone": "req",
                "comment": "opt",
                "total": "req",
                "pay_with": "req",
                "device": "opt",
                "ip": "opt",
                "at_time": "opt",
                "pick_up": "opt",
                "menu": [
                    {
                        "menu_id": "opt",
                        "title": "req",
                        "description": "opt",
                        "category_title": "req",
                        "price": "req",
                        "quantity": "req"
                    }
                ]
            }

+ Response 201 (application/json)

+ Response 400 (application/json)
    + Body

            {
                "error": {
                    "message": "Error al crear el pedido"
                }
            }

# Group Location
Gestion de ubicaciones

Paises, provincias, localidades y zonas

## Todas las localidades [GET /location]
Ordenados por nombre

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": "foo",
                    "name": "foo",
                    "province_id": "foo",
                    "reservations": "true|false",
                    "delivery": "true|false"
                }
            ]

## Paises [GET /location/countries]
Ordenados por nombre

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": "foo",
                    "name": "foo"
                }
            ]

## Provincias de un pais [GET /location/{id}/provinces]
Ordenadas por nombre

+ Parameters
    + id (integer, required) - ID del pais

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": "foo",
                    "name": "foo"
                }
            ]

## Localidades de una provincia [GET /location/{id}/locations]
Ordenadas por nombre

+ Parameters
    + id (integer, required) - ID de la provincia

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": "foo",
                    "name": "foo",
                    "province_id": "foo"
                }
            ]

## Zonas de una localidad [GET /location/{id}/zones]
Ordenadas por nombre

+ Parameters
    + id (integer, required) - ID de la localidad

+ Response 200 (application/json)
    + Body

            [
                {
                    "id": "foo",
                    "name": "foo"
                }
            ]