<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

class UserRequest extends Request
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $maxIntro = '80';

        switch ($this->method()) {
            // CREATE
            case 'POST':
            {
                return [
                    // CREATE ROLES
                ];
            }
            // UPDATE
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|between:3,25|regex:/^[A-Za-z0-9\-\_]+$/',
                    'introduction' => 'max:' . $maxIntro,
                    'speaks.*' => Rule::in(get_speaks()),
                    'avatar' => 'mimes:jpeg,bmp,png,gif|dimensions:min_width=208,min_height=208',
                ];
            }
            case 'GET':
            case 'DELETE':
            default:
            {
                return [];
            }
        }
    }

    public function messages()
    {
        return [
            'speaks.*.in' => trans('validation.custom.speaks.in_array'),
        ];
    }
}
