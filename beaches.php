<?php
require_once '.\layouts\header.php';
?>
<body >
<div>
<section class="py-5 text-center container banner-pp">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Beaches</h1>
      <p class="lead text-body-secondary">Find a great place for your vacation.</p>
        <a href="index.php" class="btn btn-secondary my-2">Back to home page</a>
      </p>
    </div>
  </div>
</section>
<section class="container py-5">
<div class="container my-sm-5 border p-0 bg-sec-light"> 
    <div id="content"> 
        <div class="d-sm-flex"> 
            <div class="me-sm-2"> 
                <div id="filter" class="p-2 bg-light ms-md-4 ms-sm-2 border"> 
                    <div class="border-bottom h5 text-uppercase">Filter By</div> 
                    <div class="box border-bottom"> 
                        <div class="box-label text-uppercase d-flex align-items-center">Nation</div> 
                        <div id="inner-box" class="collapse show"> 
                            <div class="my-1"> 
                                <label class="tick">Less than 2000 
                                    <input type="checkbox" checked="checked"> 
                                    <span class="check"></span> 
                                </label> 
                            </div> 
                            <div class="my-1"> 
                                <label class="tick">2000 - 3000 
                                    <input type="checkbox"> 
                                    <span class="check"></span> 
                                </label> 
                            </div> 
                            <div class="my-1"> 
                                <label class="tick">3000 - 4500 
                                    <input type="checkbox"> 
                                    <span class="check"></span> 
                               </label> 
                            </div> 
                                <div class="my-1"> 
                                    <label class="tick">4500 - 6000 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">6000 - 8000 
                                        <input type="checkbox"> 
                                        <span class="check"></span> 
                                    </label>
                                </div> 
                                <div class="my-1"> 
                                    <label class="tick">8000 -10,000 
                                        <input type="checkbox" checked> 
                                        <span class="check"></span> 
                                    </label> 
                                </div> 
                                <div class="my-1"> 
                                        <label class="tick">10,000 and Above 
                                            <input type="checkbox"> 
                                            <span class="check"></span> 
                                        </label> 
                                    </div> 
                                </div> 
                            </div>  
                                <div class="box border-bottom"> 
                                    <div class="box-label text-uppercase d-flex align-items-center">Region
                                    </div> 
                                </div> 
                                <div class="box"> 
                             </div> 
                            </div> 
                        </div> 
                        <div class="bg-white p-2 border" id="beachs"> 
                            <div class="beach py-2 px-2 pb-4 border-bottom"> 
                                <div class="row"> 
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
                                            echo '<div class="col-lg-3"> 
                                    <img src="' . $link . '" alt="" class="beach-img"> 
                                </div> 
                                <div class="col-lg-9"> 
                                    <div class="d-md-flex align-items-md-center"> 
                                    <div class="name">"' . $name . '" 
                                        <span class="city">Bandra, Mumbai</span> 
                                <div class="rating"> 
                                    <span class="fas fa-star"></span> 
                                    <span class="fas fa-star"></span>
                                     <span class="fas fa-star"></span> 
                                     <span class="fas fa-star"></span> 
                                     <span class="far fa-star"></span> <!-- Book now Enquiry --> 
                                    </div> 
                                        </div> 
                                    </div> 
                                </div> ';
                                        }
                                        $conn->close();
                                    }

                                    
                                    ?>
</div> 
</div>
</div>
</section>
  <?php
require_once './layouts/footer.php';
?>  
