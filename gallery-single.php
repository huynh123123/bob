<?php
require_once '.\layouts\header.php';
?>
<?php
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = 'SELECT * FROM beaches WHERE beaches_id="' . $id . '"';
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $name = $row["beaches_name"];
      $imagePaths = $row["beaches_img_array"];
      $imageArray = explode(",", $imagePaths);
      echo '<div class="container gallery-container">    
<h1>' . $name . '</h1>
<div class="tz-gallery">

    <div class="row">';
      foreach ($imageArray as $imagePath) {
        echo "<div class='col-sm-6 col-md-4'>
            <a class='lightbox' href='" . trim($imagePath) . "'>
                <img src='" . trim($imagePath) . "' alt='" . $name . "'>
            </a>
        </div>";
      }
      echo ' </div>

  </div>

</div>';
    }
  } else {
    header("Location: 404.php");
  }
} else {
  header("Location: 404.php");
}
?>

<?php
require_once './layouts/footer.php';
?>