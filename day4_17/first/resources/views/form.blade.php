<h1>Form</h1>
<form action="{{ route('form.submit') }}" method="POST">
    @csrf
    <label for="username">Name:</label>
    <input type="text" id="username" name="username" required>
    <br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br>
    <button type="submit">Submit</button>
</form>
