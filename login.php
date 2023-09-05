<?php
require_once './layouts/header.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $email = $_POST['email'];
  $pass = $_POST['password'];
  // $password_hash = password_hash($pass,PASSWORD_DEFAULT);

  $sql = "SELECT * FROM list_user WHERE user_email=?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("s", $email);
  // $stmt->bind_param("s",$password_hash);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
   $row = $result->fetch_assoc();
   if (password_verify($pass, $row['user_password'])) {
  $userCookieData = array(
    "id" => $row["user_id"],
    "username" => $row["user_name"],
    "email" => $row["user_email"],
    "role" => $row["user_role"]
);
$encodedUserCookieData = json_encode($userCookieData);
setcookie('user', $encodedUserCookieData, time() + 86400, '/');
header("Location: index.php");
  exit;
   } else {
     echo "<script>alert('Password incorrect');</script>";
    }
  } 
  // else {
  //   echo "<script>alert('No user found');</script>";
  // }

  // $stmt->close();
  // $conn->close();
  }
?>
  <section>
    <div class="section pt-90 pt-lg-70 pt-md-60 pt-sm-55 pt-xs-45 pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
      <div class="container">
      <form class="card login-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <p class="text-center fs-2">LOGIN</p>
          <div class="form-fild">
            <label for="email" class="form-label">Email address <span class="required">*</span></label>
            <input type="email" name="email" placeholder="Your Email" required>
          </div>
          <div class="form-fild">
            <label for="password" class="form-label">Password<span class="required">*</span></label>
            <input type="password" name="password" placeholder="Your Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <div class="text">Forgot the password?<a href="forgotpassword.php">Click here</a></div>
          <div class="text">Don't have an account?<a href="sign-up.php">Click here</a></div>
        </form>
      </div>
    </div>
  </section>
<div class="main-wrapper">
<?php
require_once './layouts/footer.php';
?> 
</div>

