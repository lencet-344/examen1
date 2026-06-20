<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name'=>"string|required||min:3|max:20",
            'email'=>"string|required|min:3|max:30",
            'telephone'=>"integer|required|unique",
            'balance'=>"decimal|required",
            'credit_balance'=>"decimal|required",
            'discount'=>"string|required||min:3|max:25",
            'date_record'=>"date|required||date",
            'state_customer'=>"string|required||min:3|max:30",
        ];
    }

    public function messages():array

    {
        return[
            
            'name.string'=>'El nombre solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 20',

            'email.string'=>'El correo solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 30',

            'telephone.integer'=>'El campo solo permite numeros enteros',
            'required.string'=>'El campo es requerido',
            'unique.integer'=>'El numero debe ser unico',

            'balance.decimal'=>'El campo permite numeros',
            'required.string'=>'El campo es requerido',

            'credit_balance.decimal'=>'El campo permite numeros',
            'required.string'=>'El campo es requerido',

            'discount.string'=>'El campo descuento solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 25',

            'date_record.date'=>'El campo solo permite fecha de ingreso',
            'required.string'=>'El campo es requerido',
            'date.date'=>'fecha',

            'state_customer.string'=>'El campo solo permite caracteres',
            'required.string'=>'El campo es requerido',
            'min.integer'=>'El minimo de caractesres es 3',
            'max.integer'=>'El maximo de caracteres es 30',

            
        ];
    }
}
