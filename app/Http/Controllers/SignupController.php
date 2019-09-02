<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
  public function index(Request $request)
  {
    return view('signup.index', ['msg'=>'フォームを入力：']);
  }

  public function post(Request $request)
  {
    $validate_rule = [
        'name' => 'required',
        'mail' => 'email',
        'password' => 'numeric|between:0,9999999',
        'confirmpassword' => 'numeric|between:0,9999999',
    ];
    $this->validate($request, $validate_rule);
    return view('signup.index', ['msg'=>'正しく入力されました！']);
  }
}
