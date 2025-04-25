<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateJobRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Only allow job owners to update
        $job = $this->route('job');
        return $job && Auth::check() &&
            Auth::user()->employer->id === $job->employer_id;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => ['sometimes', 'string', 'max:255'],
            'salary' => ['sometimes', 'string', 'max:100'],
            'url' => ['sometimes', 'url', 'active_url'],
            'location' => ['sometimes', 'string', 'max:255'],
            'schedule' => [
                'sometimes',
                Rule::in(['Full Time', 'Part Time', 'Contract', 'Freelance'])
            ],
            'featured' => ['sometimes', 'boolean'],
            'tags' => ['sometimes', 'array'],
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // Process tags if provided
        $tags = $this->tags ? preg_split('/\s+/', trim($this->tags)) : [];

        $this->merge([
            'featured' => $this->has('featured'),
            'tags' => array_unique(array_filter($tags, fn($t) => !empty($t)))
        ]);
    }

    /**
     * Get custom error messages.
     */
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
