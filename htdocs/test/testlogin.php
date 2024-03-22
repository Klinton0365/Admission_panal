<?php
include 'libs/load.php';
$user = "Dominic";
$pass = isset($_GET['pass']) ? $_GET['pass'] : '';
$result = null;


/*
1. Check if session_token in PHP session is available
2. If yes, construct UserSession and see if it is successfull
3. Check if the session is valid one
4. If valid, print "Session validated"
5. Else, print "Invalid Session" and ask user to login.
*/
if (Session::get('is_loggedin')) {
 $username = Session::get('session_username');
 $userobj = new User($username);
 print("Welcome Back " . $user . "<br>"); //$userobj->getFirstname()
 //print("<br>" . $userobj->getBio());
 $userobj->setBio("Hi Buddies");
 echo "<br>";
 //$userobj->setPic("Rollback");
 //$userobj->thiIsNotAFunction(); /// * This object for checking purpose only, it's represents whether a object is there or not in database using WEBAPI
 //print("<br>" . $userobj->getBio());
} else {
 printf("No Session found, trying to login now. <br>");
 $result = User::login($user, $pass);
 //$userobj = new User($username);
 if ($result) {
  $userobj = new User($user);
  echo "Login SUCCESS " . $userobj->getUsername(); //. $result->getPassword();
  Session::set('is_loggedin', true);
  //Session::set('session_username', $result);....................
  //echo $userobj;
 } else {
  echo "\nLogin FAILED $user <br>";
 }
}
echo <<<EOL
<br><br><a href="logintest.php?logout">Logout</a><br>
EOL;
