<?php include('_inc/header.php'); ?> 

<!-- GRID -->
<section class="sidebars-wrap group">
	<aside class="sidebar left">
		<a href="#" class="btn btn-main copy-mode" data-copymode="false">copy mode <span>is off</span></a>
		<ul class="sortable-list categories">
			<li>
				<a href="#">category one</a>
				<ul class="sortable-list ports">
					<li data-port="port-1" class="active"><a href="#">port one <span class="erase">x</span></a></li>
					<li data-port="port-2"><a href="#">port two <span class="erase">x</span></a></li>
				</ul>
			</li>
			<li>
				<a href="#">category two</a>
				<ul class="sortable-list ports">
					<li data-port="port-3"><a href="#">port three <span class="erase">x</span></a></li>
				</ul>
			</li>
		</ul>
	</aside>

	<article id="port-1" class="sortable-grid-mod active">
		<div id="ser_1" class="box"><div class="inner">Item 1</div></div>
		<div id="ser_2" class="box"><div class="inner">Item 2</div></div>
		<div id="ser_3" class="box"><div class="inner">Item 3</div></div>
		<div id="ser_4" class="box"><div class="inner">Item 4</div></div>
		<div id="ser_5" class="box"><div class="inner">Item 5</div></div>
		<div id="ser_6" class="box"><div class="inner">Item 6</div></div>
		<div id="ser_7" class="box"><div class="inner">Item 7</div></div>
		<div id="ser_8" class="box"><div class="inner">Item 8</div></div>
		<div id="ser_9" class="box"><div class="inner">Item 9</div></div>
	</article>



	<aside class="sidebar right">
		second sidebar
	</aside>
</section>

<?php include('_inc/footer.php')?>

