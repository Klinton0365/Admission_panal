<?php
$pass = isset($_GET['pass']) ? $_GET['pass'] : "RandomPasswordThatIsSecure";
echo (md5($pass));
?>
<h1>Hi</h1>
<?php
//$a = md5("sibidharan");
$a = md5(strrev(md5("Not@432305")));
print("\n" . "This is md5 hash for Not@432305:" . $a . "\n");
//echo "<br>";
print("Data Length: " . strlen($a) . "\n");
//echo "<br>";
$b = base64_encode("fooboo");
print("\nThis is base64 encode for fooboo: $b \n");
//echo "<br>";
print("Data Length: " . strlen($b) . "\n\n");
//print(strlen($b));

$data = "Klinton";
foreach (hash_algos() as $v) {
 $r = hash($v, $data, false);
 printf("%-12s %3d %s\n", $v, strlen($r), $r);
}
?>