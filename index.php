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

	<article id="port-1" class="sortable-grid active">
		<div id="ser_1" class="box">Item 1 <a href="#">don't propagate</a></div>
		<div id="ser_2" class="box">Item 2</div>
		<div id="ser_3" class="box">Item 3</div>
		<div id="ser_4" class="box">Item 4</div>
		<div id="ser_5" class="box">Item 5</div>
		<div id="ser_6" class="box">Item 6</div>
		<div id="ser_7" class="box">Item 7</div>
		<div id="ser_8" class="box">Item 8</div>
		<div id="ser_9" class="box">Item 9</div>
		<div id="ser_10" class="box">Item 10</div>
		<div id="ser_11" class="box">Item 11</div>
		<div id="ser_12" class="box">Item 12</div>
		<div id="ser_13" class="box">Item 13</div>
	</article>

	<article id="port-2" class="sortable-grid">
		<div id="ser_1" class="box">Item 1/2 <a href="#">don't propagate</a></div>
		<div id="ser_2" class="box">Item 2/2</div>
		<div id="ser_3" class="box">Item 3/2</div>
		<div id="ser_4" class="box">Item 4/2</div>
		<div id="ser_5" class="box">Item 5/2</div>
		<div id="ser_6" class="box">Item 6/2</div>
		<div id="ser_7" class="box">Item 7/2</div>
		<div id="ser_8" class="box">Item 8/2</div>
		<div id="ser_9" class="box">Item 9/2</div>
		<div id="ser_10" class="box">Item 10/2</div>
		<div id="ser_11" class="box">Item 11/2</div>
		<div id="ser_12" class="box">Item 12/2</div>
		<div id="ser_13" class="box">Item 13/2</div>
	</article>


	<article id="port-3" class="sortable-grid">
		<div id="ser_1" class="box">Item 1/3 <a href="#">don't propagate</a></div>
		<div id="ser_2" class="box">Item 2/3</div>
		<div id="ser_3" class="box">Item 3/3</div>
		<div id="ser_4" class="box">Item 4/3</div>
		<div id="ser_5" class="box">Item 5/3</div>
		<div id="ser_6" class="box">Item 6/3</div>
		<div id="ser_7" class="box">Item 7/3</div>
		<div id="ser_8" class="box">Item 8/3</div>
		<div id="ser_9" class="box">Item 9/3</div>
		<div id="ser_10" class="box">Item 10/3</div>
		<div id="ser_11" class="box">Item 11/3</div>
		<div id="ser_12" class="box">Item 12/3</div>
	</article>


	<aside class="sidebar right">
		second sidebar
	</aside>
</section>

<?php include('_inc/footer.php')?>

