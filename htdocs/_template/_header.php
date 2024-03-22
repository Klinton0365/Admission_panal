<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">About Our College</h4>
          <p class="text-white">Beyond academics, OUR Virtual Academy encourages students to explore their passions and interests. Whether you're interested in sports, arts, community service, or student clubs, there's something for everyone here. Our campus buzzes with activities, events, and opportunities for personal growth and development.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <!-- <h4 class="text-white">Contact</h4> -->
          <ul class="list-unstyled">
            <div style="padding-top: 50px;">
              <div>
                <!-- <h2 class="text-white">WELCOME, <? //echo $_SESSION['session_username'];
                                                      ?></h2> -->
                <? if (Session::isAuthenticated()) { ?>
                  <h2 class="text-white">WELCOME, <?= Session::getUser()->getUsername() ?><br><i class='fas fa-handshake' style='color: white'></i></h2>
                  <div style="padding-top: 40px;">
                    <li style="text-decoration:none;"><a href="/?logout" class="text-white"><b>Logout</b></a></li>
                  <? } else { ?>
                    <li><a href="https://twitter.com/Klinton_003" class="text-white" target="_blank">Follow on X</a></li>
                    <li><a href="https://www.facebook.com/klinton.klinton.50951/" class="text-white" target="_blank">Like on Facebook</a></li>
                    <li><a href="mailto:klinton.developer365@gmail.com" class="text-white" target="_blank">Email me</a></li>
                    <h3 class="text-white" style="padding-top: 20px;">Hi, Student &#128512;</h3>
                  <? } ?>
                  </div>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
          <circle cx="12" cy="13" r="4" />
        </svg>
        <strong>Album</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>