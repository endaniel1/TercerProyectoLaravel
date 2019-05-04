<?php

namespace Cinema\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUpdateUser extends FormRequest {
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
            "name"     => ["required", "min:4", "max:10"],
            "email"    => ["required"],
            "password" => ["min:4", "max:10", "required"],
        ];
    }
}
