
<?php 

include_once 'header.php';

?>

<!-- Register Form -->


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Admin Panel Login</h1>
        <p class="col-lg-10 fs-4">Login as an Admin to Manage the grievances / complaints of the institute</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="includes/login.inc.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
          

          <div class="form-floating mb-3">
            <input type="text" name="uid" class="form-control" id="uid" placeholder="username">
            <label for="floatingInput">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Login</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>

<?php

if(isset($_GET["error"])){
  if ($_GET["error"] == "emptyinput") {
    echo "<p>Fill all the fields<p>";
  }else if($_GET["error"] == "wronglogin"){
    echo "<p>Incorrect Login Info</p>";
  }
}

?>
<!-- / Register Form -->

</body>

<?php

include_once 'footer.php';

?>

</html>