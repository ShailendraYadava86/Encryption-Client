<?php

namespace StringEncrypt;

/**
 * Check OpenSSL Extension enabled or not.
 */
if (!extension_loaded('openssl')) {
    die('Please enable openssl extentsion.');
}

/**
 * Check Mcrypt Extension enabled or not.
 */
if (!extension_loaded('mcrypt')) {
    die('Please enable mcypt extentsion.');
}

/*
Constants secret_key, secret_iv to be used for encryption or decryption through openSSL.
*/
define('SECRET_KEY', 'A9 [nImRl~lEsrP>upS*D=mR/zy`mPjG87P2i!pp$)T)Fh](8ZuML?6ZA?6[Yl$/');
define('SECRET_IV', 'A9 [nImRl~lEsrP>upS*D=mR/zy`mPjG87P2i!pp$)T)Fh](8ZuML?6ZA?6[Yl$/');


class StringEncrypt
{
    
    private $lib;
    public $action, $string;
    
    public function __construct($lib)
    {
        $this->lib = $lib;
    }
    
    /**
     * Determine openssl or mcrypt using switch case.
     * 
     * @param  string  $action
     * @param  string  $string
     * @return string
     */
    function encrypt_decrypt($action, $string)
    {
        switch ($this->lib) {
            case 'openssl':
                return $this->MyOpenssl($action, $string);
                break;
            case 'mcrypt':
                return $this->myMcrypt($action, $string);
                break;
        }
    }
    
    /**
     * Get Requested String and encrypt or decrypt using openssl.
     *
     * @param  string  $action
     * @param  string  $string
     */
    
    function MyOpenssl($action, $string)
    {
        $output         = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key     = SECRET_KEY;
        $secret_iv      = SECRET_IV;
        // hash
        $key            = hash('sha256', $secret_key);
        
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
            
        }
        return $output;
    }
    
    /**
     * Get Requested String and encrypt or decrypt using mcrypt.
     *
     * @param  string  $action
     * @return string  $string
     */
    
    function myMcrypt($action, $string)
    {
	define('IV_SIZE', mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));    
        $key     = 'secret-key-is-secret';
        $key     = $this->padKey($key);
        
        if ($action == 'encrypt') {
            $iv     = mcrypt_create_iv(IV_SIZE, MCRYPT_DEV_URANDOM);
            $crypt  = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $string, MCRYPT_MODE_CBC, $iv);
            $combo  = $iv . $crypt;
            $garble = base64_encode($iv . $crypt);
            return $garble;
        } else if ($action == 'decrypt') {
            $combo   = base64_decode($string);
            $iv      = substr($combo, 0, IV_SIZE);
            $crypt   = substr($combo, IV_SIZE, strlen($combo));
            $payload = mcrypt_decrypt(MCRYPT_RIJNDAEL_128, $key, $crypt, MCRYPT_MODE_CBC, $iv);
            return $payload;
        }
    }
	
	function padKey($key) 
	{
		// Get the current key size
		$keySize = strlen($key);

		// Set an array containing the valid sizes
		$validSizes = [16,24,32];

		// Loop through sizes and return correct padded $key
		foreach($validSizes as $validSize) {
		if ($keySize <= $validSize) return str_pad($key, $validSize, "\0");
		}

		// Throw an exception if the key is greater than the max size
		echo "Key size is too large"; 

	}
}

class Encrypt
{
    // For openssl encrypt 
    public static function opensslEncript($data)
    {
        $obcTestcon = new StringEncrypt('openssl');
        return $obcTestcon->encrypt_decrypt('encrypt', $data);
    }
    
    // For openssl decrypt
    public static function opensslDecript($data)
    {
        $obcTestcon = new StringEncrypt('openssl');
        return $obcTestcon->encrypt_decrypt('decrypt', $data);
    }
    
    // For mcrypt encryption
    public static function mcryptEncript($data)
    {
        $obcTestcon = new StringEncrypt('mcrypt');
        return $obcTestcon->encrypt_decrypt('encrypt', $data);
    }
    
    // For mcrypt decryption
    public static function mcryptDecript($data)
    {
        $obcTestcon = new StringEncrypt('mcrypt');
        return $obcTestcon->encrypt_decrypt('decrypt', $data);
    }
}
