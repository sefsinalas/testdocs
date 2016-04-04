<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\CuisineType;
use Transformers\CuisineTypeTransformer;

/**
 * Gestion de tipos de cocina
 *
 * @Resource("Group CuisineType")
 */
class CuisineTypeController extends Controller{

    /**
     * Muestra listado de tipos de cocina
     *
     * @Get("cuisine_type")
     * @Transaction({
     *   	@Response(201, body={
     *   		{
     *   				{"id": "foo", "title": "foo"}
     *          }
     *   	}),
     *    	@Response(404, body={"error": {"message": "Error al obtener tipos de cocina"}})
     * })
     */
    public function index()
    {

    }

}