<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:20',
            'body' => 'required|max:30,'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'タイトルが空だよ!',
            'title.max:20' => '20文字しか入力できないよ!',
            'body.required' => '本文が空だよ!',
            'body.max:20' => '30文字しか入力できないよ!',
        ];
    }
}
