# encryption-client
It is used for Encrpty and Decrypt any text or provided String.

Requirement -: PHPUnit 6.5.14 (We tested on PHP 7.1 version)

# Installation -:

"composer require shailendrayadava86/encryption-client:dev-master"

# PHPUnit Test -:

Folder "unittest" required to  be placed on root directory from path "/vendor/shailendrayadava86/encryption-client".

Command For PHPUnit test of Openssl Encrypt and decrypt Test Execution.

"vendor/bin/phpunit --filter openssl unittest/ExampleTest.php"

# To Run Example Files
Place it under root directory
Example Files are exampleopenssl.php and examplemcrypt.php 
It will run and give us exact output (encrypted and decrypted text).

For OPenSSL Encryption Encrypt::opensslEncript() and decryption is done by Encrypt::opensslDecript().
For Mcrypt Encrypt::mcryptEncript() and Encrypt::mcryptDecript().

# Note 
If you are on php7 or higher version and not supported by mcrypt extension. You will get message "Please enable mcrypt extentsion."
comment line number 16 in file Encrypt.php under encryption-client
(path "/vendor/shailendrayadava86/encryption-client/src/")
//die('Please enable mcypt extentsion.');


Note - The mcrypt extension was deprecated in php 7.1 therefore we need to use only openssl in PHP latest version.
