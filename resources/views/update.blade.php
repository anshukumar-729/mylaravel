<h1>Update data for table1 for your database</h1>


<form action="updating" mthod="POST">
@csrf
<input type="number" name="sno" placeholder="Previous S-no"><br>
<input type="text" name="name" placeholder="Enter Your new Name"><br>
<input type="text" name="sub" placeholder="Enter new Subject"><br>
<input type="number" name="marks" placeholder="Enter new Marks"><br>
<button type="submit">Update data</button>
</form>
<br>
<a href="/fetching">See your saved data</a>