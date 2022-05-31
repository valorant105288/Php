<?php

$d = new DOMDocument();
$d->load("stud.xml") or die("Unable to load");

$e=$d->getElementsByTagName('student');

$rno=1;
foreach($e as $t){
	if($t->textContent==$rno)
	echo $t->textContent."<br>";
}
  ?>
