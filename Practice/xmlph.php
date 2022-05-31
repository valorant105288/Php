<?php
header("content-type:txt/xml");

$a=array(1,'java','Zeb',2,'c++','teen',3,'kotlin','takle');
echo "<bookInfo>";
for($i=0;$i<count($a);$i+3) {
	echo "<book>";
	echo "<bookNo>".$a[$i]."</bookInfo>";
	echo "<bookName>".$a[$i+1]."</bookName>";
	echo "<bookAuthor>".$a[$i+2]."</bookAuthor>";
	
	echo "</book>";

}
echo "</bookInfo>";

?>