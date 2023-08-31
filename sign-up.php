<?php
require_once '.\layouts\header.php';
?>

<body>
  <section>
    <div class="section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
      <div class="container"></div>
      <form class="card register-form" action="sign-up.php" method="post">
        <p class="text-center fs-2">SIGN IN</p>
        <div class="form-fild">
          <label for="username" class="form-label" >Name <span class="required">*</span></label>
          <input type="text" name="name" placeholder="Your Name" required>
        </div>
        <div class="form-fild">
          <label for="number" class="form-label" max="10" >Phone number <span class="required">*</span></label>
          <input type="number" name="phonenumber" placeholder="Your Phone Number" required>
        </div>
        <div class="form-fild">
          <label for="email" class="form-label" >Email address <span class="required">*</span></label>
          <input type="email" name="email" placeholder="Your Email" required>
        </div>
        <div class="form-fild mt-90">
          <label for="password" class="form-label">Password<span class="required">*</span></label>
          <input type="password" name="password" placeholder="Your Password" required>
        </div>
        <button type="submit" class="btn btn-primary" required>Submit</button>
        <div class="text">Have an account?<a href="login.php">Click here</a></div>
      </form>
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "db_bob";

      $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $pass = $_POST['password'];
          $num = $_POST['phonenumber'];
if($pass < 8){
  echo "<script>alert('The Password is too short');</script>";
} else {
  try {
          // Hash password
          $Password_hash = password_hash($pass, PASSWORD_DEFAULT);

          $sql = "INSERT INTO list_user (user_name, user_password, user_phone, user_email, user_role) VALUES ('" . $name . "', '" . $Password_hash . "', '" . $num . "', '" . $email . "', 'user')";
          $res = $conn->query($sql);

          if ($res) {
            echo "<script>alert('Successful registration');</script>";
            echo '<script>
              setTimeout(function() {
              window.location.href = "login.php";
              }, 0000);
              </script>';
            exit(); 
          } else {
            echo "<script>alert('Successful registration');</script>";
          }
        } catch (Exception $e) {
          die($e->getMessage());
        }
        $conn->close();
      }}
      require_once './layouts/footer.php';
      ?>
    </div>
  </section>
</body>