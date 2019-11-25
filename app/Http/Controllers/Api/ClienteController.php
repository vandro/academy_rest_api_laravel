<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\Cliente;
use App\Http\Requests\Api\Cliente\StoreRequest;
use App\Http\Requests\Api\Cliente\UpdateRequest;

class ClienteController extends  Controller
{
    //Listar todos los clientes
    public function index()
    {
        $modelList = Cliente::all();
        return $this->sendResponse($modelList, "LISTA DE CLIENTES RECUPERADA");
    }
    //Recuperar un cliente por id
    public function show(Cliente $model)
    {
        return $this->sendResponse($model, "CLIENTE RECUPERADO");
    }
    //Editar un cliente por id
    public function update(UpdateRequest $request, Cliente $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "CLIENTE EDITADO");
    }
    //Eliminar un cliente por id
    public function destroy(Cliente $model)
    {
        $model->delete();
        return $this->sendResponse($model, "CLIENTE ELIMINADO");
    }

    //Crear un cliente
    public function store(StoreRequest $request)
    {
        $model = Cliente::create($request->all());
        return $this->sendResponse($model, "CLIENTE CREADO");
    }
}
