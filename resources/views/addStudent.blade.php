<div>
   <h1>Add New Student</h1>


   <form action="add" method="post">
    @csrf

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" placeholder="Enter Name"><br><br>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter Email"><br><br>

      <label for="phone">Phone:</label>
      <input type="text" id="phone" name="phone" placeholder="Enter Phone"><br><br>

      <input type="submit" value="Add">
   </form>

</div>

<style>
    body {
        font-family: Arial, sans-serif;
    }
    form {
        width: 30%;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    label {
        display: block;
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="email"],
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 3px;
    }
    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        cursor: pointer;
    }
    h1 {
        text-align: center;
    }
    @media screen and (max-width: 600px) {
        form {
            width: 100%;
        }
    }
    /* Dark mode styles */
    @media (prefers-color-scheme: dark) {
        body {
            background-color: #333;
            color: #fff;
        }
        form {
            background-color: #222;
            border-color: #111;
        }
        input[type="text"],
        input[type="email"],
        input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
        }
    }
   
</style>