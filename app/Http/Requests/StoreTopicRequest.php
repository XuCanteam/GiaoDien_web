<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTopicRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {
        return [
            //
            "name" => "required|min:1",
        ];
    }
    public function messages(): array
    {
        return [
            //
            "name.required" => "Tên Danh Mục bắt buộc phải nhập!",
            "name.min" => "Tên Danh Mục ít nhất phải 1 ký tự ",
        ];
    }
}
