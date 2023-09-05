<?php
require_once '.\layouts\header.php';
?>
  <div>
  <section class="py-5 container ">
  <div class="row py-lg-5 text-center banner-pp">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Gallery of beaches</h1>
          <p class="lead text-body-secondary">Where you can find all picture of the sea and sand.</p>
            <a href="index.php" class="btn btn-secondary my-2">Back to home page</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 ">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <?php
          $query = "SELECT * FROM gallery";
          $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $link = $row["gallery_img_beach_array"];
                  echo '<div class="col-lg-3 col-md-4 col-sm-6">            
                  <div class="card mb-40" style="width: 18rem;">
                    <img src="' . $link . '" class="card-img-top" alt="...">
                    <div class=" card-body mb-40 py-3">
                      <a href="#" class="btn btn-primary">More info!</a>
                    </div>
                  </div>
                </div>';
                }
              $conn->close();
              }
          ?>
        </div>    
      </div>
      </div>
      <?php
require_once './layouts/footer.php';
?>  
    </div>
  