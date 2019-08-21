<?php

/**
 * 
 */
class DES
{
    public $key;
    public $iv; //偏移量

    public function DESss($key, $iv = 0)
    {
        //key长度8例如:1234abcd
        $this->key = $key;
        if ($iv == 0) {
            $this->iv = $key; //默认以$key 作为 iv
        } else {
            $this->iv = $iv; //mcrypt_create_iv ( mcrypt_get_block_size (MCRYPT_DES, MCRYPT_MODE_CBC), MCRYPT_DEV_RANDOM );
        }
    }

    public function __construct($key, $iv = 0)
    {
        //key长度8例如:1234abcd
        $this->key = $key;
        if ($iv == 0) {
            $this->iv = $key; //默认以$key 作为 iv
        } else {
            $this->iv = $iv; //mcrypt_create_iv ( mcrypt_get_block_size (MCRYPT_DES, MCRYPT_MODE_CBC), MCRYPT_DEV_RANDOM );
        }
    }

    public function encrypt($str)
    {
        $ec = openssl_encrypt($str, "des-cbc", $this->key, 0, $this->iv);

        $sTemp = base64_encode($ec);
        $sTemp = str_replace('+', '_', $sTemp);
        $sTemp = str_replace('/', '@', $sTemp);
        return $sTemp;
    }

    public function pkcs5Pad($text, $blocksize)
    {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }
}
$pubkey = 'YLuXie7w';
$e = new DES($pubkey);
echo $e->encrypt('wcq');

#$ary = openssl_get_cipher_methods();

#print_r($ary);
