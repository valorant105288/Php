<?php
$res=parse_url("https://github.com/valorant105288");
echo "<br>scheme: ".$res['scheme'];
echo "<br>host: ".$res['host'];
echo "<br>path: ".$res['path'];
?>