<html>
    <p>
	<?php
	$array = array(5, 3, 7, 1);
	sort($array);
	print join(", ", $array);
	// Create an array with several elements in it,
	// then sort it and print the joined elements to the screen

	?>
	</p>
	<p>
	<?php
	$array = array(5, 3, 7, 1);
	rsort($array);
	print join(", ", $array);
	// Reverse sort your array and print the joined elements to the screen

	?>
	</p>
</html>
