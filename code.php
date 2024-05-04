<?php 
// session_start();
// $connection = mysqli_connect("localhost:3307", "root", "", "phpecom");
include('dbconfig/dbconfig.php');
?>

<?php 
if(isset($_POST['save_btn']));
{
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $insert_query = "INSERT INTO adminpanel(name,email,phone) VALUES('$name', '$phone','$email')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
        $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "success";
        header('location: index.php');
    }
    else
    {
        $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
        $_SESSION['status_code'] = "error";
        header('location: index.php');
    }
}
?>