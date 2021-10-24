<?php

$encodedSecret = "3d3d516343746d4d6d6c315669563362";

$secret_code = base64_decode(strrev(hex2bin($encodedSecret)));

echo $secret_code;

?>
