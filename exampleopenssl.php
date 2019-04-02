<?php
namespace Shai\Encrypt;
use Shai\Encrypt\EncriptData;
include(dirname(__FILE__).'/Encryption-Client/src/Encrypt.php');
// Pass Any String to Encrypt
echo EncriptData::opensslEncript('Toooo Use Change')."<br/>";
// Pass Encrypted string to find original string
echo EncriptData::opensslDecript('cENHNEh0ZVdvbDZXeUJ1N2wyUmp6OEk5aUI2UTloWGErOVZXaU9RZDhIYz0=');

 
 
