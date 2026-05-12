<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     */

    public function rules()
    {
        return [
            'name' => [
                'required',
            ],
            // 'email' => [
            //     'required',
            //     'email',
            // ],
            // 'password' => [
            //     'required',
            //     'min:8',
            //     'confirmed', // password_confirmation フィールドと一致するか確認
            // ],
            // 'password_confirmation' => [
            //     'required',
            // ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
        //     'name.max:20' => '名前を20文字以下で入力してください',
        //     'email.required' => 'メールアドレスを入力してください',
        //     'email.email' => 'メールアドレスはメール形式で入力してください',
        //     'password.required' => 'パスワードを入力してください',
        //     'password.min:8' => 'パスワードは8文字以上で入力してください',
        //     'password.confirmed' => 'パスワードと一致しません',
            ];
    }
}
