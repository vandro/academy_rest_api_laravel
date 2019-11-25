<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\BaseController as Controller;
use App\Models\Categoria;
use App\Http\Requests\Api\Categoria\StoreRequest;
use App\Http\Requests\Api\Categoria\UpdateRequest;

class CategoriaController extends  Controller
{
    //Listar todos los categorias
    public function index()
    {
        $modelList = Categoria::all();
        return $this->sendResponse($modelList, "LISTA DE CATEGORIAS RECUPERADA");
    }
    //Recuperar un categoria por id
    public function show(Categoria $model)
    {
        return $this->sendResponse($model, "CATEGORIA RECUPERADO");
    }
    //Editar un categoria por id
    public function update(UpdateRequest $request, Categoria $model)
    {
        $model->update($request->all());
        return $this->sendResponse($model, "CATEGORIA EDITADO");
    }
    //Eliminar un categoria por id
    public function destroy(Categoria $model)
    {
        $model->delete();
        return $this->sendResponse($model, "CATEGORIA ELIMINADO");
    }

    //Crear un categoria
    public function store(StoreRequest $request)
    {
        $model = Categoria::create($request->all());
        return $this->sendResponse($model, "CATEGORIA CREADO");
    }
}
