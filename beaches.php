<?php
require_once '.\layouts\header.php';
?>
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
                                            <label class="tick">Less than 2000 <input type="checkbox" checked="checked">
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">2000 - 3000 <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">3000 - 4500 <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">4500 - 6000 <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">6000 - 8000 <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">8000 -10,000 <input type="checkbox" checked>
                                                <span class="check"></span>
                                            </label>
                                        </div>
                                        <div class="my-1">
                                            <label class="tick">10,000 and Above <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </div>
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
                                                    echo '
                                                    <div class="card mb-3" style="max-width: 540px;">
                                                        <div class="row g-0">
                                                        <div class="col-md-4">
                                                <img src='. $link .' class="img-fluid rounded-start" alt="...">
                                                    </div>
                                            <div class="col-md-8">
                                    <div class="card-body">
                                                    <h5 class="card-title">"' . $name . '" </h5>
                                                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                                            </div>
                                                                            </div>
                                    </div>
                                            </div>
                                                    ';
                                                }
                                                $conn->close();
                                            }

                                            
                                            ?> </div>
                        </div> 
                    </div>
    <?php
    require_once './layouts/footer.php';
    ?>
        </section>