<?php
require_once '.\layouts\header.php';
?>

<body>
  <section>
    <div class="section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
      <div class="container"></div>
      <form class="card register-form" action="feedback.php" method="post">
        <p class="text-center fs-2">Feedback</p>
        <div class="form-fild">    
        <label for="beach">Select a beach:</label>
        <select id="beach" name="beach-drop">
            <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'db_bob';
            
            // Create a new mysqli connection
            $conn = new mysqli($host, $username, $password, $database);
            
            // Check if the connection was successful
            if ($conn->connect_error) {
                die('Connection failed: ' . $conn->connect_error);
            }
            
            // Query to retrieve beach names from the database
            $query = "SELECT * FROM beaches";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $beachName = $row["beaches_name"];
                    echo "<option value='$beachName'>$beachName</option>";
                }
            }
            ?>
        </select>
        <div class="form-fild">
          <?php
          date_default_timezone_set("Asia/Ho_Chi_Minh");
          $current_time = date("H:i");
          echo "Time: " . $current_time;
          ?>
        </div>
        <div class="form-fild">
          <?php
           $cookieData = json_decode($_COOKIE['user'], true);
           $username = $cookieData['username'];
           echo "User: " . $username;
          ?>
        </div>
        <div class="form-fild">
          <label for="email" class="form-label" >Rating<span class="required">*</span></label>
          <input type="number" name="rating" placeholder="[TODO Change this] 1-5" required min="1" max="5" step="1">
        </div>
        <div class="form-fild mt-90">
          <label for="feedback" class="form-label">Your Feedback</label>
          <input type="text" name="feedback" placeholder="This beachs is..." required>
        </div>
        <button type="submit" class="btn btn-primary" required>Submit</button>
      </form>
      <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $rate = $_POST['rating'];
        if($rate > 5) {
          echo "<script>alert('You can only rate from 1 to 5');</script>";
        } else {
        try {
          $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_bob";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
          $feed = $_POST['feedback'];
          $selectedBeach = $_POST['beach-drop'];
          $cookieData = json_decode($_COOKIE['user'], true);
          date_default_timezone_set("Asia/Ho_Chi_Minh");
          $localTime = time();
          $time = date('Y-m-d H:i:s', $localTime);

          $sql1 = "SELECT * FROM beaches WHERE beaches_name = '" . $selectedBeach . "'";
          $res1 = $conn->query($sql1);
          $row = $res1->fetch_assoc();

          $sql = "INSERT INTO feedbacks (beaches_id, feedbacks_created_at, feedbacks_rating	, user_id, feedbacks_content) VALUES ('" . $row["beaches_id"] . "', '" . $time . "', '" . $rate . "', '" . $cookieData['id'] . "', '" . $feed . "')";
          $res = $conn->query($sql);

          if ($res) {
            echo "<script>alert('Sent:3');</script>";
            echo '<script>
              setTimeout(function() {
              window.location.href = "index.php";
              }, 0000);
              </script>';
            exit(); 
          } else {
            echo "<script>alert('Internal Server error');</script>";
          }
        } catch (Exception $e) {
          die($e->getMessage());
        }
        $conn->close();
      }}
      ?>
    </div>
 <?php
  require_once './layouts/footer.php';
 ?>

  </section>
 