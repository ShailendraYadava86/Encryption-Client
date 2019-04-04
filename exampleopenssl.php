<?php

use StringEncrypt\Encrypt;
include(dirname(__FILE__).'/Encryption-Client/src/Encrypt.php');
// Pass Any String to Encrypt
echo Encrypt::opensslEncript('Toooo Use Change')."<br/>";
// Pass Encrypted string to find original string
echo Encrypt::opensslDecript('cENHNEh0ZVdvbDZXeUJ1N2wyUmp6OEk5aUI2UTloWGErOVZXaU9RZDhIYz0=');

 
 
