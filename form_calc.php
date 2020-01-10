<?php
	//Form, which create main calculation input	
	echo "<h1>Calculator:</h1>";
	echo "<form name='myfoorm' method='post' action='/pros2/index.php/calculator/index'>";
		echo "<p>Example:123  + 5 * 67</p>";
		echo "<input  name='equation'  type='text'  value='x1 + x2'/> ";
		echo "<input name='calculating' type='submit' value='Calculating'>";
	echo "</form>";
?>
