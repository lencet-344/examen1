<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class FactoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'company_name'=>"string|required||min:3|max:30",
            'identification_card'=>"string|required||min:3|max:30",
            'telephone'=>"integer|required|unique",
            'email'=>"string|required||min:3|max:20",
            'address'=>"string|required||min:3|max:40",
            'state_supplier'=>"string|required||min:3|max:50",
        ];
    }

    public function messeges():array
    {
        return[

            'company_name.string'=>'El nombre de la compañia solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 30',

            'identification_card.string'=>'La cedula de identidad solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 30',

            'telephone.integer'=>'El campo solo permite numeros enteros',
            'required.string'=>'El campo es requerido',
            'unique.integer'=>'El numero debe ser unico',

            'email.string'=>'El correo solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 20',

            'address.string'=>'La direccion solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 40',

            'state_supplier.string'=>'El campo solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 50',


        ];
    }
}
