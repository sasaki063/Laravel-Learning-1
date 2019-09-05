<header>
  <a href="/">TOP</a>
  <a href="/signup">Signup</a>
</header>

@if (count($errors) > 0)
<p>入力に問題があります。</p>
@endif

<form action="/signup" method="post">
  <table>
    {{ csrf_field() }}
    <thead>
      <tr>
        <th>フォームを入力</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @if ($errors->has('name'))
          <tr>
            <td>ERROR</td>
            <td>{{$errors->first('name')}}</td>
          </tr>
        @endif
        <td>name: </td>
        <td><input type="text" name="name" value="{{old('name')}}"></td>
      </tr>
      <tr>
        @if ($errors->has('mail'))
        <tr>
          <td>ERROR</td>
          <td>{{$errors->first('mail')}}</td>
        </tr>
        @endif
        <td>mail: </td>
        <td><input type="text" name="mail" value="{{old('mail')}}"></td>
      </tr>
      <tr>
        @if ($errors->has('password'))
        <tr>
          <td>ERROR</td>
          <td>{{$errors->first('password')}}</td>
        </tr>
        @endif
        <td>Password: </td>
        <td><input type="password" name="password"></td>
      </tr>
      <tr>
        @if ($errors->has('password_confirm'))
        <tr>
          <td>ERROR</td>
          <td>{{$errors->first('password_confirm')}}</td>
        </tr>
        @endif
        <td>ConfirmPassword:</td>
        <td><input type="password" name="password_confirm"></td>
      </tr>
      <tr>
        <td><input type="submit" value="send"></td>
      </tr>
    </tbody>
  </table>
</form>
