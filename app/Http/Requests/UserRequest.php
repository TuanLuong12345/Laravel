<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        return ([
            'email' => 'required|email',
            'password' => 'required|min:8',
            'name' => 'required',
            'phone' => 'required',
            'role' => 'required'
        ]);
    }
    public function messages(): array
    {
        return ([
            'email.required' => 'Bạn chưa nhập email',
            'email.email' => 'Bạn chưa nhập  đúng định dạng email . Ví dụ : 1234@gmail.com',
            'password.required' => 'Bạn chưa nhập mật khẩu',
            'password.min' => 'Mật khẩu của bạn quá ngắn',
            'name.required' => 'Bạn chưa nhập tên',
            'phone.required' => 'Bạn chưa nhập số điện thoại',
            'role.required' => 'Bạn chưa nhập vai trò',
        ]);
    }
}
