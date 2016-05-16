<html>
    <p>
	<?php

	$family = array();
	array_push($family, "Adam", "Johnny"     , "Terry", "Celia");
	sort($family);
	$rand = rand(0,count($family));
	$name = $family[$rand];
	print strtoupper($name);

	// Create an array and push on the names
    // of your closest family and friends

	// Sort the list

	// Randomly select a winner!

	// Print the winner's name in ALL CAPS
	?>
	</p>
</html>
