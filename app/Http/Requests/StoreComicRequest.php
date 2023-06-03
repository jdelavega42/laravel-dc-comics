<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' =>'required|min:5|max:50',
            'description' =>'required|min:5|max:255',
            'thumb' =>'nullable',
            'price' =>'required|min:2|max:100',
            'sale_date' =>'required|date',
            'type' =>'required|min:2|max:50'
        ];
    }
    public function messages()
    {
        return [
            'title.required'=> 'title length error',
            'title.min'=> 'title must be at least :min characters',
            'title.max'=> 'title must be at most :max characters',
            'description.required'=> 'description length error',
            'description.min'=> 'description must be at least :min characters',
            'description.max'=> 'description must be at most :max characters',
            'price.required'=> 'price length error',
            'price.min'=> 'price must be at least :min characters',
            'price.max'=> 'price must be at most :max characters',
            'sale_date.required'=> 'date format error',
            'type.required'=> 'type length error',
            'type.min'=> 'type must be at least :min characters',
            'type.max'=> 'type must be at most :max characters',
        ];
    }
}
