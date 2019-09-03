<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
  public function index(SignupRequest $request)
  {
    return view('signup.index', ['msg'=>'フォームを入力：']);
  }

  public function post(SignupRequest $request)
  {
    return view('pages.home', ['name'=> $request->name]);
  }
}
