<?php

function uniqidReal($length = 8) {
    // uniqid gives 8 chars, can be changed
    if (function_exists("random_bytes")) {
        $bytes = random_bytes(ceil($length / 2));
    } elseif (function_exists("openssl_random_pseudo_bytes")) {
        $bytes = openssl_random_pseudo_bytes(ceil($length / 2));
    } else {
        throw new Exception("no cryptographically secure random function available");
    }
    return substr(bin2hex($bytes), 0, $length);
}


//for testing
for($i = 0; $i < 10; $i++) {
  echo "<br>";
  echo uniqidReal();
}

?>