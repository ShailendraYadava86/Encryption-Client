<?php

use PHPUnit\Framework\TestCase;
use StringEncrypt\Encrypt;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test Openssl example.
     *
     * @return string  

     */ 

     public function testOpenssl(){
        $expected_result = true;
        $actual_result = Encrypt::opensslEncript('Toooo Use Change');
        $actual_resultout = Encrypt::opensslDecript($actual_result);
        echo 'Encrypted String is '.$actual_result;
        echo 'Decrypted String is '.$actual_resultout;
    }


}

