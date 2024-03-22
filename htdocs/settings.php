<?
include 'libs/load.php';
if (Session::isAuthenticated()) {
 print("Yeah");
} else {
 print("Nope");
}
