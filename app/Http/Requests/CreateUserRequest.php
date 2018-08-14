<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * Class CreateUserRequest
 * @package App\Http\Requests
 */
class CreateUserRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'bool'
        ];
    }

    /**
     * @param Validator $validator
     */
    public function failedValidation(Validator $validator)
    {
        throw new HttpException(409, $validator->getMessageBag());
    }

    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
}
