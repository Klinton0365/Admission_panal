<pre>
 <?php
 print_r($_SERVER);
 //print(basename('/hello/world/script.php', 'php'));
 $cmd = "cat " . $_SERVER['SCRIPT_FILENAME'] . "\n";

 print($cmd);
 exec($cmd, $output);
 print_r($output);
 // system($cmd);
 ?>
</pre>
<?php
// session_id('r9h3e9eip7n48l2c7j4dp1ihoj');
// session_start();

// print($_SESSION['web']);
