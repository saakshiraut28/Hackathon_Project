
<?php 

include_once 'header.php';

?>

<!-- Register Form -->


<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form action="includes/register.inc.php" method="post" class="p-4 p-md-5 border rounded-3 bg-light">
          
        <div class="form-floating mb-3">
            <input type="text" name="name" class="form-control" id="name" placeholder="Full Name">
            <label for="floatingInput">Full Name</label>
          </div>

          <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            <label for="floatingInput">Email</label>
          </div>
          

          <div class="form-floating mb-3">
            <input type="text" name="uid" class="form-control" id="uid" placeholder="username">
            <label for="floatingInput">Username</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="pwd" class="form-control" id="pwd" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <div class="form-floating mb-3">
            <input type="password" name="pwdrepeat" id="pwdrepeat"class="form-control" id="floatingPassword" placeholder="Repeat Password">
            <label for="floatingPassword">Repeat Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit">Sign up</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>

      <?php 
      
      if(isset($_GET["error"])){
        if ($_GET["error"] == "emptyinput") {
          echo "<p>Fill all the fields<p>";
        }else if($_GET["error"] == "invaliduid"){
          echo "<p>Choose a proper username</p>";
        }else if($_GET["error"] == "invalidemail"){
          echo "<p>Choose a proper email!</p>";
        }else if($_GET["error"] == "passworddontmatch"){
          echo "<p>Password's don't match</p>";
        }else if($_GET["error"] == "stmtfailed"){
          echo "<p>Something went wrong, try again!</p>";
        }
      }
      
      ?>

      </div>
    </div>
  </div>

<!-- / Register Form -->

</body>

<?php

include_once 'footer.php';

?>

</html>