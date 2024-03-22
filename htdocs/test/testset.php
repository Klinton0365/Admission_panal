<?php include 'libs/load.php'; ?>
<h1>
 <?
 var_dump(Session::set('fingerprint', $fingerprint));
 var_dump(Session::set('session_token', $token));
 ?>
</h1>