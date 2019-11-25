<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\Producto;
use App\Http\Requests\Api\Producto\StoreRequest;
use App\Http\Requests\Api\Producto\UpdateRequest;

class ProductoController extends  Controller
{
    //Listar todos los productos
    public function index()
    {
        $modelList = Producto::all();
        return $this->sendResponse($modelList, "LISTA DE PRODUCTOS RECUPERADA");
    }
    //Recuperar un producto por id
    public function show(Producto $model)
    {
        return $this->sendResponse($model, "PRODUCTO RECUPERADO");
    }
    //Editar un producto por id
    public function update(UpdateRequest $request, Producto $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "PRODUCTO EDITADO");
    }
    //Eliminar un producto por id
    public function destroy(Producto $model)
    {
        $model->delete();
        return $this->sendResponse($model, "PRODUCTO ELIMINADO");
    }

    //Crear un producto
    public function store(StoreRequest $request)
    {
        $model = Producto::create($request->all());
        return $this->sendResponse($model, "PRODUCTO CREADO");
    }
}
