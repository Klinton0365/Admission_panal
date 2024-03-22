<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.104.2">
  <title>Virtual Academy</title>
  <link rel="icon" type="image/x-icon" href="/../imgs/cyber-shield.png">

  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">
  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">

  <!-- Student Register -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

  <!-- Signup Error Button CSS -->
  <link href="/../css/SignUp/signupEB.css" rel="stylesheet">

  <!-- Student Register -->
  <link rel="stylesheet" href="reg.css">

  <?php //print(basename($_SERVER['PHP_SELF'], ".php") . "<br>");
  if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/css/' . basename($_SERVER['PHP_SELF'], ".php") . '.css')) {
  ?>
    <link href="/../css/<?php echo basename($_SERVER['PHP_SELF'], ".php") ?>.css" rel="stylesheet">
  <?php } ?>

  <!-- Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <!-- Bootstrap JS -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->


  <script>
    // Initialize the agent at application startup.
    const fpPromise = import('https://openfpcdn.io/fingerprintjs/v4')
      .then(FingerprintJS => FingerprintJS.load())
    // Get the visitor identifier when you need it.
    fpPromise
      .then(fp => fp.get())
      .then(result => {
        // This is the visitor identifier:
        const visitorId = result.visitorId
        document.cookie = "fingerprint = " + visitorId;
        //console.log(visitorId)
      })
  </script>
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="/Photogram/assets/dist/js/bootstrap.bundle.min.js"></script>
</head>