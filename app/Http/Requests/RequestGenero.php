<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestGenero extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            "genre" => ["min:3", "max:20", "required", "unique:genres"],
        ];
    }
}
