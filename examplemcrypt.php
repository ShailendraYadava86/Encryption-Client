<?php

use Shai\Encrypt\EncriptData;
include(dirname(__FILE__).'/Encryption-Client/src/Encrypt.php');
// Pass String to Encrypt
echo $encryptionout=EncriptData::mcryptEncript('Toooo Use Change');
echo "<br/>";
// Pass Encrypted string to find original string
echo EncriptData::mcryptDecript($encryptionout)."<br/>";




 
 