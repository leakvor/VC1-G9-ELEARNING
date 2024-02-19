<?php
require '../../layouts/header.php';
require '../../database/database.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

<?php
    require '../../database/database.php';
    $id = $_GET['id'] ? $_GET['id'] : null;
    $statement = $connection->prepare("select * from users where user_id=:id");
    $statement->execute(
        [':id' => $id]
    );
    $teacher = $statement->fetch();
    
    
    ?>


    <div class=" mt-5 m-auto"  style="background-color:LightGray; border: 1px solid; width: 50%">
        <form class="m-5" action="../../controllers/trainers/trainer.update.controller.php" method="post">
            <div class="mb-3 ">
                <input type="hidden" name="id" value="<?=$id ?>">
                <label for="firstName" class="form-label">firstName</label>
                <input type="firstName" class="form-control" id="firstName" name="username" value="<?= $teacher['username'] ?>">
            </div>
            <div class="mb-3">
                <label for="Email1" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $teacher['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="Password1" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password1" name="password" value="<?= $teacher['password'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>