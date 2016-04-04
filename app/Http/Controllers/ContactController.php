<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

/**
 * Modulo de contacto
 *
 * @Resource("Group Contact")
 */
class ContactController extends Controller{

	/**
	 * Envia un mail de contacto
	 *
	 * El mail se envia a a info@yoquierocomer.com
	 *
	 * @Get("contact/send")
	 * @Transaction({
	 * 		@Request({
	 * 			"message": "foo",
	 * 			"emailFrom": "foo",
	 * 			"nameFrom": "foo"
	 * 		}),
	 *   	@Response(201),
	 * })
	 */
    public function send(Request $request)
    {


    }
}