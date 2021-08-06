<h1>Insert data for table1 for your database</h1>
<form action="user" mthod="POST">
@csrf

<input type="text" name="name" placeholder="Enter Your Name"><br>
<input type="text" name="sub" placeholder="Enter Your Subject"><br>
<input type="number" name="marks" placeholder="Enter Your Marks"><br>
<button type="submit">Add data</button>
</form>
<br>
<a href="/fetching">See your saved data</a>