<?php
$str='Programming today is a race between software engineers striving to build bigger and better idiot-proof programs, and the Universe trying to produce bigger and better idiots. So far, the Universe is winning.';
$str = preg_replace("/[^A-Za-z]/","",$str);
echo strlen($str);
?>
