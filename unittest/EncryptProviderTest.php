<?php

use PHPUnit\Framework\TestCase;
use StringEncrypt\Encrypt;

class ExampleTest extends TestCase
{
    /**
     * @param string $originalString String to be encrypt
     * @param string $expectedResult What we expect our encrypted string to be
     *
     * @dataProvider additionProvider  

     */ 

    public function testOpensslEncrypt($originalString,$expectedResult){
        $actualResult = Encrypt::opensslEncript($originalString);
        $this->assertEquals($expectedResult,$actualResult);
    }

    public function additionProvider(){
    	return array(
    		array('PhpUnit tested String Encryption and Decryption','dUpqdWk3K1BKc0J5eFY2bDBDOGZuV0pNUlIzdG1yMGhnb1pEV0o3NFJEU2cwcDlpVUhxKzZJdVRIRU1PMmVIYg=='),
    		array('','MzVoNnc0TEd1cVVwcmdWRTgrVno2UT09'),
            array('This is PHPUnit test file usage','YVNQR3BqN05NOUg1YnhjdTNwdGdaRGxrVVpXNDFjMHczWUpCM3AwbENHcz0='),
            array('@! = string Test','OENmY0dFNGdWZUxMZkkzL2ozdm12c2psRDJBdU15Nmk0djE5ejhaMzZyQT0='),
    	);
    }

}
