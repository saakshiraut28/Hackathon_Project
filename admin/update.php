<?php
// Include database connection file
require_once "../includes/dbh.inc.php";
require_once "access.php";

if (count($_POST) > 0) {

    $sql = "UPDATE complaints SET name='" . $_POST['name'] . "' ,email='" . $_POST['email'] . "' ,class='" . $_POST['class'] . "' ,completed='" . $_POST["completed"] . "' ,category_of_grievance='" . $_POST['grievance'] . "' WHERE id='" . $_POST['id'] . "'";
    mysqli_query($conn, $sql);

    header("location: index.php");
    exit();
}
$result = mysqli_query($conn, "SELECT * FROM complaints WHERE id='" . $_GET['id'] . "'");
$row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
    <?php include "head.php"; ?>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-header">
                    <h2>Update Complaints</h2>
                </div>
                <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo $row["name"]; ?>" maxlength="50" required="">
                    </div>
                    <div class="form-group ">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo $row["email"]; ?>" maxlength="30" required="">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputState">Class and Course</label>
                            <select name="class" id="inputState" class="form-control">
                                <option selected value="<?php echo $row["class"]; ?>">Select one</option>
                                <option value="FYCO">FYCO</option>
                                <option value="SYCO">SYCO</option>
                                <option value="TYCO">TYCO</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Category</label>
                            <select name="grievance" id="inputState" class="form-control">
                                <option value="Utilities">Utilities</option>
                                <option value="Staff">Staff</option>
                                <option value="Subjects">Subjects</option>
                            </select>
                        </div>
                    </div>
            <div class="form-group">
                
                <input type="text" name="completed" placeholder="Completed or Not" class="form-control" value="<?php echo $row["completed"]; ?>" required="">
            </div>

            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />
            <input type="submit" class="btn btn-primary" value="Submit">
            <a href="index.php" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
    </div>
</body>

</html>