<div class="container-fluid pt-4 px-4" style="overflow-x: auto">
<!-- <a href="/addTrainer" class="btn btn-danger">Add new trainer</a> -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Add new trainer
  </button>

  <!-- The Modal -->
  <div class="modal" id="myModal" >
    <div class="modal-dialog" >
      <div class="modal-content" style="background-color: black; border: 1px solid white;">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Form Add new trainer</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <!-- Modal body -->
        <div class="modal-body">
        <div class="modal-body">
            <form action="/addTrainer" method="post">
                <div class="form-group mt-3">
                    <input type="text" class="form-control bg-white" name="firstName" placeholder="FirstName" id="firstName">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control bg-white" name="lastName" placeholder="LastName" id="lastName">
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control bg-white" name="email" placeholder="Email" name="email">
                </div>
                <div class="form-group mt-3">
                    <input type="password" class="form-control bg-white" name="password" placeholder="Password" id="password">
                </div>
               <button class="btn btn-danger mt-3">Create</button>
            </form>
        </div>
        </div> 
      </div>
    </div>
  </div>
  
  <div class="table-wrapper-scroll-y my-custom-scrollbar">
    <table class="table table-bordered table-striped mb-0">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">FirstName</th>
          <th scope="col">LastName</th>
          <th scope="col">Email</th>
          <th scope="col">Password</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($teachers as $teacher) : ?>
          <tr>
            <th scope="row"><?= $teacher['id'] ?></th>
            <!-- <td><img src="" alt=""></td> -->
            <td><?= $teacher['firstName'] ?></td>
            <td><?= $teacher['lastName'] ?></td>
            <td><?= $teacher['email'] ?></td>
            <td><?= $teacher['password'] ?></td>
            <td><i class="fa fa-trash" style="color:red;"><a href=""></a></i>
              <i class="fa fa-edit" style="color:blue;"><a href=""></a></i>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>

  </div>
</div>

<script>
        function validateForm() {
            var firstname = document.getElementById('firstName');
            var lastname = document.getElementById('lastName');
            var email = document.getElementById('email');
            var password = document.getElementById('password');
            
            // Check if name is empty
            if (firstname == "") {
                alert("Name must be filled out");
                return false;
            }
            
            if (lastname == "") {
                alert("Name must be filled out");
                return false;
            }
            
            // Check if email is empty
            if (email == "") {
                alert("Email must be filled out");
                return false;
            }
            
            // Check if email format is valid
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                alert("Invalid email format");
                return false;
            }
            
            // Check if password is empty
            if (password == "") {
                alert("Password must be filled out");
                return false;
            }
            
            // Check if password is at least 8 characters long
            if (password.length < 8) {
                alert("Password must be at least 8 characters long");
                return false;
            }
            
            // If all validation passes, form can be submitted
            return true;
        }
    </script>
