<?php

namespace App\Http\Requests\Parcel;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateParcelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if(Gate::allows('Admin'))
        {
            return true;
        }
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
            'tracking' => 'sometimes|unique:parcels,tracking,'.$this->id,
            'user_id' => 'required|integer',
            'shop' => 'required|string',
            'price' => 'required|integer',
            'weight' => 'required|integer',
        ];
    }

    public function messages()
    {
        return [
            'tracking.unique' => 'აღნიშნული თრექინგით ამანთი უკვე რეგისტრირებულია',
        ];
    }
}
