	<footer class="site-footer container">
		a footer
	</footer>


	<!-- jquery libs -->
	<script src="../assets/js/jquery-1.9.1.js"></script>
	<script src="../assets/js/jquery-migrate--1.2.1.js"></script>

	<!-- other libs -->
	<script src="../assets/js/imagesloaded.js"></script>

	<!-- sortable -->
	<script src="../assets/js/jquery-ui-1.10.3.custom.js"></script>

	<!-- initial and project scripts -->
	<script src="../assets/js/initial.js"></script> 
	<script src="../assets/js/script.js"></script>

	<script>
		$(function() {

			$( ".sortable" ).sortable(
				{ //options
					placeholder: "sortable-placeholder"
				},
				{ //events
					start: function( event, ui ) {
						$('body, html').addClass('is-sorting');
					},
					update: function(event, ui) {
						var port_id = $(this).attr('id');
					
						var sortedIDs = $( ".sortable" ).sortable( "toArray", { attribute: "id" }  );
						console.log(sortedIDs);
				
						var sorted = $( ".sortable" ).sortable( "serialize", { key: port_id } );
						console.log(sorted);
				
					},
					stop: function( event, ui ) {
						$('body, html').removeClass('is-sorting');
					}
				}
			).disableSelection();

			$('.sortable .box a').click(function(e){
				console.log('inside click');
				e.preventDefault();
			})
		
		});
	</script>


	<script>
		$(function() {
			
			$('.copy-mode').click(function(e){

				var $data = $(this).data();
				var $copymode = $data.copymode;
				
				console.log($data);
				
				if($copymode == false) {
					$(this).attr('data-copymode','true');
					$(this).find('span').html('is on');
					$data.copymode = true;
				} else {
					$(this).attr('data-copymode','false');
					$(this).find('span').html('is off');
					$data.copymode = false;
				} 

				e.preventDefault();
			});
			
			//sortable ports within categories
			$(".sortable-list.ports").sortable({
				placeholder: "sortable-placeholder",
				forcePlaceholderSize: true,
				connectWith: ".sortable-list.ports"
			}).disableSelection();

			//sortable categories
			$(".sortable-list.categories").sortable({
				placeholder: "sortable-placeholder",
				forcePlaceholderSize: true
			}).disableSelection();


			//droppage categories with copy mode switcher
			$(".categories > li > a").droppable({
				accept: ".sortable-list.ports > li",
				hoverClass: "ui-state-hover",
				drop: function(event, ui) {
					var $data = $('.copy-mode').data();
					var $copyMode = $data.copymode;
					var $list = $(this).parent().find('.sortable-list.ports');

					if($copyMode != true) {
						ui.draggable.hide(1, function() {
							$(this).appendTo($list).show();
						});
					} else {
						ui.draggable.clone().attr('style', '').appendTo($list);
					}
				
				}
			});
		
		});
	</script>


</body>
</html>
