<header>
	<h1>Harry's Pizza and Subs</h1>
	<nav>
		<?php $pageName=basename($_SERVER['REQUEST_URI'], '.php') ?>
		<a
			<?php
				if ($pageName=='index')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="index.php">Home
		</a>
		<a
			<?php
				if ($pageName=='staff')	echo "id=\"current\"";
				else echo "class=\"link\"";
			?> href="contact.php">Contact
		</a>
	</nav>
</header>