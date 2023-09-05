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
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
        <?php
          $query = "SELECT * FROM beaches";
          $result = mysqli_query($conn, $query);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  $nid = $row["nations_id"];
                  $link = $row["beaches_img"];
                  $name = $row["beaches_name"];
                  $sql3 = 'SELECT * FROM nations WHERE nations_id="' . $nid . '"';
      $result3 = mysqli_query($conn, $sql3);  
      $nidname2 = $result3->fetch_assoc();
      $nidname = $nidname2["nations_name"];
      echo '<div class="row-md-5">';
      echo '<div class="col-lg-3 col-md-4 col-sm-6 py-3">';
      echo '<div class="card mb-40 py-3 expandable-card" style="width: 18rem;">';
      echo '<img src="' . $link . '" class="card-img-top" alt="...">';
      echo '<div class="card-body">';
      echo '<h5 class="card-title">' . $name . '</h5>';
      echo '<p class="card-text">' . $nidname . '</p>';
      echo '<a href="#" class="btn btn-primary">More info!</a>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
      echo '</div>';
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
  