<?php
require_once "./includes/dbh.inc.php";

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
        header("location: home.php");
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="global.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">
    <title>Write_it</title>
</head>

<body>
    <div>
            <!--*****************************************Navbar******************************************-->
            <div class="title grid justify-center bg-[#F6F6F6] py-2">
            <span
                class="font-extrabold text-xl md:text-xl text-transparent bg-clip-text bg-gradient-to-r from-[#FF7474] to-[#F173FF]">Write
                it</span>
        </div>
        <!-- <div class="content w-full">
            <!--**************************************** Complete Container *******************************-->
        <div class="hero bg-white grid justify-center py-10 font-montserrat px-3 md:px-6 ">
            <!--**************************************** Main Section *******************************-->
            <div class="note font-bold">
                <span class="">Please fill out the following form inorder to submit your grievances.</span>
            </div>
            <form class="my-4 bg-[#F6F6F6] py-2 px-4" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputfullName">Full Name</label>
                        <input type="text" name="name" class="form-control" id="inputfullName" placeholder="Full Name">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
                    </div>
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
                    <label for="inputAddress">Your Message</label>
                    <textarea name="message" class="form-control" aria-label="With textarea"></textarea>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <div class="form-group grid justify-center">
                    <button type="submit"  name="save" value="submit" class="font-extrabold bg-black text-white hover:drop-shadow-2xl px-4 py-3  hover:bg-gradient-to-r hover:from-[#FF7474] hover:to-[#F173FF] ">Submit</button>
                </div>
            </form>

        </div>
        <!--************************************************Footer***************************************-->
        <footer class="bg-black text-white py-4 lg:px-10 px-4 sticky bottom-0">
            <div class="grid grid-cols-2">
                <div class="grid justify-start">
                    <span class="text-sm"><a href="grievance.php" class="hover:no-underline hover:text-white">+ New</a></span>
                </div>
                <div class="grid justify-end">
                    <span class="text-sm"> &#169; 2022, Write it.</span>
                </div>
            </div>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>