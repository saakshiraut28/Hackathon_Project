<?php

require_once "access.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Panel</title>
<?php include "head.php"; ?>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

</head>
<body>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <div class="page-header clearfix">
                        <h2 class="pull-left">Complaints List</h2>
                        <a href="create.php" class="btn btn-success pull-right">Add New Complaint</a>
                    </div>
                   <?php
                    include_once '../includes/dbh.inc.php';
                    $result = mysqli_query($conn,"SELECT * FROM complaints");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                      <table class='table table-dark table-striped'>
                      
                      <tr>
                        <td>Name</td>
                        <td>Class</td>
                        <td>Messsage</td>
                        <td>Progress</td>
                        <td>Action</td>
                      </tr>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                    <tr>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["class"]; ?></td>
                        <td><?php echo $row["message"];?></td>
                        <td style="<?php if($row["completed"] == 0){ echo "background-color:rgb(255, 113, 113)";}else{echo "background-color:rgb(148, 255, 138)";} ?>"> <?php if($row["completed"] == 0){ echo "Not Completed";} else {echo "Completed";}?></td>
                        <td><a href="update.php?id=<?php echo $row["id"]; ?>" title='Update Record'><span class='glyphicon glyphicon-pencil'></span></a>
                        <a href="delete.php?id=<?php echo $row["id"]; ?>" title='Delete Record'><i class='material-icons'><span class='glyphicon glyphicon-trash'></span></a>
                        </td>
                    </tr>
                    <?php
                    $i++;
                    }
                    ?>
                    </table>
                     <?php
                    }
                    else{
                        echo "No result found";
                    }
                    ?>

                </div>
            </div>     
        </div>

</body>
</html>