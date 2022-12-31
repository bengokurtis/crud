<?php include "php/read.php"; ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Read</title>
</head>
<body>

<div class="container">
    <div class="box">
        <h4 class="display-4 text-center">Read</h4><br>

        <?php if (isset($_GET['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_GET['success']; ?> 
        </div> 
        <?php } ?>

        <?php if (mysqli_num_rows($result)) { ?>
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $i = 0;
                    while ($rows = mysqli_fetch_assoc($result)) { 
                    $i++;
                ?>
                <tr>
                <th scope="row"><?=$i?></th>
                <td><?=$rows['name']?></td>
                <td><?php echo $rows['email']; ?></td>
                <td><a href="update.php?id=<?=$rows['id']?>" class="btn btn-success">Update</a></td>
                <td><a href="php/delete.php?id=<?=$rows['id']?>" class="btn btn-danger">Delete</a></td>
                </tr>
            </tbody>
            <?php } ?>
        </table>
        <?php } ?>
    </div>
    <div class="link-right">
        <a href="index.php" class="link-primary">Create</a>
    </div>
    
</div> 
</body>
</html>