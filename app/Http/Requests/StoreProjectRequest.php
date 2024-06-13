<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'project_code' => 'nullable|string',
            'project_name' => 'required|string',
            'project_summary' => 'nullable|string',
            'project_admin' => 'nullable|integer|exists:users,id',
            'start_date' => 'nullable',
            'deadline' => 'nullable',
            'notes' => 'nullable|string',
            'category_id' => 'nullable|integer|exists:categories,id',
            'team_id' => 'nullable|integer',
            'feedback' => 'nullable|string',
            'manual_timelog' => 'nullable|in:enable,disable',
            'client_view_task' => 'nullable|in:enable,disable',
            'allow_client_notification' => 'nullable|in:enable,disable',
            'completion_percent' => 'nullable|integer|min:0|max:100',
            'calculate_task_progress' => 'nullable|in:true,false',
            'project_budget' => 'nullable|string',
            'currency_id' => 'nullable|integer|exists:currencies,id',
            'hours_allocated' => 'nullable|string',
            'status' => 'nullable',
            'added_by' => 'nullable|integer|exists:users,id',
            'last_updated_by' => 'nullable|integer|exists:users,id',
            'hash' => 'nullable|string',
            'public' => 'nullable|boolean',
            'users_id' => 'array',
            'clients_id' => 'array',
        ];
    }
    public function messages()
    {
        return [
            'users_id.required' => 'The users id field is required.',
            'users_id.array' => 'The users id field must be an array.',
            
        ];
    }
}
