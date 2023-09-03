<?php
require_once '.\layouts\header.php';
?>
<body >
<div>
<section class="py-5 text-center container banner-pp">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Beaches</h1>
      <p class="lead text-body-secondary">"Find a great place for your vacation."</p>
        <a href="index.php" class="btn btn-secondary my-2">Back to home page</a>
      </p>
    </div>
  </div>
</section>

<section class="container py-5">
<div class="container">
  <div class="row">
    <div class="col-3  ">
    <div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div class="row">
    <div class="col-3">
    <div class="list-group">
  <ol>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
    <label class="form-check-label" for="firstRadio">cat land</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
    <label class="form-check-label" for="secondRadio">cat and cat</label>
  </li>
  <li class="list-group-item">
    <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
    <label class="form-check-label" for="thirdRadio">tehe</label>
  </li>
</ol>
</div>
  </div>
</div>
</div>
</div>
    </div>
    <div class="col-6">.col-6<br>Subsequent columns continue along the new line.</div>
  </div>
</div>
<p class="d-inline-flex gap-1">
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a>
</p>

</section>
  <?php
require_once './layouts/footer.php';
?>  
