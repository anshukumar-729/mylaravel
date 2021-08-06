

<h1>Login Page</h1>
<form action="user" method="POST">
@csrf
<input type="text" name="name" placeholder="Enter User Name" />
<input type="password" name="password" placeholder="Enter Your Password" />
<button type="submit">login</button>
</form>
