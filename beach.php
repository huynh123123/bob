<?php
require_once '.\layouts\header.php';
?>
<!-- :3 -->
<section class='py-5'>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['search'])) {
      $text = $_GET['search'];
      $squery = "SELECT beaches_name FROM beaches";
      $rquery = mysqli_query($conn, $squery);
      while ($row = mysqli_fetch_assoc($rquery)) {
        $word = $row['beaches_name'];
        echo $word;
      }
    }
    if (isset($_GET['beach_id'])) {
      $beachId = $_GET['beach_id'];
      $sql = 'SELECT * FROM beaches WHERE beaches_id="' . $beachId . '"';
      $result = mysqli_query($conn, $sql);
      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          $rid = $row["regions_id"];
          $nid = $row["nations_id"];
          $sql3 = 'SELECT * FROM nations WHERE nations_id="' . $nid . '"';
          $result3 = mysqli_query($conn, $sql3);
          $nidname2 = $result3->fetch_assoc();
          $nidname = $nidname2["nations_name"];
          $sql2 = 'SELECT * FROM regions WHERE regions_id="' . $rid . '"';
          $result2 = mysqli_query($conn, $sql2);
          $ridname2 = $result2->fetch_assoc();
          $ridname = $ridname2["regions_name"];
          $address = $row["beaches_address"];
          $img = $row["beaches_img"];
          $name = $row["beaches_name"];
          $rate = $row["beaches_rating"];
          $desc = $row["beaches_description"];
          $docx = $row["beaches_docx_link"];
          $imagePaths = $row["beaches_img_array"];
          $imageArray = explode(",", $imagePaths);
          echo "
            <div class='container'>
            <div class='row gx-5'>
            <aside class='col-lg-6'>
            <div class='border rounded-4 mb-3 d-flex justify-content-center'>
              <a data-fslightbox='mygalley' class='rounded-4' target='_blank' data-type='image' href='" . $img . "'>
                <img style='max-width: 100%; max-height: 100vh; margin: auto;' class='rounded-4 fit' src='" . $img . "' />
              </a>
            </div>
          <div class='d-flex justify-content-center mb-3'>";
          foreach ($imageArray as $imagePath) {
            echo "<a data-fslightbox='mygalley' class='border mx-1 rounded-2' target='_blank' data-type='image' href='" . trim($imagePath) . "' class='item-thumb'>
            <img width='60' height='60' class='rounded-2' src='" . trim($imagePath) . "'/>
    </a>";
          }
          echo "</div>
  </aside>
<main class='col-lg-6'>
    <div class='ps-lg-3'>
      <h5 class='title text-dark'>
      " . $name . " <br />
      </h5>
      <p>Nations: " . $nidname . "</p>
      <p>Regions: " . $ridname . "</p>
      <div class='d-flex flex-row my-3'>
        <div class='text-warning mb-1 me-2'>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fa fa-star'></i>
          <i class='fas fa-star-half-alt'></i>
          <span class='ms-1'>
           " . $rate . "
          </span>
        </div>           
      </div>
      <p>
      " . $desc . "
      </p>
      <a href='feedback.php' class='btn btn-warning shadow-0'> Feedback </a>
      <a href='" . $docx . "' class='btn btn-primary shadow-0'> Download </a>
    </div>
  </main>
</div>
</div>
</section>
<!-- content -->
<iframe src='" . $address . "' width='100%' height='200' style='border:0;' allowfullscreen='' loading='lazy' referrerpolicy='no-referrer-when-downgrade'></iframe>
<section class='bg-light border-top py-4'>
<div class='container'>
<h2>Feedback</h2>
<div class='card mb-3' style='max-width: 100%;'>
    <div class='row g-3'>
    <div class='card-body'>";
          $fql = 'SELECT * FROM feedbacks WHERE beaches_id="' . $beachId . '"';
          $fesult = mysqli_query($conn, $fql);
          if ($result->num_rows > 0) {
            while ($feedrow = $fesult->fetch_assoc()) {
              $rating = $feedrow["feedbacks_rating"];
              $ctime = $feedrow["feedbacks_created_at"];
              $fcontent = $feedrow["feedbacks_content"];
              $fulid = $feedrow["user_id"];
              $ful = 'SELECT user_name FROM list_user WHERE user_id="' . $fulid . '"';
              $fusult = mysqli_query($conn, $ful);
              $fulrow = $fusult->fetch_assoc();
              $fname = $fulrow["user_name"];
              $cid = $feedrow["beaches_id"];              
              echo "
    <h5 class='card-title'>Name:" . $fname . "</h5>
    <p class='card-text'>Rating:" . $rating . "</p>
    <p class='card-description'>Feedback:" . $fcontent . "</p>
    <p class='card-text'>Time:" . $ctime . "</p>
    <br></br>";
            }
          }
          ;
          echo "</div>
</div>
</div>
</div>
";
        }
      } else {
        header("Location: 404.php");
      }
    } else {
      header("Location: 404.php");
    }
  }
  ?>
  </div>

  <div class="main-wrapper">

    <?php
    require_once './layouts/footer.php';
    ?>

  </div>