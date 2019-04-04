<?php

use StringEncrypt\Encrypt;
require (dirname(__FILE__) . '/vendor/autoload.php');
// Pass String to Encrypt
echo $encryptionout=Encrypt::mcryptEncript('Toooo Use Change');
echo "<br/>";
// Pass Encrypted string to find original string
echo Encrypt::mcryptDecript($encryptionout)."<br/>";




 
 
