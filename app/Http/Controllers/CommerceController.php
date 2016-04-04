<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Commerce;

use Transformers\CommerceTransformer;
use Transformers\CommerceListTransformer;
use Transformers\CommerceListMobileTransformer;

/**
 * Gestion de comercios
 *
 * @Resource("Group Commerce")
 */
class CommerceController extends Controller{

	public function __construct(Commerce $commerce)
    {

    }


	/**
	 * Listado de comercios
	 *
	 * Lista de comercio, paginados, con filtros
	 * @Get("/commerce{?action,location,zone,offer,commerce_type,ideal_for,q,category,include}")
	 * @Parameters({
	 *      @Parameter("action", type="string", required=true, description="book|order", default=null),
	 *      @Parameter("location", type="integer", required=true, description="ID de la localidad", default=null),
	 *      @Parameter("zone", type="integer", required=false, description="ID de la zona", default=null),
	 *      @Parameter("offer", type="string", required=false, description="today | YYYY-mm-dd Para listar solo comercios descuentos del dia seleccionado", default=null),
	 *      @Parameter("commerce_type", type="integer", required=false, description="ID del tipo de comercio", default=null),
	 *      @Parameter("cuisine_type", type="string", required=false, description="Tipo de cocina", default=null),
	 *      @Parameter("ideal_for", type="integer", required=false, description="ID del grupo/ideal", default=null),
	 *      @Parameter("q", type="string", required=false, description="Parametro para busqueda por palabra", default=null),
	 *      @Parameter("category", type="integer", required=false, description="Para seleccionar los comercios que venden alguna categoria de menu. Antes del = va un []", default=null),
	 *      @Parameter("include", type="string", required=false, description="images, commerce_type, commerce_reservation_time_discount", default=null),
	 *      @Parameter("device", type="string", required=false, description="mobile|pc", default=null),
	 * })
	 * @Transaction({
	 *   	@Response(200, body={"id": 10, "username": "foo"}),
	 *    	@Response(400, body={"error": {"message": "Faltan parametros"}})
	 * })
	 */
	public function index(Request $request)
	{

	}

    /**
     * Muestra datos de un comercio
     *
     * Muestra todo, incluida las imagenes
     * @Get("commerce/{id}")
     * @Parameters({
     *      @Parameter("id", type="integer", required=true, description="id del comercio", default=null),
     *      @Parameter("include", description="incluir para obtener las imagenes del comercio", default="images,reservation_setting,delivery_setting, comments"),
     * })
     * @Transaction({
     *   	@Response(201, body={
     *   		"id": "foo", "name": "foo", "slug": "foo", "description": "foo", "email": "foo", "address": "foo", "phone": "foo",
     *   		"web_site_url": "foo", "facebook_url": "foo", "location_id": "foo", "zone_id": "foo", "commerce_type_id": "foo",
     *   		"cuisine_types": "foo", "coordinates": "foo", "active": "foo", "logo": "foo", "tags": "foo", "keywords": "foo", "price_range_id": "foo", "score": "foo",
     *   		"images": {
     *   			"data":{
     *   				{"id": "foo", "sub": "Los Maderos", "src": "htt:://url"}
     *			     }
     *          },
     *          "reservation_setting": {
     *          	"data": {
     *           		{
     *             			"id": "foo",
     *                		"agreement_price": "foo",
     *                  	"active": "foo",
     *                   	"limit_diners": "foo",
     *                    	"limit_anticipation_time": "foo"
     *                  }
     *              }
     *          },
     *          "delivery_setting": {
     *          	"data": {
     *           		{
     *            			"id": "foo",
     *              		"delivery_zone": "foo",
     *               		"open_hours": "foo",
     *                		"delivery_time": "foo",
     *                 		"min_order_ammount": "foo",
     *                   	"shipping_amount": "foo",
     *                    	"agreement_percentage": "foo",
     *                    	"active": "foo"
     *                   }
     *              }
     *          }
     *   	}),
     *    	@Response(404, body={"error": {"message": "No existe el comercio"}})
     * })
     */
    public function show($id)
    {

    }

}