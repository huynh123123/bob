<?php
require_once '.\layouts\header.php';
?>
<section>
  <div class="section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
  <div class="container"></div>
  <form class="card register-form">
  <p class="text-center fs-2">Reset the password</p> 
  <div class="form-fild ">
    <label for="exampleInputEmail1" class="form-label">Email address <span class="required">*</span></label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
  </div>
  <div class="form-fild mt-90">
    <label for="exampleInputPassword1" class="form-label">New password<span class="required">*</span></label>
    <input type="password" class="form-control" id="password">
  </div>
  <div class="form-fild mt-90">
    <label for="exampleInputPassword1" class="form-label">Reconfirm  new password<span class="required">*</span></label>
    <input type="password" class="form-control" id="password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    </div>
    </section>
    <div class="main-wrapper">
<?php
require_once './layouts/footer.php';
?> 
</div>