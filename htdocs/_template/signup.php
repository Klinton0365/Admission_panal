<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$signup = false;
if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['phone'])) {
  $user = $_POST['username'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $pass = $_POST['password'];
  //Use try-catch block to handle exception
  try {
    $error = User::signup($user, $phone, $email, $pass);
    $signup = true;
  } catch (mysqli_sql_exception $error) {
    // Display error message
    //echo "Error: " . $error->getMessage();
    $signup = true;
  }
} ?>
<?php
if ($signup) {
  if (!$error) {
?>
    <script>
      window.location.href = "login.php";
    </script>
  <?php } else {
  ?>
    <main class="container" style="padding-top: 100px;">
      <div class="bg-light p-5 rounder nt-3">
        <h1>Signup Failed</h1>
        <p class="lead">Something went wrong </p>
        <?php
        // Display error message 
        echo "Error: " . $error->getMessage(); ?>
        <!-- <p> You can <a href="/signup.php">Sign Up</a></p> -->
        <div style="padding-top: 15px;">
          <button>
            <svg height="16" width="20" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
              <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span><a href="/signup.php" style="text-decoration:none;font-size:13px">SIGN UP</a></span>
          </button>
        </div>
      </div>
    </main>
  <?php
  }
} else {
  ?>
  <main class="form-signup">
    <form method="post" action="<? htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="pic">
        <img class="center" src="/imgs/main_shield.png" alt="logo">
      </div>
      <h1 class="h3 mb fw-normal">Are you eager to LEARN do fast!</h1>
      <!-- class="h3 mb fw-normal" -->
      <div class="form-floating">
        <input name="username" type="text" class="form-control" id="floatingInput" placeholder="Klinton">
        <label for="floatingInput" class="form-label">Student Name</label>
      </div>
      <div class="form-floating">
        <input name="phone" type="text" class="form-control" id="floatingInput" placeholder="Klinton">
        <label for="floatingInput" class="form-label">Student Phone</label>
      </div>
      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingPassword" placeholder="abcdgmail.com">
        <label for="floatingPassword" class="form-label">Student Email</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
        <label for="floatingPassword" class="form-label">Password</label><br>
      </div>
      <button type="submit" class="btn btn-outline-primary">SIGN UP</button>
    </form>
    <div class="log">
      <p>Have an account!<b><a href="/login.php" style="text-decoration: none;color:#0FFB00;"> LOG IN</b></p>
    </div>
  </main>
<?php
}
?>