<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 20:12
 */

namespace App\Modules\User\Requests;


use Dingo\Api\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    public function rules()
    {
        return [
           'name' => 'required|string|max:50',
           'email' => 'required|string|unique:users,email',
           'password' => 'required|string'
        ];
    }

    public function authorize()
    {
        return true;
    }
}