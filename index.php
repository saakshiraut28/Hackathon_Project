<?php

include_once 'header.php';

?>


<!-- Simple Responsive Hero -->



<?php

if (isset($_SESSION["userUid"])) {
?>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./img/hero.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Hello There<?php echo " ".$_SESSION["userUid"]." ";?></h1>
      <p class="lead">You are logged in.</p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start">
        <a href="includes/logout.inc.php">
        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Log Out</button>
        </a>
        <a href="admin/index.php">
      <button type="button" class="btn btn-primary btn-lg px-4">Go to Admin Panel</button>
      </a>
      </div>

    </div>
  </div>
</div>

<?php
}else {
?>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./img/help.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Welcome to Centralized Grievance System Portal</h1>
      <p class="lead"> </p>
      <div class="d-grid gap-2 d-md-flex justify-content-md-start"></div>
    </div>
  </div>
</div>

<?php
}
?>

<!-- / Simple Responsive Hero -->

</body>

<?php

include_once 'footer.php';

?>

</html>