<?php include "php/update.php"; ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Update</title>
</head>
<body>

<div class="container">
    <form action="php/update.php"
            method="POST">
        <h4 class="display-4 text-center">Update</h4><hr><br>

        <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_GET['error']; ?> 
        </div> 
        <?php } ?>

        <div class="form-group">
                <label for="name" class="form-label">Your name</label>
                <input type="name" 
                        class="form-control" 
                        id="name"
                        name="name"
                        value= "<?=$row['name']?> ">
        </div>

                <div class="form-group">
                <label for="email" class="form-label">Your email</label>
                <input type="email" 
                        class="form-control" 
                        id="email"
                        name="email"
                        value= "<?=$row['email']?> ">
                </div>
                
                <input type="text" name="id" value="<?=$row['id']?>" hidden>

    <button type="submit" 
            class="btn btn-primary"
            name="update">Update</button>
            <a href="read.php" class="link-primary">View</a>
    </form>
</div> 
</body>
</html>