<!-- -------------GET------------- -->
<?php
    $url = 'https://code-riddler.herokuapp.com/api/v1/challenges/get_challenge/';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD,'ankit5'.":".'ankit');
    $data = curl_exec($ch);
    curl_close($ch);  
    echo $data;
?>

