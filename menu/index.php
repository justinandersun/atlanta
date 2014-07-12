<?php include('..\head.php'); ?>
<?php include('..\header.php'); ?>

	<div id="menu">
		<h3>Menu</h3>

		<div id="1" class="flip">Harry's New York Treats</div>
		<div id="p1" class="panel">
		    <div id="items">
			    <p> Harry's New York Burger (served with Fries)</p>
			    <p> Harry's Hotdog (served with Fries)</p>
			    <p> Harry's New York Style Cheesecake</p> 
		    </div>
		    <div id="prices">
			    <p> $7.99</p>
			    <p> $6.99</p>
			    <p> $2.25</p>
		    </div>
	    </div> <!-- END P1 -->
		<div id="2" class="flip">Appetizers & Extras</div>
		<div id="p2" class="panel">
	    
	    
	    </div><!-- END P2 -->
		<div id="3" class="flip">Chicken Wings</div>
			<div id="p3" class="panel">Hello world!</div>
		<div id="4" class="flip">Fresh Salads</div>
			<div id="p4" class="panel">Hello world!</div>
		<div id="5" class="flip">Kids Menu (when accompanied by an adult )</div>
			<div id="p5" class="panel">Hello world!</div>
		<div id="6" class="flip">Harry's Oven Baked Subs</div>
			<div id="p6" class="panel">Hello world!</div>
		<div id="7" class="flip">Harry's Calzones</div>
			<div id="p7" class="panel">Hello world!</div>
		<div id="8" class="flip">Pizzas</div>
			<div id="p8" class="panel">Hello world!</div>
		<div id="9" class="flip">Harry's Dinners</div>
			<div id="p9" class="panel">Hello world!</div>

		<div class="open-collapse">
			<button id="topbutton" type="button" onclick="collapseall()">COLLAPSE ALL </button>
			<button type="button" onclick="openall()">OPEN ALL </button>
		</div>
	</div>
<?php include('../footer.php'); ?>