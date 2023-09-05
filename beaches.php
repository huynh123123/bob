<?php
require_once '.\layouts\header.php';
?>
      <section class="py-5 container ">
  <div class="row py-lg-5 text-center banner-pp">
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
                                        
                                    </div>
                                </div>
                                <div class="box border-bottom">
                                    <div class="box-label text-uppercase d-flex align-items-center">Region </div>
                                </div>
                                <div class="box">
                                </div>
                            </div>
                        </div>
                        <div class="bg-white p-2 border" id="beachs">
                            <div class="beach py-2 px-2 pb-4 border-bottom"> <?php
                                            $query = "SELECT * FROM beaches";
                                            $result = mysqli_query($conn, $query);

                                            if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {
                                                    $id = $row["beaches_id"];
                                                    $name = $row["beaches_name"];
                                                    $desc = $row["beaches_description"];
                                                    $link = $row["beaches_img"];
                                                    $rate = $row["beaches_rating"];
                                                    echo '
                                                    <div class="card mb-4" style="max-width: 100%;">
                                                        <div class="row g-0">
                                                        <div class="col-md-4">
                                                <img src='. $link .' class="img-fluid rounded-start" alt="...">
                                                    </div>
                                            <div class="col-md-8">
                                    <div class="card-body">
                                                    <h5 class="card-title">' . $name . ' </h5>
                                                <p class="card-text">' . $desc . '</p>
                                                <a href="beach.php?beach_id=' . $id . '" class="btn btn-primary">More info!</a>
                                            </div>
                                                                            </div>
                                    </div>
                                            </div>
                                                    ';
                                                }
                                            }

                                            
                                            ?> </div>
                        </div> 
                    </div>
    
        </section>
        <div class="main-wrapper">
<?php
require_once './layouts/footer.php';
?> 
</div>