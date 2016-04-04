<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use \DrewM\MailChimp\MailChimp;

/**
 * Gestion de mailchimp
 *
 * @Resource("Group Mailchimp")
 */
class MailchimpController extends Controller{

    /**
     * Muestra listado de tipos de cocina
     *
     * @Post("mailchimp")
     * @Transaction({
     * 		@Request({
     * 			"email": "req",
     * 			"fname": "opt",
     * 			"location_name": "opt"
     * 		}),
     *   	@Response(200, body={
     *   		"id": "lalala",
     *     		"email_address": "lala@lala.com",
     *       	"unique_email_id": "lala",
     *        	"email_type": "html",
     *         	"status": "subscribed"
     *   	}),
     *    	@Response(400, body={
     *    		"type": "http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/",
     *      	"title": "Member Exists",
     *       	"status": 400,
     *        	"detail": "lala@lala.com is already a list member.  Use PUT to insert or update list members.",
     *         	"instance": ""
     *    	}),
     *    	@Response(400, body={
     *    		"type": "http://developer.mailchimp.com/documentation/mailchimp/guides/error-glossary/",
     *      	"title": "Invalid Resource",
     *       	"status": 400,
     *        	"detail": "An email address must contain a single @",
     *         	"instance": ""
     *    	}),
     *    	@Response(200, body={
     *    		false
     *    	}),
     * })
     */
    public function store(Request $request)
    {


    }

}