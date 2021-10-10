<H1>User Login</H1>
<form action="users" method="POST">
    @csrf
    <input type="text" name="username" placeholder="Enter User ID"/><br><br>
    <input type="password" name="password" placeholder="Enter User password"/><br><br>
<button type="submit">Login</button>
</form>