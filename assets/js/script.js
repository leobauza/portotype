/* 
 * =============================================================
 * v.awesome (part of firefly theme build with horizontal nav)
 * =============================================================
 */

/* 
 * =============================================================
 * Somewhat DOM based routing.
 * Map to keys in this object literal
 * common goes everywhere...then classes then id's..or however you call em
 * =============================================================
 */
SITE = {
	common : {
		/* 
		 * =============================================================
		 * ALL COMMON CODE KICKS OFF
		 * =============================================================
		 */
		init			: function(){
			//navigation code gets called 
			SITE.common.navigation();
		},
		/* 
		 * =============================================================
		 * NAVIGATION CODE FOR HORIZONTAL NAV
		 * =============================================================
		 */
		navigation	: function(){

			if(!$('.site-nav .btn-dropdown').length) {
				console.log('add my dropdown btn for mobile!!');
				$('.site-nav .menu > li.dropdown > a').after('<i class="btn-dropdown">v</i>');
			}

			function desktopNav(w){
				console.log(w);
				$('.site-nav .menu > li.dropdown').unbind('click mouseenter mouseleave').mouseenter(
					function() {
						$(this).find('.dropdown-menu').show();
					}
				).mouseleave(
					function() {
						$(this).find('.dropdown-menu').hide();
					}
				);
			}

			function mobileNav(w){
				console.log(w);
				$('.site-nav .menu > li.dropdown').unbind('mouseenter mouseleave');
				$('.site-nav .menu > li.dropdown > .btn-dropdown').unbind('click').click(function(e){
					$(this).toggleClass('is-active');
					$(this).parent().find('.dropdown-menu').toggle();
				});
			}

			//go mobile or desktop...also pass the width so we can get more specific in mobile
			($vars["winWidth"] > 1024) ? desktopNav($vars["winWidth"]) : mobileNav($vars["winWidth"]);
						
		},
		/* 
		 * =============================================================
		 * FINALIZE COMMON CODE
		 * =============================================================
		 */
		finalize	: function(){
		}
	},
	/* 
	 * =============================================================
	 * PAGES WITH A CLASS OF .interior KICKS OFF
	 * ID's #about and #contact bellow
	 * =============================================================
	 */
	interior : {
		init			: function(){
			console.log('interior init!');
		},
		about			: function(){
			console.log('about ID in the house!');
			$(document).bind('finalized',function(){
				console.log('my low priority code (non queue)');
			});
		},
		contact		: function(){
			console.log('contact ID in the house!');
		}
	}
}



UTIL = {

	fire : function(func,funcname, args){

		var namespace = SITE;// indicate your obj literal namespace here

		funcname = (funcname === undefined) ? 'init' : funcname;
		if (func !== '' && namespace[func] && typeof namespace[func][funcname] == 'function'){
			namespace[func][funcname](args);
		}

	},

	loadEvents : function(){

		var bodyId = document.body.id;

		// hit up common first.
		UTIL.fire('common');

		// do all the classes too.
		$.each(document.body.className.split(/\s+/),function(i,classnm){
			UTIL.fire(classnm);
			UTIL.fire(classnm,bodyId);
		});

		UTIL.fire('common','finalize');
		$(document).trigger('finalized');
	}

};

// kick it all off here (doc ready) 
$(function(){
	//GLOBAL vars
	$vars = initial();
	UTIL.loadEvents();

	//SITE.common.init();

	$(window).resize(function(){
		$vars["winWidth"] = $(window).width();
		SITE.common.navigation();
	});
});





