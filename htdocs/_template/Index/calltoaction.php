<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <?
      if (Session::get('is_loggedin')) { ?>
        <!-- It'll show the logged User's Username -->
        <!-- <h2>Welcome, <? //echo strtoupper($_SESSION['session_username']); 
                          ?></h2> -->
        <!-- <h2 class="text-white">WELCOME, <? //Session::getUser()->getUsername() 
                                              ?></h2> -->
      <? } ?>
      <h1 class="fw-light">OUR COLLEGE INFO</h1>
      <p class="lead text-muted">Are you ready to embark on an exciting journey towards your future? Look no further than Virtual College! Situated in the heart of Online, our college offers a vibrant and inclusive community where students thrive academically, socially, and personally.</p>
      <p>
      </p>
    </div>
  </div>
</section>