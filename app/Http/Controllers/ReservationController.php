<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Reservation;

/**
 * Gestion de las reservas
 *
 * @Resource("Group Reservation")
 */
class ReservationController extends Controller{

    /**
     * Crea una reserva
     *
     * Recibe algunos datos de la reserva para crearla
     * @Post("reservation")
     * @Transaction({
     * 		@Request({
     * 			"commerce_id": "opt",
     * 			"user_id": "opt",
     * 			"commerce_name": "req",
     * 			"location_name": "req",
     * 			"agreement_price": "req",
     * 			"name": "req",
     * 			"last_name": "req",
	 * 			"email": "req",
	 * 			"phone": "req",
	 * 			"diners_quantity": "req",
	 * 			"date": "YYYY-MM-DD req",
	 * 			"hour": "HH:mm req",
	 * 			"discount_percentage": "opt",
	 * 			"discount_conditions_text": "opt",
	 * 			"state" : "req",
     * 			"refer_from": "req",
     * 			"device": "opt",
     * 			"ip": "opt"
     * 		}),
     *   	@Response(201),
     *    	@Response(400, body={"error": {"message": "Error al crear la reserva"}})
     * })
     */
    public function store(Request $request)
    {

    }
}