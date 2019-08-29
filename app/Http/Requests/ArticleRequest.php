<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;  // ①
    }
 
    public function rules()
    {
        return [  // ②
            'title' => 'required|min:3',
            'body' => 'required',
            'published_at' => 'required|date',
        ];
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
}
