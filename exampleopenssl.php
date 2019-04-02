<?php
namespace Shai\Encrypt;
use Shai\Encrypt\EncriptData;
ini_set('display_errors', 1);
include(dirname(__FILE__).'/abc/Encryption-Client/src/Encrypt.php');
echo EncriptData::opensslEncript('Toooo Use Change')."<br/>";
echo EncriptData::opensslDecript('cENHNEh0ZVdvbDZXeUJ1N2wyUmp6OEk5aUI2UTloWGErOVZXaU9RZDhIYz0=');

 
 