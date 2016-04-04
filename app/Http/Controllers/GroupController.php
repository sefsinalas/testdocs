<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Group;
use Transformers\GroupTransformer;

/**
 * Gestion de grupos/ideales
 *
 * @Resource("Group Group")
 */
class GroupController extends Controller{

    /**
     * Muestra listado de ideales
     *
     * @Get("group")
     * @Transaction({
     *   	@Response(201, body={
     *   		{
     *   				{"id": "foo", "title": "foo", "banners": "img1,img2,imgN"}
     *          }
     *   	}),
     *    	@Response(404, body={"error": {"message": "Error al obtener ideales"}})
     * })
     */
    public function index()
    {

    }

}