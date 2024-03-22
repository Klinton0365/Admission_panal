<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$result = false;
$login = false;
//TODO: Redirecting to a required URL instead of basepath on login
//Session::set('mode', 'web');
if (isset($_POST['username']) and isset($_POST['password'])) {
  $user = $_POST['username'];
  $pass = $_POST['password'];
  $result = UserSession::authenticate($user, $pass);
  $login = true;
}
if ($login) {
  if ($result) { ?>
    <script>
      //window.location.href = "/../index.php";
      window.location.href = "<?= get_config('base_path') ?>";
    </script>
  <? } else { ?>
    <main class="container" style="padding-top: 100px;">
      <div class="bg-light p-5 rounder nt-3">
        <h1>Login Failed</h1>
        <p class="lead">Something went wrong </p>
        <p class="lead">Check Your Username and Password</p>
        <!-- <p> Again: <a href="/login.php">LOG IN</a></p> echo "Error: " . $error->getMessage(); -->
        <div style="padding-top: 15px;">
          <button>
            <svg height="16" width="16" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 1024 1024">
              <path d="M874.690416 495.52477c0 11.2973-9.168824 20.466124-20.466124 20.466124l-604.773963 0 188.083679 188.083679c7.992021 7.992021 7.992021 20.947078 0 28.939099-4.001127 3.990894-9.240455 5.996574-14.46955 5.996574-5.239328 0-10.478655-1.995447-14.479783-5.996574l-223.00912-223.00912c-3.837398-3.837398-5.996574-9.046027-5.996574-14.46955 0-5.433756 2.159176-10.632151 5.996574-14.46955l223.019353-223.029586c7.992021-7.992021 20.957311-7.992021 28.949332 0 7.992021 8.002254 7.992021 20.957311 0 28.949332l-188.073446 188.073446 604.753497 0C865.521592 475.058646 874.690416 484.217237 874.690416 495.52477z"></path>
            </svg>
            <span><a href="/login.php" style="text-decoration:none;">LOG IN</a></span>
          </button>
        </div>
      </div>
    </main>
  <? }
} else {
  ?>
  <main class="form-signin">
    <form method="post" action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>">
      <div class="container">
        <div class="row">
          <div class="dive">
            <h1>Just Dive Into Deep Learn</h1>
          </div>
          <div class="col-lg-3 col-md-2"></div>
          <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-title" style="font-style: italic; font-family: Lucida Handwriting , cursive;"><!-- class="col-lg-12 login-title" -->
              STUDENT CARD
            </div>
            <div class="col-lg-12 login-form">
              <div class="form-group">
                <label name="username" for="username" class="form-control-label">STUDENT NAME</label>
                <input type="text" id="username" name="username" class="form-control" required>
                <label for="password" for="password" class="form-control-label">PASSWORD</label>
                <input type="password" id="password" name="password" class="form-control" required>
                <!-- <input type="hidden" class="for-control" id="fingerprint"> -->
              </div>
              <div class="col-lg-12 loginbttm">
                <div class="col-lg-6 login-btm login-text">
                  <!-- Error Message -->
                </div>
                <div class="col-lg-6 login-btm login-button">
                  <button type="submit" class="btn btn-outline-primary" style="float: right;">LOGIN</button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-2"></div>
        </div>
      </div>
    </form>
    <div class="sign">
      <p style="color:white;padding-top:10px;">Don't have an account?<b><a href="/signup.php" style="text-decoration: none;color:#00ffff;"> SIGN UP</a></b></p>
  </main>
<?php
}
?>