<?php include 'libs/load.php'; ?>
<?php
if (isset($_GET['logout'])) {
  if (Session::isset("session_token")) {
    $Session = new UserSession(Session::get("session_token"));
    if ($Session->removeSession()) {
      echo "<h3> previous Session is removing from db</h3>";
    } else {
      echo "<h3> Previous Session not removing from db</h3>";
    }
    Session::destroy();
    header("Location: /"); 
    die();
  }
} else {
  Session::renderPage();
}
?>
