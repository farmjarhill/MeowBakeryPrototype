<?php 
include('dbconfig/dbconfig.php');
?>
 <link rel="shortcut icon" href="../images/logoMeowBakery.png" type="image/x-icon">
<?php include('include/header.php'); ?>
<div class="container-fluid py-4">
    <div class="row min-vh-80 h-100">
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h4>
                        Insert data into database using PHP
                        <a href="index.php" class = "btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action = "code.php" method = "POST">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="exampleInputEmail1" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name = "save_btn"class="btn btn-primary">Save Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>