<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\CommerceType;
use Transformers\CommerceTypeTransformer;

/**
 * Gestion de tipos de comercios
 *
 * @Resource("Group CommerceType")
 */
class CommerceTypeController extends Controller{

    /**
     * Muestra listado de tipos de comercios
     *
     * @Get("commerce_type")
     * @Transaction({
     *   	@Response(201, body={
     *   		{
     *   				{"id": "foo", "title": "foo"}
     *          }
     *   	}),
     *    	@Response(404, body={"error": {"message": "Error al obtener tipos de comercios"}})
     * })
     */
    public function index()
    {

    }

}