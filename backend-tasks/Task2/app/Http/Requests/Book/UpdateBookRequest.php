<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function validated($key = null, $default = null)
    {
        $data =  parent::validated($key, $default);

        if(isset($data['publishedDate'])){
            $data['publisheddate'] = $data['publishedDate'];
            unset($data['publishedDate']);
        }

        return $data;
    }
    public function rules(): array
    {
        return [
            'title' => 'sometimes|string|max:255',
            'publishedDate' => 'sometimes|date',
        ];
    }
}
