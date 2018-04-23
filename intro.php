<?php

	$name = 'Jacquelyn';

	# defining a constant
	define ('QTY', 10);

	# generating a random number between 1 and 10 as a variable
	$num1 = rand(0, 10);
	$orderAmt = $num1 * QTY;

	if ($orderAmt < 50) {
		# reminder: double quotes here (not single) will allow the var to print
		$subhead = "Amount to order: $orderAmt";
	} else {
		$subhead = 'Order size too large';
	}

	$order_list[] = 'soda';
	$order_list[] = 'avocado';	

	/**
	* Prints a string list item
	* @param array that has strings of order items
	*/
	function print_orders ($orders = array('water', 'bread')) {
	# by setting '$orders = ' we have a default array in case of no params input
		foreach($orders as $key => $value) {
			print '<li>' . $value . '</li>';
		}
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

	<form name="orderform" method="post" action="intro.php">
		<p>Category</p>
		<select name="category">
			<option value="Food">Food</option>
			<option value="Drink">Drink</option>
			<option value="Other">Other</option>
		</select>
		<p>Name</p>
		<input name="name" type="text" id="name" size="50">
		<input type="submit" name="Submit" value="Submit">
	</form>

	<h2>Your Order List</h2>
	<?php
		# To do: print list of items added to order
		print_orders($order_list);
	?>

</body>
</html>
