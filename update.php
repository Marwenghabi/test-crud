<?php include 'php/update.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <form action="php/update.php" 
                  method="post">

                <h4 class="display-4 text-center">Update</h4><hr><br>
                <?php if (isset($_GET['error'])) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $_GET['error']; ?>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" 
                           class="form-control" 
                           id="name" 
                           value="<?= $row['name'] ?>" >
                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="address" 
                           class="form-control" 
                           id="address" 
                           name="address" 
                           value="<?= $row['address'] ?>" >
                </div>
                <div class="form-group">
                    <label >Salary</label>
                    <input type="salaire" 
                           class="form-control" 

                           name="salaire" 
                           value="<?= $row['salary'] ?>" >
                </div>
                <input type="text" 
                       name="id"
                       value="<?= $row['id'] ?>"
                       hidden >

                <button type="submit" 
                        class="btn btn-primary"
                        name="update">Update</button>
                <a href="read.php" class="link-primary">View</a>
            </form>
        </div>
    </body>
</html>
