<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\Detalle;
use App\Http\Requests\Api\Detalle\StoreRequest;
use App\Http\Requests\Api\Detalle\UpdateRequest;

class DetalleController extends  Controller
{
    //Listar todos los detalles
    public function index()
    {
        $modelList = Detalle::all();
        return $this->sendResponse($modelList, "LISTA DE DETALLES RECUPERADA");
    }
    //Recuperar un detalle por id
    public function show(Detalle $model)
    {
        return $this->sendResponse($model, "DETALLE RECUPERADO");
    }
    //Editar un detalle por id
    public function update(UpdateRequest $request, Detalle $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "DETALLE EDITADO");
    }
    //Eliminar un detalle por id
    public function destroy(Detalle $model)
    {
        $model->delete();
        return $this->sendResponse($model, "DETALLE ELIMINADO");
    }

    //Crear un detalle
    public function store(StoreRequest $request)
    {
        $model = Detalle::create($request->all());
        return $this->sendResponse($model, "DETALLE CREADO");
    }
}
