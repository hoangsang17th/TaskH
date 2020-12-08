<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RulesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // Có yêu cầu cần phải đăng nhập hay không quy
        // false là yêu cầu đăng nhập mới sài được
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // Tạo ra các quy tắc khi nhận dữ liệu từ form 
    public function rules()
    {
        return [
            // 'Mission_ToDo' => 'min:10',
            // 'Mission_ToDo' => 'min:10|max:100',
            // Xem thêm tại đây: https://laravel.com/docs/6.x/validation
            // Dữ liệu đầu vào phải đạt yêu cầu trong quy tắc này thì mới thực hiện các hàm tìm theo
            // (Không được thêm mới vào database)
        ];
    }
}
