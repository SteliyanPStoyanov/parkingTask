<?php

namespace App\Http\Requests;

use App\Rules\Slots;
use Illuminate\Foundation\Http\FormRequest;

class StoreCarRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'carNumber' => 'required|size:8|unique:cars',
            'carType' => ['required', new Slots],
            'ownerName' => 'required|min:5',
            'ownerPhone' => 'required|numeric',
        ];
    }
}
