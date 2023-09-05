<?php
require_once '.\layouts\header.php';
?>

<section class="py-5">
  <div class="container">
    <div class="row gx-5">
      <aside class="col-lg-6">
        <div class="border rounded-4 mb-3 d-flex justify-content-center">
          <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp">
            <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
          </a>
        </div>
        <div class="d-flex justify-content-center mb-3">
          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" class="item-thumb">
            <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big1.webp" />
          </a>
          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" class="item-thumb">
            <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big2.webp" />
          </a>
          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" class="item-thumb">
            <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big3.webp" />
          </a>
          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" class="item-thumb">
            <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big4.webp" />
          </a>
          <a data-fslightbox="mygalley" class="border mx-1 rounded-2" target="_blank" data-type="image" href="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" class="item-thumb">
            <img width="60" height="60" class="rounded-2" src="https://bootstrap-ecommerce.com/bootstrap5-ecommerce/images/items/detail1/big.webp" />
          </a>
        </div>
        <!-- thumbs-wrap.// -->
        <!-- gallery-wrap .end// -->
      </aside>
      <main class="col-lg-6">
      <div class="ps-lg-3">
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

                                      if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $name = $row["beaches_name"];
                                            $link = $row["beaches_img"];
                                            $rate = $row["beaches_rating"];
                                            $link = $row["beaches_img_arr"];
                                            echo '<h5 class="title text-dark"></h5>
                                            <p>Nations</p>
                                            <p>Regions</p>
                                            <div class="d-flex flex-row my-3">
                                              <div class="text-warning mb-1 me-2">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span class="ms-1">
                                                  4.5
                                                </span>
                                              </div>           
                                            </div>
                                            <p>
                                              Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
                                              men.
                                            </p>
                                            <a href="#" class="btn btn-warning shadow-0"> Buy now </a>
                                            <a href="#" class="btn btn-primary shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to cart </a>
                                          </div>
                                        </main>
                                      </div>
                                    </div>
                                  </section>
                                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d465064.1940100122!2d-75.96185062813693!3d24.40515607995494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8930efe2a3236c07%3A0xc01cbb5fd538dd5!2zxJDhuqNvIENhdCwgQmFoYW1hcw!5e0!3m2!1svi!2s!4v1693840858106!5m2!1svi!2s" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                  <section class="bg-light border-top py-4">
                                    <div class="container">
                                      <div class="row gx-4">
                                  
                                      </div>
                                    </div>';
                                        }
                                        $conn->close();
                                    }

                                    
                                    ?>
        
          
</section>



  <?php
require_once './layouts/footer.php';
?>  
