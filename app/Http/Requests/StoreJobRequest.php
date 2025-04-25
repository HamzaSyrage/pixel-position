<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'salary' => ['required', 'string', 'max:100'],
            'location' => ['required', 'string', 'max:255'],
            'url' => ['required', 'url', 'active_url'],
            'schedule' => [
                'required',
                Rule::in(['Full Time', 'Part Time', 'Contract', 'Freelance'])
            ],
            'featured' => ['sometimes', 'boolean'],
        ];
    }

    protected function prepareForValidation()
    {
        // Process tags input
        $tags = $this->tags ? preg_split('/\s+/', trim($this->tags)) : [];


        $this->merge([
            'featured' => $this->has('featured'),
            'tags' => array_unique(array_filter($tags, fn($t) => !empty($t)))
        ]);
    }

    public function messages()
    {
        return [
            'schedule.in' => 'Invalid schedule type. Valid options: Full Time, Part Time, Contract, Freelance',
            'url.active_url' => 'The website must be a working URL',
            'tags.*.max' => 'Tags cannot be longer than 50 characters',
            'tags.*.min' => 'Tags must be at least 2 characters'
        ];
    }
}
