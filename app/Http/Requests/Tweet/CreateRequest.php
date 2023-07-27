<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Log;

class CreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        logger()->info('akira CreateRequest rule');
        return [
            'tweet' => 'required|max:140',
            'images' => 'array|max:4',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function images(): array
    {
        logger()->info('akira CreateRequest images');
        return $this->file('images',[]);
    }

    public function userId(): int
    {
        logger()->info('akira CreateRequest user');
        return $this->user()->id;
    }

    public function tweet(): string 
    {
        logger()->info('akira CreateRequest tweet');
        return $this->input('tweet');
    }
}