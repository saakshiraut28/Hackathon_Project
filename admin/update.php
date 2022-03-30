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
                    <div class="form-row ">
                    <div class="form-group col-md-6 ">
                        <label for="inputState">Class and Course</label>
                        <select name="class"id="inputState" class="form-control ">
                            <option value="Select one"selected>Select one</option>
                            <option value="First Year Computer Engineering">First Year Computer Engineering</option>
                            <option value="Second Year Computer Engineering">Second Year Computer Engineering</option>
                            <option value="Third Year Computer Engineering">Third Year Computer Engineering</option>
                            <option value="First Year Civil Engineering">First Year Civil Engineering</option>
                            <option value="Second Year Civil Engineering">Second Year Civil Engineering</option>
                            <option value="Third Year Civil Engineering">Third Year Civil Engineering</option>
                            <option value="First Year Electrical Engineering">First Year Electrical Engineering</option>
                            <option value="Second Year Electrical Engineering">Second Year Electrical Engineering</option>
                            <option value="Third Year Electrical Engineering">Third Year Electrical Engineering</option>
                            <option value="First Year Mechanical Engineering">First Year Mechanical Engineering</option>
                            <option value="Second Year Mechanical Engineering">Second Year Mechanical Engineering</option>
                            <option value="Third Year Mechanical Engineering">Third Year Mechanical Engineering</option>
                            <option value="Staff<">Staff</option>

                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputState">Category</label>
                        <select name="grievance" id="inputState" class="form-control">
                            <option selected>Select the category</option>
                            <option value="Electricity">Electricity</option>
                            <option value="Staff">Staff</option>
                            <option value="Subjects">Subjects</option>
                            <option value="Food">Food</option>
                            <option value="Hygiene">Hygiene</option>
                            <option value="Material Requirements">Material Requirements</option>
                            <option value="Parking Space">Parking Space</option>
                            <option value="Library Requirements">Library Requirements</option>
                            <option value="Cultural event">Cultural event</option>
                            <option value="Canteen">Canteen</option>
                            <option value="Wifi allotment">Wifi allotment</option>
                            <option value="Uniform">Uniform</option>
                            <option value="Fees and Charges">Fees and Charges</option>
                            <option value="Backup Staff">Backup Staff</option>
                            <option value="Medical Issues">Medical Issues</option>
                            <option value="Transportation Issues">Transportation Issues</option>
                            <option value="Network issues">Network issues</option>
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