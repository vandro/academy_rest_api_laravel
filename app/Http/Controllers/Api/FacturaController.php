<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\Factura;
use App\Http\Requests\Api\Factura\StoreRequest;
use App\Http\Requests\Api\Factura\UpdateRequest;

class FacturaController extends  Controller
{
    //Listar todos los facturas
    public function index()
    {
        $modelList = Factura::all();
        return $this->sendResponse($modelList, "LISTA DE FACTURAS RECUPERADA");
    }
    //Recuperar un factura por id
    public function show(Factura $model)
    {
        return $this->sendResponse($model, "FACTURA RECUPERADO");
    }
    //Editar un factura por id
    public function update(UpdateRequest $request, Factura $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "FACTURA EDITADO");
    }
    //Eliminar un factura por id
    public function destroy(Factura $model)
    {
        $model->delete();
        return $this->sendResponse($model, "FACTURA ELIMINADO");
    }

    //Crear un factura
    public function store(StoreRequest $request)
    {
        $model = Factura::create($request->all());
        return $this->sendResponse($model, "FACTURA CREADO");
    }
}
