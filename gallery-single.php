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
  echo '        </div>

  </div>

</div>';
    }
  } else {
    echo '<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <style>
      body {
          background-color: #f8f8f8;
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
      }

      .container {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          text-align: center;
      }

      .error-code {
          font-size: 120px;
          font-weight: bold;
          color: #333;
      }

      .error-message {
          margin-top: 20px;
          font-size: 24px;
          color: #777;
      }
  </style>
</head>
<body>
  <div class="container">
      <div class="error">
          <div class="error-code">404</div>
          <div class="error-message">Page Not Found</div>
      </div>
  </div>
</body>';
  }
} else {
  echo '<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>404 - Page Not Found</title>
  <style>
      body {
          background-color: #f8f8f8;
          font-family: Arial, sans-serif;
          margin: 0;
          padding: 0;
      }

      .container {
          display: flex;
          align-items: center;
          justify-content: center;
          height: 100vh;
          text-align: center;
      }

      .error-code {
          font-size: 120px;
          font-weight: bold;
          color: #333;
      }

      .error-message {
          margin-top: 20px;
          font-size: 24px;
          color: #777;
      }
  </style>
</head>
<body>
  <div class="container">
      <div class="error">
          <div class="error-code">404</div>
          <div class="error-message">Page Not Found</div>
      </div>
  </div>
</body>';
}
            ?>

  <?php
require_once './layouts/footer.php';
?> 