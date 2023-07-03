<?php

echo "select * from person where name='admin''s no'";

echo "<br>";
echo "<br>";

echo "select * from person where name= admin's no";
echo "<br>";

echo $query = "select * from person where name='admin's no'";

echo "<br>";
echo "<br>";
echo "<br>";

echo addslashes($query);


?>