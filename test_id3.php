<?php
function countSentences($str){
	return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/',$str,$match);
}
 
echo countSentences("The best programs are written so that computing machines can perform them quickly and so that human beings can understand them clearly. A programmer is ideally an essayist who works with traditional aesthetic and literary forms as well as mathematical concepts, to communicate the way that an algorithm works and to convince a reader that the results will be correct.");
?>
