<?php

namespace App\Http\Requests\Location;

// use App\Http\Requests\app\Base\BaseFormRequest;
use app\Base\BaseFormRequest;
use Illuminate\Validation\Rule;

class CreateLocationRequest extends  BaseFormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // 'user_id' => ['required','integer',Rule::exists('properties','id')
            // ->whereNull('deleted_at')],
        ];
    }
}
