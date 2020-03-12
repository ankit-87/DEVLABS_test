
<?php
$low = 100;
$high = 199;
while ($low < $high) {
        $flag = 0;
        for ($i = 2; $i <= $low / 2; ++$i) {
            if ($low % $i == 0) {
                $flag = 1;
                break;
            }
        }
        if ($flag == 0)
            printf("%d ", $low);
        ++$low;
    }
    return 0;
?>
