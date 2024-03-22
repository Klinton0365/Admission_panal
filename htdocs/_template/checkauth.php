<?
if(Session::isAuthenticated()){
    print("Granted");
}else{
    print("OOPS!");
}
?>