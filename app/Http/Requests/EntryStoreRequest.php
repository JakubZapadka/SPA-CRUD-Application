<?php

namespace App\Http\Requests;

use App\Models\Entry;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EntryStoreRequest extends FormRequest
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
        return [
            'title' => ['string','required', 'max:255'],
            'content' => ['string', 'required', 'max:1023'],
        ];
    }
}
