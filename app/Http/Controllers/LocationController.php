<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Zone;
use App\Models\Location;
use App\Models\Province;
use App\Models\Country;

use Transformers\ZoneTransformer;
use Transformers\LocationTransformer;
use Transformers\ProvinceTransformer;
use Transformers\CountryTransformer;

/**
 * Gestion de ubicaciones
 *
 * Paises, provincias, localidades y zonas
 *
 * @Resource("Group Location")
 */
class LocationController extends Controller{

	/**
	 * Todas las localidades
	 *
	 * Ordenados por nombre
	 *
	 * @Get("location")
	 * @Transaction({
	 *   	@Response(200, body={{
	 *   		"id": "foo",
     *  		"name": "foo",
     *  		"province_id": "foo",
     *  		"reservations": "true|false",
     *  		"delivery": "true|false"
	 *   	}}),
	 * })
	 */
    public function show()
    {

    }

	/**
	 * Paises
	 *
	 * Ordenados por nombre
	 *
	 * @Get("location/countries")
	 * @Transaction({
	 *   	@Response(200, body={{
	 *   		"id": "foo",
     *  		"name": "foo",
	 *   	}}),
	 * })
	 */
    public function countries()
    {

    }

	/**
	 * Provincias de un pais
	 *
	 * Ordenadas por nombre
	 *
	 * @Get("location/{id}/provinces")
	 * @Parameters({
	 *      @Parameter("id", type="integer", required=true, description="ID del pais", default=null),
	 * })
	 * @Transaction({
	 *   	@Response(200, body={{
	 *   		"id": "foo",
     *  		"name": "foo",
	 *   	}}),
	 * })
	 */
    public function provinces($id)
    {

    }

	/**
	 * Localidades de una provincia
	 *
	 * Ordenadas por nombre
	 *
	 * @Get("location/{id}/locations")
	 * @Parameters({
	 *      @Parameter("id", type="integer", required=true, description="ID de la provincia", default=null),
	 * })
	 * @Transaction({
	 *   	@Response(200, body={{
	 *   		"id": "foo",
     *  		"name": "foo",
     *  		"province_id": "foo"
	 *   	}}),
	 * })
	 */
    public function locations($id)
    {

    }

	/**
	 * Zonas de una localidad
	 *
	 * Ordenadas por nombre
	 *
	 * @Get("location/{id}/zones")
	 * @Parameters({
	 *      @Parameter("id", type="integer", required=true, description="ID de la localidad", default=null),
	 * })
	 * @Transaction({
	 *   	@Response(200, body={{
	 *   		"id": "foo",
     *  		"name": "foo",
	 *   	}}),
	 * })
	 */
    public function zones($id)
    {

    }
}