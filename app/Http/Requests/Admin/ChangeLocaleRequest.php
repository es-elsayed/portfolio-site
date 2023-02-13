<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ChangeLocaleRequest extends FormRequest
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

    public function prepareForValidation()
    {
        $this->locale = strtolower($this->locale);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $locales = implode(",", array_keys(config('app.locales')));

        return [
            'locale' => "in:$locales",
        ];
    }

    public function messages()
    {
        return [
            'locale.in' => __("app.locale.error"),
        ];
    }
}
