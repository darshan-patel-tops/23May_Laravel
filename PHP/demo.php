

<?php 
// PHp code for Star Pattern

$n = 8; // Number of rows;

// Outer loop to handle number of rows
// n in this case
for ($i=1; $i<=$n; $i++)
{
	// Inner loop to handle number of columns
	// values changing acc. to outer loop
	for ($j=1; $j<=$i; $j++)
	{
		// Priniting stars
		echo "* ";
	}
	
	// Ending line after each row
	echo "<br>";
}
?>