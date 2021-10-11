<H1>User Login</H1>
@if($errors->any())
@foreach($errors ->all() as $err)
<li>{{$err}}</li>
    
@endforeach
    
@endif 
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter User ID"/><br><br>
    <input type="password" name="password" placeholder="Enter User password"/><br><br>
<button type="submit">Login</button>
</form>