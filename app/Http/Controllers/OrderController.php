<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\OrderMenu;
use App\Models\AdminCommerce;

use Transformers\OrderTransformer;

/**
 * Modulo de pedidos
 *
 * @Resource("Group Order")
 */
class OrderController extends Controller{

	    /**
	     * Crea un pedido
	     *
	     * Recibe algunos datos del pedido y del menu para crearlo
	     * Esta vez en RAW (json)
	     * @Post("order")
	     * @Transaction({
	     * 		@Request({
	     * 			"commerce_id": "opt",
	     * 			"user_id": "opt",
	     * 			"commerce_name": "req",
	     * 			"location_name": "req",
	     * 			"agreement_percentage": "req",
	     * 			"shipping_amount": "opt",
	     * 			"name": "req",
	     * 			"last_name": "req",
	     * 			"address": "req",
		 * 			"phone": "req",
		 * 			"comment": "opt",
		 * 			"total": "req",
		 * 			"pay_with": "req",
		 * 			"device": "opt",
		 * 			"ip": "opt",
		 * 			"at_time": "opt",
		 * 			"pick_up": "opt",
		 * 			"menu": {{
		 * 				"menu_id": "opt",
		 * 				"title": "req",
		 * 				"description": "opt",
		 * 				"category_title": "req",
		 * 				"price": "req",
		 * 				"quantity": "req"
		 * 			}}
	     * 		}),
	     *   	@Response(201),
	     *    	@Response(400, body={"error": {"message": "Error al crear el pedido"}})
	     * })
	     */
	    public function store(Request $request)
	    {

	    }
}