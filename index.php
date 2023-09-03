<?php
$initFile = '.\1.Database\init.php';
$flagFile = '.\1.Database\init_flag.txt';
if (!file_exists($flagFile)) {
  require_once $initFile;
  file_put_contents($flagFile, 'Finish create database and table');
}
$insertFile = '.\1.Database\insert.php';
$fflagFile = '.\1.Database\insert_flag.txt';
if (!file_exists($fflagFile)) {
  require_once $insertFile;
  file_put_contents($fflagFile, 'INSERTTTTTT');
}
require_once '.\layouts\header.php';
?>
      <div class="container-fluid">
        <div id="carousel-example-generic" class="carousel slide position-relative" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "db_bob";
             
               $conn = new mysqli($servername, $username, $password, $dbname);
               if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
               }
   
             $querymain = 'SELECT * FROM home_banner WHERE HB_id = "1"';
             $resultmain = mysqli_query($conn, $querymain);

             if ($resultmain->num_rows > 0) {
              while ($row = $resultmain->fetch_assoc()) {
                  $name = $row["HB_name"];
                  $link = $row["HB_img"];
                  $desc = $row["HB_description"];
                  
echo '<div class="carousel-item active">';
echo '<img src="' . $link . '"  class="d-block w-100 h-20">';
echo '<div class="carousel-caption d-none d-md-block">';
echo '<h5>' . $name . '</h5>';
echo '<p>' . $desc . '</p>';
echo '</div>';
echo '</div>';
              }
          }
          $query = "SELECT * FROM home_banner";
             $result = mysqli_query($conn, $query);
             $firstRow = true;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($firstRow) {
            $firstRow = false;
            continue;  // Skip the first row
        }

        $name = $row["HB_name"];
        $link = $row["HB_img"];
        $desc = $row["HB_description"];

        echo '<div class="carousel-item">';
        echo '<img src="' . $link . '"  class="d-block w-100 h-20">';
        echo '<div class="carousel-caption d-none d-md-block">';
        echo '<h5>' . $name . '</h5>';
        echo '<p>' . $desc . '</p>';
        echo '</div>';
        echo '</div>';
    }
}
            ?>
          <button class="carousel-control-prev" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" data-bs-target="#carousel-example-generic" type="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      </br>
      </br>
      <div class="container text-center">
        <p class="text-center fs-2">WELCOME TO THE BEAUTY OF BEACHES!!</p>
        <div class="row">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <p class="card-text"><b>"Unveiling the Wonders of the Seas: Your Ultimate Oceanic Resource."</b></p>
              <img src="./assets/img/icon.png" class="img-thumbnail" alt="...">
            </div>
          </div>
          <div class="col-sm-6 pt-2">
            <div class="card">
              <img src="./assets/img/logo.png" class="img-thumbnail" alt="...">
            </div>
          </div>
        
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h6 class="card-text"><b>"Where Every Grain Of Sand Tells A Story."</b></h6>
            </br>
              <img src="./assets/img/icon.png" class="img-thumbnail" alt="...">
            </div>
          </div>
    </div>
    <div class="py-5 ">
      <div class="text-center fs-2 "><b>Top 8 Beach in the world</b></div>
    </br>
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-10 mb-6">
              <?php
          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "db_bob";
          
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }

          $query = "SELECT * FROM beaches";
$result = mysqli_query($conn, $query);

// Counter variable
$count = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $name = $row["beaches_name"];
        $link = $row["beaches_img"];
        $rate = $row["beaches_rating"];
        echo '<div class="col-lg-3 col-md-4 col-sm-6 py-3">';
        echo '<div class="card mb-40 py-3 expandable-card" style="width: 18rem;">';
        echo '<img src="' . $link . '" class="card-img-top" alt="...">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $name . '</h5>';
        echo '<p class="card-text expandable truncate">Rating: ' . $rate . '</p>';
        echo '<a href="#" class="btn btn-primary">Go somewhere</a>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        $count++;
        if ($count >= 8) {
            break;
        }
    }
    $conn->close();
}
          ?>
              </div>
  </div>
          
        </div>
      </div>
    </div>
    <?php
require_once './layouts/footer.php';
?>  
    </div>