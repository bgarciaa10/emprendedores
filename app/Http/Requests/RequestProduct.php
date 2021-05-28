<?php


namespace App\Http\Requests;


use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name_product' => [
                'required',
            ],
            'description_product' => [
                'required',
            ],
            'precio_venta' => [
                'required',
            ],
            'precio_ingreso' => [
                'required',
            ],
            'rutaImg' => [
              'required',
            ],
        ];
    }
}
