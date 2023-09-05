<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="ecommerce-gallery" data-mdb-zoom-effect="true" data-mdb-auto-height="true">
  <div class="row py-3 shadow-5">
    <div class="col-12 mb-1">
      <div class="lightbox">
        <img
          src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
          alt="Gallery image 1"
          class="ecommerce-gallery-main-img active w-100"
        />
      </div>
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/14a.webp"
        alt="Gallery image 1"
        class="active w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/12a.webp"
        alt="Gallery image 2"
        class="w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/13a.webp"
        alt="Gallery image 3"
        class="w-100"
      />
    </div>
    <div class="col-3 mt-1">
      <img
        src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
        data-mdb-img="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Vertical/15a.webp"
        alt="Gallery image 4"
        class="w-100"
      />
    </div>
  </div>
</div>
</head>
<body>
    <div class="container">
        <div class="error">
            <div class="error-code">404</div>
            <div class="error-message">Page Not Found</div>
            <?php
            // Read the beach_id parameter from the URL
            $beachId = isset($_GET['beach_id']) ? $_GET['beach_id'] : '';

            // Output the value of beach_id
            echo '<div class="error-message">Beach ID: ' . $beachId . '</div>';
            ?>
        </div>
    </div>
</body>
</html>