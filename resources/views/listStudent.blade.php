<div>
    <h1>Student List</h1>


   <table border="1">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Created At</th>
    </tr>
  @foreach ($students as $stud)
      <tr>
        <td>{{ $stud->name }}</td>
        <td>{{ $stud->email }}</td>
        <td>{{ $stud->phone }}</td>
        <td>{{ $stud->created_at }}</td>
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
    body{
        font-family: Arial, sans-serif;
    }
    tr:nth-child(even) {background-color: #f2f2f2;}
    tr:hover {background-color: #ddd;}
    th {background-color: #4CAF50; color: white;}
    
    



</style>