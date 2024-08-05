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
   {{ $students->links() }}
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
    /* Dark mode styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #333;
            color: #fff;
        }
        table {
            background-color: #222;
        }
        th, td {
            color: #fff;
        }
        h1 {
            color: #fff;
        }
    }
    .w-5.h-5{
        width: 25px;
        overflow: hidden;
        background-image: url('{{ asset('images/student.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        transition: background-color 0.3s ease-in-out;
        
        margin: 5px;
        cursor: pointer;
        display: inline-block;
        background-color: rgba(0, 0, 0, 0.5);
        transition: background-color 0.3s ease-in-out;
        border: none;
        padding: 5px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        text-align: center;
        margin-bottom: 10px;
        border-radius: 50%;
        display: inline-block;

    }
    
    /* Hover effect */
    @media (hover: hover) {
       .w-5.h-5:hover {
            background-color: rgba(0, 0, 0, 0.5);
        }
    }
</style>

    
</style>