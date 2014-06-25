<footer>
	&copy; 2014 Harry's Pizza &amp; Subs. Site by
	<a href="http://andersun.com">Justin Andersun</a> and Steve Gehrig.
	<?php
		$date = new DateTime();
		echo 'Generated at ';
		echo $date->format('H:i');
		echo ' EST.';
	?>
</footer>