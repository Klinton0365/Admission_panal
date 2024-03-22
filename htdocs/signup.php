<?php include 'libs/load.php'; ?>
<?
if (Session::isAuthenticated()) {
  header("Location: /");
  die();
}
Session::renderPage();
?>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="/Photogram/assets/dist/js/bootstrap.bundle.min.js"></script> -->