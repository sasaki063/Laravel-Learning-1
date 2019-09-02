<header>
  <a href="/">TOP</a>
  <a href="/signup">Signup</a>
</header>

<p>{{$msg}}</p>
<table>
<form action="/signup" method="post">
    {{ csrf_field() }}
    <tr><th>name: </th><td><input type="text" name="name"></td></tr>
    <tr><th>mail: </th><td><input type="text" name="mail"></td></tr>
    <tr><th>Password: </th><td><input type="password" name="password"></td></tr>
    <tr><th>ConfirmPassword: </th><td><input type="password" name="confirmpassword"></td></tr>
    <tr><th></th><td><input type="submit" value="send"></td></tr>
</form>
</table>
