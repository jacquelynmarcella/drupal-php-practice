<?php

	$name = 'Jacquelyn';

	# defining a constant
	define ('QTY', 10);

	# generating a random number between 1 and 10 as a variable
	$num1 = rand(0, 10);
	$orderAmt = $num1 * QTY;

	if ($orderAmt < 50) {
		# reminder: double quotes here (not single) will allow the $num to print
		$subhead = "Amount to order: $orderAmt";
	} else {
		$subhead = 'Order size too large';
	}

?>

<html>
<head>
	<title>PHP Test</title>
</head>
<body>
	<?php echo 
		'<h1>' . $name . '</h1>' . 
		'<h2>' . $subhead . '</h2>'; 
	?>
</body>
</html>