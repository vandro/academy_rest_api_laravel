<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\ModoPago;
use App\Http\Requests\Api\ModoPago\StoreRequest;
use App\Http\Requests\Api\ModoPago\UpdateRequest;

class ModoPagoController extends  Controller
{
    //Listar todos los modo pagos
    public function index()
    {
        $modelList = ModoPago::all();
        return $this->sendResponse($modelList, "LISTA DE MODO PAGOS RECUPERADA");
    }
    //Recuperar un modo pago por id
    public function show(ModoPago $model)
    {
        return $this->sendResponse($model, "MODO PAGO RECUPERADO");
    }
    //Editar un modo pago por id
    public function update(UpdateRequest $request, ModoPago $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "MODO PAGO EDITADO");
    }
    //Eliminar un modo pago por id
    public function destroy(ModoPago $model)
    {
        $model->delete();
        return $this->sendResponse($model, "MODO PAGO ELIMINADO");
    }

    //Crear un modo pago
    public function store(StoreRequest $request)
    {
        $model = ModoPago::create($request->all());
        return $this->sendResponse($model, "MODO PAGO CREADO");
    }
}
