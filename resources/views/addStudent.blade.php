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
   </form>
</div>
