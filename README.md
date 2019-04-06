# encryption-client
It is used for Encrpty and Decrypt any text or provided String.

Requirements -: PHPUnit 6.5.14

# Installation -:

"composer require shailendrayadava86/encryption-client:dev-master"

Note - The mcrypt extension was deprecated in php 7.1 therefore we need to use only openssl in PHP latest version.

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
