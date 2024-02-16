

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
        <?php foreach($teachers as $teacher): ?>
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