<?php
require_once "../includes/dbh.inc.php";
require_once "access.php";

if(isset($_POST['save']))
{    

     $name = $_POST['name'];
     $class = $_POST['class'];
     $email = $_POST['email'];
     $grievance = $_POST['grievance'];
     $message = $_POST['message'];
     $sql = "INSERT INTO complaints (name,class,email,category_of_grievance,message)
     VALUES ('$name','$class','$email','$grievance','$message')";
     if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit();
     } else {
        echo "Error: " . $sql . "
" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Complaints</title>
    <?php include "head.php"; ?>
</head>
<body>
 
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2>Add Complaints</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        </div>
                        <div class="form-group ">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        </div>
                        <div class="form-group">
                            <label>Class</label>
                            <input type="text" name="class" class="form-control" value="" required="">
                        </div>
                        <div class="form-group">
                            <label>Category of Grievance</label>
                            <input type="text" name="grievance" class="form-control" value="" required="">
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <input type="text" name="message" class="form-control" value="" required="">
                        </div>

                        <input type="submit" class="btn btn-primary" name="save" value="submit">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>

            </div> 
               
        </div>

</body>
</html>
