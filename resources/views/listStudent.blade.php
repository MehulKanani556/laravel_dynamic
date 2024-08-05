<div>
    <h1>Student List</h1>

<form action="search" method="get">
    <input type="text" name="search" placeholder="Search Student" value="{{ @$search }}">
    <input type="submit" value="Search">
</form>
   <table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created At</th>
        <th colspan="2">Action</th>
    </tr>
  @foreach ($students as $stud)
      <tr>
        <td>{{ $stud->name }}</td>
        <td>{{ $stud->email }}</td>
        <td>{{ $stud->phone }}</td>
        <td>{{ $stud->created_at }}</td>
        <td><a href="{{ 'delete/'.$stud->id }}">Delete</a></td>
        <td><a href="{{ 'edit/'.$stud->id }}">Edit</a></td>
      </tr>
  @endforeach

   </table>
</div>
<style>
    th,td{
        padding: 10px
    }
    table{
        width: 100%;
    }
    h1{
        text-align: center;
    }    
    body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
        }
    tr:nth-child(even) {background-color: #5b4444;}
    tr:hover {background-color: #ddd;}
    th {background-color: #4CAF50; color: white;}




</style>