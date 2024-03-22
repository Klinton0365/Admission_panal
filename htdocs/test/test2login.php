<?php
include 'libs/load.php';

$user = "Klinton";

if (isset($_GET['logout'])) {
 if (Session::isset("Session_token")) {
  $Session = new UserSession(Session::get("Session_token"));
  if ($Session->removeSession()) {
   echo "<h3> previous Session is removing from db</h3>";
  } else {
   echo "<h3> Previous Session not removing from db</h3>";
  }
  Session::destroy();
  die("Session destroyed, <a href='logintest2.php'>Login Again</a>");
 }
}
/*
1. Check is Session_token in PHP session is available
2. If yes, construct Username and see if it's successfull.
3. Check if the session is valid one.
4. If valid, print "Session Validated"
5. Else, print "Invalid Session" and ask user to login.
*/
if (Session::set('Session_token')) {
 if (UserSession::authorize(Session::get("Session_token"))) {
  //print("HI");
  echo "<h1>Session Login, WELCOME $user </h1>";
 } else {
    Session::destroy();
    die("<h1> Invalid Session, <a href='logintest2.php'>Login Again</a></h1>");
 }
} else{
    $pass = isset($_GET['pass']) ? $_GET['pass'] : '';
    if(!$pass) die("<h1>Password is Empty</h1>");
    if(UserSession::authenticate($user,$pass)){
        echo "<h1>New LOGIN Successful, WELCOME $user </h1>";
    }else{
        echo "<h1>NEW LOGIN FAILED! $user</h1>";
    }
}
echo <<<EOL
<br><br><a href="logintest2.php?logout">LOG OUT</a>
EOL;
