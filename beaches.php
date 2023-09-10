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
                        <form action="beaches.php" method="post">
                            <div class="border-bottom h5">Filter By</div>
                            <div class="box border-bottom">
                                <div class="box-label d-flex align-items-center">Region</div>
                                <div id="inner-box" class="collapse show">
                                    <?php
                                    $sql = 'SELECT * FROM regions';
                                    $result = mysqli_query($conn, $sql);
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $rname = $row["regions_name"];
                                            $rid = $row["regions_id"];
                                            echo '<input type="checkbox" class="form-check-input" id="' . $rid . '-' . $rname . '" name="checkboxes[]" value="' . $rid . '-' . $rname . '">
                                                  <label class="form-check-label" for="' . $rid . '-' . $rname . '">' . $rname . '</label>';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="box border-bottom">
                                <div class="box-labe d-flex align-items-center">Nations</div>
                                <?php
                                $sql = 'SELECT * FROM nations';
                                $result = mysqli_query($conn, $sql);
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $name = $row["nations_name"];
                                        echo '<input type="checkbox" class="form-check-input" id="' . $name . '" name="' . $name . '">
                                    <label class="form-check-label" for="' . $name . '">' . $name . '</label>';
                                    }
                                }
                                ?>
                            </div>
                            <button type="submit" class="btn btn-primary" required>Apply</button>
                            <div class="box">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-white p-2 border" id="beachs">
                    <div class="beach py-2 px-2 pb-4 border-bottom">
                        <?php
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
                                                <img src=' . $link . ' class="img-fluid rounded-start" alt="...">
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


                        ?>
                    </div>
                </div>
            </div>

</section>
<div class="main-wrapper">
    <?php
    require_once './layouts/footer.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["checkboxes"])) {
            $selectedCheckboxes = $_POST["checkboxes"];
            $rfilter = true;

            $conditions = array();
            foreach ($selectedCheckboxes as $selectedCheckbox) {
                $conditions[] = "regions_id = '" . mysqli_real_escape_string($conn, $selectedCheckbox) . "'";
                $query = "SELECT * FROM beaches WHERE ";
            }

            $query .= implode(" OR ", $conditions);

            $result = mysqli_query($conn, $query);
        }
    }
    ?>
</div>