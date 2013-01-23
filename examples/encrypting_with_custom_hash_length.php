<?php

/* including hashids code */
require_once('../lib/hashids.php-5-3.php');

/* creating class object with hash length of 8 */
$hashids = new Hashids('this is my salt', 8);

/* encrypting several numbers into one hash (length of hash is going to be at least 8) */
$hash = $hashids->encrypt(1337, 5);

/* decrypting the same hash */
$numbers = $hashids->decrypt($hash);

/* $numbers is always an array */
var_dump($hash, $numbers);
exit;
