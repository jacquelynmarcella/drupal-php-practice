<?php

	$name = 'Jacquelyn';
	# generating a random number between 1 and 10
	$num = rand(0, 10);

	# reminder: double quotes here (not single) will allow the $num to print
	$subhead = "Your number is $num";

?>

<html>
<head>
	<title>PHP Test</title>
</head>
<body>
	<?php echo 
		'<h1>' . $name . '</h1><h2>' . $subhead . '</h2>'; 
	?>
</body>
</html>