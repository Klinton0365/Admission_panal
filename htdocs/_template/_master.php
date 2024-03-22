<!doctype html>
<html lang="en">
<?php Session::loadTemplate('_head'); ?>

<body>
  <?
  if(isset($_GET['apply']) && $_GET['apply'] === 'true'){
  }else{
    Session::loadTemplate('_header');
  }

  
   //if (isset($_GET['login'])) {
  //if (!Session::isAuthenticated()) {
  //Session::loadTemplate('_header');
  //} else {

  //}
  ?>
  <main>
    <?php
    //if(Session::isAuthenticated()){
     // Check if the 'apply' parameter is present in the URL
     if(Session::isAuthenticated()){
      if (isset($_GET['apply']) && $_GET['apply'] === 'true') {
        Session::loadTemplate('reg');
        }else{
          Session::loadTemplate('Index/calltoaction');
          Session::loadTemplate('Index/photogram');
        }
      }
      else{
      if (Session::$isError) {
        Session::loadTemplate('_error');
      } else {
        Session::loadTemplate(Session::currentScript());
     // Session::loadTemplate('reg');
      // if(Session::loadTemplate(!Session::currentScript())){
      //   Session::load_template('reg');
      // }
    }
  }

    ?>
  </main>
  <?
    if (isset($_GET['apply']) && $_GET['apply'] === 'true') {?>
      <div class="hidden"></div>
      <?}else{
        Session::loadTemplate('_footer');
      }
  ?>
</body>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="/assets/dist/js/bootstrap.bundle.min.js"></script>

</html>