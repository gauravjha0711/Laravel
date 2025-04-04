<h1>Login Page</h1>
<form action="{{ route('login') }}" method="POST">
    @csrf
    Enter Name:
    <input type="text" name="myname" placeholder="Enter name" required><br>
    <br>
    Enter Password:
    <input type="password" name="password" placeholder="Enter Password" required><br>
    <br>
    <button type="submit">Login</button>
</form>