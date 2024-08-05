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
<style>
    /* Add your CSS here */
    input[type="text"], input[type="email"], input[type="tel"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }
    a {
        text-decoration: none;
        color: #4CAF50;
        margin-top: 15px;
        margin-bottom: 15px;
        display: inline-block;
        font-size: 17px;
        transition: 0.3s;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        text-align: center;
        border: none;
        text-decoration: none;
        
    }
    a:hover {
        color: #f1f1f1;
    }
    form {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
    h1 {
        text-align: center;
    }
    /* Dark mode styles */

        body {
            background-color: #333;
            color: #fff;
        }
        form {
            background-color: #222;
        }
 




</style>
