<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

      if ($this->path() ==  'signup')
      {
        return true;
      } else {
        return false;
      }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          'name' => 'required',
          'mail' => 'email',
          'password' => 'required|min:8',
          'password_confirm' => 'required|same:password',
        ];
    }
}
