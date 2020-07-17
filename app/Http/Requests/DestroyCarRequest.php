<?php

namespace App\Http\Requests;

use App\Rules\Slots;
use Illuminate\Foundation\Http\FormRequest;

class DestroyCarRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'carNumber' => 'required|size:8|exists:cars',

        ];
    }
}
