<?php
function Vowel_a($String) {
    return substr_count($String, 'a')+substr_count($String, 'A');
}
function Vowel_e($String) {
    return substr_count($String, 'e')+substr_count($String, 'E');
}
function Vowel_i($String) {
    return substr_count($String, 'i')+substr_count($String, 'I');
}
function Vowel_o($String) {
    return substr_count($String, 'o')+substr_count($String, 'O');
}
function Vowel_u($String) {
    return substr_count($String, 'u')+substr_count($String, 'U');
}

echo Vowel_a('A great great place.');
echo Vowel_e('A great great place.');
echo Vowel_i('A great great place.');
echo Vowel_o('A great great place.');
echo Vowel_u('A great great place.');
?>
