<?php

namespace App\Http\Requests\Api\Detalle;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UpdateRequest extends FormRequest
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
            'id_factura' => 'required|integer',
            'id_producto' => 'required|integer',
            'cantidad' => 'required|integer',
            'precio' => 'required|regex:/^\d+(\.\d{1,2})?$/' //'regex:/^-?[0-9]+(?:\.[0-9]{1,2})?$/'
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
