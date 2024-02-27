<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
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
            'title' => 'required|string|regex:/^[a-zA-Z0-9 ]+$/|unique:books,title,' . $this->bookId . ',id',
            'author' => 'required|string|regex:/^[a-zA-Z ]+$/',
            'genre' => 'required|string',
            'published_year' => 'required|integer|digits:4'
        ];
    }
}
