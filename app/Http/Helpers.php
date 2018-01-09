<?php 

use Illuminate\Contracts\Encryption\DecryptException;

function HELPERDoubleEncrypt ($value) {
    $value = Crypt::encryptString($value);
    return Crypt::encryptString($value);
}
function HELPERDoubleDecrypt ($value) {

    try {
        $value = Crypt::decryptString($value);
        $value = Crypt::decryptString($value);
    } catch (DecryptException $e) {
        $value = "InvalidKey";
    }

    return $value;
}

?>