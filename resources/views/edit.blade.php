<div>
    <h1>Update Student Data</h1>


    <form action="/edit-student/{{ $data->id }} " method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <label for="name"> Name :</label>
        <input type="text" name="name" value="{{ $data->name }}" placeholder="Enter Name"><br><br>


        <label for="email"> Email :</label>
        <input type="email" name="email" value="{{ $data->email }}" placeholder="Enter Email"><br><br>


        <label for="Phone"> Phone :</label>
        <input type="text" name="phone" value="{{ $data->phone }}" placeholder="Enter Phone"><br><br>

        <button>Update</button>
        <a href="/list">Cancel</a>
    </form>



</div>
