<?php

use PHPUnit\Framework\TestCase;
use StringEncrypt\Encrypt;

class ExampleTest extends TestCase
{
    /**
     * For Sppecific method Test like OpenSSL Encrypt and Decrypt
     * @param string $originalString String 
     * @param string $expectedResult
     *
     * @return string  

     */ 

    public function testOpenssl(){
     	$originalString='PhpUnit tested String Encryption and Decryption';
     	$expectedResult='dUpqdWk3K1BKc0J5eFY2bDBDOGZuV0pNUlIzdG1yMGhnb1pEV0o3NFJEU2cwcDlpVUhxKzZJdVRIRU1PMmVIYg==';
        $actualResult = Encrypt::opensslEncript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }

    public function testOpensslDecrypt(){
     	$originalString='dUpqdWk3K1BKc0J5eFY2bDBDOGZuV0pNUlIzdG1yMGhnb1pEV0o3NFJEU2cwcDlpVUhxKzZJdVRIRU1PMmVIYg==';	
     	$expectedResult='PhpUnit tested String Encryption and Decryption';
        $actualResult = Encrypt::opensslDecript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }
    
    public function testOpensslEncryptForEmptyString(){
     	$originalString='';	
     	$expectedResult='MzVoNnc0TEd1cVVwcmdWRTgrVno2UT09';
        $actualResult = Encrypt::opensslEncript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }      

    public function testOpensslDecryptForEmptyString(){
     	$originalString='MzVoNnc0TEd1cVVwcmdWRTgrVno2UT09';	
     	$expectedResult='';
        $actualResult = Encrypt::opensslDecript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }
}
