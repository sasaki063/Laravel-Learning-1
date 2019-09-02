<header>
  <a href="/">TOP</a>
  <a href="/signup">Signup</a>
</header>

<p>{{$msg}}</p>
@if (count($errors) > 0)
<p>入力に問題があります。</p>
@endif

<table>
<form action="/signup" method="post">
    {{ csrf_field() }}

    @if ($errors->has('name'))
    <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
    @endif
      <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

    @if ($errors->has('mail'))
    <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
    @endif
      <tr><th>mail: </th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

    @if ($errors->has('password'))
    <tr><th>ERROR</th><td>{{$errors->first('password')}}</td></tr>
    @endif
    <tr><th>Password: </th><td><input type="password" name="password" value="{{old('password')}}"></td></tr>

    @if ($errors->has('confirmpassword'))
    <tr><th>ERROR</th><td>{{$errors->first('confirmpassword')}}</td></tr>
    @endif
    <tr><th>ConfirmPassword:</th><td><input type="password" name="confirmpassword"></td></tr>

    <tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>
