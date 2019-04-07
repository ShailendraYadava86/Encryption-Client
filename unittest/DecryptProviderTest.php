<?php

use PHPUnit\Framework\TestCase;
use StringEncrypt\Encrypt;

class ExampleTest extends TestCase
{
    /**
     * @param string $originalString String to be decrypt
     * @param string $expectedResult What we expect our decrypted string to be
     *
     * @dataProvider additionProvider  

     */ 


    public function testOpensslDecrypt($originalString,$expectedResult){
        $actualResult = Encrypt::opensslDecript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }

    public function additionProvider(){
    	return array(
    		array('dUpqdWk3K1BKc0J5eFY2bDBDOGZuV0pNUlIzdG1yMGhnb1pEV0o3NFJEU2cwcDlpVUhxKzZJdVRIRU1PMmVIYg==','PhpUnit tested String Encryption and Decryption'),
    		array('MzVoNnc0TEd1cVVwcmdWRTgrVno2UT09',''),
            array('YVNQR3BqN05NOUg1YnhjdTNwdGdaRGxrVVpXNDFjMHczWUpCM3AwbENHcz0=','This is PHPUnit test file usage'),
            array('OENmY0dFNGdWZUxMZkkzL2ozdm12c2psRDJBdU15Nmk0djE5ejhaMzZyQT0=','@! = string Test'),
    	);
    }

}
