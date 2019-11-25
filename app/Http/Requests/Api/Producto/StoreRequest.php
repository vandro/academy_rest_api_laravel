<?php

namespace App\Http\Requests\Api\Producto;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_categoria' => 'required|integer',
            'nombre' => 'required|string',
            'precio' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'stock' => 'required|integer'
        ];
    }
    protected function failedValidation(Validator $validator){
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(
            [
                'success'=>false,
                'data'=>$errors,
                'message'=> "Error al validar los campos"
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
