<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SignupRequest;

class SignupController extends Controller
{
  public function index()
  {
    return view('signup.index');
  }

  public function post(SignupRequest $request)
  {
    return view('pages.home', ['name'=> $request->name]);
  }
}
