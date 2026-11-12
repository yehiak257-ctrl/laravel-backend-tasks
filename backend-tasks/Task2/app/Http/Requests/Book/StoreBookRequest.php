<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    

    public function validated($key = null, $default = null)
    {
        $data = parent::validated($key, $default);
        $data['publisheddate'] = $data['publishedDate'];
        unset($data['publishedDate']);

        return $data;
    }
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'publishedDate' => 'required|date',
        ];
    }
}
