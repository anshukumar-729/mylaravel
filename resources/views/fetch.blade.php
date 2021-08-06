//Ansh729@2020
<h1>List</h1>
<br>
<h2> <a href={{"update"}}>Update Your Responses</a></h2>
<table border="1">
    <tr>
    <td>Sno</td>
    <td>Name</td>
    <td>Subject</td>
    <td>marks</td>
   
    <td>Operation</td>
    </tr>
@foreach($members as $item)
<tr>
    <td>{{$item['Sno']}}</td>
    <td>{{$item['Name']}}</td>
    <td>{{$item['sub']}}</td>
    <td>{{$item['marks']}}</td>
   
    <td><a href={{"addedcart/".$item['Sno']}}>Delete</a></td>
    </tr>
@endforeach
</table>
<br>
<a href="/users">Add another Response</a>



